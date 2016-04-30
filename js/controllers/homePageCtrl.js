angular.module("mobieApp")
.controller("homePageCtrl", 
	     ["$rootScope","$scope","$http","$compile","$q","$uibModal","$log","apiFactoryRest","growlService",  
function ( $rootScope,  $scope,  $http,  $compile,  $q,  $uibModal,  $log,  apiFactoryRest,  growlService ) {

	$scope.countries = {};
	$scope.fn = {
		init : function(){
			console.log('Init Function...');
			apiFactoryRest.getCountries()
			.success(function(response){
				$scope.countries = response.countries;

				growlService.notice('Mensaje Sistema', 'Yeahhhhh :)');
			})
			.error(function(error){

			});
		}
	};
	$scope.fn.init();
}]);