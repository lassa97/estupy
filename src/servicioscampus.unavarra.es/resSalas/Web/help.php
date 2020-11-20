
<!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
    <title>Reserva de Espacios campus - Ayuda</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
            <meta http-equiv="REFRESH"
			  content="1800;URL=logout.php?redirect=%2FresSalas%2FWeb%2Fhelp.php" />
        <link rel="shortcut icon" href="custom-favicon.png"/>
    <link rel="icon" href="custom-favicon.png"/>
    <!-- JavaScript -->
            <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"></script>
        <script
                src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
                integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
                crossorigin="anonymous"></script>
        <script type="text/javascript"
                src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <!-- End JavaScript -->

    <!-- CSS -->
            <link rel="stylesheet"
              href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css"
              type="text/css"/>
                                    
    <script type="text/javascript" src="scripts/js/jquery-ui-timepicker-addon.js?v=2.8.4"></script>
    <link rel='stylesheet' type='text/css' href='scripts/css/jquery-ui-timepicker-addon.css?v=2.8.4'/>
    <link rel='stylesheet' type='text/css' href='css/booked.css?v=2.8.4'/>
                <link rel='stylesheet' type='text/css' href='css/null-style.css?v=2.8.4'/>
        
        <!-- End CSS -->
</head>
<body >

    <nav class="navbar navbar-default navbar-fixed-top"
         role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#booked-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"
                   href="dashboard.php"><img src="img/custom-logo.png?2.8.4" title="Reserva de Espacios campus - Ayuda" alt="Reserva de Espacios campus - Ayuda"  class="logo"  /></a>
            </div>
            <div class="collapse navbar-collapse" id="booked-navigation">
                <ul class="nav navbar-nav">
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                                                            <li class="dropdown" id="navHelpDropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayuda <b class="caret"></b></a>
                        <ul class="dropdown-menu">
             <!--               <li id="navHelp"><a href="https://www.bookedscheduler.com/help/usage">Ayuda</a></li>  -->
                           <li id="navHelp"><a href="help.php?ht=about">Ayuda</a>
                                         <!--               <li id="navAbout"><a href="help.php?ht=about">Acerca de</a></li>  -->
                        </ul>
                    </li>
                                            <li id="navLogIn"><a href="index.php">Iniciar sesión</a></li>
                                    </ul>
            </div>
        </div>
    </nav>

<div id="main" class="container-fluid" >

<div id="page-support-and-credits" class="admin-page">
<!--
    <div class="default-box col-xs-12 col-sm-8 col-sm-offset-2">

        <h1>About Booked Scheduler</h1>

        <h2>Support</h2>

        <p><a href="https://www.bookedscheduler.com">Booked Scheduler Official Home</a></p>
        <p><a href="https://www.twinkletoessoftware.com">Twinkle Toes Software</a></p>
        <p><a href="https://forums.bookedscheduler.com">Booked Scheduler Community Support</a></p>

        <h2>Credits</h2>

        <h3>Authors</h3>

        <ul>
            <li>Nick Korbel</li>
            <li>Dung Le</li>
            <li>Jan Mattila</li>
            <li>Paul Menchini</li>
        </ul>

        <h3>Translators</h3>

        <ul>
            <li>Boris Vatin (French)</li>
            <li>Dariusz Kliszewski, Grzegorz Bis (Polish)</li>
            <li>Tadafumi Kouzato (Japanese)</li>
            <li>Jonne Olie (Dutch)</li>
            <li>Julio Guedimin, Manuel J. Morgado Morano, Laura Arjona (Spanish)</li>
            <li>Jordi Divins (Catalan)</li>
            <li>Nicola Ruggero, Daniele Cordella, Marco Ponti (Italian)</li>
            <li>Olli Räisänen, Afaf Fafa (Finnish)</li>
            <li>Jakub Baláš, Leoš Jedlička (Czech)</li>
            <li>Maik Standtke, Sven de Vries, Jonas Endersch (German)</li>
            <li>Stephen Höglund (Swedish)</li>
            <li>Vladislav Zhivkov (Bulgarian)</li>
            <li>Bart Verheyde (Flemisch)</li>
            <li>William Oliveira, Fábio Luiz Barbosa (Portuguese Brazil)</li>
            <li>Yosef Branse (Hebrew)</li>
            <li>Vladislav Zhivkov (Bulgarian)</li>
            <li>Linas Redeckis (Lithuanian)</li>
            <li>Davor Tomasevic (Croatian)</li>
            <li>Alenka Kavčič (Slovenian)</li>
            <li>Tage Jørgensen (Danish)</li>
            <li>Tran Dai Nghia (Vietnamese)</li>
            <li>Karl Jaani (Estonian)</li>
            <li>Erhan Harmankaya (Turkish)</li>
            <li>Txeli Sanchez (Basque)</li>
            <li>Razvan Mihaila (Romanian)</li>
            <li>Veliša Bujić (Serbian)</li>
            <li>Róbert Bere  (Hungarian)</li>
        </ul>

        <h3>Thank you to the following projects and libraries</h3>

        <ul>
            <li>Smarty</li>
            <li>PEAR</li>
            <li>adLDAP</li>
            <li>jQuery</li>
            <li>FullCalendar</li>
            <li>log4php</li>
            <li>securimage</li>
            <li>SimpleImage</li>
            <li>PHPMailer</li>
            <li>jsTimezoneDetect</li>
            <li>jqplot</li>
            <li>FeedWriter</li>
            <li>Slim</li>
            <li>Bootstrap</li>
            <li>Select2</li>
            <li>Owl</li>
            <li>Font Awesome</li>
        </ul>

        <h2>License</h2>

        <p>Booked Scheduler free and open source, licenced under the GNU GENERAL PUBLIC LICENSE. Please see the included
            License file for more details.</p>

    </div>
-->
<h1>Salas de Trabajo en Grupo</h1>

<div id="help">
<h2>Descripción</h2>

<p>
Es un servicio concebido para  que los estudiantes de la UPNA  dispongan de instalaciones que favorezcan la elaboración de trabajos en equipo.
Las salas tienen una capacidad de 2 personas y es obligatoria la autolimpieza de la sala al comienzo de su uso.
</p>

<p>
Es necesario ser estudiante en activo de la UPNA, y obligatorio presentar el carnet universitario en el momento de acceso a la sala.
</p>

<p>
Más información sobre el servicio en <a href="http://www.unavarra.es/biblioteca/servicios/salas-trabajo-grupo" target="_blank">Salas de Trabajo en Grupo</a>
</p>

<h1>Ayuda sobre esta aplicación</h1>

<div id="help">
<h2>Descripción</h2>

<p>
Por medio de esta aplicación puedes realizar tu propia autorreserva, hasta con siete días de adelanto.
</p>

<p>Basta ver si hay salas disponibles el día y hora que deseas y pulsar en el botón "Crear"</p>

<p>También podrás modificar o borrar las reservas que hayas hecho.</p>

<h3>Tablón</h3>

<p>Es el primer elemento del menú superior. Clickando en él se te mostrarán tus próximas reservas y la disponiblidad de salas en el momento actual.</p>

<p>Clickando en el enlace "Crear reserva" accedes a la página de reserva. En necesario rellenar las fechas y horas que solicitas.</p>

<h3>Planificación</h3>

<p><b>Reservas</b></p>

<p>En este menú verás gráficamente el total de reservas de las salas.</p>

<p>Podrás hacer tu reserva clickando en cualquier casilla en blanco.</p>

<p>Cuenta con una barra de navegación para que elijas el día.</p>

<p><b>Mi Calendario</b></p>

<p>Muestra un calendario con todas las reservas que hayas hecho.</p>

<div id="help">
<h2>Crear una reserva</h2>

<p>Puedes crearla tanto desde la pantalla "Tablón" como desde la pantalla "Reservas"</p>

<p>Sólo hay que elegir el día y la hora; <b>un mínimo de 30 minutos y un máximo de 2 horas</b>.</p>

<p>Pulsando el botón "Crear", la aplicación comprobará la disponibilidad de la sala y te dará un número de referencia de la reserva.</p>

<div id="help">
<h2>Modificar una reserva</h2>

<p>Puedes acceder al listado de tus reservas desde el menú "Tablón" y clickando en la reserva que desees modificar te llevará a la pantalla de 
detalles de la reserva, en la cual puedes cambiar el día o la hora. Luego pulsa en el botón "Actualizar".</p>

<div id="help">
<h2>Borrar una reserva</h2>

<p>Si crees que no vas a hacer uso de este servicio, te recomendamos que borres las reservas que hayas hecho para que otros compañeros
puedan hacer uso de este servicio.</p>

<p>El procedimiento es similar al de modificación de reservas, pero esta vez clickando en el enlace "borrar".</p>

<div id="help">
<h2>Subscribirse a los calendarios</h2>

<p>Este sistema permite incluir tu calendario personal de reservas en cualquier aplicación de gestión del tiempo favorita.</p>

<p>Si accedes a "Mi Calendario" verás un enlace en la parte superior derecha de la pantalla: "Activar suscripciones en Calendario" 
clicka en él y te mostrará un nuevo enlace. Cópialo en tu aplicación preferida.</p>

</div>

    
    
</div>

    
            
    
            
    
            
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/lodash/4.16.3/lodash.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.50/jquery.form.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js"></script>
        
    <script type="text/javascript" src="scripts/phpscheduleit.js?v=2.8.4"></script>



	</div><!-- close main-->

	<footer class="footer navbar">
		Reserva de Espacios no Docentes - Serv Informatico
	</footer>

	<script type="text/javascript">
		init();
		$.blockUI.defaults.css.border = 'none';
		$.blockUI.defaults.css.top = '25%';

	</script>

	
	</body>
</html>
