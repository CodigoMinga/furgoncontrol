
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
                <span>Establecimientos</span>
            </a>
        </div>
        <div class="buscardor">
            <i class="fa fa-search"></i>
            <input  name="buscarpor" type="search" placeholder="Buscar" id="buscar">
        </div>
        <div class="lista">
            @foreach ($schools as $school)
            <div class="item-lista" buscar="{{$school->name}}">
                <div class="informacion">
                    <h5>{{$school->name}}</h5>
                    <p>Direccion: {{$school->adress}}</p>
                </div>
                <a class="boton blanco" href="{{url('/app/school/'.$school->id.'/details')}}">
                    <i class="fa fa-university"></i>
                    <span>Datos</span>
                </a>
            </div>
            @endforeach
        </div>
        <a href="{{url('/app/school/add')}}" class="mybutton verde">
            <i class="fa fa-plus"></i>
            <span>Nuevo Establecimiento</span>
        </a>
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
