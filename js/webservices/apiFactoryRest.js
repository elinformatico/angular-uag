angular.module('mobieApp')
.factory('apiFactoryRest', ['$rootScope', '$http',  function( $rootScope, $http ){

	var restUrl = $rootScope.api;
	var dataFactory = {};

    var transform = function(data){
        return $.param(data);
    }

    dataFactory.getCountries = function(){
      	return $http.get(restUrl + '/get/countries');
    }

    dataFactory.storeExample = function(data){
      return $http.post(restUrl + '/store/example', data, {
          headers : { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
          transformRequest : transform
      });
    }

    dataFactory.deleteExample = function(data){
      	return $http.delete(restUrl + '/delete/example/'+ data);
    }

    dataFactory.updateExample = function(data){
       return $http.put(restUrl + '/update/example', data, {
            headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
            transformRequest: transform
        });  
    }
    
    return dataFactory;
}]);