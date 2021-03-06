
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop
<style>

</style>
@section('content')
    <div class="contenedor-lista">
        <div align="center" style="padding: 1rem">
            <a class="titulo">
                <span>Listado de </span>
                <span>Viajes</span>
            </a>
        </div>
        <div class="buscardor">
            <i class="fa fa-search"></i>
            <input  name="buscarpor" type="search" placeholder="Buscar" id="buscar">
        </div>
        <div class="lista">
            @foreach ($travels as $travel)
            <div class="item-lista" buscar="{{$travel->start}} {{$travel->type==0 ? 'Viaje de ida' : 'Viaje de regreso'}} {{COUNT($travel->travelstudent)}}">
                <div class="informacion">
                    <h5>{{$travel->start}}</h5>
                    <p>{{$travel->type==0 ? 'Viaje de ida' : 'Viaje de regreso'}}</p>
                    <p>Pasajeros: {{COUNT($travel->travelstudent)}}</p>
                </div>
                <a class="boton blanco" href="{{url('/app/travel/'.$travel->id.'/assistance')}}">
                    <i class="fa fa-bus"></i>
                    <span>Datos</span>
                </a>
            </div>
            @endforeach
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
