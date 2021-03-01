
@extends('template.phonecontainer')

<style>
input[type=range][orient=vertical]
{
    writing-mode: bt-lr; /* IE */
    -webkit-appearance: slider-vertical; /* WebKit */
    width: 8px;
    height: 200px;
    padding: 0 5px;
}
</style>

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
                    <input required type="number" step="0.1" class="form-control" name="temperature" id="temp" placeholder="">
                </div>
                <input type="range" min="32" max="42" value="35" step="0.1" id="slider" orient="vertical">
            </div>
        </div>              
        <br>
        <button type="submit" class="mybutton verde" style="width:100%">
            <i class="fa fa-thermometer-half"></i>
            <span>Guardar Temperatura</span>
        </button>
    </form>
    <script>
        var slider = document.getElementById("slider");
        var temp = document.getElementById("temp");
        
        slider.oninput = function() {
            temp.value=this.value;
        }

        temp.onfocusout = function() {
            slider.value=this.value;
        }
    </script>
@stop
