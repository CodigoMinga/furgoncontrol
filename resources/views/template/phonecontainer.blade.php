@if(isset(Auth::user()->email))

@else
    <script>window.location="/main"</script>
@endif

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furgon Controlado</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/skins/skin-yellow.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 3 -->
    <script src="{{ url('/') }}/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('/') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/dist/js/adminlte.min.js"></script>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
</head>
<style>
    .barra{
        background-color: #F7CE26;
        position: sticky;
    }
    body{
        background-color: rgb(51, 51, 51);
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
        justify-content:center;
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

    .rojo{
        color:#ff9100;
    }
    .rojo:hover{
        color:#ffd180;
    }

    .morado{
        color:#ef5350 ;
    }

    .morado:hover{
        color:#ef9a9a ;
    }

    
    .primario{
        color:#F7CE26 ;
    }

    .primario:hover{
        color:white ;
    }

    .mybutton i{
        display: block;
        font-size: 2.5rem;
        text-align: center;
        padding:1.5rem;
    }
    .mybutton-column i{
        font-size: 5rem;
    }

    .mybutton span{
        display: block;
        text-align: center;
        font-size: 2rem;
        padding:1.5rem;
        width:90%;
        font-family: 'Montserrat', sans-serif;
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
        width: 100%
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
        color:white;
        padding: 1rem;
        font-size: 3rem;
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        text-align: center;
    }
    
    .my-form-title span{
        color:black;
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

    .flex-grid{
        display:flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: stretch 
    }

</style>
<body>
<div class="wrapper">
    <div class="barra" align="center">
        <img src="{{ url('/') }}/images/logo.svg" height="75" style="padding:10px;">
    </div>
    <div class="container" style="margin-top:3rem">
        @yield('content')
    </div>
</div>
</body>
</html>
