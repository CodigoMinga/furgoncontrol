
@extends('template.maincontainer')

@section('content')
    <div class="box">
        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Listado de Alumno</h3>
            </div>
            <div class="table-responsive">
                <table id="tabla" class="table table-bordered table-hover dataTable">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Colegio</th>
                            <th>Nombre Apoderado</th>
                            <th>Apellido Apoderado</th>
                            <th>Telefono Apoderado</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var table = $('#tabla').DataTable({
                responsive: true,
                fixedHeader: {
                    headerOffset: 0
                },
                "data":{!! json_encode($students->toArray()) !!},
                "columns" : [
                    {"data" : "name"},
                    {"data" : "last_name"},
                    {"data" : "id"},
                    {"data" : "parent_name"},
                    {"data" : "parent_last_name"},
                    {"data" : "parent_phone", "render": 
                        function (data) {
                            returnString = "<a class='btn' href='tel:"+data+"'><i class='fa fa-phone-square'></i>"+data+"</a>";
                            return returnString;
                        }
                    },
                    {"data" : "id","render": 
                        function (data) {
                            var returnString = "<a class='btn btn-primary' href='/app/student/"+data+"/details'><i class='fa fa-user'></i></a>";
                            return returnString;
                        }
                    },
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
                "order": [[ 1, "asc" ]]
            });
        });
    </script>
@stop
