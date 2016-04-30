angular.module("mobieApp")
.controller('displayMovieModalCtrl', 
    ['$scope','$uibModalInstance','Data','$compile','$rootScope', function(
      $scope , $uibModalInstance , Data , $compile , $rootScope ) {
        
        console.log('Se abrio modal con los siguientes datos: ', Data);
        $scope.saludo = Data.saludo;

        $scope.modal = {
            cerrar : function(){
                $uibModalInstance.close('cancel');
            },
            saludo : Data.saludo
        }
}])