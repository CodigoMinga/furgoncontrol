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
Route::post('/app/register/process', 'MainController@registerProcess');

Route::get('/app/passwordlost', 'MainController@passwordLost');
Route::post('/app/passwordlost/process', 'MainController@passwordLostProcess');

Route::get('/app/resetpassword/{user_id}/token/{token}', 'MainController@passwordRessetToken');
Route::post('/app/resetpassword/{user_id}/token/{token}/process', 'MainController@passwordRessetTokenProcess');

Route::group(['middleware' => ['auth']], function() {

//vista register

    Route::get('/app/home', 'HomeController@index');

    //STUDENT CRUDS
    Route::get('/app/student/add', 'StudentController@add');
    Route::get('/app/student/{student_id}/details', 'StudentController@details');
    Route::get('/app/student/{student_id}/edit', 'StudentController@edit');

    Route::post('/app/student/add/process', 'StudentController@addProcess');
    Route::post('/app/student/edit/process', 'StudentController@editProcess');
    Route::get('/app/student/list', 'StudentController@list');

    //SCHOOL CRUDS
    Route::get('/app/school/add', 'SchoolController@add');
    Route::get('/app/school/{school_id}/details', 'SchoolController@details');
    Route::get('/app/school/{school_id}/edit', 'SchoolController@edit');

    Route::post('/app/school/add/process', 'SchoolController@addProcess');
    Route::post('/app/school/edit/process', 'SchoolController@editProcess');
    Route::get('/app/school/list', 'SchoolController@list');

    //REPORTES LINK
    Route::get('/app/reportselect','TravelController@reportselect');
    Route::get('/app/report/{desde}/school/{school_id}','TravelController@report');


    Route::get('/app/travel/add/', 'TravelController@add');
    Route::get('/app/travel/add/{type}/process', 'TravelController@addProcess');

    Route::get('/app/travel/{travel_id}', 'TravelController@details');
    Route::get('/app/travel/{travel_id}/assistance', 'TravelController@assistance');
    Route::get('/app/travel/{travel_id}/finish', 'TravelController@finish');

    Route::get('/app/travel/{travel_id}/assistance/{student_id}/mark', 'TravelController@setAssistance');
    Route::post('/app/travel/{travel_id}/assistance/{student_id}/mark/process', 'TravelController@setAssistanceProcess');

    Route::get('/app/logout', 'MainController@logout');

    
    Route::get('/app/users/information' ,'UserController@information');
    Route::get('/app/users/edit'        ,'UserController@edit');
    Route::post('/app/users/edit/process','UserController@editProcess');

    Route::get('/app/users','UserController@list');
    Route::get('/app/users/getdata','UserController@getData');
    Route::get('/app/users/{user_id}/getlicences','UserController@getLicences');
    Route::get('/app/users/{user_id}/detail','UserController@detail');
    Route::get('/app/users/{user_id}/licences/add','UserController@addLicence');
    Route::post('/app/users/{user_id}/licences/add/process','UserController@addLicenceProcess');
    Route::post('/app/users/{user_id}/password/change/process','UserController@changePasswordProcess');
    Route::get('/app/users/{user_id}/schools/','UserController@schools');

    //botones de pago
    Route::get('/app/pago/{tipo_pago}', 'PayController@process');

});

