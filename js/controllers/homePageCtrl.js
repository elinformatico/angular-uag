angular.module("mobieApp")
.controller("homePageCtrl", 
	     ["$rootScope","$scope","$http","$compile","$q","$uibModal","$log","apiFactoryRest","growlService",  
function ( $rootScope,  $scope,  $http,  $compile,  $q,  $uibModal,  $log,  apiFactoryRest,  growlService ) {

	$scope.countries = {};
	$scope.fn = {
		init : function(){
			console.log('Init Function...');

			var modalInstance = $uibModal.open({
                animation: true,
                templateUrl : 'displayMovie.html',
                controller : 'displayMovieModalCtrl',
                size: 'lg',
                backdrop:'static',
                keyboard:false,
                resolve: {
                    Data: function() {
                        return { saludo : 'Ola ke ase :)' };
                    }
                }
            });

		},
		loadCountries : function(){
			apiFactoryRest.getCountries()
			.success(function(response){
				$scope.countries = response.countries;
				growlService.notice('Mensaje Sistema', 'Yeahhhhh :)');
			})
			.error(function(error){

			});
		},
		loadMovies : function(){
			apiFactoryRest.getMovies()
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