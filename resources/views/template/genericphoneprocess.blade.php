
@extends('template.phonecontainer')

@section('content')

    @if($sucess)
        <div class="alert alert-success">

            @if(isset($message))
                <b>{{$message}}</b>
            @endif
        </div>
    @else
        <div class="alert alert-danger">

            @if(isset($message))
                <b>{{$message}}</b>
            @endif
        </div>
    @endif
    <a href="{{$returnUrl}}" type="submit" class="mybutton verde" style="width:100%">
        <i class="fa fa-user-plus"></i>
        <span>Aceptar</span>
    </a>
@stop
