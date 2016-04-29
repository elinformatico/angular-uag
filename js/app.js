angular.module('mobieApp', [])
.constant('globalServerRoute', {
	apiRoute  : 'http://localhost/mobie.mx/public/mobie', 
	siteRoute : 'http://localhost/mobie.site'
})
.run(function($rootScope, globalServerRoute){
	$rootScope.api  = globalServerRoute.apiRoute;
	$rootScope.site = globalServerRoute.siteRoute;
})
.controller("menuPrincipalCtrl", 
	     ["$rootScope","$scope","$http","$compile","$q","$log","apiFactoryRest", 
function ( $rootScope,  $scope,  $http,  $compile,  $q,  $log,  apiFactoryRest ) {

	$scope.countries = {};
	$scope.fn = {
		init : function(){
			apiFactoryRest.getCountries()
			.success(function(response){
				$scope.countries = response.countries;
			})
			.error(function(error){

			});
		}
	};
	$scope.fn.init();
}]);