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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  
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
<body ng-controller="homePageCtrl">

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

    <h3>Resultados de Dbpedia utilizando Sparql como consulta + Angular JS para renderizar los resultados</h3>
    <h3> Si lo deseas, puedes ver proyecto completo en  
      <a href="https://github.com/elinformatico/angular-uag" target="_new"> 
        Github <i class="fa fa-github" aria-hidden="true" style="font-size:22pt"></i>
      </a>
    </h3>
    <h3> Para ver la documentación de clic en el icono  
      <a href="https://github.com/elinformatico/angular-uag/blob/master/README.md" target="_new"> 
        <i class="fa fa-connectdevelop" aria-hidden="true" style="font-size:22pt"></i>
      </a>
    </h3>

    <br><br><br>

    <div class="row">
      <div style="cursor: pointer;" ng-repeat="result in dbPediaResults">
        <p><a href="{{result.Concept.value}}" target="_new"> {{result.Concept.value}} </a></p>
      </div>
    </div>

  </div><br>

  <footer class="container-fluid text-center">
    <p>Desarrollo por José Noé Hernández Vivanco | Universidad Autonoma de Guadalajara</p>
  </footer>
  
  <?php include_once "views/displayMovie.html" ?>
</body>
</html>
