
@extends('template.maincontainer')

@section('content')
    <div class="box">
        <div class="box-body">

            <form method="post" action="{{url('/app/student/add/process')}}">
                {{csrf_field()}}
                <h4><b>Datos del Alumno</b></h4>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre del Alumno:</label>
                    <input required type="text" class="form-control" name="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos del Alumno:</label>
                    <input required type="text" class="form-control" name="last_name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Rut del Alumno</label>
                    <input required type="text" class="form-control" name="rut" placeholder="">
                </div>
                <hr/>
                <h4><b>Datos del Apoderado</b></h4>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email del Apoderado</label>
                    <input required type="text" class="form-control" name="parent_email" placeholder="">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre del Apoderado</label>
                    <input required type="text" class="form-control" name="parent_name" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido del Apoderado</label>
                    <input required type="text" class="form-control" name="parent_last_name" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Rut del Apoderado</label>
                    <input required type="text" class="form-control" name="parent_rut" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Telefono del Apoderado</label>
                    <input required type="text" class="form-control" name="parent_phone" placeholder="">
                </div>

                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Guardar</button>
            </form>
        </div>

    </div>
@stop
