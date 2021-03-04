
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

                <input type="range" step="0.1" min="32" max="42" value="{{isset($travelstudent) ? $travelstudent->temperature : 35}}" id="slider" orient="vertical">
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
                <button type="button" class="mybutton sm gris" data-dismiss="modal" style="width:45%">  
                    <i class="fa fa-times"></i>
                    <span>Cancelar</span>
                </button>
                <a href="{{url('/app/travelstudent/'.$travelstudent->id.'/delete')}}" class="mybutton sm rojo" style="width:45%">
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
        
        slider.oninput = function() {
            temp.value=this.value;
        }

        temp.onfocusout = function() {
            slider.value=this.value;
        }
    </script>
@stop
