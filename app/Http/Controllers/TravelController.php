<?php

namespace App\Http\Controllers;

use App\Student;
use App\Travel;
use App\Travelstudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel $travel)
    {
        //
    }

    public function add(){

        return view('travel.add');
    }

    public function addProcess(Request $request){
        $fecha_actual = Carbon::now();


        $input = $request->all();
        $travel = new Travel();
        $travel->type = $input['type'];
        $travel->user_id = Auth::user()->id;
        $travel->start = $fecha_actual;
        $travel->save();


        $sucess  = true;
        $returnUrl = url('/')."/app/home";
        $message =  "Se creo el viaje correctamente";
        return view('template.genericprocess',compact('message','sucess','returnUrl'));
    }

    public function details($travel_id){

        $travel = Travel::findOrFail($travel_id);


        return view('travel.details',compact('travel'));

    }


    public function assistance($travel_id){

        $user_id = Auth::user()->id;
        $students = Db::select('
                    select students.*,travelstudents.temperature from students
                    left join travelstudents
                    on travelstudents.student_id = students.id
                    and travelstudents.travel_id = 1
                    ');




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
        return view('template.genericprocess',compact('message','sucess','returnUrl'));

    }
}
