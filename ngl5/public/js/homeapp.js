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
homeapp.controller('indexController',function($scope,$location,$http){
$scope.movs = 'test message';
  $scope.init = function(){
    $http.get('http://localhost/ng-l5/ngl5/public/mov').success(function(data,status,headers,config){
      $scope.movs ="testmessage";
    });
  }
  $scope.init();
});
