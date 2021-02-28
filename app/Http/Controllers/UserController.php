<?php

namespace App\Http\Controllers;

use App\License;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\User;
use Auth;


class UserController extends Controller
{
    public function list(){

        return view('users.list');
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



}
