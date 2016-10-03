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
homeapp.controller('indexController',function($scope,$window,$http){
$scope.movs = [];
  $scope.init = function(){
    $http.post('http://localhost/ng-l5/ngl5/public/mov').success(function(data,status,headers,config){
      var arr = Object.keys(data['data'])
      $scope.mmid = arr[0];
      $scope.tt = "Username1,Username2,Username3,Username4";
      $scope.movs = data;
    });
  }
  $scope.init();
  $scope.test = function(mid){
    $scope.$apply(function () {
            $scope.mmid = mid;
        });
  }
});
homeapp.controller('popupCtrl',function($scope,$http){
  $scope.ratepopup = function(mid){
    if(mid){
      $scope.$apply(function () {
              $scope.sid = mid;
          });
      // $http.get('http://localhost/ng-l5/ngl5/public/sites/'+mid).success(function(data,status,headers,config){
      //   $scope.sites = data;
      // })
    }
  }
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
