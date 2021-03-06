
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop
<style>

</style>
@section('content')
    <div class="contenedor-lista">
        <div align="center" style="padding: 1rem">
            <a class="titulo">
                <span>Listado de </span>
                <span>Viajes</span>
            </a>
        </div>
        <div class="lista">
            @foreach ($travels as $travel)
            <div class="item-lista">
                <div class="informacion">
                    <h5>{{$travel->start}}</h5>
                    <p>{{$travel->type==0 ? 'Viaje de ida' : 'Viaje de regreso'}}</p>
                    <p>Pasajeros: {{COUNT($travel->travelstudent)}}</p>
                </div>
                <a class="boton blanco" href="{{url('/app/travel/'.$travel->id.'/assistance')}}">
                    <i class="fa fa-bus"></i>
                    <span>Datos</span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@stop
