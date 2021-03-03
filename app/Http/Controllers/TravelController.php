<?php

namespace App\Http\Controllers;

use App\Student;
use App\School;
use App\Travel;
use App\Travelstudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class TravelController extends Controller
{
    public function add(){
        $schools = Auth::user()->schools;
        return view('travel.add',compact('schools'));
    }

    public function addProcess($type){
        $fecha_actual = Carbon::now();
        $travel = new Travel();
        $travel->type = $type;
        $travel->user_id = Auth::user()->id;
        $travel->start = $fecha_actual;
        $travel->save();
        $sucess  = true;
        $returnUrl = url('/')."/app/travel/".$travel->id."/assistance";
        $message =  "Se creo el viaje correctamente";
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }

    public function details($travel_id){
        $travel = Travel::findOrFail($travel_id);
        return view('travel.details',compact('travel'));
    }


    public function assistance($travel_id){
        $user_id = Auth::user()->id;
        $students = Db::select('
                    select students.*,travelstudents.temperature,schools.name as school_name from students
                    left join schools 
                    on schools.id = students.school_id 
                    left join travelstudents
                    on travelstudents.student_id = students.id and travelstudents.travel_id = '.$travel_id.' where students.user_id = '.$user_id
                );

        $travel = Travel::findOrFail($travel_id);
        return view('travel.assistance',compact('students','travel'));
    }

    public function setAssistance($travel_id,$student_id){
        return view('travel.addassistance',compact('travel_id','student_id'));
    }

    public function setAssistanceProcess($travel_id,$student_id,Request $request){
        //obtiene todo lo del formulario
        $input = $request->all();
        //registra temperatura en la tabla de paso
        $travelstudent = new Travelstudent();
        $travelstudent->temperature = $input['temperature'];
        $travelstudent->student_id = $student_id;
        $travelstudent->travel_id = $travel_id;
        $travelstudent->save();
        $sucess  = true;
        $returnUrl = url('/')."/app/travel/".$travel_id."/assistance";
        $message =  "Se añadió temperatura y asistencia correctamente";
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }


    public function finish($travel_id){
        $travel = Travel::findOrFail($travel_id);
        $travel->finish = Carbon::now();
        $travel->save();

        if(COUNT($travel->travelstudent)==0){
            $travel->delete();
            $sucess  = true;
            $returnUrl = url('/')."/app/home";
            $message =  "El viaje no cuenta con registros por lo cual se ha eliminado";
            return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
        }

        $sucess  = true;
        $returnUrl = url('/')."/app/home";
        $message =  "Se termino con el viaje correctamente";
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }

    public function reportselect(){
        $schools = Auth::user()->schools;
        return view('travel.reportselect',compact('schools'));
    }

    public function report($desde,$school_id){

        $document_title = 'Reporte Semanal';
        $usuario = Auth::user();
        $school = School::findOrFail($school_id);

        $lunes = date('Y-m-d', strtotime($desde));
        $martes = date('Y-m-d', strtotime($desde.' +1 day'));
        $miercoles = date('Y-m-d', strtotime($desde.' +2 day'));
        $jueves = date('Y-m-d', strtotime($desde.' +3 day'));
        $viernes = date('Y-m-d', strtotime($desde.' +4 day'));
        $hasta = $viernes;

        $query ="select s.name,s.last_name,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=0  and ts.student_id = s.id and date(t.start) = '$lunes' limit 1) as lunes1,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=1  and ts.student_id = s.id and date(t.start) = '$lunes' limit 1) as lunes2,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=0  and ts.student_id = s.id and date(t.start) = '$martes' limit 1) martes1,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=1  and ts.student_id = s.id and date(t.start) = '$martes' limit 1) martes2,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=0  and ts.student_id = s.id and date(t.start) = '$miercoles' limit 1) miercoles1,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=1  and ts.student_id = s.id and date(t.start) = '$miercoles' limit 1) miercoles2,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=0  and ts.student_id = s.id and date(t.start) = '$jueves' limit 1) jueves1,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=1  and ts.student_id = s.id and date(t.start) = '$jueves' limit 1) jueves2,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=0  and ts.student_id = s.id and date(t.start) = '$viernes' limit 1) viernes1,
        (select ts.temperature from travels t left join travelstudents ts on t.id = ts.travel_id where t.type=1  and ts.student_id = s.id and date(t.start) = '$viernes' limit 1) viernes2
        from students s where s.user_id = $usuario->id and s.school_id = $school_id order by s.last_name";

        $datos = DB::select($query);
        $pdf = PDF::loadView('travel.report', compact('document_title','desde','hasta','school','usuario','datos'))->setOptions(['isRemoteEnabled' => true,'name'=>$document_title]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream($document_title);

    }
}
