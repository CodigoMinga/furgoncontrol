<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $travels = Travel::where('user_id','=',Auth::user()->id)->get();

        return view('home.index',compact('travels'));
    }
}
