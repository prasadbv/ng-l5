var sholder ='';
app.controller('indexController', function ($scope,$window,$http) {
$(function() {
        if ($.fn.reflect) {
          $('#slider-coverflow .cover').reflect();
        }
        $('#slider-coverflow').coverflow({
          index:      4,
          density:    2,
          innerOffset:  50,
          innerScale:   .7,
          outerAngle: 75,
          animateStep:  function(event, cover, offset, isVisible, isMiddle, sin, cos) {
            if (isVisible) {
              if (isMiddle) {
                $(cover).css({
                  'filter':     'none',
                  '-webkit-filter': 'none'
                });
              } else {
                var brightness  = 1 + Math.abs(sin),
                  contrast  = 1 - Math.abs(sin),
                  filter    = 'contrast('+contrast+') brightness('+brightness+')';
                $(cover).css({
                  'filter':     filter,
                  '-webkit-filter': filter
                });
              }
            }
          }
        });
      });
  $scope.movs = [];
    $scope.init = function(mmid){

      $http.post(appUrl+'/info').success(function(data,status,headers,config){
        var arr = Object.keys(data['slider']['data']);
        $scope.mmid = arr[0];
        $scope.movs = data;
        
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
