
<!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
    <title>Reserva de Espacios campus - Iniciar sesión</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
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
                   href="dashboard.php"><img src="img/custom-logo.png?2.8.4" title="Reserva de Espacios campus - Iniciar sesión" alt="Reserva de Espacios campus - Iniciar sesión"  class="logo"  /></a>
            </div>
            <div class="collapse navbar-collapse" id="booked-navigation">
                <ul class="nav navbar-nav">
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                                            <li class="dropdown" id="navScheduleDropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Planificación <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="navViewSchedule"><a href="view-schedule.php">Ver planificación</a>
                                </li>
                                <li id="navViewCalendar"><a href="view-calendar.php">Ver Calendario</a>
                                </li>
                            </ul>
                        </li>
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


<div id="page-login">
	
    
    
	<div class="col-md-offset-3 col-md-6 col-xs-12 ">
		<form role="form" name="login" id="login" class="form-horizontal" method="post"
			  action="/resSalas/Web/index.php">
			<div id="login-box" class="col-xs-12 default-box">
				<div class="col-xs-12 login-icon">
					<img src="img/custom-logo.png?2.6" title="Reserva de Espacios campus - Iniciar sesión" alt="Reserva de Espacios campus - Iniciar sesión"   />
				</div>
									<div class="col-xs-12">
						<div class="input-group margin-bottom-25">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" required="" class="form-control"
								   id="email" name='email'
								   placeholder="Usuario UPNA"/>
						</div>
					</div>
				
									<div class="col-xs-12">
						<div class="input-group margin-bottom-25">
							<span class="input-group-addon">
							<i class="glyphicon glyphicon-lock"></i>
							</span>
							<input type="password" required="" id="password" name='password'
								   class="form-control"
								   value="" placeholder="Contraseña"/>
						</div>
					</div>
				
                                    <input type="hidden" name='captcha' value=""/>
                
								<div class="col-xs-12">
					<button type="submit" class="btn btn-large btn-primary  btn-block" name="login"
							value="submit">Iniciar sesión</button>
					<input type="hidden" name='resume' value=""/>
				</div>
				
								<div class="col-xs-12 ">
					<div class="checkbox">
						<input id="rememberMe" type="checkbox" name='persistLogin'>
						<label for="rememberMe">Recuérdame</label>
					</div>
				</div>
				
                
				<div class="clearfix"></div>

													
											</div>
			<div id="login-footer" class="col-xs-12">
									<div id="forgot-password" class="col-xs-12 col-sm-6">
						<a href="help.php"  class="btn btn-link pull-left-sm"><span><i
										class="glyphicon glyphicon-question-sign"></i></span> ?</a>
					</div>
								<div id="change-language" class="col-xs-12 col-sm-6">
					<button type="button" class="btn btn-link pull-right-sm" data-toggle="collapse"
							data-target="#change-language-options"><span><i class="glyphicon glyphicon-globe"></i></span>
						Cambiar idioma
					</button>
					<div id="change-language-options" class="collapse">
						<select name='language' class="form-control input-sm" id="languageDropDown">
							<option label="Basque" value="eu_es">Basque</option><option label="English GB" value="en_gb">English GB</option><option label="Espa&ntilde;ol" value="es"selected="selected">Espa&ntilde;ol</option>
						</select>
					</div>
				</div>
			</div>


		</form>
	</div>
</div>

<script type="text/javascript">document.getElementById('email').focus();</script>


    
            
    
            
    
            
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/lodash/4.16.3/lodash.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.50/jquery.form.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js"></script>
        
    <script type="text/javascript" src="scripts/phpscheduleit.js?v=2.8.4"></script>

<script type="text/javascript">
	var url = 'index.php?lang=';
	$(document).ready(function () {
		$('#languageDropDown').change(function () {
			window.location.href = url + $(this).val();
		});

		var langCode = readCookie('language');

		if (!langCode)
		{
			langCode = (navigator.language+"").replace("-", "_").toLowerCase();

			var availableLanguages = ["eu_es","en_gb","es",];
			if (langCode !== "" && langCode != 'es') {
				if (availableLanguages.indexOf(langCode) !== -1)
				{
					window.location.href = url + langCode;
				}
			}
		}
	});
</script>


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
