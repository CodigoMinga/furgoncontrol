<!DOCTYPE html>
<html style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furgon Controlado</title>
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>

    <link rel="stylesheet" href="{{ url('/') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/AdminLTE.min.css">

    <script src="{{ url('/') }}/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="{{ url('/') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="{{ url('/') }}/js/rut.js"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
</head>
<style>
    .barra{
        background-color: #F7CE26;
        display:flex!important;
        flex-direction: row;
        position: sticky;
        align-items: center;
        top:0px;
        z-index:50;
    }

    .scaffold{
        display: block;
        width: 100%;
        min-height: 100%;
        position: relative;
    }

    .scaffold-body{
        min-height:calc(100vh - 95px);
        padding-top:1rem;
        position: relative;
    }

    .barra img{
        height: 75px;
        padding:10px;
    }

    body{
        background-color: rgb(51, 51, 51);
        height: 100%;
    }

    .mybutton{
        display:flex!important;
        flex-direction: row;
        border:3px solid;
        margin-bottom: 12px;
        background-color:rgba(0,0,0,0);
    }
    
    .mybutton-column{
        position: relative;
        flex-direction: column;
        align-items:center;
        justify-content:start;
        margin:2rem;
        width: 50%;
        min-width: 150px;
    }

    .verde{
        color:#00e676;
    }

    .verde:hover{
        color:#b9f6ca;
    }

    .azul{
        color:#00b0ff;
    }
    .azul:hover{
        color:#80d8ff ;
    }

    .morado{
        color:#ea80fc  ;
    }
    .morado:hover{
        color:#ce93d8  ;
    }

    .rojo{
        color:#ef5350 ;
    }

    .rojo:hover{
        color:#ef9a9a ;
    }

    .gris{
        color:#90a4ae;
    }

    .gris:hover{
        color:#cfd8dc ;
    }

    .naranja{
        color:#ffab40 ;
    }

    .naranja:hover{
        color:#ffd180 ;
    }

    
    .primario{
        color:#F7CE26 ;
    }

    .primario:hover{
        color:white ;
    }

    .blanco{
        color:white ;
    }

    .blanco:hover{
        color:black ;
    }

    .mybutton-column i{
        font-size: 5rem!important;
    }

    .mybutton i{
        display: block;
        font-size: 2.5rem;
        text-align: center;
        padding:1.5rem;
    }
    .mybutton span{
        display: block;
        text-align: center;
        font-size: 2rem;
        padding:1.5rem;
        width:90%;
        font-family: 'Montserrat', sans-serif;
    }
    .mybutton.sm{
        width: 48%;
    }

    .mybutton.sm i{
        font-size: 2rem;
        padding:1rem;
    }
    

    .mybutton.sm span{
        font-size: 1.8rem;
        padding:1rem;
    }
    
    .my-formgroup input{
        background: rgba(0,0,0,0);
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem!important;
        border:3px solid #F7CE26;
        outline: none;
        padding:1rem;
        color:white!important;
        transition: border .5s ease;
        width: 100%;
        min-height: 54px;
    }

    .my-formgroup select{
        background: rgba(0,0,0,0);
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem!important;
        border:3px solid #F7CE26;
        outline: none;
        padding:1rem;
        color:white!important;
        transition: border .5s ease;
        width: 100%;
        min-height: 54px;
    }
    .my-formgroup select option{
        color:white!important;
        background: rgba(50,50,50,1);
    }    
    
    .my-formgroup select:focus{
        border:3px solid white;
    }

    .my-formgroup input:focus{
        border:3px solid white;
    }

    .my-formgroup{
        color:#F7CE26;
        font-family: 'Montserrat', sans-serif;
        margin-bottom:1.5rem; 
    }

    .my-formgroup label{
        font-size: 2rem!important;
        color:white!important;
        font-weight: 400;
        width: 100%;
    }

    .my-form-box{
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        border:3px solid #F7CE26;
        border-radius: 3rem 3rem 0 0;
        color:white;
    }

    .my-form-title{
        color:#F7CE26;
        padding: 1rem;
        font-size: 3rem;
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        text-align: center;
    }
    
    .my-form-title span{
        color:white;
    }
    
    .my-form-body{
        padding: 2rem;
        font-family: 'Montserrat', sans-serif;
    }

    
    .titulo{
        padding: 1rem;
        font-size: 3rem;
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        border-radius: 3rem 0 ;
    }
    
    .titulo span:first-child{
        color:white;
    }
    .titulo span:last-child{
        color:#F7CE26;
    }

    .flex-grid{
        display:flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: stretch 
    }

    .botton-volver,.botton-menu{
        display: block;
        font-size: 4rem;
        display:flex!important;
        flex-direction: row;
        position: sticky;
        align-items: center;
        justify-content: center;
        color:black;
    }

    .botton-volver:hover,.botton-menu:hover{
        color:white;
    }

    .alert-box, .success-box{
        display:flex!important;
        flex-direction: row;
        margin-bottom: 12px;
        background-color:rgba(0,0,0,0);
        font-size: 3rem;
    }

    .alert-box{
        border:3px solid #ef5350;
        color:#ef5350;
    }
    
    .success-box{
        border:3px solid #00e676;
        color:#00e676;
    }

    .alert-box i, .success-box i{
        display: block;
        font-size: 2.5rem;
        text-align: center;
        padding:1.5rem;
    }

    .alert-box span, .success-box span {
        display: block;
        text-align: center;
        font-size: 2rem;
        padding:1.5rem;
        flex-grow: 1;
        font-family: 'Montserrat', sans-serif;
    }

    input:-internal-autofill-selected,
    input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active {
        transition: background-color 1000000s ease-in-out 0s;
        -webkit-text-fill-color: #fff !important;
    }

    .notificacion-box{
        display: block;
        position: fixed;
        bottom: -150px;
        width: 100%;
        color:white;
        text-align: center;
        font-size: 2rem;
        padding:1.5rem;
        font-family: 'Montserrat', sans-serif;
        transition: bottom 1s;
    }

    .contenedor-lista{
        display: flex;
        flex-direction: column;
        position: absolute;
        top:0px;
        bottom:0px;
        left:15px;
        right:15px;
    }

    .contenedor-lista .lista{
        flex-grow: 1;
        margin-bottom:2rem;
        overflow-y: scroll;
        border-width: 3px 3px 3px 3px;
        border-style:solid;
        border-color:#F7CE26;
    }

    .contenedor-lista .item-lista{
        display: flex;
        flex-direction: row;
        justify-content:stretch;
        align-items: center;
        border-width: 0px 0px 3px 0px;
        border-style:solid;
        border-color:#F7CE26;
        color:white;
        font-family: 'Montserrat', sans-serif;
        padding: 0.5rem;
    }

    .contenedor-lista .item-lista .informacion{
        flex-grow: 1;
    }

    .item-lista .informacion p,.item-lista .informacion h5{
        margin:0;
    }
    .contenedor-lista .item-lista .informacion h5{
        font-size: 2rem;
    }
    .contenedor-lista .item-lista .boton{
        display: flex;
        flex-direction: column;
        border-width: 2px;
        border-style: solid;
        text-align: center;
        height: 100%;
        border-radius: 8px;
        padding: 2px;
        width: 70px;
    }
    
    .contenedor-lista .item-lista .boton i{
        font-size: 4rem;
    }
    .contenedor-lista .item-lista .boton span{
        white-space: nowrap;
    }

    .buscardor{
        position: relative;
        padding-bottom: 1.5rem;
    }

    .buscardor input{
        background: rgba(0,0,0,0);
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem!important;
        border:3px solid #F7CE26;
        outline: none;
        padding:1rem 2rem 1rem 5rem;
        color:white!important;
        transition: border .5s ease;
        width: 100%;
        min-height: 54px;
        border-radius:4rem;
    }
    
    .buscardor i{
        color:white;
        position: absolute;
        padding:1rem 1.5rem;
        font-size: 3rem!important;  
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none;
    }
    
    @media only screen and (max-width: 400px) {
        
        .barra img{
            height: 60px;
            padding:5px;
        }
        
        .scaffold-body{
            min-height:calc(100vh - 60px);
        }

        .mybutton-column i{
            font-size: 4rem;
        }

        .mybutton i{
            font-size: 2rem;
            padding:1rem;
        }

        .mybutton span{
            font-size: 1.5rem;
            padding:1rem;
        }
        .titulo{
            padding: 0.8rem;
            font-size: 2.2rem;
        }

        .contenedor-lista  .item-lista .informacion h5{
            font-size: 1.8rem;
        }
        .contenedor-lista  .item-lista .informacion p{
            font-size: 1.2rem;
        }
        .contenedor-lista .item-lista .boton i{
            font-size: 3rem;
        }
        .contenedor-lista .item-lista .boton span{
            font-size: 1rem;
        }

        .my-form-body{
            padding: 1rem;
        }
        

        .my-form-title{
            padding: 0.8rem;
            font-size: 2.2rem;
        }
        
        .my-formgroup input,.my-formgroup select{
            font-size: 1.8rem!important;
            padding:0.7rem;
            min-height: 44px;
        }

        .my-formgroup label{
            font-size: 1.8rem!important;
        }

        .modal-title{
            font-size: 2.5rem;
        }

        .modal-footer{
            padding: 1rem 0px 0px 0px;
        }

        
        .mybutton.sm i{
            font-size: 1.6rem;
            padding:0.8rem;
        }
        
        .mybutton.sm span{
            font-size: 1.4rem;
            padding:0.8rem;
        }

        
        .buscardor input{
            font-size: 1.8rem!important;
            padding:0.7rem 0.7rem 0.7rem 3.5rem;
            min-height: 44px;
        }
        
        .buscardor i{
            padding:1rem 1.05rem;
            font-size: 2.2rem!important;  
        }
    }
</style>
<body>
<div class="scaffold">
    <div class="barra" align="center">
        <div style="width:5rem" align="right">
            @yield('backbutton')
        </div>
        <div style="flex-grow:1">
            <img src="{{ url('/') }}/images/logo.svg">
        </div>
        <div style="width:5rem" align="left">
            @yield('menubutton')
        </div>
    </div>
    <div class="container scaffold-body">
        @yield('content')
    </div>
    <div class="notificacion-box" id="notificacion">
        ***
    </div>
</div>
@if ($message = Session::get('noti-error'))
<script>
    var notificacion = document.getElementById('notificacion');
    notificacion.innerText='{!! $message !!}';
    notificacion.style.backgroundColor='#ef5350';
    setTimeout(() => {  notificacion.style.bottom="0px"; }, 250);
    setTimeout(() => {  notificacion.style.bottom="-150px"; }, 4000);
</script>
@endif

@if ($message = Session::get('noti-check'))
<script>
    var notificacion = document.getElementById('notificacion');
    notificacion.innerText='{!! $message !!}';
    notificacion.style.backgroundColor='#388e3c';
    setTimeout(() => {  notificacion.style.bottom="0px"; }, 250);
    setTimeout(() => {  notificacion.style.bottom="-150px"; }, 4000);
</script>
@endif
</body>
</html>
