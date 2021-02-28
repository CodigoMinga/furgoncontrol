
@extends('template.phonecontainer')

@section('content')                
    <div class="my-form-box">
        <div class="my-form-title"><span>Generar</span> Reporte</div>
        <div class="my-form-body">   
            <div class="my-formgroup">
                <label for="exampleInputEmail1">Seleccione Fecha</label>
                <input type="date" name="date" id="date" maxlength="10" style="width:auto">
            </div>
            <br>
            Generar reporte desde 
            <span id="desde"></span>
            hasta 
            <span id="hasta"></span>
            <br>
        </div>
    </div>
    <br>
    <a id="boton" href="#" class="mybutton morado" target="_blank">
        <i class="fa fa-file-pdf-o"></i>
        <span>Ver Reporte</span>
    </a>
    <script>        
        $(document).ready(function(){
            $("#date").change(function(){
                seleccionfecha(this.value);
            });

            $("#date").val(new Date().toISOString().split('T')[0]);
            seleccionfecha(new Date().toISOString().split('T')[0]);

            function seleccionfecha(fecha){
                var curr = new Date(fecha);
                var first = curr.getDate() - curr.getDay(); // First day is the day of the month - the day of the week
                var last = first + 4; // last day is the first day + 6

                var firstday = new Date(curr.setDate(first));
                var lastday = new Date(curr.setDate(last));


                console.log(firstday,lastday);
                var desde= firstday.toISOString().split('T')[0];
                var hasta= lastday.toISOString().split('T')[0];

                $("#desde").html(desde);
                $("#hasta").html(hasta);

                $("#boton").attr("href", "{!! url("/") !!}" +"/app/report/"+desde+"/entre/"+hasta);
            }
        });
    </script>
@stop
