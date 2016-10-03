app.controller('indexController', function ($scope,$http) {
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
});

app.controller('aboutController',function($scope){
  $scope.message = "Welcome to About us page";
});
app.controller('movieCtrl',function($scope){});
