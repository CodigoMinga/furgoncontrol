
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop
<style>
    .contenedor{
        display: flex;
        flex-direction: column;
        height: calc(100% - 85px);
    }
    .lista{
        flex-grow: 1;
        margin-bottom:2rem;
        overflow-y: scroll;
    }

    .estudiante{
        display: flex;
        flex-direction: row;
        justify-content:stretch;
        align-items: center;
        border: 3px solid #F7CE26;
        border-width: 0 3px 3px 3px;
        border-style:solid;
        border-color:#F7CE26;
        color:white;
        font-family: 'Montserrat', sans-serif;
        padding: 0.5rem;
    }

    .estudiante:first-of-type{
        border-width: 3px 3px 3px 3px;
    }

    .estudiante .informacion{
        flex-grow: 1;
    }

    .estudiante .informacion p{
        margin:0;
    }
    .estudiante .informacion p:first-child{
        font-size: 2rem;
    }
    .estudiante .boton{
        display: flex;
        flex-direction: column;
        width: 60px;
        border:2px solid white;
        text-align: center;
        height: 100%;
        border-radius: 8px;
        color:white;
    }
    
    .estudiante .boton:hover{
        border-color:black;
        color:black;
    }

    .estudiante .boton i{
        font-size: 4rem;
    }

</style>
@section('content')
    <div class="contenedor">
        <div align="center" style="padding: 1rem">
            <a class="titulo">
                <span>Listado de </span>
                <span>Establecimientos</span>
            </a>
        </div>
        <div class="lista">
            @foreach ($schools as $school)
            <div class="estudiante">

                <div class="informacion">
                    <p>{{$school->name}} {{$school->last_name}}</p>
                    <p>Direccion: {{$school->adress}}</p>
                </div>
                <a class="boton" href="{{url('/app/school/'.$school->id.'/details')}}">
                    <i class="fa fa-university"></i>
                    <span>Datos</span>
                </a>
            </div>
            @endforeach
        </div>
        <a href="{{url('/app/school/add')}}" class="mybutton verde">
            <i class="fa fa-plus"></i>
            <span>Registrar Nuevo Alumno</span>
        </a>
    </div>
@stop
