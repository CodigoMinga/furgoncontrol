
@extends('template.phonecontainer')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style>
    .btn{
        display:flex!important;
        flex-direction: row;
    }
    .btn i{
        display: block;
        font-size: 2.5rem;
        width:10%
    }
    .btn span{
        display: block;
        font-size: 2rem;
        width:85%
    }
    .info-box-icon{
        display:flex!important;
        align-items:center;
        justify-content:center;
    }

    .mybutton{
        display:flex!important;
        flex-direction: row;
        border:3px solid;
        margin-bottom: 12px;
    }

    .mybutton i{
        display: block;
        font-size: 2.5rem;
        text-align: center;
        padding:1.5rem;
    }

    .mybutton span{
        display: block;
        text-align: center;
        font-size: 2rem;
        padding:1.5rem;
        width:90%;
        font-family: 'Montserrat', sans-serif;
    }

    .content-wrapper{
        background-color: rgb(51, 51, 51)!important;
    }

    .verde{
        color:#00e676;
    }

    
    .verde:hover{
        color:#b9f6ca;
    }

    .azul{
        color:#00b0ff;
    }
    .azul:hover{
        color:#80d8ff ;
    }

    .rojo{
        color:#ff9100;
    }
    .rojo:hover{
        color:#ffd180;
    }

    .morado{
        color:#ef5350 ;
    }

    .morado:hover{
        color:#ef9a9a ;
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

    <b>Viajes de Hoy:</b>
    @foreach($travels as $travel)
        <div class="info-box bg-green">

            <span class="info-box-icon">
                <i class="fa fa-bus"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">Viaje {{$travel->type==0 ? 'Ida' : 'Regreso'}}</span>
                <span class="info-box-number">{{date('H:i d/m/Y', strtotime($travel->start))}}</span>
                <span class="progress-description">
                    <a class="btn btn-success" href="{{url('/app/travel/'.$travel->id)}}">Detalles</a>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
    @endforeach
@stop
