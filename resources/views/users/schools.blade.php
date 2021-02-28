
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop
@section('content')
    <div class="my-formgroup">
        <label for="exampleInputEmail1">Listado de Establecimientos:</label>


    @foreach($user->schools as $school)
        - {{$school->name}} <br/>
    @endforeach
    </div>
@stop
