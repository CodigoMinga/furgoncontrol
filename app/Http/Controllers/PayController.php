<?php

namespace App\Http\Controllers;

use App\Mail\Paynotify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Pay;
use App\License;

class PayController extends Controller
{

    public function process($success){



        if($success =='true'){
            $user = User::findOrFail(Auth::user()->id);
            $license = "ASdff";

            //guarda el pago en la tabla pays
            $pay = new Pay;
            $pay->ammount = 10000;
            $pay->user_id = Auth::user()->id;
            $pay->save();

            //busca si es que ya existe una licensia activa, trae la ultima
            $old_license = License::where('user_id','=',$user->id)
                            ->max('to');

            //si tiene una licensia antigua le suma los 30 dias necesarios
            if(isset($old_license)){
                $old_license = Carbon::create($old_license);
                //guarda la nueva licencia
                //crea la licencia por default
                $license = new License();
                $license->pay_date = Carbon::now();

                //si la fecha actual es mayor que la ultima licensia, se le sumaran 30 dias
                //desde el dia de pago
                if(Carbon::now()->gt($old_license)){
                    $license->from = Carbon::now();
                    $license->to = Carbon::now()->addDays(30);
                }else{
                    $license->from = $old_license;
                    $license->to = $old_license->addDays(30);
                }



                $license->user_id = $user->id;
                $license->pay_id = $pay->id;
                $license->save();
            }else{
                //guarda la nueva licencia
                //crea la licencia por default
                $license = new License();
                $license->pay_date = Carbon::now();
                $license->from = Carbon::now();
                $license->to = Carbon::now()->addDays(30);
                $license->user_id = $user->id;
                $license->pay_id = $pay->id;
                $license->save();
            }




            //dispara correo de un nuevo pago procesado
            $subject = $user->email." se proceso el pago id: ".$pay->id." correctamente";
            $receivers = ['contacto@codigominga.cl',$user->email];
            $status = Mail::to($receivers)->send(new Paynotify($user,$license,$subject));
            $sucess  = true;
            $returnUrl = url('/')."/app/home";
            $message =  "Se Proceso el pago correctamente";
            return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
        }else{
            $sucess  = false;
            $returnUrl = url('/')."/app/home";
            $message =  "No se pudo procesar el pago";
            return view('template.genericphoneprocess',compact('message','sucess','returnUrl'));
        }
    }
}
