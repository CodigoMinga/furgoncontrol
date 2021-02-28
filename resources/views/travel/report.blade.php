
<head>
<style type="text/css">
    @page{        
        margin:1rem 3rem;
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
                            
                        </td>
                    </tr>
                    <tr>
                        <th align="left">
                            CONDUCTOR
                        </th>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <th align="left">
                            ASISTENTE
                        </th>
                        <td>
                            
                        </td>
                    </tr>
                </table>
            </td>
            <td align="right" style="width:1%">
                <table border="1" class="tabla1">
                    <tr>
                        <th style="white-space: nowrap">
                            NOMBRE JARDIN O COLEGIO
                        </th>
                    </tr>
                    <tr>
                        <td style="height:42.5px">

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
            <tr>
                <td style="height:35px;">
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
            </tr>
        </tbody>
    </table>

    </div>
</body>