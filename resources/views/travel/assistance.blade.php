
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Registrar asistencia para el viaje ID:{{$travel->id}}</h3>
            </div>

            <b>Estudiantes:</b>

            @foreach($students as $student)

                @if(isset($student->temperature))
                    <div class="info-box bg-green">
                @else
                    <div class="info-box bg-red">
                @endif

                    <span class="info-box-icon"><i class="ion ion-person"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">{{$student->name}} {{$student->last_name}} {{$student->id}}</span>
                        <span class="info-box-number">114,381</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            @if(isset($student->temperature))
                                <b>Temperatura: {{$student->temperature}}</b>
                            @else
                                <a href="{{url('/app/travel/'.$travel->id.'/assistance/'.$student->id.'/mark')}}">Registrar Ingreso</a>
                            @endif

                  </span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@stop
