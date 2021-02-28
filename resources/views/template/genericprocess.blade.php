
@extends('template.maincontainer')


@section('content')
    <div class="box">
        <div class="box-body">


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
            <a href="{{$returnUrl}}". class="btn btn-success">Aceptar</a>

        </div>
    </div>
@stop
