
@extends('template.phonecontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Titulo de pruebas</h3>
            </div>

            <b>Aqui va el contenido</b>

            <a href="{{url('/app/travel/'.$travel->id.'/assistance')}}" class="btn btn-primary">Marcar Asistencia</a>

            <a href="" class="btn btn-primary">Finalizar Viaje</a>
        </div>

    </div>
@stop
