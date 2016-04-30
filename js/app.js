angular.module('mobieApp', [])
.constant('globalServerRoute', {
	apiRoute  : 'http://localhost/mobie.mx/public/mobie', 
	siteRoute : 'http://localhost/mobie.site'
})
.run(function($rootScope, globalServerRoute){
	$rootScope.api  = globalServerRoute.apiRoute;
	$rootScope.site = globalServerRoute.siteRoute;
});