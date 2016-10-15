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
  <script src="{{URL::asset('js/ui-bootstrap-tpls-0.14.3.min.js')}}" charset="utf-8"></script>
  <script src="{{URL::asset('js/lib/angular-ui-router.js')}}"></script>

</head>
<body>
  <div ng-init="nowshows={{$movies->NowShowing()}}"></div>
  @include('templates.header')
  <div ui-view></div>
</body>
<script src="{{URL::asset('app/routes.js')}}"></script>
<script src="{{URL::asset('app/controllers/homectrl.js')}}" charset="utf-8"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>
</html>
