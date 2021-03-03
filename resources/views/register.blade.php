
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FurgonControlado.cl</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta property="og:site_name" content="furgoncontrolado.cl">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('/') }}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        #grad {
            background-color:#F7CE26;
        }

        #grad2 {
            background-color:#F7CE26;
        }
    </style>
</head>
<body class="hold-transition login-page" id="grad2">
<div class="login-box">
    <div class="login-logo">
     <!--   <img src="{{url("/")}}/images/logo_2021.png" width="100%"> -->

    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" style="border-radius: 10px">
        <p class="login-box-msg">Registrarse</p>
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{url('/app/register/process')}}" id="form">
            {{csrf_field()}}
            <div class="form-group has-feedback">
                <input required type="text" class="form-control" placeholder="Nombre" name="name" value="{{old('name','')}}">
                <span class="fa fa-tag form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input required type="text" class="form-control" placeholder="Apellido" name="last_name" value="{{old('last_name','')}}">
                <span class="fa fa-tags form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input required type="text" class="form-control rut" placeholder="RUT" name="rut" value="{{old('rut','')}}">
                <span class="fa fa-id-card form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input required type="number" class="form-control" placeholder="Teléfono" name="phone" value="{{old('phone','')}}">
                <span class="fa fa-phone form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input required type="text" class="form-control" placeholder="Patente del Vehiculo" name="plate" value="{{old('plate','')}}">
                <span class="fa fa-bus form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input required type="email" class="form-control" placeholder="Email" name="email" value="{{old('email','')}}">
                <span class="fa fa-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input required type="password" class="form-control" placeholder="Password" name="password">
                <span class="fa fa-key form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input required type="text" class="form-control" placeholder="Nombre Establecimiento" name="school_name" value="{{old('school_name','')}}">
                <span class="fa fa-university form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input required type="text" class="form-control" placeholder="Nombre Asistente" name="helper_name" value="{{old('helper_name','')}}">
                <span class="fa fa-user form-control-feedback"></span>
            </div>

            <div class="form-group">
                <label>Ciudad</label>
                <select required class="form-control" name="commune_id" required>
                    <option value="">seleccione una comuna</option>
                    @foreach($communes as $commune)
                        @if(old('commune_id'))
                            @if(old('commune_id') == $commune->id )
                                <option selected value="{{$commune->id}}">{{$commune->name}}</option>
                            @else
                                <option value="{{$commune->id}}">{{$commune->name}}</option>
                            @endif

                        @else
                            <option value="{{$commune->id}}">{{$commune->name}}</option>
                        @endif

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Termino y condiciones de uso:</label>
                <textarea class="form-control" readonly rows="10">
                    TÉRMINOS Y CONDICIONES
APLICACIÓN “FURGÓN CONTROLADO”


1) SOBRE LA APLICACIÓN FURGÓN CONTROLADO
“Furgón Controlado” es una aplicación creada por la Cooperativa Digital Conectando Técnica y Creatividad -nombre de fantasía, y en adelante, Código Minga -, destinada a prestar un servicio a empresas y personas -Usuarios de la aplicación- cuyo giro sea el transporte escolar -o de niños, niñas y adolescentes-, desde o hacia sus hogares y desde o hacia un establecimiento educacional o de cuidados.
La aplicación Furgón Controlado permite al Usuario ingresar datos personales de pasajeros, nivel de temperatura y registro de viajes, u otros datos, que recopile con motivo de la prestación de sus servicios, siendo la aplicación una herramienta de gestión y administración de dichos datos, que permite obtener un reporte claro, ordenado  y sistemático de los mismos, sin que la Cooperativa o el equipo desarrollador de la aplicación intervengan en su ingreso o incorporación a la aplicación.
La utilización de los reportes entregados por la aplicación, sea para presentación ante organismos públicos, empresas privadas, entidades educacionales, padres o apoderados u otros, será de exclusiva responsabilidad del Usuario, declarándose por el Usuario que la Cooperativa y Furgón Controlado no tienen ninguna incidencia en el ingreso ni registro de datos personales o de otro tipo, siendo solo una herramienta de gestión y administración de datos que el Usuario ingresa.
2) OBLIGATORIEDAD DE LOS TÉRMINOS Y CONDICIONES.
Estos Términos y Condiciones de Servicio (en adelante, “los términos”) rigen el uso y acceso a la aplicación, y cualquier información capturada por la misma. Las personas deben aceptar estos términos de uso, los cuales tienen un carácter obligatorio y vinculante. Si usted no acepta los términos y condiciones deberá abstenerse de utilizar la aplicación y la Cooperativa podrá negarle su uso o eliminar su registro.
Los Términos y Condiciones son propuestos por la Cooperativa Códiga Minga, como propietaria de la aplicación y prestadora de los servicios incorporados en ella, y son aceptados por una persona, en adelante “Usuario”, quien utiliza la aplicación y se sirve de tales servicios.
El usuario entiende y acepta que los términos pueden ser modificados en cualquier momento, sin notificación o autorización previa del usuario. Sin perjuicio de lo anterior, cualquier nuevo servicio, modificación, supresión o ampliación de los servicios será informado en la aplicación. La utilización del sistema con posterioridad a la publicación de una modificación, constituye aceptación de la misma.
Los presentes términos constituyen un acuerdo total entre las partes, no existiendo pactos orales, escritos u otro entendimiento o representación, salvo lo expresamente establecido en este documento.
En consecuencia, al descargar y/o usar la aplicación, el usuario manifiesta y garantiza lo siguiente:
Que tiene la capacidad para cumplir con todas las condiciones de uso.
Que la información que proporcione será completa, veraz, actualizada y precisa.
Que la utilización de la aplicación es a título personal o como representante legal de una persona jurídica.
Los usuarios de la aplicación podrán en todo momento ejercitar los siguientes derechos en el siguiente correo electrónico contacto@codigominga.cl
Acceso: conocer cuáles son los datos tratados, el objetivo de su tratamiento y sus destinatarios.
Rectificación: requerir la modificación de aquellos datos de su titularidad consignados en la aplicación de manera errónea que no puedan ser corregidos por usted mismo.
Eliminación: requerir el borrado de los datos personales.
Bloqueo: solicitar la suspensión temporal de las operaciones de tratamiento de datos cuando existan dudas sobre los datos respecto de su exactitud o su vigencia.
Como usuario usted garantiza y responde, en cualquier caso, de la veracidad, exactitud, vigencia y autenticidad de la información personal facilitada, y se compromete a mantenerla debidamente actualizada.

3) REGISTRO DE USUARIOS
Para usar “Furgón Controlado” usted debe registrarse y mantener activa una cuenta personal de usuario. Para obtener una cuenta de usuario debe tener como mínimo 18 años.
Usted se compromete a mantener la información en su cuenta de usuario de forma veraz, exacta, completa y actualizada. Si no mantiene la información de la cuenta de usuario de forma veraz, exacta, completa y actualizada, podrá resultar en su imposibilidad para acceder y utilizar los Servicios. Usted es responsable de toda la actividad que ocurra en su Cuenta de usuario.
El “Usuario” registrado podrá ser una persona natural o jurídica. En caso de ser jurídica, deberá registrarse el representante legal de la misma.
Del mismo modo, el Usuario declara que los datos registrados son fiel a la realidad, haciéndose responsable de cualquier uso fraudulento de la aplicación y los servicios que presta, sin que por ello tenga responsabilidad la Cooperativa o Furgón Controlado.

4) CONDICIONES DE ACCESO
El uso de la aplicación tendrá un costo mensual para el Usuario registrado. Para su pago, la Cooperativa pone a disposición el sistema FLOW de Webpay, el cual permite un pago seguro, a través de los medios electrónicos y plataformas que se disponen por dicho servicio. En caso de cambio de servicio de pago, la Cooperativa informará a los Usuarios, asegurando que la nueva plataforma cumpla idénticos estándares de seguridad y privacidad.
El Usuario debe proveerse de todo lo necesario para el adecuado uso de la aplicación, sea internet, equipo móvil o descarga de software, así como el pago mensual de la licencia de uso.
La Cooperativa podrá, por motivos de mantención de los sistemas, problemas técnicos, y, en general, además, por cualquier caso fortuito o de fuerza mayor, suspender temporalmente el servicio. El usuario entiende y acepta que la Cooperativa no es responsable de la imposibilidad en el uso de los servicios que presta la aplicación, de la demora en la obtención de la información, interferencia en la comunicación o cualquier otro error u omisión producto de problemas de telecomunicaciones, técnicos o de los sistemas computacionales, cualquiera sea la causa que los ocasione.
El usuario no podrá copiar, modificar, adaptar, vender, licenciar, distribuir, compartir, descompilar, falsificar, descifrar o alterar la aplicación ni su diseño.

5) POLÍTICA DE PRIVACIDAD
La Cooperativa declara que ha tomado las medidas técnicas necesarias para velar por la confidencialidad y por la protección de los datos personales ingresados por el Usuario en la aplicación o los registrados por ella.
La información registrada en la aplicación será almacenada y replicada en una nube privada bajo la completa administración de la Cooperativa, en Amazon Web Services (AWS) correspondiente a la región ‘us-east region’ el cual se encuentra físicamente en Estados Unidos de América en el estado de Virginia. La utilización de esta tecnología respeta la confidencialidad y privacidad de la información de sus usuarios de acuerdo a las leyes chilenas y se somete a la legislación de nuestro país en caso de controversias.
En cualquier caso, no estará permitido el acceso a terceros de la información y esta no será utilizada con otros fines que no sean el correcto desempeño de la aplicación para los Usuarios.
Esta política de privacidad podrá ser modificada, y los usuarios serán informados según lo prescriben los términos de uso. Los cambios en la forma en que su información es administrada serán notificados oportunamente para que usted pueda tomar una decisión informada respecto si acepta o no el uso de su información.

6) PROPIEDAD INTELECTUAL
El usuario se compromete a respetar la Propiedad Intelectual de la aplicación de acuerdo con la legislación vigente. El usuario que no diere cumplimiento a lo señalado precedentemente será responsable de todo perjuicio que se ocasione en caso de incumplimiento de las obligaciones señaladas. El uso indebido y la reproducción total o parcial de dichos contenidos quedan prohibidos, salvo autorización expresa y por escrito de la Cooperativa.

7) RESPONSABILIDAD
El uso de los servicios ofrecidos en o a través de la aplicación es de exclusiva responsabilidad del usuario, quedando, por ende, la Cooperativa liberada de toda responsabilidad por daños y perjuicios que provengan de la mala información que pudiere ingresarse a la aplicación o la mala utilización de información obtenida a partir de ella y/o sus servicios, ya sea por parte del usuario o de terceros.
El usuario es responsable de toda la información, documentos, contenido u otros que reporte, publique, transmita o retransmita, por cualquier medio en la aplicación.
El usuario acepta y se hace responsable de los daños y perjuicios provenientes del empleo de la aplicación y los servicios para fines contrarios a las leyes, las buenas costumbres, el orden público, la legislación vigente o fines ilícitos o fines que perjudiquen los derechos o intereses de terceros, liberando de cualquier responsabilidad a la Cooperativa y a todo otro tercero que preste servicios y/o entregue algún contenido en o a través de la aplicación.

8) LICENCIA DE USO
La Cooperativa otorga al Usuario una licencia limitada, no exclusiva y revocable, para que descargue la aplicación “Furgón Controlado” exclusivamente para su uso personal, entendiéndose por tal la prestación de servicios de transporte, sea como persona natural o jurídica, siendo representante legal de ella. No se le otorga el derecho a conceder licencias, volver a publicar, distribuir, copiar, ceder, sublicenciar, transferir, vender o utilizar la aplicación para cualquier otro propósito que no sea su uso personal en los términos indicados.

9) COMPETENCIA
La legislación aplicable será la de la República de Chile. El usuario y la Cooperativa fijan su domicilio en la comuna de Quellón, Provincia de Chiloé, Región de Los Lagos, y por este acto se someten a la jurisdicción de sus tribunales ordinarios de justicia, según las reglas de competencia territorial vigentes.

10) CONTACTO
Si tienes alguna duda, reclamo, comentario o sugerencia respecto a estas Políticas de Privacidad, a sus derechos y obligaciones desprendidos de las mismas, puede contactarnos a contacto@codigominga.cl
                </textarea>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" required> Confirmo que acepto los terminos y condiciones de uso.
                </label>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" id="guardar">Registrarse</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <p class="login-box-msg"><b>Furgon Controlado.cl</b><br/>
            <b> <a href="https://www.codigominga.cl">Desarrollo: www.codigominga.cl</a></b>
        </p>



        <!-- /.social-auth-links -->


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ url('/') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('/') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ url('/') }}/plugins/iCheck/icheck.min.js"></script>

<script src="{{ url('/') }}/js/rut.js"></script>
<script>
    var guardar =document.getElementById('guardar');
    var form =document.getElementById('form');

    $(document).ready(function(){
        $(".rut").rut({
            formatOn: 'keyup',
            minimumLength: 8, // validar largo mínimo; default: 2
            validateOn: 'change keyup' // si no se quiere validar, pasar null
        }).on('rutInvalido', function(e) {
            this.style.borderColor='red';
            guardar.disabled=true;
            form.disabled=true;
        }).on('rutValido', function(e, rut, dv) {
            this.style.borderColor="green";
            guardar.disabled=false;
            form.disabled=false;
        });
    });
</script>
</body>
</html>
