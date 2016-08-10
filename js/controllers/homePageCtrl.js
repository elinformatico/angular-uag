angular.module("mobieApp")
.controller("homePageCtrl", 
	     ["$rootScope","$scope","$http","$compile","$q","$uibModal","$log","apiFactoryRest","growlService",  
function ( $rootScope,  $scope,  $http,  $compile,  $q,  $uibModal,  $log,  apiFactoryRest,  growlService ) {

	$scope.dbPediaResults = {};

	$scope.fn = {
		init : function(){
			this.loadSparqlData();
		},
		
		loadSparqlData : function(){
			apiFactoryRest.getSparqlResults()
			.success(function(rs){
				$scope.dbPediaResults = rs.results.bindings;
				console.log($scope.dbPediaResults);
				
			})
			.error(function(err){
				growlService.error('Mensaje Sistema', err.msg);
			});	
		},
	};
	$scope.fn.init();
}]);