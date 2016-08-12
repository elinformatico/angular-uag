angular.module('mobieApp', ['ui.bootstrap'])
.constant('globalServerRoute', {

	apiRoute  : 'http://localhost/uag/mobie.api/public/mobie', 
	siteRoute : 'http://localhost/uag/mobie.site',
	
	localApi : window.location.href.indexOf("localhost") ? 
	'http://localhost/uag/mobie.site/services' : 
	'http://noehdez.info/site/services',

	// apiRoute  : 'http://noehdez.info/api/public/mobie',
    // siteRoute : 'http://noehdez.info/site'
})
.run(function($rootScope, globalServerRoute){
	$rootScope.api  = globalServerRoute.apiRoute;
	$rootScope.site = globalServerRoute.siteRoute;
	$rootScope.localApi = globalServerRoute.localApi;
});