<!DOCTYPE html>
<html lang="en" ng-app="main-App" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <base href="http://localhost/ng-l5/ngl5/public/" />
  <title>Home::Moviesfyi</title>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::asset('css/lib/bootstrap.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <script src="{{URL::asset('js/lib/jquery.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/jquery-ui.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/jquery.coverflow.js')}}"></script>
  <script src="{{URL::asset('js/lib/jquery.touchSwipe.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/reflection.js')}}"></script>
  <script src="{{URL::asset('js/angular.min.js')}}" charset="utf-8"></script>
  <script src="https://code.angularjs.org/1.5.8/angular-route.min.js" charset="utf-8"></script>
  <script src="{{URL::asset('js/lib/angular-ui-router.js')}}"></script>
  <script src="{{URL::asset('app/routes.js')}}"></script>
  <script src="{{URL::asset('app/controllers/homectrl.js')}}" charset="utf-8"></script>
</head>
<body ng-controller="indexController" id="home_id">
  @include('templates.header')
  <div ui-view></div>
<script>
var cid = 1;
				$(function() {
					if ($.fn.reflect) {
						$('#slider-coverflow .cover').reflect();	// only possible in very specific situations
					}
					$('#slider-coverflow').coverflow({
						index:			4,
						density:		2,
						innerOffset:	50,
						innerScale:		.7,
            outerAngle: 75,
            animateStep:	function(event, cover, offset, isVisible, isMiddle, sin, cos) {
          		if (isVisible) {
          			if (isMiddle) {
          				$(cover).css({
          					'filter':			'none',
          					'-webkit-filter':	'none'
          				});
          			} else {
          				var brightness	= 1 + Math.abs(sin),
          					contrast	= 1 - Math.abs(sin),
          					filter		= 'contrast('+contrast+') brightness('+brightness+')';
          				$(cover).css({
          					'filter':			filter,
          					'-webkit-filter':	filter
          				});
          			}
          		}
          	},
            select:function(event, cover, index){
              //cid = $(cover).find('img').attr('id');
              //angular.element(document.getElementById("home_id")).scope().test(cid);
            }
					});
				});
</script>
</body>
</html>
