
@extends('template.phonecontainer')

<style>
    .contenedor{
        display: flex;
        flex-direction: column;
        height: calc(100% - 85px);
    }
    .lista{
        flex-grow: 1;
        margin-bottom:2rem;
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
        width: 90px;
        border-width: 2px;
        border-style: solid;
        text-align: center;
        height: 100%;
        border-radius: 8px;
    }
    
    .estudiantea .boton:hover{
        border-color:black;
        color:black;
    }

    .estudiante .boton i{
        font-size: 4rem;
    }
</style>

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('content')
    <div class="contenedor">
        <div align="center" style="padding: 1rem">
            <a class="titulo">
                <span>Listado de </span>
                <span>Alumnos</span>
            </a>
        </div>
        <div class="lista">
            @foreach($students as $student)                
                <div class="estudiante">
                    <div class="informacion">
                        <p>{{$student->name}} {{$student->last_name}}</p>
                        <p>{{$student->school_name}}</p>
                    </span>
                    </div>         
                    @if(isset($student->temperature))
                        @if($student->temperature>37.5)
                            <a class="boton Rojo">
                                <i class="fa fa-thermometer-full"></i>
                                <span>{{$student->temperature}}ºC</span>
                            </a>
                        @else
                            <a class="boton Verde">
                                <i class="fa fa-thermometer-half"></i>
                                <span>{{$student->temperature}}ºC</span>
                            </a>
                        @endif 
                    @else       
                        <a class="boton Gris" href="{{url('/app/travel/'.$travel->id.'/assistance/'.$student->id.'/mark')}}">
                            <i class="fa fa-thermometer-empty"></i>
                            <span>Sin datos</span>
                        </a>
                    @endif 
                </div>
            @endforeach
        </div>
        <a href="#" class="mybutton verde">
            <i class="fa fa-flag-checkered"></i>
            <span>Finalizar Viaje</span>
        </a>
    </div>
@stop
