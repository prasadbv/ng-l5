
@extends('templates.default')
@section('content')

<div class="movie-slider" ng-controller="indexController">
<% movs %>
    <div class="container">
        <div class="row">
            <div class="col-md-4 movie-info">
              <div>
                <h2>The Martin <span class="rating">A</span></h2>
                  <div class="langs">
                    <span>english,</span>
                      <span>spanish,</span>
                      <span>french,</span>
                  </div>
                  <div class="genre">
                    <ul class="list-inline">
                        <li>sei-fi</li>
                          <li>drama</li>
                          <li>action</li>
                      </ul>
                  </div>
                </div>
                    <div class="movie-rating">
                  <div class="movie-rating-header">
                      <h2> Ratings & Reviews </h2>
                   </div>
               <div class="rating-item clearfix">
                <div class="vendor-image pull-left">
                    <img src="images/bookmyshow.png" />
                  </div>
                  <div class="vendor-rating-star pull-left">
                    <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>


                  </div>
                  <div class="vendor-rating pull-left">
                    <span>2.5/5</span>
                  </div>
               </div>
                       <div class="rating-item clearfix">
                <div class="vendor-image pull-left">
                    <img src="images/justtickets.png" />
                  </div>
                  <div class="vendor-rating-star pull-left">
                    <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>


                  </div>
                  <div class="vendor-rating pull-left">
                    <span>2.5/5</span>
                  </div>
               </div>
                       <div class="rating-item clearfix">
                <div class="vendor-image pull-left">
                    <img src="images/ticketdada.png" />
                  </div>
                  <div class="vendor-rating-star pull-left">
                    <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>


                  </div>
                  <div class="vendor-rating pull-left">
                    <span>2.5/5</span>
                  </div>
               </div>
                       <div class="rating-item clearfix">
                <div class="vendor-image pull-left">
                    <img src="images/cinemax.png" />
                  </div>
                  <div class="vendor-rating-star pull-left">
                    <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>


                  </div>
                  <div class="vendor-rating pull-left">
                    <span>2.5/5</span>
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

                <div class="booknow-btn">
                   <button type="button" class="btn" > Book Now </button>
                </div>
              </div>

              <div class="col-md-8 movies-flow">
                <div id="slider-coverflow">
                          <img class="cover" src="images/martian2015-5.png"/>
                          <img class="cover" src="images/martian2015-5.png"/>
                          <img class="cover" src="images/martian2015-5.png"/>
                           <img class="cover" src="images/martian2015-5.png"/>
                           <img class="cover" src="images/martian2015-5.png"/>
                          <img class="cover" src="images/martian2015-5.png"/>
                          <img class="cover" src="images/martian2015-5.png"/>
                           <img class="cover" src="images/martian2015-5.png"/>
                  </div>
              </div>
      </div>
  </div>
  </div>
  <div class="trending-movies">
        <div class="container">
            <div class="row">
                <div class="col-md-4 trend-movie-item">
                    <div class="t-m-i-h bt-mandy">
                        <h2>now showing</h2>
                    </div>
                    <div class="t-m-i-b">
                        <div class="t-m-r-i">
                            <span class="trend-movie-title">how met your mother,tha conclusion</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">babu bangaram</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-mandy">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">the soldier 2</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-star"></span>
                               <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">the grey,die another day</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-green">
                                <span class="glyphicon glyphicon-star"></span>
                               <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">pawan kalyan</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-mandy">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">kabali</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">kabali</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-mandy">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 trend-movie-item">
                    <div class="t-m-i-h bt-yellow">
                        <h2>top box-office</h2>
                    </div>
                    <div class="t-m-i-b">
                        <div class="t-m-r-i">
                            <span class="trend-movie-title">how met your mother,tha conclusion</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-green">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">babu bangaram</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-mandy">
                                <span class="glyphicon glyphicon-star"></span>
                               <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">the soldier 2</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-green">
                                <span class="glyphicon glyphicon-star"></span>
                               <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">the grey,die another day</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">pawan kalyan</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-mandy">
                                <span class="glyphicon glyphicon-star"></span>
                               <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">kabali</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-green">
                                <span class="glyphicon glyphicon-star"></span>
                               <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                         <div class="t-m-r-i">
                            <span class="trend-movie-title">kabali</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-star"></span>
                               <span class="rate-text">3.5</span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="col-md-4 trend-movie-item">
                    <div class="t-m-i-h bt-green">
                        <h2>coming this week</h2>
                    </div>
                    <div class="t-m-i-b date-rating">
                        <div class="t-m-r-i">
                            <div class="trend-calendar cmg-wk-cal">
                                <span class="day">Mon</span>
                                <span class="date">24</span>
                            </div>
                            <span class="trend-movie-title">how met your mother,tha conclusion</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-heart"></span>
                                <span class="rate-text">55%</span>

                            </div>
                        </div>
                         <div class="t-m-r-i">
                             <div class="trend-calendar cmg-wk-cal">
                                <span class="day">Mon</span>
                                <span class="date">24</span>
                            </div>
                            <span class="trend-movie-title">babu bangaram</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-green">
                                <span class="glyphicon glyphicon-heart"></span>
                               <span class="rate-text">85%</span>

                            </div>
                        </div>
                         <div class="t-m-r-i">
                             <div class="trend-calendar cmg-wk-cal">
                                <span class="day">Mon</span>
                                <span class="date">24</span>
                            </div>
                            <span class="trend-movie-title">the soldier 2</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-heart"></span>
                               <span class="rate-text">95%</span>

                            </div>
                        </div>

                    </div>
                    <div class="t-m-i-h cmg-mv bt-grey">
                        <h2>coming soon</h2>
                    </div>
                    <div class="t-m-i-b date-rating">

                        <div class="t-m-r-i">
                             <div class="trend-calendar cmg-mv-cal">
                                <span class="month">oct</span>
                                <span class="date">24</span>
                            </div>
                            <span class="trend-movie-title">how met your mother,tha conclusion</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-green">
                                <span class="glyphicon glyphicon-heart"></span>
                                <span class="rate-text">55%</span>

                            </div>
                        </div>
                         <div class="t-m-r-i">
                             <div class="trend-calendar cmg-mv-cal">
                                <span class="month">nov</span>
                                <span class="date">24</span>
                            </div>
                            <span class="trend-movie-title">babu bangaram</span>
                            <span class="trend-movie-lang">telugu</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-heart"></span>
                               <span class="rate-text">85%</span>

                            </div>
                        </div>
                         <div class="t-m-r-i">
                             <div class="trend-calendar cmg-mv-cal">
                                <span class="month">dec</span>
                                <span class="date">24</span>
                            </div>
                            <span class="trend-movie-title">the soldier 2</span>
                            <span class="trend-movie-lang">english</span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-heart"></span>
                               <span class="rate-text">95%</span>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
