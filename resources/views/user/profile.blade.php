@extends('user.layout.master')

@section('title')
    user profile
@endsection

<!-- start profile content -->
@section('content')
    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5 p-4 bg-gray" id="vayvo-progression-author-sidebar">

                        <div id="content-sidebar-info">

                            <div id="avatar-sidebar-large-profile"></div>
                            <div id="profile-sidebar-gradient"></div>
                            <a href="{{ url('edit/' . Auth::user()->id) }}" class="edit-profile-sidebar">Edit</a>
                 
                        </div>
                        @auth

                                <div id="vayvo-profile-sidebar-name" class="text-center py-4">
                                    <img class="user_profile_img" src="{{ asset('storage/' .Auth::user()->image) }}">
                                </div>

                                <div id="vayvo-profile-sidebar-name mt-3">
                                    <h5 class="text-center text-monospace">{{ Auth::user()->name }}</h5>
                                    <h5 class="text-center text-monospace">{{Auth::user()->email}}</h5>
                                </div>
                                <hr>

                                <div class="content-sidebar-section">
                                    <h5 class="text-monospace">Member Since</h5>
                                    <div class="content-sidebar-simple-text">
                                        <h4>{{Auth::user()->created_at}}</h4>
                                    </div>
                                </div>
                                <hr>

                                <div class="content-sidebar-sectionl">
                                    <h5 class=" text-monospace">Biography</h5>
                                    <div class="content-sidebar-biography-text">
                                        <h5 class="fs-3 text-monospace">{{Auth::user()->biography}}</h5>
                                    </div>
                                </div>
                        @endauth


                    </div>
                </div>

                <div class="col-lg-8 my-5">
                    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                        <li class="col-5 offset-1 nav-item py-3 border border-dark rounded" role="presentation">
                            <a class="nav-link text-center" id="pills-Watchlist-tab" data-toggle="pill"
                                href="#pills-Watchlist" role="tab" aria-controls="pills-Watchlist"
                                aria-selected="false">Watchlist</a>
                        </li>
                        <li class="col-5 offset-1 nav-item py-3 border border-dark rounded" role="presentation">
                            <a class="nav-link text-center" id="pills-favorate-tab" data-toggle="pill"
                                href="#pills-favorate" role="tab" aria-controls="pills-favorate"
                                aria-selected="false">favorate</a>
                        </li>
                    </ul>
                    <div class="tab-content col-11 offset-1 py-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Watchlist" role="tabpanel"
                            aria-labelledby="pills-Watchlist-tab">Watchlist</div>
                        <div class="tab-pane fade" id="pills-favorate" role="tabpanel" aria-labelledby="pills-favorate-tab">
                            favorate</div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
@endsection

<!-- end profile content -->
