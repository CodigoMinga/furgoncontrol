<?php

namespace App\Http\Controllers;

use App\Travelstudent;
use Illuminate\Http\Request;

class TravelstudentController extends Controller
{
    public function edit($travelstudent_id){
        $travelstudent = Travelstudent::findOrFail($travelstudent_id);
        $travel_id=$travelstudent->travel_id;
        $student=$travelstudent->student;
        return view('travel.addassistance',compact('travelstudent','travel_id','student'));
    }

    public function editProcess(Request $request){
        $input = $request->all();

        $travelstudent = Travelstudent::findOrFail($request->id);
        $travel_id=$travelstudent->travel_id;

        if($travelstudent->fill($input)->save()){
            $sucess  = true;
            $returnUrl = url('/')."/app/travel/".$travel_id."/assistance";
            $message =  "Se guardaron los cambios de la medición de temperatura del alumno";
        }else{
            $sucess  = false;
            $returnUrl = url('/')."/app/travel/".$travel_id."/assistance";
            $message =  "Ocurrio un error al cambiar la medición de temperatura del alumno";
        }
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }

    
    public function delete($travelstudent_id){
        $travelstudent = Travelstudent::findOrFail($travelstudent_id);
        $travelstudent->enabled=1;
        $travel_id=$travelstudent->travel_id;
        if($travelstudent->save()){
            $sucess  = true;
            $returnUrl = url('/')."/app/travel/".$travel_id."/assistance";
            $message =  "Se Elimino correctamente la medición de temperatura del alumno";
        }else{
            $sucess  = false;
            $returnUrl = url('/')."/app/travel/".$travel_id."/assistance";
            $message =  "Ocurrio un error al Eliminar la medición de temperatura del alumno";
        }
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }
}
