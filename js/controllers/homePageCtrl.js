angular.module("mobieApp")
.controller("homePageCtrl", 
	     ["$rootScope","$scope","$http","$compile","$q","$uibModal","$log","apiFactoryRest","growlService",  
function ( $rootScope,  $scope,  $http,  $compile,  $q,  $uibModal,  $log,  apiFactoryRest,  growlService ) {

	$scope.countries = {};
	$scope.movies = {};

	$scope.fn = {
		init : function(){
			this.loadMovies();			
			
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

				if(response.status === 'success'){
					$scope.movies = response.movies;
				} else if(response.status === 'error'){
					growlService.notice('Mensaje Sistema', response.msg);
				}
			})
			.error(function(error){
				growlService.error('Mensaje Sistema', response.msg);
			});	
		},
		openMovieModal : function( datosPelicula ){
			var modalInstance = $uibModal.open({
                animation: true,
                templateUrl : 'displayMovie.html',
                controller  : 'displayMovieModalCtrl',
                size        : 'lg',
                backdrop    : 'static',
                keyboard    : false,
                resolve     : {
                    Data: function() {
                        return { datosPelicula : datosPelicula };
                    }
                }
            });
		}
	};
	$scope.fn.init();
}]);