
@extends('template.phonecontainer')

<style>
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
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('menubutton')
    <a data-toggle="modal" data-target="#eliminarModal" class="botton-menu">
        <i class="fa fa-trash"></i>
    </a>
@endsection

@section('content')
    <div class="contenedor-lista">
        <div align="center" style="padding: 1rem">
            <a class="titulo">
                <span>Listado de </span>
                <span>Mediciones</span>
            </a>
        </div>
        <div class="buscardor">
            <i class="fa fa-search"></i>
            <input  name="buscarpor" type="search" placeholder="Buscar" id="buscar">
        </div>
        <div class="lista">
            @foreach($students as $student)                
                <div class="item-lista" buscar="{{$student->name}} {{$student->last_name}} {{$student->school_name}} {{!isset($student->temperature) ? 'Sin datos' : $student->temperature}}">
                    <div class="informacion">
                        <h5>{{$student->name}} {{$student->last_name}}</h5>
                        <p>{{$student->school_name}}</p>
                    </span>
                    </div>         
                    @if(isset($student->temperature))
                        @if($student->temperature>37.5)
                            <a class="boton rojo" href="{{url('/app/travelstudent/'.$student->travelstudent_id.'/edit')}}">
                                <i class="fa fa-thermometer-full"></i>
                                <span>{{$student->temperature}}ºC</span>
                            </a>
                        @else
                            <a class="boton verde" href="{{url('/app/travelstudent/'.$student->travelstudent_id.'/edit')}}">
                                <i class="fa fa-thermometer-half"></i>
                                <span>{{$student->temperature}}ºC</span>
                            </a>
                        @endif 
                    @else       
                        <a class="boton gris" href="{{url('/app/travel/'.$travel->id.'/assistance/'.$student->id.'/mark')}}">
                            <i class="fa fa-thermometer-empty"></i>
                            <span>Sin datos</span>
                        </a>
                    @endif 
                </div>
            @endforeach
        </div>
        @if(!isset($travel->finish))
        <a data-toggle="modal" data-target="#exampleModal" class="mybutton verde">
            <i class="fa fa-flag-checkered"></i>
            <span>Finalizar Viaje</span>
        </a>
        @endif
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Finalizar Viaje</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:white" class="fa fa-times"></span>
              </button>
            </div>
            <div class="modal-body">
                ¿Esta Seguro de finalizar el viaje?
            </div>
            <div class="modal-footer" style="display:flex; justify-content:space-between">
                <button type="button" class="mybutton sm gris" data-dismiss="modal">  
                    <i class="fa fa-times"></i>
                    <span>Cancelar</span>
                </button>
                <a href="{{url('/app/travel/'.$travel->id.'/finish')}}" class="mybutton sm verde">  
                    <i class="fa fa-flag-checkered"></i>
                    <span>Finalizar</span>
                </a>
            </div>
          </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Viaje</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:white" class="fa fa-times"></span>
              </button>
            </div>
            <div class="modal-body">
                ¿Esta Seguro de Eliminar el viaje?
            </div>
            <div class="modal-footer" style="display:flex; justify-content:space-between">
                <button type="button" class="mybutton sm gris" data-dismiss="modal">  
                    <i class="fa fa-times"></i>
                    <span>Cancelar</span>
                </button>
                <a href="{{url('/app/travel/'.$travel->id.'/delete')}}" class="mybutton sm rojo">
                    <i class="fa fa-trash"></i>
                    <span>Eliminar</span>
                </a>
            </div>
          </div>
        </div>
    </div>
    
    <script>
        var burcar = document.getElementById('buscar');
        var items = document.querySelectorAll(".item-lista");
        burcar.onkeyup = function() {
            items.forEach(item => {
                if(item.getAttribute('buscar').toUpperCase().includes(this.value.toUpperCase())){
                    item.style.display='flex';
                }else{
                    item.style.display="none";
                }
            });
        }
    </script>
@stop
