
@extends('template.phonecontainer')
<style>
    .alerta{
        display: block;
        padding:3rem;
        font-size: 2rem;
        border-width: 8px 3px;
        border-style: solid;
        margin-bottom: 3rem;
    }

    .alerta-success{        
        color:white;
        border-color: #00e676;
    }

    .alerta-danger{
        color:white;
        border-color: #e53935;
    }

</style>

@section('content')

    @if($sucess)
        <div class="alerta alerta-success">

            @if(isset($message))
                <b>{{$message}}</b>
            @endif
        </div>
    @else
        <div class="alerta alerta-danger">

            @if(isset($message))
                <b>{{$message}}</b>
            @endif
        </div>
    @endif
    <a href="{{$returnUrl}}" type="submit" class="mybutton verde" style="width:100%">
        <i class="fa fa-check"></i>
        <span>Aceptar</span>
    </a>
@stop
