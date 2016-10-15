<!DOCTYPE html>
<html lang="en" ng-app="main-App" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <base href="http://ng-l5.app/" />
  <title>Home::Moviesfyi</title>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::asset('css/lib/bootstrap.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="{{URL::asset('js/lib/jquery.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/jquery-ui.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/jquery.coverflow.js')}}"></script>
  <script src="{{URL::asset('js/lib/jquery.touchSwipe.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/reflection.js')}}"></script>
  <script src="{{URL::asset('js/lib/masonry.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('js/lib/angular.min.js')}}" charset="utf-8"></script>
  <script src="{{URL::asset('js/lib/angular-css.min.js')}}" charset="utf-8"></script>
  <script src="{{URL::asset('js/lib/angular-ui-router.js')}}"></script>
  <script src="{{URL::asset('app/routes.js')}}"></script>
  <script src="{{URL::asset('app/controllers/homectrl.js')}}" charset="utf-8"></script>
</head>
<body>
{{$movies->NowShowing()}}
  <div ng-include="'templates/header.html'"></div>
    <div ui-view></div>
  <div ng-include="'templates/footer.html'"></div>
</body>
</html>
