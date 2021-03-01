
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/student/list')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('content')
    @if(isset($student->id))
    <form method="post" action="{{url('/app/student/edit/process')}}">
        {{csrf_field()}}
        <input name="id" type="hidden" value="{{$student->id}}">
        <div class="my-form-box">
            <div class="my-form-title"><span>Datos</span> Alumno</div>
    @else
    <form method="post" action="{{url('/app/student/add/process')}}">
        {{csrf_field()}}
        <div class="my-form-box">
            <div class="my-form-title"><span>Agregar</span> Alumno</div>
    @endif
            <div class="my-form-body">
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Nombre del Alumno</label>
                    <input required type="text" name="name"             value="{{$student->name}}"      {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Apellidos del Alumno:</label>
                    <input required type="text"  name="last_name"       value="{{$student->last_name}}" {{!$edit ? 'disabled' : ''}}>
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Rut del Alumno</label>
                    <input required type="text"  name="rut"             value="{{$student->rut}}"       {{!$edit ? 'disabled' : ''}}>
                </div>

                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Nombre del Apoderado</label>
                    <input required type="text"  name="parent_name" value="{{$student->parent_name}}"   {{!$edit ? 'disabled' : ''}}>
                </div>

                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Apellido del Apoderado</label>
                    <input required type="text"  name="parent_last_name" value="{{$student->parent_last_name}}" {{!$edit ? 'disabled' : ''}}>
                </div>

                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Email del Apoderado</label>
                    <input required type="text"  name="parent_email"    value="{{$student->parent_email}}" {{!$edit ? 'disabled' : ''}}>
                </div>

                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Rut del Apoderado</label>
                    <input required type="text"  name="parent_rut"    value="{{$student->parent_rut}}" {{!$edit ? 'disabled' : ''}}>
                </div>

                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Telefono del Apoderado</label>
                    <input required type="text"  name="parent_phone"    value="{{$student->parent_phone}}" {{!$edit ? 'disabled' : ''}}>
                </div>

                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Nombre del Establecimiento</label>
                    @if($edit)
                        <select required name="school_id">
                            <option value="">--seleccione un elemento--</option>
                            @foreach($schools as $school)
                                @if($student->school_id == $school->id)
                                    <option selected value="{{$school->id}}">{{$school->name}}</option>
                                @else
                                    <option value="{{$school->id}}">{{$school->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    @else
                        <input required type="text"  name="school_id"    value="{{$student->school->name}}" {{!$edit ? 'disabled' : ''}}>
                    @endif

                </div>
            </div>
        </div>
        <br>

        @if(isset($student->id))
            @if(!$edit)
            <a href="{{url('/app/student/'.$student->id.'/edit')}}" class="mybutton azul" style="width:100%">
                <i class="fa fa-pencil"></i>
                <span>Modificar Alumno</span>
            </a>
            <a href="tel:{{$student->parent_phone}}" class="mybutton morado" style="width:100%">
                <i class="fa fa-phone"></i>
                <span>Llamar Apoderado</span>
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
            <span>Guardar Alumno</span>
        </button>
        @endif
    </form>
@stop
