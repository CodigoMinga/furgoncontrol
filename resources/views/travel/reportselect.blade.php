
@extends('template.maincontainer')

@section('content')
    <div class="box">


        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Seleccione Fecha</h3>
            </div>
            <input type="date" name="date" id="date">
            <br>
            Generar reporte desde 
            <span id="desde"></span>
            hasta 
            <span id="hasta"></span>
            <br>
            <a class="btn btn-primary" id="boton" href="#" target="_blank">Generar</a>
        </div>

    </div>
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
