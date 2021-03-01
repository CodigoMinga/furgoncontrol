
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/school/list')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('content')
    @if(isset($school->id))
    <form method="post" action="{{url('/app/school/edit/process')}}">
        {{csrf_field()}}
        <input name="id" type="hidden" value="{{$school->id}}">
        <div class="my-form-box">
            <div class="my-form-title"><span>Datos</span> Establecimiento</div>
    @else
    <form method="post" action="{{url('/app/school/add/process')}}">
        {{csrf_field()}}
        <div class="my-form-box">
            <div class="my-form-title"><span>Agregar</span> Establecimiento</div>
    @endif
            <div class="my-form-body">
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Nombre del Establecimiento</label>
                    <input required type="text" name="name"             value="{{$school->name}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
            </div>
        </div>
        <br>

        @if(isset($school->id))
            @if(!$edit)
            <a href="{{url('/app/school/'.$school->id.'/edit')}}" class="mybutton azul" style="width:100%">
                <i class="fa fa-pencil"></i>
                <span>Modificar Establecimiento</span>
            </a>
            @else
                <button type="submit" class="mybutton verde" style="width:100%">
                    <i class="fa fa-pencil"></i>
                    <span>Guardar Cambios</span>
                </button>
            @endif
        @else
        <button type="submit" class="mybutton verde" style="width:100%">
            <i class="fa fa-user-plus"></i>
            <span>Guardar Establecimiento</span>
        </button>
        @endif
    </form>
@stop
