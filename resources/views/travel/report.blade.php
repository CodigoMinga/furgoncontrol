
<head>
<style type="text/css">
    @page{        
        margin:1.5rem 3rem;
    }
    
    body{
        font-family: sans-serif;
        margin:0px;
    }
    body{
        font-family: sans-serif;
    }
    p,h3{
        margin-top:0px;
        margin-bottom:3px;
    }
    td{
        vertical-align: top;
    }
    table{
        border-collapse: collapse
    }
    .tabla1 th{
        background: #D9D9D9
    }
    .td-t td{
        text-align: center;
        font-size: 0.85rem;
        width: 75px;
    }
    .fila td{
        padding:8px;
    }
    .red{
        color:red;
        border-color: black;
    }
</style>
<title>{{$document_title}}</title>
</head>
<body>
    <h2 align="center" style="background:#E7E6E6">
        CUADRO CONTROL DE TEMPERATURA TRANSPORTE ESCOLAR
    </h2>
    <table style="width:100%;padding:0px;margin:0px;">
        <tr>
            <td>

                <table border="1" class="tabla1">
                    <tr>
                        <th align="left">
                            PPU
                        </th>
                        <td style="width:300px">
                            {{$usuario->plate}}
                        </td>
                    </tr>
                    <tr>
                        <th align="left">
                            CONDUCTOR
                        </th>
                        <td>
                            {{$usuario->name}} {{$usuario->last_name}}
                        </td>
                    </tr>
                    <tr>
                        <th align="left">
                            ASISTENTE
                        </th>
                        <td>
                            {{$usuario->helper_name}}
                        </td>
                    </tr>
                </table>
            </td>
            <td align="right" style="width:1%">
                <table border="1" class="tabla1">
                    <tr>
                        <th style="white-space: nowrap">
                            NOMBRE ESTABLECIMIENTO
                        </th>
                    </tr>
                    <tr>
                        <td style="height:42.5px" align="center">
                            {{$school->name}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
        
    <h2 align="center" style="border:2px solid black">
        SEMANA DESDE {{date("d/m/y", strtotime($desde))}} HASTA {{date("d/m/y", strtotime($hasta))}} 
    </h2>

    <table border=1>
        <thead>
            <tr>
                <th rowspan="2" style="white-space: nowrap">
                    NOMBRE DE ALUMNO
                </th>
                <th colspan="2">
                    LUNES
                </th>
                <th colspan="2">
                    MARTES
                </th>
                <th colspan="2">
                    MIERCOLES
                </th>
                <th colspan="2">
                    JUEVES
                </th>
                <th colspan="2">
                    VIERNES
                </th>
            </tr>
            <tr class="td-t">
                <td>
                    Tº salida casa
                </td>
                <td>
                    Tº salida de colegio
                </td>
                <td>
                    Tº salida casa
                </td>
                <td>
                    Tº salida de colegio
                </td>
                <td>
                    Tº salida casa
                </td>
                <td>
                    Tº salida de colegio
                </td>
                <td>
                    Tº salida casa
                </td>
                <td>
                    Tº salida de colegio
                </td>
                <td>
                    Tº salida casa
                </td>
                <td>
                    Tº salida de colegio
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $estudiante)   
            <tr class="fila">
                <td>
                    {{$estudiante->name}} {{$estudiante->last_name}} 
                </td>
                <td {{$estudiante->lunes1>37 ? 'class=red': ''}}>
                    {{$estudiante->lunes1}}
                </td>
                <td {{$estudiante->lunes2>37 ? 'class=red': ''}}>
                    {{$estudiante->lunes2}}
                </td>
                <td {{$estudiante->martes1>37 ? 'class=red': ''}}>
                    {{$estudiante->martes1}}
                </td>
                <td {{$estudiante->martes2>37 ? 'class=red': ''}}>
                    {{$estudiante->martes2}}
                </td>
                <td {{$estudiante->miercoles1>37 ? 'class=red': ''}}>
                    {{$estudiante->miercoles1}}
                </td>
                <td {{$estudiante->miercoles2>37 ? 'class=red': ''}}>
                    {{$estudiante->miercoles2}}
                </td>
                <td {{$estudiante->jueves1>37 ? 'class=red': ''}}>
                    {{$estudiante->jueves1}}
                </td>
                <td {{$estudiante->jueves2>37 ? 'class=red': ''}}>
                    {{$estudiante->jueves2}}
                </td>
                <td {{$estudiante->viernes1>37 ? 'class=red': ''}}>
                    {{$estudiante->viernes1}}
                </td>
                <td {{$estudiante->viernes2>37 ? 'class=red': ''}}>
                    {{$estudiante->viernes2}}
                </td>
            </tr>
            @endforeach   
        </tbody>
    </table>

    </div>
</body>