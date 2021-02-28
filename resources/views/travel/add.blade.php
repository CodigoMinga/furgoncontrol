
@extends('template.phonecontainer')
<style>
    .flecha{
        font-size:4rem!important;
        position: absolute;
        left: calc(50% - 5rem);
    }
</style>

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('content')


<div align="center" style="padding: 1rem">
    <a class="titulo">
        <span style="color:black">Tipo de </span>
        <span style="color:white">Viaje</span>
    </a>
</div>
<div class="flex-grid">
    <a href="{{url('/app/travel/add/0/process')}}" class="mybutton mybutton-column primario">
        <i class="fa fa-bus"></i>
        <b class="flecha fa fa-caret-up" style="color:rgb(27, 230, 27)"></b>
        <span>Viaje de Ida</span>
    </a>    
    <a href="{{url('/app/travel/add/1/process')}}" class="mybutton mybutton-column primario">
        <i class="fa fa-bus"></i>
        <b class="flecha fa fa-caret-down" style="color:red"></b>
        <span>Viaje de Regreso</span>
    </a>
</div>
@stop
