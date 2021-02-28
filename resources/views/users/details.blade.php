
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Detalles del usuario <b>{{$user->name}}</b></h3>
            </div>

            <b>Licencias asociadas al usuario:</b>
        </div>

    </div>
@stop
