var app = angular.module('main-App',['ui.router'],function($interpolateProvider){
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
app.config(function($urlRouterProvider,$stateProvider,$locationProvider) {
    $stateProvider.
    state('', {
        url:'/',
        templateUrl: 'templates/index.html',
        controller: 'indexController'
    }).
    state('movies',{
      url:'/movies',
      templateUrl: 'templates/movies.html',
      controller: 'movieCtrl'
    }).
    state('gallery',{
      url:'/gallery',
      templateUrl: 'templates/gallery.html'
    });
    $locationProvider.html5Mode(true);
});
