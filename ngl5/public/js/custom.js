function SliderAndGallery() {
  setTimeout(function(){
  var masonryOptions = {
        itemSelector: '.grid-item'
        // columnWidth: 80
      };
      $('.grid').masonry( masonryOptions );
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
          },
          select:function(event, cover, index){
            var cid = $(cover).find('img').attr('id'); //console.log(cid);
            sholder.test(cid);
            //$scope().test(cid);
          }
        });
      });
    },0);

}
    function showpopup(){
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
  }
  function topbox_showpopup(){
      $(".tshw-pop").popover({
          html : true,
          trigger:'click',
          placement:'right',
          content: function() {
            return $("#topboxpopup-content").html();
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
}
function allmovies_showpopup(){
  $(".mv-rate").popover({
      html : true,
      trigger:'manual',
      placement:'auto right',
      container: "body",
      content: function() {
        return $("#allmoviespopup-content").html();
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
}
