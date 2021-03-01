
@extends('template.phonecontainer')


@section('backbutton')
    <a href="{{url('/app/travel/'.$travel_id.'/assistance')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('content')
    <form method="post" action="{{url('/app/travel/'.$travel_id.'/assistance/'.$student_id.'/mark/process')}}">
        {{csrf_field()}}
        <div class="my-form-box">
            <div class="my-form-title"><span>Medir Temperatura</span> Alumno</div>
            <div class="my-form-body">
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Temperatura</label>
                    <input required type="number" class="form-control" name="temperature" placeholder="">
                </div>
            </div>
        </div>              
        <br>
        <button type="submit" class="mybutton verde" style="width:100%">
            <i class="fa fa-thermometer-half"></i>
            <span>Guardar Temperatura</span>
        </button>
    </form>
@stop
