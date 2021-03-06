
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Titulo de pruebas</h3>
            </div>

            <div class="table-responsive">
                <table id="desinfections_table" class="table table-bordered table-hover dataTable">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Opciones</th>

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

                "ajax" : "{{ url('/') }}/app/users/getdata",
                "columns" : [
                    {"data" : "id"},
                    {"data" : "name"},
                    //Estado
                    {
                        "render": function ( data, type, full, meta ) {
                            var returnString = '';
                            if(full.enabled == 1){
                                returnString =  "<span class='label bg-green'><i class='fa fa-check'></i> Activa</span>";
                            }else{
                                returnString =  "<span class='label bg-red'><i class='fa fa-close'></i> Desactivada</span>";
                            }
                            return returnString;
                        }
                    },

                    //Opciones
                    {
                        "render": function ( data, type, full, meta ) {

                            returnString =  "<a class='btn btn-success' href='{{ url('/')}}/app/users/"+full.id+"/detail'> <i class='fa fa-edit'></i>Editar</a>";

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
                "order": [[ 0, "desc" ]]
            })
        });

    </script>
@stop
