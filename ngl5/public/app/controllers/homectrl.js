// app.controller('indexController', function ($scope,$http) {

// })
var sholder ='';
app.controller('indexController', function ($scope,$window,$http) {
   /**
   *
   * movie controller jquery start here
   *
   */
  
      var masonryOptions = {
        itemSelector: '.grid-item'
        // columnWidth: 80
      };
       $('.grid').masonry( masonryOptions );
    if ($.fn.reflect) {
         $('#slider-coverflow .cover').reflect();  
      }
      $('#slider-coverflow').coverflow({
                index:          4,
                density:        2,
                innerOffset:    50,
                innerScale:     .7,
                outerAngle: 75,
                animateStep:    function(event, cover, offset, isVisible, isMiddle, sin, cos) {
                    if (isVisible) {
                        if (isMiddle) {
                            $(cover).css({
                                'filter':           'none',
                                '-webkit-filter':   'none'
                            });
                        } else {
                            var brightness  = 1 + Math.abs(sin),
                                contrast    = 1 - Math.abs(sin),
                                filter      = 'contrast('+contrast+') brightness('+brightness+')';
                            $(cover).css({
                                'filter':           filter,
                                '-webkit-filter':   filter
                            });
                        }
                    }
                },
              select:function(event, cover, index){
                console.log(cover);
              }
            });

           
            $(".shw-pop").popover({
                    html : true,
                    trigger:'click',
                    placement:'right',
                    content: function() {
                      return $(".rating-details").html();
                    }
                }).on("mouseenter",function(){
                  var _this = this;
                  $(this).popover("show");
                  $(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
                }).on("mouseleave", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!$(".popover:hover").length) {
                            $(_this).popover("hide")
                        }
                    }, 100);
            });
                $(".mv-rate").popover({
                    html : true,
                    trigger:'manual',
                    placement:'auto right',
                    container: "body",
                    content: function() {
                      return $(".rating-details").html();
                    }
                }).on("mouseenter",function(){
                  var _this = this;
                  $(this).popover("show");
                  $(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
                }).on("mouseleave", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!$(".popover:hover").length) {
                            $(_this).popover("hide")
                        }
                    }, 100);
            });
                $(".cmg-pop").popover({
                    html : true,
                    trigger:'manual',
                    placement:'bottom',
                    content: function() {
                      return $(".rating-votes").html();
                    }
                }).on("mouseenter",function(){
                  var _this = this;
                  $(this).popover("show");
                  $(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
                }).on("mouseleave", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!$(".popover:hover").length) {
                            $(_this).popover("hide")
                        }
                    }, 100);
            });

            /**
             *
             * movie controller jquery end here
             *
             */
  $scope.movs = [];
    $scope.init = function(mmid){
      $http.post('http://ng-l5.app/mov').success(function(data,status,headers,config){
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
  
});
app.controller('movieCtrl',function($scope){
   /**
   *
   * multi movies jquery start here
   *
   */
    $(".mv-rate").popover({
                    html : true,
                    trigger:'manual',
                    placement:'auto right',
                    container: "body",
                    content: function() {
                      return $(".rating-details").html();
                    }
                }).on("mouseenter",function(){
                  var _this = this;
                  $(this).popover("show");
                  $(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
                }).on("mouseleave", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!$(".popover:hover").length) {
                            $(_this).popover("hide")
                        }
                    }, 100);
            });
            $('.mv-shwtime').on('click',function(){
                $('.mv-name-toggle').hide();
                // $(this).find('.glyphicon-triangle-bottom').removeClass()
                $(this).parent().next().toggle('slow');
            });
   /**
    *
    * multi movies jquery end here
    *
    */
});