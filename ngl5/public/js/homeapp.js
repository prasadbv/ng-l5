var homeapp = angular.module('HomeApp',['ngRoute'],function($interpolateProvider){
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
homeapp.config(function($routeProvider) {
    $routeProvider.
    when('/', {
        templateUrl: 'http://localhost/ng-l5/ngl5/public',
        controller: 'indexController'
    });
});
homeapp.controller('indexController',function($scope,$window,$http){
$scope.movs = [];
  $scope.init = function(){
    $http.post('http://localhost/ng-l5/ngl5/public/mov').success(function(data,status,headers,config){
      $scope.movs = data;
    });
  }
  $scope.init();
  $scope.test = function(mid){
    if(mid){ }else{  mid =1; }
    $scope.$apply(function () {
            $scope.mmid = mid;
        });
  }

});
