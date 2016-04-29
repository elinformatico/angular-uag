<!DOCTYPE html>
<html>
<head>
    <title>Mobie - Find the Best Movie</title>
     	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
     	<meta name="author" content="Jose Noe Hernandez Vivanco"/>
     	<meta name="description" content="Find the best Movie"/>
     	<meta name="keywords" content="Movies, Mobie"/>
     	<meta http-equiv="X-UA-Compatible" content="IE=9" />
     	<meta name="viewport" content="initial-scale=1, maximum-scale=1">

        <!-- Incluimos todos los CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo $global['app_base'] ?>/css/jquery.growl.css">
        <link rel="stylesheet" href="<?php echo $global['app_base'] ?>/css/Compras/datatablesMio.css">

        <link rel="stylesheet" href="<?php echo $global['app_base'] ?>/js/vendor/ajaxLoadingBar/css/loadingbar.css">
        <link rel="stylesheet" href="<?php echo $global['app_base'] ?>/js/vendor/progressBar/assets/nprogress/nprogress.css">


        <link rel="stylesheet" href="<?php echo $global['app_base'] ?>/js/vendor/angular-loading-bar-master/src/loading-bar.css">
        <link rel="stylesheet" href="<?php echo $global['app_base'] ?>/css/Compras/master.css">
        <link rel="stylesheet" href="<?php echo $global['app_base'] ?>/js/vendor/angular-datatables-master/dist/plugins/bootstrap/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $global['app_base'] ?>/js/vendor/angular-datatables-master/vendor/datatables-responsive/css/dataTables.responsive.css">

</head>
<body ng-app="mobieApp">  
	
    <!-- Incluimos todas las Librerias de JavaScript-->
    <!-- Jquery -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/Jquery/jquery-2.1.3.min.js"></script>
    <!-- Jquery Growl Alert -->     
    <script src="<?php echo $global['app_base']; ?>/js/vendor/GrowlNotification/jquery.growl.js"></script>
    <!-- Jquery Validate -->        
    <script src="<?php echo $global['app_base']; ?>/js/vendor/JqueryValidation/dist/jquery.validate.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--Loading Bar -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/ajaxLoadingBar/js/jquery.loadingbar.js"></script>
    <!--Loading Bar -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/progressBar/assets/nprogress/nprogress.js"></script>
    <!-- datatables -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/DataTables-1.10.7/media/js/jquery.dataTables.min.js"></script>
    <!-- datatables -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-datatables-master/vendor/datatables-columnfilter/js/dataTables.columnFilter.js"></script> 
    <!-- Dropzone -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/dropzone/dist/dropzone.js"></script>
    <!-- daterangePickerJS -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/momentJS/moment.js"></script>
    <!-- daterangePickerJS -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/bootstrap-daterangepicker-master/daterangepicker.js"></script>
    <!-- scrollerDatatable -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/DataTables-1.10.7/extensions/Scroller/js/dataTables.scroller.min.js"></script>

    <!-- angular library -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/Angular/angular.min.js"></script>
    <!-- angular route  --> 
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-route/angular-route.js"></script>
    <!-- angular animate -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/animate/angular-animate.min.js"></script>
    <!-- angular loading bar -->
    <script src='//cdnjs.cloudflare.com/ajax/libs/angular-loading-bar/0.7.1/loading-bar.min.js'></script>
    <!-- angular ng-soruce -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-resource/angular-resource.js"></script>
    <!-- angular datatables-->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-datatables-master/dist/angular-datatables.min.js"></script>
    <!--datatables-bootstrap -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-datatables-master/dist/plugins/bootstrap/angular-datatables.bootstrap.min.js"></script>
    <!-- Bootstrap angular-->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angularbootstrap-ui/ui-bootstrap-tpls-0.14.3.min.js"></script>
    <!-- Angular select responsive -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-multi-select-master/isteven-multi-select.js"></script>
    <!-- AngularColumn Filter -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-datatables-master/dist/plugins/columnfilter/angular-datatables.columnfilter.min.js"></script>
    <!-- Angular datatables responsive -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-datatables-master/vendor/datatables-responsive/js/dataTables.responsive.js"></script>
    <!-- Angular dropzone ********NUEVO***********-->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-dropzone/lib/angular-dropzone.js"></script>
    <!-- Angular xeditable ********NUEVO***********-->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-xeditable/js/xeditable.min.js"></script>
     <!-- daterangePickerJS -->
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-daterangepicker-master/js/angular-daterangepicker.min.js"></script>
    <!-- scroller --> 
    <script src="<?php echo $global['app_base']; ?>/js/vendor/angular-datatables-master/dist/plugins/scroller/angular-datatables.scroller.min.js"></script>
    <!-- angular app -->
    <script src="<?php echo $global['app_base']; ?>/js/app.js"></script>

    <script src="<?php echo $global['app_base']; ?>/js/modules/AllMoviesCtrl.js"></script>

</body>
</html>