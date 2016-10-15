var sholder ='';
app.controller('indexController', function ($scope,$window,$http) {
  $scope.movs = [];
    $scope.init = function(mmid){
      $http.post('http://localhost/ng-l5/ngl5/public/mov').success(function(data,status,headers,config){
        var arr = Object.keys(data['data'])
        $scope.mmid = arr[0];
        $scope.movs = data;
      });
      // $scope.open = function () {
      //             var modalInstance = $modal.open({
      //                 templateUrl: 'templates/popup.html',
      //             });
      //         }

      sholder = $scope;
      showpopup();

    }
    $scope.test = function(mid){
      $scope.$apply(function () {
              $scope.mmid = mid;
          });
    }
      $scope.init();
  $scope.showpopup1 = function(){
    console.log("ddddd");
  }
});

app.controller('aboutController',function($scope){
  $scope.message = "Welcome to About us page";
});
app.controller('movieCtrl',function($scope){});
