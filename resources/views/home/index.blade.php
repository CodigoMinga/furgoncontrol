
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <a href="{{url('/app/student/add')}}" type="button" class="btn btn-block btn-success">Crear Nuevo Alumno</a>

            <a href="{{url('/app/student/list')}}" type="button" class="btn btn-block btn-success">Listado de Alumnos</a>

            <a href="{{url('/app/travel/add')}}" type="button" class="btn btn-block btn-success">Crear nuevo Viaje</a>

            <button type="button" class="btn btn-block btn-success">Crear Viaje de Regreso</button>
        </div>

        <div class="box-body">
        <b>Viajes de Hoy:</b>
            <br/>
            @foreach($travels as $travel)


                <div class="info-box bg-green">

                    <span class="info-box-icon"><i class="ion ion-android-bus"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Viaje N° {{$travel->id}}</span>
                        <span class="info-box-number">{{date('H:i d/m/Y', strtotime($travel->start))}}</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                    <a href="{{url('/app/travel/'.$travel->id)}}">Detalles</a>
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            @endforeach

        </div>
    </div>
@stop
