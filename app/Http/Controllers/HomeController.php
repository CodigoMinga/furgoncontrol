<?php

namespace App\Http\Controllers;

use App\License;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Travel;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $fecha=Carbon::now();
        $travels = Travel::where('user_id','=',Auth::user()->id)->where('enabled',0)->whereDate('start','=',$fecha->toDateString())->get();

        //busca si es que ya existe una licensia activa, trae la ultima
        $old_license = License::where('user_id','=',Auth::user()->id)
            ->max('to');

        $expired_days = 0;
        if(isset($old_license)){
            $old_license = Carbon::create($old_license);
            if(Carbon::now()->gt($old_license)){
                $expired_days = $old_license->diff(Carbon::now())->days;
            }else{

            }
        }else{
            $expired_days = 100;
        }


        return view('home.index',compact('travels','expired_days'));
    }
}
