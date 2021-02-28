
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop
<style>
    table{
        border-collapse: collapse;
        border-color:#F7CE26;
        color:white;
        font-family: 'Montserrat', sans-serif;
        width:100%;
        font-size: 1.8rem!important;
    }
    td,th{
        padding: 5px!important;
    }
    th{
        padding-right: 25px!important;
    }
    th::after{
        color:red;
        top:0.5rem;
    }
    th::before{
        color:red;
        top:0.5rem;
    }

    .paginate_button{
        border-width: 2px 0px 2px 2px;
        border-color: #F7CE26;
        border-style: solid;
        font-family: 'Montserrat', sans-serif;
        padding:5px 10px;
        cursor: pointer;
        font-size: 1.8rem!important;
    }

    .paginate_button.next{
        border-width: 2px 2px 2px 2px;
        border-color: #F7CE26;
        border-style: solid;
    }

    input{
        background: rgba(0,0,0,0);
        font-family: 'Montserrat', sans-serif;
        font-size: 1.8rem!important;
        border:2px solid #F7CE26;
        outline: none;
        padding:0.8rem;
        color:white!important;
        transition: border .5s ease;
        width: 100%
    }

    select{
        background: rgba(0,0,0,0);
        font-family: 'Montserrat', sans-serif;
        font-size: 1.8rem!important;
        border:2px solid #F7CE26;
        outline: none;
        padding:0.8rem;
        color:white!important;
        transition: border .5s ease;
        width: 100%
    }
    select option{
        color:white!important;
        background: rgba(50,50,50,1);
    }

    label{
        font-family: 'Montserrat', sans-serif;
        font-size: 1.8rem!important;
        color:white!important;
    }

    input:focus,select:focus{
        border:2px solid white;
    }

    .table-btn{
        display: block;
        width: 100%;
        height:100%;
        text-align: center;
    }
</style>

@section('content')
    <div align="center" style="padding: 1rem">
        <a class="titulo">
            <span style="color:black">Listado de </span>
            <span style="color:white">Alumnos</span>
        </a>
    </div>
    <div class="table">
        <table id="tabla" class="dataTable" border=1>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Colegio</th>
                    <th>Nombre Apoderado</th>
                    <th>Apellido Apoderado</th>
                    <th>Telefono Apoderado</th>
                    <th>Datos</th>
                </tr>
            </thead>
        </table>
    </div>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var table = $('#tabla').DataTable({
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
                            returnString = "<a class='table-btn' href='tel:"+data+"'><i class='fa fa-phone-square'></i> "+data+"</a>";
                            return returnString;
                        }
                    },
                    {"data" : "id","render": 
                        function (data) {
                            var returnString = "<a class='table-btn' href='/app/student/"+data+"/details'><i class='fa fa-user'></i> datos</a>";
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
