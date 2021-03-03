
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FurgonControlado.cl</title>
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png">
    <meta property="og:image" content="{{ url('/') }}/images/favicon.png">
    <meta name="description" content="Registro digital de pasajeros y reportes de trazabilidad. Olvídate del papel.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/plugins.css" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <script src="{{url('/')}}/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
        .navbar-default .navbar-collapse, .navbar-default .navbar-form{
            border-color:transparent;
        }
        nav{
            background-color: #F7CE26!important;
        }
        section{
            padding: 5rem 0;
        }
        .portfolio-item{
            padding-top:15%;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#main-navbar">
    <div class='preloader'>
        <div class='loaded' >&nbsp;</div>
    </div>
    <div id="menubar" class="main-menu">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header " style="color: #F7CE26">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand-img" href="https://www.furgoncontrolado.cl"><img src="assets/images/logo.svg" alt="Furgon Control" height="50" width="140" /></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-item nav-link active" href="#home">Inicio<span class="sr-only">(current)</span></a></li>
                        <li><a class="nav-item nav-link" href="#nosotros">¿Comó Funciona?</a></li>
                        <li><a class="nav-item nav-link" href="#precios">Precios</a></li>
                        <li><a class="nav-item nav-link" href="#footer">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <header id="home">
        <div class="container text-center">
        <div class="row">
            <div class="homepage-style" style="padding-top:150px;">
                    <div class="top-arrow hidden-xs text-center"><img src="{{url('/')}}/assets/images/top-arrow.png" alt="" /></div>
                    <br>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="unique-apps"  style="text-align: center">
                            <h2 style="font-weight:800;color:black">Furgón <span style="color:white">Controlado</span></h2>
                            <p style="color: black">
                                <b>Facilita tu registro de estudiantes digitalmente con nuestra aplicación y optimiza tu tiempo.</b>
                            </p>
                            <br>
                            <div class="home-btn">
                                <a class="btn btn-primary" href="{{url('/app/register')}}">Registrarse <span><i class="fa fa-check"></i></span></a>
                                <a class="btn btn-primary" href="{{url('/app/login')}}">Iniciar Sesión <span><i class="fa fa-user"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="slider-area">
                            <img src="{{url('/')}}/images/Celu.png" alt="" width="200" height="350"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="nosotros">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <div class="title text-center arrow-right" >
                        <h4 class="">¿Cómo funciona?</h4>
                        <img class="hidden-xs" src="assets/images/right-arrow.png" alt="" />
                    </div>
                </div>
                <!-- Example row of columns -->
                <div class="portfolio-wrap">
                    <div class="portfolio mb-5">
                        <div class="col-md-6 col-sm-6 col-xs-12" style="float:right!important">
                            <div class="portfolio-item">
                                <h4 style="text-align: center">Seguir los protocolos</h4>
                                <p style="text-align: center">
                                    Sigue los protocolos establecidos por el Ministerio de Salud. Registra digitalmente los pasajeros.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{url('/')}}/images/foto1.svg" alt="" />
                        </div>
                    </div>
                    <div class="portfolio">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <h4 style="text-align: center">Optimiza tu tiempo</h4>
                                <p style="text-align: center">
                                    Optimiza el tiempo registrando la bitácora de cada estudiante, podrás acceder a informes diarios, semanales
                                    y mensuales en un práctico formato digital.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img class="portfolio-img img-responsive" src="{{url('/')}}/images/foto2.svg" alt="" />
                        </div>
                    </div>
                    <div class="portfolio mb-5">
                        <div class="col-md-7 col-sm-7 col-xs-12"  style="float:right!important">
                            <div class="portfolio-item">
                                <h4 style="text-align: center">Cuidémonos </h4>
                                <p style="text-align: center">
                                    Olvidate del papel, digitalízate y cuidémonos entre todos. Podrás obtener reportes de trazabilidad siempre que los necesites.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <img class="portfolio-img img-responsive" src="{{url('/')}}/images/foto3.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="precios" class="lightbg">
        <div class="container">
            <div class="heading">
                <div class="title text-center arrow-left">
                    <img class="hidden-xs" src="{{url('/')}}/assets/images/left-arrow.png" alt="" />

                    <h4 class="">Precios</h4>
                </div>
            </div>
            <div class="row center-block">
                <div class="main-package text-center center-block">
                    <div class="col-xs-12 center-block ">
                        <div class="package-item standard">
                            <h5>Plan único</h5>
                            <ul>
                                <li style="color: black">10 Días de prueba gratis</li>
                                <li style="color: black">Registro digital de pasajeros </li>
                                <li style="color: black">Registra temperatura</li>
                                <li style="color: black">Optimiza tu tiempo</li>
                                <li style="color: black">Genera reporte de pasajeros</li>

                            </ul>
                            <div class="package-bottom-area">
                                <h3>$ 10.395</h3>
                            </div>
                            <div class="pkg-btn"><a href="tel:+56998281526" class="btn btn-primary">Solicítalo Ahora</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="scroll-top">
        <div class="scrollup">
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!--Footer-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="main-footer" >
                    <div class="col-xs-12" style="text-align: center">
                        <div class="footer-item" style="text-decoration-color: white" >
                            <h2 style="color: white">Contacto</h2>
                            <ul>
                                <li>Dirección : <a href="#"></a>Ignacio Carrera Pinto #387 - Quellón, Chiloé</li>
                                <li>Fono: <a href="tel:+56998281526"></a>+56 9 98281526</li>
                                <li>Email: <a href="mailto:contacto@codigominga.cl">contacto@codigominga.cl</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="socio-copyright" >
                    <div class="social">
                        <a target="_blank" href="https://www.facebook.com/codigominga/"><i class="fa fa-facebook"></i></a>
                        <!--<a target="_blank" href="https://github.com/CodigoMinga"><i class="fa fa-github"></i></a>-->
                        <a target="_blank" href="https://www.instagram.com/codigominga/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/67172626/admin/"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <p style="color: white">Creado por <a target="_blank" href="http://www.codigominga.cl">Codigo Minga </a>2021.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{url('/')}}/assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="{{url('/')}}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{url('/')}}/assets/js/plugins.js"></script>
    <script src="{{url('/')}}/assets/js/main.js"></script>
</body>
</html>
