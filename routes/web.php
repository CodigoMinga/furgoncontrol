<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/app/login','MainController@login');
Route::post('/app/checklogin','MainController@checkLogin');
Route::get('/app/register', 'MainController@register');
Route::group(['middleware' => ['auth']], function() {

//vista register


    Route::post('/app/register/process', 'MainController@registerProcess');

    Route::get('/app/home', 'HomeController@index');
    Route::get('/app/student/add', 'StudentController@add');
    Route::post('/app/student/add/process', 'StudentController@addProcess');
    Route::get('/app/student/list', 'StudentController@list');

    Route::get('/app/travel/add/', 'TravelController@add');
    Route::post('/app/travel/add/process', 'TravelController@addProcess');

    Route::get('/app/travel/{travel_id}', 'TravelController@details');
    Route::get('/app/travel/{travel_id}/assistance', 'TravelController@assistance');

    Route::get('/app/travel/{travel_id}/assistance/{student_id}/mark', 'TravelController@setAssistance');
    Route::post('/app/travel/{travel_id}/assistance/{student_id}/mark/process', 'TravelController@setAssistanceProcess');
    Route::get('/app/logout', 'MainController@logout');
});
Route::get('/app/report','TravelstudentController@report');

