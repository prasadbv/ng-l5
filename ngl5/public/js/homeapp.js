var homeapp = angular.module('HomeApp',['ngRoute']);
homeapp.config(function($route){

});
homeapp.controller('homeCtrl',function($scope,$http,data){
  $scope.movie = [];
  $scope.init = function(){
    $http.get('http://localhost/ng-l5/ngl5/public/api/home').success(function(data,status,headers,config){
      console.log(data);
      $scope.movie = data;
    });
  }
  $scope.init();
});
