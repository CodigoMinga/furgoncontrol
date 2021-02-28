
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">


                <form method="post" action="{{url('/app/users/'.$user->id.'/licences/add/process')}}">


                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fecha Pago</label>
                                <input required type="datetime-local"  class="form-control" name="pay_date" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Desde</label>
                                <input required type="date"  class="form-control" name="from" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hasta</label>
                                <input required type="date"  class="form-control" name="to" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Monto pagado</label>
                                <input required type="number"  class="form-control" name="ammount" placeholder="">
                            </div>

                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Guardar</button>
                            </form>
                    </div>


    </div>
@stop
