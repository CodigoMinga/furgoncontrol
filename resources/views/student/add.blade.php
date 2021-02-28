
@extends('template.phonecontainer')

@section('content')
            <form method="post" action="{{url('/app/student/add/process')}}">
                {{csrf_field()}}
                <div class="my-form-box">
                    <div class="my-form-title"><span>Agregar</span> Alumno</div>
                    <div class="my-form-body">
                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Nombre del Alumno</label>
                            <input required type="text" name="name" placeholder="">
                        </div>
                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Apellidos del Alumno:</label>
                            <input required type="text"  name="last_name" placeholder="">
                        </div>
                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Rut del Alumno</label>
                            <input required type="text"  name="rut" placeholder="">
                        </div>
                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Email del Apoderado</label>
                            <input required type="text"  name="parent_email" placeholder="">
                        </div>

                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Nombre del Apoderado</label>
                            <input required type="text"  name="parent_name" placeholder="">
                        </div>

                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Apellido del Apoderado</label>
                            <input required type="text"  name="parent_last_name" placeholder="">
                        </div>

                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Rut del Apoderado</label>
                            <input required type="text"  name="parent_rut" placeholder="">
                        </div>

                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Telefono del Apoderado</label>
                            <input required type="text"  name="parent_phone" placeholder="">
                        </div>

                        <div class="my-formgroup">
                            <label for="exampleInputEmail1">Nombre de la Escuela</label>
                            <input required type="text"  name="school_name" placeholder="">
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="mybutton verde" style="width:100%">
                    <i class="fa fa-user-plus"></i>
                    <span>Guardar Nuevo Alumno</span>
                </button>
            </form>
@stop
