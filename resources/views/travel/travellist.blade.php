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
    .dropdown-menu{
        float: right!important;
        left: initial!important;
        right: 1rem!important;
    }
    .dropdown-toggle{
        box-shadow:none!important;
    }
    .dropdown-menu{
        background-color: black!important;
        font-family: 'Montserrat', sans-serif;
        font-size:2rem!important;
    }
    
    .dropdown-menu>li>a{
        color:white!important;
    }
    .dropdown-menu>li>a:hover{
        color:#F7CE26!important;
        background-color: rgba(0,0,0,0)!important;
    }

</style>

@section('menubutton')
    <div class="btn-group">
        <a class="fa fa-user-circle-o botton-menu dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
        </a>
            <ul class="dropdown-menu">
            <li><a href="{{url('/app/users/information')}}"><i class="fa fa-user-circle-o"></i> Mi Cuenta</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('/app/logout')}}"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>
        </ul>
    </div>
@endsection

@section('content')

    <div align="center" style="padding: 1rem">
        <a class="titulo">
            <span>Hola </span>
            <span>{{Auth::user()->name}}</span>
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