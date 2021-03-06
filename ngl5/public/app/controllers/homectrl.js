var sholder ='';
app.controller('indexController', function ($scope,$window,$http) {

  $scope.movs = [];
    $scope.init = function(mmid){

      $http.post(appUrl+'/info').success(function(data,status,headers,config){
        var arr = Object.keys(data['slider']['data']);
        $scope.mmid = arr[0];
        $scope.movs = data;
        SliderAndGallery();
      });
      sholder = $scope;
    }
    $scope.test = function(mid){
      $scope.$apply(function () {
              $scope.mmid = mid;
          });
    }
    $scope.nowshowpopup = function(mvid,arname){
      $scope.mind = mvid;
      $scope.arname = arname;
      showpopup();
    }
    $scope.topboxpopup = function(tmvid){
      $scope.tmindex = tmvid;
      topbox_showpopup();
    }
    $scope.allmovies_popup = function(amid){
      $scope.amid = amid;
      allmovies_showpopup();
    }
    $scope.srating = function(min, max){
    var tt = [];var txt = '';
    for (var i = min; i < max; i++) { tt.push('glyphicon glyphicon-star'+' '+i); }
    for (var j = 5; j >max; j--){ tt.push('glyphicon glyphicon-star-empty'+' '+j); }
    return tt;
  };
  $scope.init();

});
app.directive('actualImage', ['$timeout', function($timeout) {
    return {
         link: function($scope, element, attrs) {
             function waitForImage(url) {
                 var tempImg = new Image();
                 tempImg.onload = function() {
                     $timeout(function() {
                         element.attr('src', url);
                     });
                 }
                 tempImg.src = url;
             }

             attrs.$observe('actualImage', function(newValue) {
                 if (newValue) {
                     waitForImage(newValue);
                 }
             });
         }
    }
}]);
app.controller('aboutController',function($scope){
  $scope.message = "Welcome to About us page";
});
app.controller('movieCtrl',function($scope){});
