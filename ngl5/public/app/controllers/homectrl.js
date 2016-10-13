var sholder ='';
app.controller('indexController', function ($scope,$window,$http) {
  $scope.movs = [];
    $scope.init = function(mmid){
      $http.post('http://localhost/ng-l5/ngl5/public/mov').success(function(data,status,headers,config){
        var arr = Object.keys(data['data'])
        $scope.mmid = arr[0];
        $scope.movs = data;
      });
      sholder = $scope;
      //coverflow();
    }
    $scope.test = function(mid){
      $scope.$apply(function () {
              $scope.mmid = mid;
          });
    }
      $scope.init();
});

app.controller('aboutController',function($scope){
  $scope.message = "Welcome to About us page";
});
app.controller('movieCtrl',function($scope){});
