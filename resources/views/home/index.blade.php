
@extends('template.phonecontainer')
<style>
    .viaje{
        display:flex;
        flex-direction: row;
        border-width:  0 0 3px 3px;
        border-color: white;
        border-style: solid;
        margin-top: 12px;
        background-color: #F7CE26;
        font-family: 'Montserrat', sans-serif;
        position: relative;
        font-weight: 800;
    }

    .viaje .icono{
        display: block;
        font-size: 5rem;
        text-align: center;
        padding:1.5rem;
        width: 9rem;
    }

    .viaje .informacion{
        padding:1.5rem 0;
        flex-grow: 1;
    }

    .viaje .informacion p{
        margin:0;
    }

    .viaje .flecha{
        font-size:4rem;
        position: absolute;
        left: 1rem;
    }

    .viaje .boton{
        width: 8rem;
        border:3px solid #242424;
        border-radius: 8px;
        margin:10px;
        display:flex;
        flex-direction: column;
        align-items:center;
        justify-content:center;
        color:#242424;
    }
    .viaje .boton:hover{
        color:white;
        border-color:white;
    }

    .viaje .boton i{
        font-size:4rem;
    }
    .viaje .boton span{
        font-weight: 800;
        font-size:1.5rem;
    }

</style>

@section('content')
    <a href="{{url('/app/student/add')}}" class="mybutton verde">
        <i class="fa fa-user-plus"></i>
        <span>Registrar Nuevo Alumno</span>
    </a>

    <a href="{{url('/app/student/list')}}" class="mybutton azul">
        <i class="fa fa-list-ul"></i>
        <span>Listado de Alumnos</span>
    </a>

    <a href="{{url('/app/travel/add')}}" class="mybutton rojo">
        <i class="fa fa-bus"></i>
        <span>Crear nuevo Viaje</span>
    </a>

    <a href="{{url('/app/reportselect')}}" class="mybutton morado">
        <i class="fa fa-file-pdf-o"></i>
        <span>Reportes</span>
    </a>

    @if(Auth::user()->is_codigo_minga)
        <div align="center" style="padding: 1rem">
            <a class="titulo">
             <span>Administracion Codigomingera</span>
            </a>
        </div>
        <a href="{{url('/app/users')}}" class="mybutton morado">
            <i class="fa fa-file-pdf-o"></i>
            <span>Listado Usuarios</span>
        </a>
    @endif
    <div align="center" style="padding: 1rem">
        <a class="titulo">
            <span style="color:black">Viajes</span>
            <span style="color:black">de</span>
            <span style="color:white">Hoy</span>
        </a>
    </div>

    @foreach($travels as $travel)
        <div class="viaje">
            <i class="icono fa fa-bus"></i>
            @if($travel->type==0)
            <i class="flecha fa fa-caret-up" style="color:rgb(27, 230, 27)"></i>
            @else
            <i class="flecha fa fa-caret-down" style="color:red"></i>
            @endif
            <div class="informacion">
                <p>Viaje de {{$travel->type==0 ? 'Ida' : 'Regreso'}}</p>
                <p>{{date('H:i d/m/Y', strtotime($travel->start))}}</p>
                <p>Pasajeros {{COUNT($travel->travelstudent)}}</p>
            </div>
            <a class="boton" href="{{url('/app/travel/'.$travel->id.'/assistance')}}">
                <i class="fa fa-navicon"></i>
                <span>Datos</span>
            </a>
        </div>
    @endforeach
@stop
