@extends('user.layout.master')

@section('title')
  home page
@endsection

@section('content')
    <!-- start home section -->
    <section class="home" id="home">
        <div class="home__content">
            <div class="home__content__details">
                <small>2hr 13min</small>
                <small>Action,Family</small>
                <small>2016</small>
            </div>
            <div class="home__content__title">
                <h1>Fantastic Beasts and Where to Find Them</h1>
            </div>
            <div class="home__content__btn">
                <a href="#" class="btn btn-outline-info">WATCH NOW</a>
            </div>
        </div>
        <!-- to change header img -->
        <div class="home__figure">
            <div class="home__figure__fiqureImage">
                <img src="{{asset('user/images/headerImages/h5-slider-1.jpg')}}" class="figureImage" id="0" alt="">
            </div>
            <div class="home__figure__fiqureImage">
                <img src="{{asset('user/images/headerImages/h5-slider-2.jpg')}}" class="figureImage" id="1" alt="">
            </div>
            <div class="home__figure__fiqureImage">
                <img src="{{asset('user/images/headerImages/h5-slider-3.jpg')}}" class="figureImage" id="2" alt="">
            </div>
            <div class="home__figure__fiqureImage ">
                <img src="{{asset('user/images/headerImages/h5-slider-4.jpg')}}" class="figureImage" id="3" alt="">
            </div>
            <div class="home__figure__fiqureImage figure__active">
                <img src="{{asset('user/images/headerImages/h5-slider-5.jpg')}}" class="figureImage" id="4" alt="">
            </div>
        </div>
    </section>
    
    <!-- end home section -->

    <!-- start Trending TVshow section -->
    <section class="trendingTVShow mt-3" id="trendingTVShow">
        <div class="container-fluid">
            <div class="trendingTVShow__header container">

                <h2>Trending TV Shows</h2>
                <ul class="trendingTVShow__header__list">
                    <li>
                        <a class="active tvshowFilter" data-filter="all">All</a>
                    </li>
                    <li>
                        <a class="tvshowFilter" data-filter=".today">Today</a>
                    </li>
                    <li>
                        <a class="tvshowFilter" data-filter=" .thisweek ">This week</a>
                    </li>
                    <li>
                        <a class="tvshowFilter" data-filter=".thismonth">This month</a>
                    </li>
                    <i data-sort="order:asc" class="tvshowFilter fas fa-caret-up "></i>
                    <i data-sort="order:descending" class="tvshowFilter fas fa-caret-down"></i>
                    <i data-sort="random" class="tvshowFilter fas fa-random active text-steelblue"></i>
                </ul>
            </div>
            <div class=" trendingTVShow__Gallary " id="trendingTVShow ">
                <div class="row ">
                    <div class="mix today thisweek item col-md-4 " data-order="5">
                        <div class="overlayTV ">
                            <a href="# ">watch now</a>
                        </div>

                        <div class="image ">
                            <img src="{{asset('user/images/TV Show/17-1.jpg')}}" alt="trending tv show ">
                            <div class="image__details ">
                                <small>2015</small>
                                <strong>The Plan</strong>
                            </div>
                        </div>


                    </div>
                    <div class="mix thisweek item col-md-4 " data-order="1">
                        <div class="overlayTV ">
                            <a href="# ">watch now</a>
                        </div>
                        <div class="image ">
                            <img src="{{asset('user/images/TV Show/39-journey.jpg')}}" alt="trending tv show ">
                            <div class="image__details ">
                                <small>2015</small>
                                <strong>The Plan</strong>
                            </div>
                        </div>
                    </div>
                    <div class="mix thisweek item col-md-4 " data-order="6">
                        <div class="overlayTV ">
                            <a href="# ">watch now</a>
                        </div>
                        <div class="image ">
                            <img src="{{asset('user/images/TV Show/4-1.jpg')}}" alt="trending tv show ">
                            <div class="image__details ">
                                <small>2015</small>
                                <strong>The Plan</strong>
                            </div>
                        </div>
                    </div>
                    <div class="mix  thismonth item col-md-4 " data-order="3">
                        <div class="overlayTV ">
                            <a href="# ">watch now</a>
                        </div>
                        <div class="image ">
                            <img src="{{asset('user/images/TV Show/42-limit.jpg')}}" alt="trending tv show ">
                            <div class="image__details ">
                                <small>2015</small>
                                <strong>The Plan</strong>
                            </div>
                        </div>
                    </div>
                    <div class="mix today item col-md-4 " data-order="2">
                        <div class="overlayTV ">
                            <a href="# ">watch now</a>
                        </div>
                        <div class="image ">
                            <img src="{{asset('user/images/TV Show/46-point-of-view.jpg')}}" alt="trending tv show ">
                            <div class="image__details ">
                                <small>2015</small>
                                <strong>The Plan</strong>
                            </div>
                        </div>
                    </div>
                    <div class="mix thismonth  item col-md-4 " data-order="4">
                        <div class="overlayTV ">
                            <a href="# ">watch now</a>
                        </div>
                        <div class="image ">
                            <img src="{{asset('user/images/TV Show/57-winnie.jpg')}}" alt="trending tv show ">
                            <div class="image__details ">
                                <small>2015</small>
                                <strong>The Plan</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Trending TVshow section -->
    <hr>
    <!-- start top movies in 2019  section-->
    <section class="topMovie">
        <div class="container">
            <div class="topMovie__header">
                <h2>Top Movie <small>2019</small></h2>
                <ul>
                    <li>
                        <a class="active movieFilter" data-filter="all">All</a>
                    </li>
                    <li>
                        <a class="movieFilter" data-filter=".action">Action</a>
                    </li>
                    <li>
                        <a class="movieFilter" data-filter=".drama">Drama</a>
                    </li>
                    <li>
                        <a class="movieFilter" data-filter=".kids">Kids</a>
                    </li>
                    <li>
                        <a class="movieFilter" data-filter=".romantic">Romantic</a>
                    </li>
                    <li>
                        <a class="movieFilter" data-filter=".comedy ">Comedy</a>
                    </li>
                </ul>
            </div>
            <div class="topMovie__content ">
                <div class="topMovie__content__item mix comedy action ">
                    <img class="img-fluid " src="{{asset('user/images/movie/46-she-is-funny-that-way-300x450.jpg')}}"
                        alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>
                            <div class="topnav">
                            </div>title
                        </small>
                    </div>
                </div>
                <div class="topMovie__content__item mix romantic drama ">
                    <img class="img-fluid " src="{{asset('user/images/movie/1-300x450.jpg') }}" alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>title</small>
                    </div>
                </div>
                <div class="topMovie__content__item mix comedy kids ">
                    <img class="img-fluid " src="{{ asset('user/images/movie/13-300x450.jpg') }}" alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>title</small>
                    </div>
                </div>
                <div class="topMovie__content__item mix comedy kids ">
                    <img class="img-fluid " src="{{ asset('user/images/movie/23-300x450.jpg') }}" alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>title</small>
                    </div>
                </div>
                <div class="topMovie__content__item mix comedy action drama ">
                    <img class="img-fluid " src="{{ asset('user/images/movie/3-300x450.jpg') }}" alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>title</small>
                    </div>
                </div>
                <div class="topMovie__content__item mix romantic ">
                    <img class="img-fluid " src="{{ asset('user/images/movie/37-dangerous-mind-300x450.jpg') }}"
                        alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>title</small>
                    </div>
                </div>
                <div class="topMovie__content__item mix kids ">
                    <img class="img-fluid " src="{{ asset('user/images/movie/44-playing-it-cool-300x450.jpg') }}"
                        alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>title</small>
                    </div>
                </div>
                <div class="topMovie__content__item mix drama action ">
                    <img class="img-fluid " src={{ asset('user/images/movie/46-she-is-funny-that-way-300x450.jpg') }}
                        alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>title</small>
                    </div>
                </div>
                <div class="topMovie__content__item mix comedy ">
                    <img class="img-fluid " src="{{ asset('user/images/movie/45-rybka-zwana-wanda-300x450.jpg') }}"
                        alt="top movie 019 ">
                    <div class="topMovie__content__item__overlay ">
                        <small>type</small>
                        <small>title</small>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- end top movies in 2019  section-->
@endsection


