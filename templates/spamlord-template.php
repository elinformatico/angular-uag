<?php  ini_set('display_errors', 0); ?>
<!DOCTYPE html>
<html lang="en" ng-app="mobieApp">
<head>
	<title>Noé Hernández</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php echo $global['app_base']; ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo $global['app_base']; ?>/favicon.ico" type="image/x-icon">

	<!-- ================================================================================= -->
	<script src="<?php echo $global['app_base']; ?>/js/vendor/angular/angular.min.js"></script>
	<!-- ================================================================================= -->

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	
	<script src="<?php echo $global['app_base']; ?>/js/vendor/animate/angular-animate.min.js"></script>
	<!-- Bootstrap angular-->
	<script src="<?php echo $global['app_base']; ?>/js/vendor/angularbootstrap-ui/ui-bootstrap-tpls-0.14.3.min.js"></script>

	<!-- ================================================================================= -->
	<script src="<?php echo $global['app_base']; ?>/js/app.js"></script>
	<!-- ================================================================================= -->
	
	<!-- Grow Service Plugins -->
	<link rel="stylesheet" href="<?php echo $global['app_base'] ?>/css/jquery.growl.css">
	<script src="<?php echo $global['app_base']; ?>/js/vendor/GrowlNotification/jquery.growl.js"></script>
	<script src="<?php echo $global['app_base']; ?>/js/growlService.js"></script>

	<!-- Modules & Angular Controllers -->
	<!-- ================================================================================= -->
	<script src="<?php echo $global['app_base']; ?>/js/webservices/apiFactoryRest.js"></script>
	<script src="<?php echo $global['app_base']; ?>/js/controllers/homePageCtrl.js"></script>
	<script src="<?php echo $global['app_base']; ?>/js/controllers/spamLordController.js"></script>
	<script src="<?php echo $global['app_base']; ?>/js/controllers/displayMovieModalCtrl.js"></script>
	<!-- ================================================================================= -->

	<style>
		/* Remove the navbar's default margin-bottom and rounded borders */ 
		.navbar {
			margin-bottom: 0;
			border-radius: 0;
		}
		
		/* Add a gray background color and some padding to the footer */
		footer {
		 background-color: #f2f2f2;
		 padding: 25px;
	 }
 </style>
</head>
<body ng-controller="spamLordController">

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">Ménu</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron">
		<div class="container text-center">
			<h1>José Noé Hernández Vivanco</h1>      
			<p>Universidad Autónoma de Guadalajara</p>
		</div>
	</div>
	
	<div class="container-fluid bg-3 text-center">  
		
		<form id="formBuscarCorreos">
			<input type="text" id="url" name="url" style="height:35px; width:500px; " placeholder="Introduzca una URL o sitio Web que desea hacer Scraping..."> 
			<input type="button" id="buscarUrlBtn" class="btn btn-primary" value="Buscar Correos"></input> <br><br><br>
		
			<script type="text/javascript">
					
				$("#buscarUrlBtn").click(function(){
					console.log('Yeahh');
					window.location.href="?view=spamlord&url=" + $("#url").val();
				});
			
			</script>
			
			<div style="font-size:15px; text-align:center">
				<?php 
				
					if(isset($_REQUEST['url'])){

						$webUrl = $_REQUEST['url'];

						try {

							if(!strstr($webUrl, 'http://') && !strstr($webUrl, 'https://')){
								$webUrl = 'http://' . $_REQUEST['url'];
							}

						  	$html = file_get_contents( $webUrl );

							# Esta expresión regular maneja más formatos de direcciones de correo electrónico como a+b@google.com.sg, y el i hace que sea sensible a mayúsculas
							$patronCorreos = '/[a-z0-9_\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i';

							// preg_match_all devuelve una matriz asociativa
							preg_match_all($patronCorreos, $html, $correos);

							# los datos que desea está en $correos[0], lo descarga con var_export() para verlo
							# var_export($correos[0]);

							if(isset($correos[0]) && count($correos[0]) > 0){

								# print_r($correos[0]);
								
								echo '<center><div class="alert alert-success" role="alert" style="width:500px;"> Se encontraron ' . count($correos[0]) . ' Correos </div></center> <br>';
								
								foreach($correos[0] AS $correo){
									echo "{$correo} <br>";
								}
								
							} else {
								echo '<center><div class="alert alert-danger" style="width:500px;" role="alert"> No se encontraron correos en la dirección: ' . $webUrl . ' </div></center>';
							}

						} catch (Exception $e) {
						    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
						}
					}
				?>
			</div>
		</form>
		
	</div><br>

	<footer class="container-fluid text-center">
		<p>Desarrollo por José Noé Hernández Vivanco | Universidad Autonoma de Guadalajara</p>
	</footer>
	
	<?php include_once "views/displayMovie.html" ?>
</body>
</html>
