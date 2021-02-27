
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Listado de Alumno</h3>
            </div>


            @foreach($students as $student)
                <ul>{{$student->name}}</ul>
            @endforeach
        </div>

    </div>
@stop
