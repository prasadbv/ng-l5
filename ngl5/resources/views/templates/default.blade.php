<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home::Moviesfyi</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}" media="screen" title="no title">

</head>
<body>
    <div class="container">
      @yield('content')
    </div>

<script src="{{URL::asset('js/angular.min.js')}}" charset="utf-8"></script>
<script src="https://code.angularjs.org/1.5.8/angular-route.min.js" charset="utf-8"></script>
<script src="{{URL::asset('js/app.js')}}" charset="utf-8"></script>

</body>
</html>
