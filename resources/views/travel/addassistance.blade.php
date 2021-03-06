
@extends('template.phonecontainer')

<style>
    input[type="range"].range
    {
        cursor: pointer;
        width: 100% !important;
        -webkit-appearance: none;
        z-index: 200;
        height: 50px;
        border: 3px solid white;
        background-color: rgba(0,0,0,0);
        border-radius: 4rem;
        z-index:50;
        outline: none;
    }
    
    input[type="range"].range::-webkit-slider-thumb, input[type="range"].range::-moz-range-thumb
    {
        -webkit-appearance: none;
        width: 44px;
        height: 44px;
        background-color: white;
        border-radius: 50%;
        position: relative;
        z-index:50;
    }

    #barra
    {
        display: block;
        position: absolute;
        background-color: #d50000;
        height: 44px;
        width:100%;
        top:3px;
        border-radius: 4rem;
        left:0px;
        z-index:1;  
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none;
        pointer-events: none;
    }
    #bulbo{
        display: block;
        position: absolute;
        background-color: #d50000;
        width:  80px;
        height: 80px;
        border-radius: 50%;
        border: 3px solid white;
        top:-16px;
        left:-40px;
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none;
        pointer-events: none;
    }
    .medida{
        display: block;
        position: absolute;
        width: 0px;
        height: 22px;
        left:0px;
        border-style: solid;
        border-width: 0px 2px 0 0;
        z-index:55;  
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none;
        pointer-events: none;
        float: left;
    }
    
/*
    input[type="range"].range
    {
        -webkit-transform:rotate(270deg);
        -moz-transform:rotate(270deg);
        -o-transform:rotate(270deg);
        -ms-transform:rotate(270deg);
        transform:rotate(270deg);
    }
*/


    .modal-dialog-centered{
        margin-top:25vh!important;
    }

    .modal-title{
        display: inline;
        font-family: 'Montserrat', sans-serif;
        font-size: 3rem;
    }

    .modal-content{
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        background-color: black!important;
        color:white;
    }
</style>

@section('backbutton')
    <a href="{{url('/app/travel/'.$travel_id.'/assistance')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop


@if(isset($travelstudent))
    @section('menubutton')
        <a data-toggle="modal" data-target="#eliminarModal" class="botton-menu">
            <i class="fa fa-trash"></i>
        </a>
    @endsection
@endif

@section('content')
    @if(isset($travelstudent))
    <form method="post" action="{{url('/app/travelstudent/edit/process')}}">
        {{csrf_field()}}
        <input name="id" type="hidden" value="{{$travelstudent->id}}">
        <div class="my-form-box">
            <div class="my-form-title"><span>Medir</span> Temperatura</div>
    @else
    <form method="post" action="{{url('/app/travel/'.$travel_id.'/assistance/'.$student->id.'/mark/process')}}">
        {{csrf_field()}}
        <div class="my-form-box">
            <div class="my-form-title"><span>Medir</span> Temperatura</div>
    @endif
            <div class="my-form-body">
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Persona Medida</label>
                    <input type="text" step="0.1" value="{{$student->name}} {{$student->last_name}}" readonly>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Temperatura</label>
                    <input required type="number" step="0.1" min="32" max="42" name="temperature" id="temp" placeholder="" value="{{isset($travelstudent) ? $travelstudent->temperature : 35}}">
                </div>
                <div style="position:relative;margin-top:3rem;margin-left:3rem;margin-bottom:1rem;">
                    <div id="bulbo"></div>
                    <div style="position:relative;margin-left:44px;">
                        <div class="medida"></div>
                        <div class="medida" style="left:10%"></div>
                        <div class="medida" style="left:20%"></div>
                        <div class="medida" style="left:30%"></div>
                        <div class="medida" style="left:40%"></div>
                        <div class="medida" style="left:50%"></div>
                        <div class="medida" style="left:60%"></div>
                        <div class="medida" style="left:70%"></div>
                        <div class="medida" style="left:80%"></div>
                        <div class="medida" style="left:90%"></div>
                    </div>
                    <input class="range" type="range" step="0.1" min="32" max="42" value="{{isset($travelstudent) ? $travelstudent->temperature : 35}}" id="slider">
                    <div id="barra"></div>
                </div>
            </div>
        </div>              
        <br>
        <button type="submit" class="mybutton verde" style="width:100%">
            <i class="fa fa-thermometer-half"></i>
            <span>Guardar Temperatura</span>
        </button>
    </form>
    
    @if(isset($travelstudent))
    <!-- Modal -->
    <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Medición</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:white" class="fa fa-times"></span>
              </button>
            </div>
            <div class="modal-body">
                ¿Esta seguro de eliminar esta medición?
            </div>
            <div class="modal-footer" style="display:flex; justify-content:space-between">
                <button type="button" class="mybutton sm gris" data-dismiss="modal">  
                    <i class="fa fa-times"></i>
                    <span>Cancelar</span>
                </button>
                <a href="{{url('/app/travelstudent/'.$travelstudent->id.'/delete')}}" class="mybutton sm rojo">
                    <i class="fa fa-trash"></i>
                    <span>Eliminar</span>
                </a>
            </div>
          </div>
        </div>
    </div>
    @endif
    <script>
        var slider = document.getElementById("slider");
        var temp = document.getElementById("temp");
        var barra = document.getElementById("barra");
        
        slider.oninput = function() {
            temp.value=this.value;
            sliderbar();
        }

        temp.onfocusout = function() {
            slider.value=this.value;
            sliderbar();
        }
        sliderbar();

        function sliderbar(){
            var value=slider.value
            var width = slider.offsetWidth;
            var x = (10*value-320)/100;
            var calc = x*width+(50-50*x);
            barra.style.width=calc+"px";
        }
    </script>
@stop
