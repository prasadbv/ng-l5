<div class="trending-movies">
        <div class="container">
            <div class="row">
                <div class="col-md-4 trend-movie-item">
                    <div class="t-m-i-h bt-mandy">
                        <h2>now showing</h2>
                    </div>
                    <div class="t-m-i-b" ng-init="nowshows = {{$movies->NowShowing1()}}">
                        <div class="t-m-r-i" ng-repeat="nowshow in nowshows.movies">
                            <span class="trend-movie-title"><%nowshow.name%></span>
                            <span class="trend-movie-lang" ng-repeat="gn in nowshow.genre.split(',')"><%gn%></span>
                            <div class="trend-movie-star bcg-yellow shw-pop" data-mid="<%nowshow.id%>">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text" ><%nowshow.rating%></span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 trend-movie-item">
                    <div class="t-m-i-h bt-yellow">
                        <h2>top box-office</h2>
                    </div>
                    <div class="t-m-i-b" ng-init="boxshows = {{$movies->BoxOfc()}}">
                        <div class="t-m-r-i" ng-repeat="boxshow in boxshows | filter:query">
                            <span class="trend-movie-title"><%boxshow.name%></span>
                            <span class="trend-movie-lang" ng-repeat="tgn in boxshow.genre.split(',')"><%tgn%></span>
                            <div class="trend-movie-star bcg-green">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="rate-text"><%boxshow.rating%></span>
                                <span class="rate-text1">/5</span>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="col-md-4 trend-movie-item">
                    <div class="t-m-i-h bt-green">
                        <h2>coming this week</h2>
                    </div>
                    <div class="t-m-i-b date-rating" ng-init="comingshows = {{$movies->ComingWeek()}}">
                        <div class="t-m-r-i" ng-repeat="comingshow in comingshows | filter:query">
                            <div class="trend-calendar cmg-wk-cal">
                                <span class="day">Mon</span>
                                <span class="date">24</span>
                            </div>
                            <span class="trend-movie-title"><%comingshow.name%></span>
                            <span class="trend-movie-lang"><%comingshow.genre%></span>
                            <div class="trend-movie-star bcg-yellow">
                                <span class="glyphicon glyphicon-heart"></span>
                                <span class="rate-text">55%</span>

                            </div>
                        </div>
                    </div>
                    <div class="t-m-i-h cmg-mv bt-grey">
                        <h2>coming soon</h2>
                    </div>
                    <div class="t-m-i-b date-rating" ng-init="comingsoons = {{$movies->ComingSoon()}}">

                        <div class="t-m-r-i" ng-repeat="comingsoon in comingsoons | filter:query">
                             <div class="trend-calendar cmg-mv-cal">
                                <span class="month"><%1288323623006 | date:'MMM'%></span>
                                <span class="date"><%1288323623006 | date:'dd'%></span>
                            </div>
                            <span class="trend-movie-title"><%comingsoon.name%></span>
                            <span class="trend-movie-lang"><%comingsoon.genre%></span>
                            <div class="trend-movie-star bcg-green">
                                <span class="glyphicon glyphicon-heart"></span>
                                <span class="rate-text">55%</span>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
