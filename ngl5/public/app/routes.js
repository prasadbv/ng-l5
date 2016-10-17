var scopeHolder;
var app = angular.module('main-App',['ui.router','angularCSS'],function($interpolateProvider){
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
app.config(function($urlRouterProvider,$stateProvider,$locationProvider) {
    $stateProvider.
    state('/ng-l5/ngl5/public', {
        url:'/',
        templateUrl: 'templates/index.html'
    }).
    state('movies',{
      url:'/movies',
      css: 'css/movie.css',
      templateUrl: 'templates/movies.html',
      controller: 'movieCtrl'
    }).
    state('gallery',{
      url:'/gallery',
      css: 'css/single-mvpage.css',
      templateUrl: 'templates/gallery.html'
    });
    $locationProvider.html5Mode(true);
});
