<!DOCTYPE html>
<html lang="en" ng-app="HomeApp" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home::Moviesfyi</title>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::asset('css/lib/bootstrap.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}" media="screen" title="no title">

</head>
<body>
  @include('templates.header')
      @yield('content')

<script src="{{URL::asset('js/lib/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/lib/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('js/lib/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/lib/jquery.coverflow.js')}}"></script>
<script src="{{URL::asset('js/lib/jquery.touchSwipe.min.js')}}"></script>
<script src="{{URL::asset('js/lib/reflection.js')}}"></script>
<script src="{{URL::asset('js/angular.min.js')}}" charset="utf-8"></script>
<script src="https://code.angularjs.org/1.5.8/angular-route.min.js" charset="utf-8"></script>
<script src="{{URL::asset('js/homeapp.js')}}" charset="utf-8"></script>
<script>
				$(function() {
					if ($.fn.reflect) {
						$('#slider-coverflow .cover').reflect();	// only possible in very specific situations
					}

					$('#slider-coverflow').coverflow({
						index:			6,
						density:		2,
						innerOffset:	50,
						innerScale:		.7,
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
						}
					});
				});
</script>
</body>
</html>
