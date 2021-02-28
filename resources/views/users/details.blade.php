
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Licencias del Usuario: <b>{{$user->name}}</b></h3>
            </div>

            <a class="btn btn-primary" href="{{url('/app/users/'.$user->id."/licences/add")}}">Añadir Nueva Licencia</a>

            <div class="table-responsive">
                <table id="desinfections_table" class="table table-bordered table-hover dataTable">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha Pago</th>
                        <th>Desde</th>
                        <th>Hasta</th>
                        <th>Monto</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>


    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
    <script src="{{ url('/') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#desinfections_table').DataTable({
                responsive: true,
                fixedHeader: {
                    headerOffset: 0
                },



                "processing" : true,
                "serverSide" : true,

                "ajax" : "{{ url('/') }}/app/users/{{$user->id}}/getlicences",
                "columns" : [
                    {"data" : "id"},
                    {"data" : "pay_date"},
                    {"data" : "from"},
                    {"data" : "to"},
                    {"data" : "ammount"},



                ],
                language: {
                    "lengthMenu": "Mostrar _MENU_ registros por pagina &nbsp;&nbsp;&nbsp;",
                    "zeroRecords": "No se encuentra ningun registro",
                    "info": "Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(buscando entre _MAX_ registros)",
                    "search":         "Filtrar Registros : &nbsp",
                    "processing" : "Cargando...",
                    paginate: {
                        first:      "Primera Pagina",
                        previous:   "Anterior",
                        next:       "Siguiente",
                        last:       "Ultima"
                    },

                },
                "order": [[ 0, "desc" ]]
            })
        });

    </script>
@stop
