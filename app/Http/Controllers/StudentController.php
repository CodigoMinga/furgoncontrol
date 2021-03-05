<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\School;
class StudentController extends Controller
{
    public function add(){
        $student = new Student();
        $edit=true;
        $schools = School::where('user_id','=',Auth::user()->id)->get();

        return view('student.add',compact('student','edit','schools'));
    }

    public function details($stutent_id){
        $student = Student::findOrFail($stutent_id);
        $edit=false;
        $schools = School::where('user_id','=',Auth::user()->id)->get();
        return view('student.add',compact('student','edit','schools'));
    }

    public function edit($stutent_id){
        $student = Student::findOrFail($stutent_id);
        $edit=true;
        $schools = School::where('user_id','=',Auth::user()->id)->get();
        return view('student.add',compact('student','edit','schools'));
    }

    public function addProcess(Request $request){
        //le añade en el request el campo user_id
        $request->request->add(['user_id' => Auth::user()->id]);

        Student::create($request->all());
        $sucess  = true;
        $returnUrl = url('/')."/app/student/list";
        $message =  "Se guardo el alumno con exito";
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }

    public function editProcess(Request $request){
        $input = $request->all();
        $student = Student::findOrFail($request->id);

        if($student->fill($input)->save()){
            $sucess  = true;
            $returnUrl = url('/')."/app/student/list";
            $message =  "Se guardaron los cambios del alumno";
        }else{
            $sucess  = false;
            $returnUrl = url('/')."/app/student/list";
            $message =  "Ocurrio un error al guardar los datos del alumno";
        }
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }

    public function list(Request $request){
        $user_id = Auth::user()->id;
        $students = Student::where('user_id','=',$user_id)->get();
        return view('student.listv2',compact('students'));



    }
}
