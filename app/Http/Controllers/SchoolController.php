<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    
    public function add(){
        $school = new school();
        $edit=true;
        return view('school.form',compact('school','edit'));
    }

    public function details($school_id){
        $school = school::findOrFail($school_id);
        $edit=false;
        return view('school.form',compact('school','edit'));
    }

    public function edit($school_id){
        $school = School::findOrFail($school_id);
        $edit=true;
        return view('school.form',compact('school','edit'));
    }

    public function addProcess(Request $request){
        //le añade en el request el campo user_id
        $request->request->add(['user_id' => Auth::user()->id]);

        School::create($request->all());
        $sucess  = true;
        $returnUrl = url('/')."/app/school/list";
        $message =  "Se guardo el Establecimiento con exito";
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }

    public function editProcess(Request $request){
        $input = $request->all();
        $school = School::findOrFail($request->id);

        if($school->fill($input)->save()){
            $sucess  = true;
            $returnUrl = url('/')."/app/school/list";
            $message =  "Se guardaron los cambios del alumno";
        }else{
            $sucess  = false;
            $returnUrl = url('/')."/app/school/list";
            $message =  "Ocurrio un error al guardar los datos del alumno";
        }
        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }

    public function list(){
        $user_id = Auth::user()->id;
        $schools = School::where('user_id','=',$user_id)->get();
        return view('school.list',compact('schools'));
    }
}
