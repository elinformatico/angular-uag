angular.module('mobieApp', ['ui.bootstrap'])
.constant('globalServerRoute', {

	//apiRoute  : 'http://localhost/mobie.mx/public/mobie', 
	//siteRoute : 'http://localhost/mobie.site',

	 apiRoute  : 'http://noehdez.info/api/public/mobie',
         siteRoute : 'http://noehdez.info/site'
})
.run(function($rootScope, globalServerRoute){
	$rootScope.api  = globalServerRoute.apiRoute;
	$rootScope.site = globalServerRoute.siteRoute;
});
