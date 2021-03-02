
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('content')
    @if(isset(Auth::user()->id))
    <form method="post" action="{{url('/app/users/edit/process')}}">
        {{csrf_field()}}
        <input name="id" type="hidden" value="{{Auth::user()->id}}">
        <div class="my-form-box">
            <div class="my-form-title"><span>Datos de tu </span>Cuenta</div>
    @else
    <form method="post" action="{{url('/app/users/add/process')}}">
        {{csrf_field()}}
        <div class="my-form-box">
            <div class="my-form-title"><span>Agregar</span> Establecimiento</div>
    @endif
            <div class="my-form-body">
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input required type="text" name="name"         value="{{Auth::user()->name}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Apellido</label>
                    <input required type="text" name="last_name"    value="{{Auth::user()->last_name}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">RUT</label>
                    <input required type="text" name="rut"        value="{{Auth::user()->rut}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input required type="text" name="email"        value="{{Auth::user()->email}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Teléfono</label>
                    <input required type="text" name="phone"        value="{{Auth::user()->phone}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Patente</label>
                    <input required type="text" name="plate"        value="{{Auth::user()->plate}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Asistente</label>
                    <input required type="text" name="helper_name"        value="{{Auth::user()->helper_name}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label>Ciudad</label>
                    <select required name="commune_id" {{!$edit ? 'disabled' : ''}}>
                        <option value="">seleccione una comuna</option>
                       @foreach($communes as $commune)
                            <option value="{{$commune->id}}" {{Auth::user()->commune_id==$commune->id ? 'selected' : ''}}>{{$commune->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <br>

        @if(isset(Auth::user()->id))
            @if(!$edit)
            <a href="{{url('/app/users/edit')}}" class="mybutton azul" style="width:100%">
                <i class="fa fa-pencil"></i>
                <span>Modificar datos</span>
            </a>
            <a href="{{url('/app/user/'.Auth::user()->id.'/edit')}}" class="mybutton morado" style="width:100%">
                <i class="fa fa-key"></i>
                <span>Cambiar clave</span>
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
