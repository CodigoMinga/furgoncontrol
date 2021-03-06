
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
        <div align="center" style="padding-bottom: 1rem">
            <a class="titulo">
                <span>Listado de </span>
                <span>Alumnos</span>
            </a>
        </div>
        <div class="buscardor">
            <i class="fa fa-search"></i>
            <input  name="buscarpor" type="search" placeholder="Buscar" id="buscar">
        </div>
        <div class="lista">
            @foreach ($students as $student)
            <div class="item-lista" buscar="{{$student->name}} {{$student->last_name}} {{$student->parent_name}} {{$student->parent_last_name}}">
                <div class="informacion">
                    <h5>{{$student->name}} {{$student->last_name}}</h5>
                    <p>Apodarado: {{$student->parent_name}} {{$student->parent_last_name}}</p>
                </div>
                <a class="boton blanco" href="{{url('/app/student/'.$student->id.'/details')}}">
                    <i class="fa fa-user"></i>
                    <span>Datos</span>
                </a>
            </div>
            @endforeach
        </div>
        <a href="{{url('/app/student/add')}}" class="mybutton verde">
            <i class="fa fa-user-plus"></i>
            <span>Registrar Nuevo Alumno</span>
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
