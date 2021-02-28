<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FurgonControlado.cl</title>
    <meta name="description" content="La primera aplicación para furgones escolares de chile.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/responsive.css" />

    <script src="{{url('/')}}/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body data-spy="scroll" data-target="#main-navbar">
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<div id="menubar" class="main-menu">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{url('/')}}/assets/images/logo.png" alt="" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-item nav-link active" href="#home">Inicio<span class="sr-only">(current)</span></a></li>
                    <li><a class="nav-item nav-link" href="#nosotros">Nosotros</a></li>
                    <li><a class="nav-item nav-link" href="#precios">Precios</a></li>
                    <li><a class="nav-item nav-link" href="#contacto">Contacto</a></li>




                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<a  title='Contactanos por WhatsApp' class="whatsapp" href="https://api.whatsapp.com/send?phone=56998281526&amp;text=Hola%20quisiera%20realizar%20una%20consulta%20sobre%20sus%20servicios" target="_blank"></a>
<div id="FULL">
    <!--Home page style-->
    <header id="home" class="sections">
        <div class="container">

            <div class="row">
                <div class="homepage-style">

                    <div class="top-arrow hidden-xs text-center"><img src="{{url('/')}}/assets/images/top-arrow.png" alt="" /></div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="unique-apps">
                            <h2>Furgón Controlado</h2>
                            <p>
                                facilita tu registro de estudiantes digitalmente con nuestra aplicacion y optimiza tu tiempo.
                            </p>

                            <div class="home-btn">

                                <a class="btn btn-primary" href="{{url('/app/register')}}">Registrarse <span><i class="fa fa-check"></i></span></a>
                                <a class="btn btn-primary" href="{{url('/app/login')}}">Iniciar Sesion <span><i class="fa fa-user"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="slider-area">

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>

                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">

                                    <div class="item active">
                                        <img src="{{url('/')}}/assets/images/slider-img.png" alt="" />
                                    </div>

                                    <div class="item">
                                        <img src="{{url('/')}}/assets/images/slider-img.png" alt="" />
                                    </div>

                                    <div class="item">
                                        <img src="{{url('/')}}/assets/images/slider-img.png" alt="" />
                                    </div>

                                    <div class="item">
                                        <img src="{{url('/')}}/assets/images/slider-img.png" alt="" />
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </header>

    <!-- Sections -->
    <section id="servicios" class="sections">
        <div class="container">

            <div class="row">
                <div class="heading">
                    <div class="title text-center arrow-right">
                        <h4 class="">Servicios de Furgón Controlado</h4>
                        <img class="hidden-xs" src="{{url('/')}}/assets/images/right-arrow.png" alt="" />

                    </div>
                </div>


                <!-- Example row of columns -->

                <div class="portfolio-wrap">

                    <div class="portfolio">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{url('/')}}/assets/images/monitor.png" alt="" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <h4>Registro digital de estudiantes</h4>
                                <p>
                                    Se puede registrar los estudiantes por medio de la aplicación, para asi tener un listado que se mostrara por
                                    cada usuario.

                                </p>

                            </div>
                        </div>

                    </div>



                    <div class="portfolio">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <h4>Optimiza tu tiempo</h4>
                                <p>
                                    olvidate del lapiz y el papel, con Furgón controlado, podras hacer registros de estudiantes rápidamente
                                    y lo mejor de todo, es que está a tu alcance.
                                </p>

                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img class="portfolio-img img-responsive" src="{{url('/')}}/assets/images/monitor.png" alt="" />
                        </div>

                    </div>



                    <div class="portfolio">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img class="portfolio-img img-responsive" src="{{url('/')}}/assets/images/monitor.png" alt="" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <h4>AFFILIATE MARKETING</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. laboru
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /container -->
    </section>

    <section id="nosotros" class="sections">
        <div class="container text-center">

            <div class="heading">
                <div class="title text-center arrow-left">
                    <img class="hidden-xs" src="{{url('/')}}/assets/images/left-arrow.png" alt="" />

                    <h4 class="">¿Comó Trabajamos? </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="main-works">
                        <img src="{{url('/')}}/assets/images/map.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="precios" class="sections lightbg">
        <div class="container">

            <div class="heading">
                <div class="title text-center arrow-left">
                    <img class="hidden-xs" src="{{url('/')}}/assets/images/left-arrow.png" alt="" />

                    <h4 class="">Nuestros Precios</h4>
                </div>
            </div>

            <div class="row">


                <div class="main-package text-center">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="package-item basic">
                            <h5>1 Semestre</h5>

                            <ul>
                                <li>Registro digital de estudiantes </li>
                                <li>Optimiza tu tiempo</li>
                                <li>Genera reportes</li>
                                <li>Registra temperatura</li>
                            </ul>

                            <div class="package-bottom-area">
                                <h3>$ 0</h3>
                            </div>


                            <div class="pkg-btn"><a href="tel:+56998281526" class="btn btn-primary">Solicítalo Ahora</a></div>

                        </div>


                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="package-item standard">

                            <h5>Prueba Gratis</h5>

                            <ul>
                                <li>30 Días</li>
                                <li>Registro digital de estudiantes </li>
                                <li>Optimiza tu tiempo</li>
                                <li>Genera reportes</li>
                                <li>Registra temperatura</li>
                            </ul>

                            <div class="package-bottom-area">
                                <h3>$ 0</h3>
                            </div>

                            <div class="pkg-btn"><a href="tel:+56998281526" class="btn btn-primary">Solicítalo Ahora</a></div>

                        </div>


                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="package-item premium">

                            <h5>2 Semestre</h5>

                            <ul>
                                <li>Registro digital de estudiantes </li>
                                <li>Optimiza tu tiempo</li>
                                <li>Genera reportes</li>
                                <li>Registra temperatura</li>
                            </ul>

                            <div class="package-bottom-area">
                                <h3>$ 0</h3>
                            </div>

                            <div class="pkg-btn"><a href="tel:+56998281526" class="btn btn-primary">Solicítalo Ahora</a></div>

                        </div>


                    </div>

                </div>


            </div>
        </div>
    </section>

    <section id="our-history" class="sections">
        <div class="container">

            <div class="row">

                <div class="main-history">

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="history-img">
                            <img src="{{url('/')}}/assets/images/history-img.png" alt="" />
                        </div>
                    </div>



                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="history-wrapper">
                            <div class="history-heading">
                                <h5 class="our-history">Nuestra Historia</h5>
                            </div>

                            <div class="history-content">
                                <p>
                                    A lo largo de esta pandemia, nos hemos dado cuenta.....
                                </p>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>

                                <div class="hst-btn"><button class="btn btn-primary">BROWSE OUR HISTORY</button></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-project" class="sections">
        <div class="container">

            <div class="heading">
                <div class="title text-center arrow-left">

                    <h4 class="">Our Business Project</h4>
                    <img class="hidden-xs" src="{{url('/')}}/assets/images/right-arrow.png" alt="" />
                </div>
            </div>

            <div class="row">


                <div class="main-project text-center">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-photo"><img src="{{url('/')}}/assets/images/projects/1.png" alt="" /></div>
                            <h5>TECHNICAL AID</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-photo"><img src="{{url('/')}}/assets/images/projects/2.png" alt="" /></div>
                            <h5>SECURE ACCESS</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-photo"><img src="{{url('/')}}/assets/images/projects/3.png" alt="" /></div>
                            <h5>MARKET RESERCH</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-photo"><img src="{{url('/')}}/assets/images/projects/4.png" alt="" /></div>
                            <h5>CREDIT RESERCH</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-photo"><img src="{{url('/')}}/assets/images/projects/5.png" alt="" /></div>
                            <h5>TECHNICAL AID</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-photo"><img src="{{url('/')}}/assets/images/projects/6.png" alt="" /></div>
                            <h5>TECHNICAL AID</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-photo"><img src="{{url('/')}}/assets/images/projects/7.png" alt="" /></div>
                            <h5>TECHNICAL AID</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-photo"><img src="{{url('/')}}/assets/images/projects/8.png" alt="" /></div>
                            <h5>TECHNICAL AID</h5>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

    <section id="our-team" class="sections">
        <div class="container">

            <div class="heading">
                <div class="title text-center arrow-left">
                    <img class="hidden-xs" src="{{url('/')}}/assets/images/left-arrow.png" alt="" />

                    <h4 class="">Our Team Members</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid project-bg">
            <div class="row">

                <div class="main-team text-center">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">

                            <img class="img-circle" src="{{url('/')}}/assets/images/team/1.png" alt="" />
                            <h5>SAYED MIRAJ</h5>
                            <p>UI & UX DESIGNER</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <img class="img-circle" src="{{url('/')}}/assets/images/team/2.png" alt="" />
                            <h5>PENNY HUSTON</h5>
                            <p>DEVELOPER</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <img class="img-circle" src="{{url('/')}}/assets/images/team/3.png" alt="" />
                            <h5>LENNERD SHELLY</h5>
                            <p>REVIEWER</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <img class="img-circle" src="{{url('/')}}/assets/images/team/4.png" alt="" />
                            <h5>SHELDON CUPPER</h5>
                            <p>MARKETTER</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="our-supports" class="sections">
        <div class="container">

            <div class="heading">
                <div class="title text-center arrow-left">

                    <h4 class="">Updates & Support</h4>
                    <img class="hidden-xs" src="{{url('/')}}/assets/images/right-arrow.png" alt="" />
                </div>
            </div>

            <!-- Example row of columns -->
            <div class="row">


                <div class="col-sm-6 col-xs-12">
                    <div class="supports-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. laboru
                        </p>
                        <div class="spt-btn"><button class="btn btn-primary">SUPPORT CENTER</button></div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="supports-img"><img class="img-responsive" src="{{url('/')}}/assets/images/monitor.png" alt="" /></div>
                </div>


            </div>

        </div> <!-- /container -->
    </section>



    <div class="scroll-top">

        <div class="scrollup">
            <i class="fa fa-angle-double-up"></i>
        </div>

    </div>

    <!--Footer-->
    <footer id="footer" class="footer">
        <div class="container">

            <div class="row">
                <div class="main-footer">


                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-item" >
                            <h2>Contacto</h2>
                            <ul>
                                <li>Direccion : <a href="#"></a>Ignacio Carrera Pinto #387</li>
                                <li>Fono: <a href="tel:+56998281526"></a>+56 9 98281526</li>
                                <li>Email: <a href="mailto:contacto@codigominga.cl">contacto@codigominga.cl</a></li>

                            </ul>
                        </div>
                    </div>

                </div>

                <div class="socio-copyright">

                    <div class="social">
                        <a target="_blank" href="https://www.facebook.com/codigominga/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://github.com/CodigoMinga"><i class="fa fa-github"></i></a>
                        <a target="_blank" href="https://www.instagram.com/codigominga/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/67172626/admin/"><i class="fa fa-linkedin"></i></a>
                    </div>

                    <p>Creado por <a target="_blank" href="http://www.codigominga.cl">Codigo Minga </a>2021.</p>
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
