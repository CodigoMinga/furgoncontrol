
@extends('template.maincontainer')

<style>
    .btn{
        display:flex!important;
        flex-direction: row;
    }
    .btn i{
        display: block;
        font-size: 2.5rem;
        width:10%
    }
    .btn span{
        display: block;
        font-size: 2rem;
        width:85%
    }
</style>

@section('content')
    <div class="box">


        <div class="box-body">
            <a href="{{url('/app/student/add')}}" type="button" class="btn btn-block bg-navy">
                <i class="fa fa-user-plus"></i>
                <span>Registrar Nuevo Alumno</span>
            </a>

            <a href="{{url('/app/student/list')}}" type="button" class="btn btn-block btn-primary">
                <i class="fa fa-list-ul"></i>
                <span>Listado de Alumnos</span>
            </a>

            <a href="{{url('/app/travel/add')}}" type="button" class="btn btn-block btn-info">
                <i class="fa fa-bus"></i>
                <span>Crear nuevo Viaje</span>
            </a>
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
