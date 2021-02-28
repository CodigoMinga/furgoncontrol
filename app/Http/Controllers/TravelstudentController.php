<?php

namespace App\Http\Controllers;

use App\Travelstudent;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class TravelstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Travelstudent  $travelstudent
     * @return \Illuminate\Http\Response
     */
    public function show(Travelstudent $travelstudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travelstudent  $travelstudent
     * @return \Illuminate\Http\Response
     */
    public function edit(Travelstudent $travelstudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travelstudent  $travelstudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travelstudent $travelstudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travelstudent  $travelstudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travelstudent $travelstudent)
    {
        //
    }


    public function report(){

        $document_title = 'reporte semana';
        $pdf = PDF::loadView('travel.report', compact('document_title'))->setOptions(['isRemoteEnabled' => true,'name'=>$document_title]);
        return $pdf->stream($document_title);

    }
}
