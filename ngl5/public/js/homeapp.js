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
    $routeProvider.when('/test',{
      templateUrl:'http://localhost/ng-l5/ngl5/public/test',
      controller:'movieController'
    });
});
homeapp.controller('indexController',function($scope,$location,$http){
$scope.movs = 'test message';
  $scope.init = function(){
    $http.get('http://localhost/ng-l5/ngl5/public/mov').success(function(data,status,headers,config){
      // console.log(data);

    $scope.movs =data;
    });
  }
  
  $scope.init();
  
});
homeapp.controller('movieController',function($scope,$location,$http){
  $scope.moviedetail = function(){
    $scope.movies = [];
    $http.get('http://localhost/ng-l5/ngl5/public/test2').success(function(data,status,headers,config){
      $scope.movies = data;
      //console.log($scope.movies);
    })
  }
  $scope.moviedetail();
});