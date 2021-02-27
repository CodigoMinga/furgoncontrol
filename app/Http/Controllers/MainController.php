<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function login(){


        return view('login');
    }


    public function checkLogin(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        $user_data = array (
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        if(Auth::attempt(['email' => $user_data['email'], 'password' => $user_data['password'], 'enabled' => 1])){
            $message="[Login] Successfully El usuario ". Auth::user()->email." a iniciado sesion correctamente";

            return redirect('app/home');
        }
        else{
            $message="[Login] Error de inicio de sesion Usuario: ".$user_data['email']." Pass: ".$user_data['password'];

            return back()->with('error','Error en las credenciales');
        }
    }


    public function register(){


        return view('register.add',compact('users'));
    }


    public function registerProcess(Request $request){
       
        User::create($request->all());

        return redirect()->route('welcome');
    }
}
