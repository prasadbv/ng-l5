
@extends('templates.default')
@section('content')
<div class="movie-slider" ng-controller="indexController" id="home_id">
 <!-- <pre><% movs %></pre> -->
    <div class="container">
        <div class="row"><%mmid%>
            <div class="col-md-4 movie-info">
              <div >
                <h2><%movs.data[mmid].name%> <span class="rating">A</span></h2>
                  <div class="langs" ng-repeat="ll in movs.data[mmid].language"><span><%ll%></span></div>
                  <div class="genre">
                    <ul class="list-inline" ng-repeat="gn in movs.data[mmid].genre">
                        <li><%gn%></li>
                      </ul>
                  </div>
                <div class="movie-rating">
                  <div class="movie-rating-header">
                      <h2> Ratings & Reviews </h2>
                   </div>
               <div class="rating-item clearfix" ng-repeat="ss in movs.data[mmid].sites">
                <div class="vendor-image pull-left"> <img ng-src="<%ss.site_logo%>" alt="<%ss.site_name%>"> </div>
                  <div class="vendor-rating-star pull-left">
                    <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                  </div>
                  <div class="vendor-rating pull-left">
                    <span><%ss.site_rating%>/5</span>
                  </div>
               </div>

                <div class="rating-item clearfix our-rating">
                <div class="vendor-image pull-left">
                    <img src="images/moviesfyi.png" />
                  </div>
                  <div class="vendor-rating-star pull-left">
                    <span class="our-rating-full"></span>
                      <span class="our-rating-full"></span>
                      <span class="our-rating-full"></span>
                      <span class="our-rating-empty"></span>
                      <span class="our-rating-empty"></span>
                  </div>
                  <div class="vendor-rating pull-left">
                    <span>3.5(Average)</span>
                  </div>
               </div>
              </div>
            </div>
                <div class="booknow-btn">
                   <button type="button" class="btn" > Book Now </button>
                </div>
              </div>

              <div class="col-md-8 movies-flow">
                <div id="slider-coverflow">
                        <div ng-repeat="img in movs.images" class="slider-slide">
                          <img class="cover" ng-src="<% img.image %>" id="<% img.id %>" />
                         </div>
                  </div>
              </div>
      </div>
  </div>

  </div>

  @include('homeviews.movielatest')
  @include('homeviews.langmovies')

<div class="rating-details hidden" id="popup-content">
<div class="rating-details-header text-left">
<h2>Rating Details</h2>
</div>
<div class="rating-details-b">
 <div class="popup-rating-items clearfix">
    <div class="rating-image pull-left">
        <img src="images/bookmyshow.png">
    </div>
    <div class="rating-image-star pull-left">
       <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>
    <div class="popup-rating pull-left text-right">
        <span>3.5/5</span>
    </div>
</div>
<div class="popup-rating-items clearfix">
    <div class="rating-image pull-left">
        <img src="images/justtickets.png">
    </div>
    <div class="rating-image-star pull-left">
       <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>
    <div class="popup-rating pull-left text-right">
        <span>3.5/5</span>
    </div>
</div>
<div class="popup-rating-items clearfix">
    <div class="rating-image pull-left">
        <img src="images/ticketdada.png">
    </div>
    <div class="rating-image-star pull-left">
       <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>
    <div class="popup-rating pull-left text-right">
        <span>3.5/5</span>
    </div>
</div>
<div class="popup-rating-items clearfix">
    <div class="rating-image pull-left">
        <img src="images/cinemax.png">
    </div>
    <div class="rating-image-star pull-left">
       <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>
    <div class="popup-rating pull-left text-right">
        <span>3.5/5</span>
    </div>
</div>
<div class="popup-rating-items clearfix">
    <div class="rating-image pull-left">
        <img src="images/ticketdada.png">
    </div>
    <div class="rating-image-star pull-left">
       <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>
    <div class="popup-rating pull-left text-right">
        <span>3.5/5</span>
    </div>
</div>
<div class="popup-rating-items clearfix">
    <div class="rating-image pull-left">
        <img src="images/cinemax.png">
    </div>
    <div class="rating-image-star pull-left">
       <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>
    <div class="popup-rating pull-left text-right">
        <span>3.5/5</span>
    </div>
</div>
<div class="popup-rating-items clearfix">
    <div class="rating-image pull-left">
        <img src="images/ticketdada.png">
    </div>
    <div class="rating-image-star pull-left">
       <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>
    <div class="popup-rating pull-left text-right">
        <span>3.5/5</span>
    </div>
</div>
<div class="popup-rating-items clearfix">
    <div class="rating-image pull-left">
        <img src="images/cinemax.png">
    </div>
    <div class="rating-image-star pull-left">
       <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>
    <div class="popup-rating pull-left text-right">
        <span>3.5/5</span>
    </div>
    <a href="#" class="rating-details-websites"> and 12 more websites >
    </a>
    <div class="movie-details-footer">
         <div class="popup-rating-items clearfix">
                  <div class="rating-image pull-left">
                        <img src="images/moviesfyi.png">
                    </div>
                 <div class="our-rating-image-star pull-left">
                   <span class="our-rating-full"></span>
                    <span class="our-rating-full"></span>
                    <span class="our-rating-full"></span>
                    <span class="our-rating-empty"></span>
                    <span class="our-rating-empty"></span>
                </div>
                <div class="popup-rating pull-left text-right">
                    <span>3.5/5</span>
              </div> 
              <span class="popup-rating-text pull-right">(overall rating)</span>
        </div>
    </div>
</div>
</div>
</div>
@stop
