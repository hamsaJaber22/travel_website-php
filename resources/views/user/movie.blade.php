@extends('user.layout.master')

@section('title')
    movie
@endsection

@section('content')
    <!-- start movies sevction -->
    <section id="movies" class="movies row position-relative">
        <input type="checkbox" name="display" id="checkFilter">
        <div class="movies__categories col-lg-3 container  ">
            <div class="movies__categories_type mt-5">
                <div class="movies__categories__byYear ">
                    <h2>Top 5 List</h2>
                    <hr>
                    <div class="Top5List__item">
                        <div class="Top5List__item__left">
                            1
                        </div>
                        <div class="Top5List__item__right text-white">
                            <small>2021</small>
                            <h3>movie name</h3>
                            <small>movie type</small>
                        </div>
                    </div>
                    <hr>
                    <div class="Top5List__item">
                        <div class="Top5List__item__left">
                            2
                        </div>
                        <div class="Top5List__item__right">
                            <small>2021</small>
                            <h3>movie name</h3>
                            <small>movie type</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="movies__filter col-lg-9 mt-5">
            <h2 class="text-capitalize">movies</h2>
            <hr>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                @foreach ($videos as $video)

                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-{{ $video->cat->name }}-tab" data-toggle="pill"
                            href="#pills-{{ $video->cat->name }}" role="tab"
                            aria-controls="pills-{{ $video->cat->name }}" aria-selected="false">{{ $video->cat->name }}</a>
                    </li>

                @endforeach

            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        @foreach ($videos as $video)
                            <div class="show_video col-3 border border-info m-3">
                                <div class="video">
                                    <video width="200" height="170" muted class="d-flex align-items-center"
                                        poster="{{ asset('storage/' . $video->poster) }}">
                                        <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="overlay">
                                        <div class="video_data">

                                            <a href="{{ url('details/' . $video->id) }}"
                                                class="">{{ $video->name }}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @foreach ($videos as $video)
                    <div class="tab-pane fade" id="pills-{{ $video->cat->name }}" role="tabpanel"
                        aria-labelledby="pills-{{ $video->cat->name }}-tab">

                        <div class="row">
                            <div class="show_video col-3 border border-info m-3">
                                <div class="video">
                                    <video width="200" height="170" muted class="d-flex align-items-center"
                                        poster="{{ asset('storage/' . $video->poster) }}">
                                        <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="overlay">
                                        <div class="video_data">

                                            <a href="{{ url('details/' . $video->id) }}"
                                                class="text-white">{{ $video->name }}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- end movies section -->
@endsection
