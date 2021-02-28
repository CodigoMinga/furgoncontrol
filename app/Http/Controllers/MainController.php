<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

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


        return view('register');
    }


    public function registerProcess( Request $request){
        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        $user = User::create($input);

        if($user){
            $userAutentificated = Auth::loginUsingId($user->id);

            $sucess  = true;
            $returnUrl = url('/')."/app/home";
            $message =  "Usuario creado, bienvenido a nuestro sistema";
            return view('template.genericprocess',compact('message','sucess','returnUrl'));
        }else{
            return back();
        }

    }
}
