
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('content')
    <form method="post" action="{{url('/app/password/'.Auth::user()->id.'/change/process')}}">
        {{csrf_field()}}
            <div class="my-form-body">
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Clave Nueva</label>
                    <input required type="text" name="password"             placeholder="Clave"   >
                </div>
            </div>
        </div>
        <br>
        
        <button type="submit" class="mybutton verde" style="width:100%">
            <i class="fa fa-user-plus"></i>
            <span>Cambiar Clave</span>
        </button>
        
    </form>
@stop