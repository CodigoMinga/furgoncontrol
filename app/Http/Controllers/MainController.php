<?php

namespace App\Http\Controllers;

use App\Commune;
use App\License;
use App\Mail\PasswordResetMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;
use App\School;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use App\Log;
use Session;


class MainController extends Controller
{
    public function login(){
        return view('users.login');
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
            $message="[Login] Successfully El usuario ". Auth::user()->email." a iniciado sesión correctamente";

            $login_log = new Log();
            $login_log->ip = $request->ip();
            $login_log->message= "Inicio correcto de sesión ".$request->get('email');
            $login_log->type = "LOGIN-OK";
            $login_log->user_id = Auth::user()->id;
            $login_log->save();

            Session::flash('noti-check', "Sesión Iniciada");
            return redirect('app/home');
        }
        else{
            $message="[Login] Error de inicio de sesión usuario: ".$user_data['email']." Pass: ".$user_data['password'];
            $login_log = new Log();
            $login_log->ip = $request->ip();
            $login_log->message= "Inicio incorrecto de sesión ".$request->get('email')." contraseña: ".$request->get('password');
            $login_log->type = "LOGIN-ERROR";
            $login_log->save();
            return back()->with('error','Error en las credenciales');
        }
    }


    public function register(){
        $communes = Commune::all()->sortBy('name');
        return view('register',compact('communes'));
    }


    public function registerProcess( Request $request){
        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        $user_mail = User::where ('email', $request->email)->first();

        if(!isset($user_mail)){
            try {
                $user = User::create($input);

                if($user){
                    //crea el colegio asociado al usuario
                    $school = new School();
                    $school->name = $input['school_name'];
                    $school->user_id = $user->id;
                    $school->save();

                    //crea la licencia por default
                    $license = new License();
                    $license->pay_date = Carbon::now();
                    $license->from = Carbon::now();
                    $license->to = Carbon::now()->addDays(10);
                    $license->user_id = $user->id;
                    $license->pay_id = null;
                    $license->save();


                    $userAutentificated = Auth::loginUsingId($user->id);

                    $sucess  = true;
                    $returnUrl = url('/')."/app/home";
                    $message =  "Usuario creado, bienvenido a nuestro sistema";
                    return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
                }else{
                    return back();
                }
            } catch (\Illuminate\Database\QueryException $exception) {
                return back()->with('error','Error al crear el Usuario')->withInput();
            }
        }else{
            return back()->with('error','Este email ya esta registrado en nuestro sistema')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }


    function passwordLost(){
        return view('passwordlost');
    }

    function passwordLostProcess(Request $request){

        //dd($request->email);
        $user = User::where ('email', $request->email)->first();
        if ( !$user ) return redirect()->back()->withErrors(['error' => 'Ingrese un correo valido']);

        //create a new token to be sent to the user.
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => Str::random(60), //change 60 to any length you want
            'created_at' => Carbon::now()
        ]);

        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();
        $token = $tokenData->token;
        $email = $request->email; // or $email = $tokenData->email;

        $subject = "Solicitud de reinicio de contraseña";
        $receivers = [$email];
        $status = Mail::to($receivers)->send(new PasswordResetMail($user,$token,$subject));

        $message = "Se ha enviado un correo para reestablecer contraseña";
        return view('generic',compact('message'));
    }


    public function passwordRessetToken($user_id,$token){
        $token_db = Db::table('password_resets')->where('token','=',$token)->first();
        $user = User::findOrFail($user_id);

        if(isset($token_db)){
            return view('passwordresetform',compact('user','token'));
        }else{
            return view('passwordresetform')->withErrors('El token expiro.');
        }
    }


    public function passwordRessetTokenProcess($user_id,$token,Request $request){

        $user = User::findOrFail($user_id);
        $user->password = Hash::make($request->password);

        if($user->save()){
            $userAutentificated = Auth::loginUsingId($user->id);
            $sucess  = true;
            $returnUrl = url('/')."/app/home";
            $message =  "Contraseña actualizada, Bienvenido a nuestro sistema";
            return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
        }else{
            return redirect()->back()->withErrors(['error' => 'No se pudo cambiar la contraseña']);
        }
    }

    public function passwordChange(){
        return view('users.passwordchange');
    }

    public function passwordChangeProcess($user_id, Request $request){

        $user = User::findOrFail($user_id);
        $oldpassword = $request->oldpassword;

        if(Hash::check($oldpassword,$user->password)){
            $input = $request->all();
            $input['password'] = Hash::make($request->password);
            $user->update($input);

            $userAutentificated = Auth::loginUsingId($user->id);
            /*
            $sucess  = true;
            $returnUrl = url('/')."/app/home";
            $message =  "Contraseña Cambiada Correctamente";
            */
            Session::flash('noti-check', "Contraseña Cambiada Correctamente");
            //return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
            return redirect('/app/home');
        }else{
            return back()->with('noti-error','La clave antigua no corresponde')->withInput();
        }
    }
}
