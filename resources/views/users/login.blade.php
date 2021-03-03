@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop
@section('content')
    <div align="center" style="padding: 1rem">
        <a class="titulo">
            <span>Inicie </span>
            <span>Sesión</span>
        </a>
    </div>
    <div align="center" style="padding: 1rem">
        <form method="post" action="{{url('/app/checklogin')}}">
            {{csrf_field()}}
            <div class="my-form-box" style="max-width:500px;">
                <div class="my-form-body" align="left">            
                    <div class="my-formgroup">
                        <label>E-mail</label>
                        <input required type="email"    name="email"    placeholder="tunombre@hosting.cl">
                    </div>
                    <div class="my-formgroup">
                        <label>Contraseña</label>
                        <input required type="password" name="password" placeholder="******">
                    </div>
                    <a href="{{url('/app/passwordlost')}}">Recuperar Contraseña</a>
                </div>
            </div>
            <br>
            <button type="submit" class="mybutton verde" style="max-width:500px;width:100%;">
                <i class="fa fa-lock"></i>
                <span>Iniciar Sesión</span>
            </button>
        </form>
        <br>
        @if ($message = Session::get('error'))
            <div class="alert-box">
                <i class="fa fa-warning"></i>
                <span>{{ $message }}</span>
                <i class="fa fa-warning"></i>
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert-box">
                <i class="fa fa-warning"></i>
                <span>                    
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </span>
                <i class="fa fa-warning"></i>
            </div>
        @endif
    </div>
@stop
