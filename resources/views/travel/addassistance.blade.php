
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Registrar datos de la asistencia</h3>
            </div>

            <form method="post" action="{{url('/app/travel/'.$travel_id.'/assistance/'.$student_id.'/mark/process')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Temperatura</label>
                    <input required type="number" class="form-control" name="temperature" placeholder="">
                </div>




                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Guardar</button>
            </form>

        </div>

    </div>
@stop
