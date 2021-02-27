
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Registrar nuevo Viaje</h3>
            </div>

            <form method="post" action="{{url('/app/travel/add/process')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de Viaje</label>
                    <select class="form-control" name="type">
                        <option value="0">Viaje de Ida</option>
                        <option value="1">Viaje de Regreso</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Guardar</button>
            </form>
        </div>

    </div>
@stop
