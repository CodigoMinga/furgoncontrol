<?php

namespace App\Http\Controllers;

use App\License;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\User;
use Auth;

use App\Commune;

class UserController extends Controller
{
    public function list(){
        return view('users.list');
    }

    public function information(){
        $edit=false;        
        $communes = Commune::all()->sortBy('name');
        return view('users.form',compact('edit','communes'));
    }

    public function edit(){
        $edit=true;
        $communes = Commune::all()->sortBy('name');
        return view('users.form',compact('edit','communes'));
    }

    
    public function editProcess(Request $request){
        $input = $request->all();
        $user = User::findOrFail($request->id);

        if($user->fill($input)->save()){
            $sucess  = true;
            $returnUrl = url('/')."/app/home";
            $message =  "Se guardaron los cambios de tu cuenta";
        }else{
            $sucess  = false;
            $returnUrl = url('/')."/app/home";
            $message =  "Ocurrio un error al cambiar los datos de tu cuanta";
        }

        return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
    }

    public function getData(){
        if(Auth::user()->is_codigo_minga){
            $users = User::all();
            return DataTables::of($users)->make(true);
        }
    }


    public function detail($user_id){
        if(Auth::user()->is_codigo_minga){
            $user = User::findOrFail($user_id);

            return view('users.details',compact('user'));

        }

    }


    public function getLicences($user_id){
        if(Auth::user()->is_codigo_minga){
            $user = User::findOrFail($user_id);
            $licenses = $user->licenses;

            return DataTables::of($licenses)->make(true);

        }

    }


    public function addLicence($user_id){
        if(Auth::user()->is_codigo_minga){
            $user = User::findOrFail($user_id);
            return view('users.addlicense',compact('user'));
        }


    }



    public function addLicenceProcess($user_id,Request $request){
        if(Auth::user()->is_codigo_minga){
            $request->request->add(['user_id' => $user_id]);
            License::create($request->all());
            $sucess  = true;
            $returnUrl = url('/')."/app/users/".$user_id."/detail";
            $message =  "Se registro la licencia con exito";
            return view('template.genericprocess',compact('message','sucess','returnUrl'));


        }


    }


    public function changePasswordProcess (Request $request,$user_id){

        $returnUrl = url('/')."/app/users/".$user_id."/detail";
        $user = User::find($user_id);
        $input = $request->all();
        $user->password = bcrypt($input['password']);
        $message =  "Se cambio la clave correctamente";
        if($user->save()){
            $sucess = true;

        }else{
            $sucess = false;
        }
        return view('template.genericprocess',compact('returnUrl','sucess','message'));

    }


    public function schools ($user_id){
        $user = User::findOrFail($user_id);

        return view('users.schools',compact('user'));
    }



}
