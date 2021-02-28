<?php

namespace App\Http\Controllers;

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


        }

    }
}
