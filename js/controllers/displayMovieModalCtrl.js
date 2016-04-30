angular.module("mobieApp")
.controller('displayMovieModalCtrl', 
    ['$scope','$uibModalInstance','Data','$compile','$rootScope', function(
      $scope , $uibModalInstance , Data , $compile , $rootScope ) {
        
        console.log('Se abrio modal con los siguientes datos: ', Data.datosPelicula );
        $scope.datosPelicula = Data.datosPelicula;

        $scope.modal = {
            cerrar : function(){
                $uibModalInstance.close('cancel');
            },
            datosPelicula : Data.datosPelicula
        }
}])