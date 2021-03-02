
@extends('template.phonecontainer')
@section('content')

    @if($sucess)
        <div class="success-box">
            <i class="fa fa-check"></i>                
            @if(isset($message))
                <span>{{$message}}</span> 
            @endif
            <i class="fa fa-check"></i>
        </div>
    @else
        <div class="alert-box">
            <i class="fa fa-warning"></i>                
            @if(isset($message))
                <span>{{$message}}</span> 
            @endif
            <i class="fa fa-warning"></i>
        </div>
    @endif
    <a href="{{$returnUrl}}" type="submit" class="mybutton azul" style="width:100%">
        <i class="fa fa-arrow-right"></i>
        <span>Continuar</span>
    </a>
@stop
