angular.module('mobieApp')
.factory('apiFactoryRest', ['$rootScope', '$http',  function( $rootScope, $http ){

	var restUrl = $rootScope.api;
	var dataFactory = {};

    var urlDbPedia = 'http://dbpedia.org/sparql?default-graph-uri=http%3A%2F%2Fdbpedia.org&query=select+distinct+%3FConcept+where+%7B%5B%5D+a+%3FConcept%7D+LIMIT+100&format=application%2Fsparql-results%2Bjson&CXML_redir_for_subjs=121&CXML_redir_for_hrefs=&timeout=30000&debug=on';

    var transform = function(data){
        return $.param(data);
    }

    dataFactory.getSparqlResults = function(){
      	return $http.get(urlDbPedia);
    }

    dataFactory.getCorreosUrl = function( url ){
        return $http.get('')
    }
    
    return dataFactory;
}]);