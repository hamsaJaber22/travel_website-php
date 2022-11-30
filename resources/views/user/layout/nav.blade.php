<!-- start header -->
<header class="bg-transparent">

    <!-- start navbar -->
    <nav>
        <div class="container">
            <div class="nav_content d-flex py-2 align-items-center position-relative">
                <input type="checkbox" name="" id="check">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('user/images/logo3.png') }}" alt="film logo" class="img-fluid logo__image" />
                        <div class="logo__brand">
                            <h5 class="text-uppercase text-steelblue pb-0">watch</h5>
                        </div>
                    </a>
                </div>

                <div class="navbar">
                    <div class="navbar__list">
                        <ul class="text-capitalize d-flex align-items-center mb-0">
                            <li class="nav__link" style="--i: .6s">
                                <a href="{{ url('/') }}">home</a>
                            </li>
                            <li class="nav__link" style="--i: .85s">
                                <a href="{{ url('user/movie') }}">movie </a>
                            </li>
                            <li class="nav__link" style="--i: 1s">
                                <a href="{{ url('user/tvseries') }}">series</i></a>
                            </li>
                            <li class="nav__link" style="--i: 1.5s">
                                <a href="{{ url('user/price_plan') }}">pricing plans</a>
                            </li>
                            <li class="nav__link" style="--i: 1.5s">
                                <a href="{{ url('user/contact') }}">contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="search">
                        <!--start search-->
                        <div class="has-search">
                            <form method="get" action="#">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" name="name" class="form-control pl-5" placeholder="Search">
                            </form>
                        </div>
                    </div>

                    <div class="navbar__sign" style="--i: 1.8s">

                        @guest
                            <!-- Button trigger modal -->
                            <button type="button" class="navbar__sign__btn" data-toggle="modal"
                                data-target="#exampleModal">
                                Login
                            </button>
                            <button type="button" class="navbar__sign__btn" data-toggle="modal"
                                data-target="#registerModal">
                                Sign up
                            </button>
                        @endguest

                        @auth
                            <ul>

                            </ul>
                            <!-- dropdown -->
                            <div class="btn-group mr-5">
                                <img src="{{ asset('storage/' . Auth::user()->image) }}" type="button" alt="user photo"
                                    class="user__avatar dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" />

                                <div class="dropdown-menu" style="width:230px;">
                                    <div class="mx-2 my-1 rounded border shadow">
                                        <div class="d-flex justify-content-center align-items-center py-2">
                                            <a class="nav-link text-capitalize text-dark"
                                                href="{{ url('user/profile') }}">{{Auth::user()->name}}</a>
                                            <a href="{{ url('user/profile') }}">
                                                <img class="user__avatar" alt="user photo"
                                                    src="{{ asset('storage/' . Auth::user()->image) }}" />
                                            </a>
                                        </div>
                                        <hr class="mt-0 mb-1 bg-emerald-300">
                                        <a href="{{ url('user/profile') }}">
                                            <p class="user_profile pl-3 mb-2">View your profile</p>
                                        </a>
                                    </div>
                                    <a class="dropdown-item pt-3" href="{{ url('edit/' . Auth::user()->id) }}">Edit
                                        profile</a>
                                    <a class="dropdown-item" href="{{ url('logout') }}">logout</a>

                                </div>
                            </div>

                        @endauth

                        <!--login Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Login</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="overflow: hidden;">
                                        <form enctype="multipart/form-data" method="post"
                                            action="{{ url('login') }}">
                                            @csrf
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-sm"
                                                        name="email" id="userEmail" aria-describedby="helpId"
                                                        required="required" placeholder="Email">
                                                </div>
                                                {{-- @error('email')
                                                    <div class="alert alert-danger mb-2">{{ $message }}</div>
                                                @enderror --}}

                                                <div class="form-group d-flex align-items-center justify-content-end">
                                                    <input type="password" class="form-control form-control-sm"
                                                        name="password" id="id_password" required="required"
                                                        aria-describedby="helpId" placeholder="Password">
                                                    <i class="far fa-eye position-absolute mr-4"
                                                        id="togglePassword"></i>
                                                </div>

                                                {{-- @error('password')
                                                    <div class="alert alert-danger mb-2">{{ $message }}</div>
                                                @enderror --}}

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">your type</label>
                                                    <select class="form-control form-control-sm" name="type"
                                                        id="userType">
                                                        <option value="1">client</option>
                                                        <option value="2">shopkeeper</option>
                                                    </select>
                                                </div>

                                                <div class="modal-footer d-flex justify-content-between">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">Cancel</button>

                                                    <button type="submit" class="btn btn-outline-info">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--register Modal -->
                        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
                            aria-labelledby="registerModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="registerModalLabel1">Register</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="overflow: hidden;">

                                        <form enctype="multipart/form-data" method="post"
                                            action="{{ url('register') }}">
                                            @csrf
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="name" id="userFirstName" aria-describedby="helpId"
                                                        required="required" placeholder="Name" value="{{old('name')}}">
                                                </div>
                                                @error('name')
                                                    <div class="alert alert-danger mb-2">{{ $message }}</div>
                                                @enderror

                                                <div class="form-group">

                                                    <input type="file" class="form-control form-control-sm"
                                                        name="image" id="userFirstName" aria-describedby="helpId"
                                                        required="required" placeholder="your photo">
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-sm"
                                                        name="email" id="userEmail" aria-describedby="helpId"
                                                        required="required" placeholder="Email" value="{{old('email')}}">
                                                </div>
                                                @error('email')
                                                    <div class="alert alert-danger mb-2">{{ $message }}</div>
                                                @enderror

                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-sm"
                                                        name="password" id="myInput" required="required"
                                                        aria-describedby="helpId" placeholder="Password" value="{{old('[password]')}}">
                                                </div>
                                                @error('password')
                                                    <div class="alert alert-danger mb-2">{{ $message }}</div>
                                                @enderror

                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-sm"
                                                        name="password_confirmation"placeholder="Repeat Password" value="{{old('password_confirmation')}}"
                                                        id="myInput" required>
                                                </div>
                                                <input type="checkbox" onclick="myFunction()">Show Password

                                                <div class="form-group">
                                                    <textarea rows="1" cols="50" name="biography" class="form-control" id="exampleInputEmail1" value="{{old('biography')}}">write a Biography
                                                        </textarea>
                                                </div>
                                                @error('biography')
                                                    <div class="alert alert-danger mb-1">{{ $message }}</div>
                                                @enderror


                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">your type</label>
                                                    <select class="form-control form-control-sm" name="type"
                                                        id="userType">
                                                        <option value="1">client</option>
                                                        <option value="2">shopkeeper</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-outline-info"
                                                    class=">Register">Sign up</button>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- @if (count($errors) > 0)
                            <script>
                                $(document).ready(function() {
                                    $('#registerModal').modal('show');
                                });
                            </script>
                        @endif --}}
                        {{-- <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-outline-info">Login</button>
                                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="navbarToggler">
            <div class="navbarToggler__Menu">
                <div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </nav>
    <!-- end navbar -->

</header>
<!-- end header -->

{{-- show password and confirm --}}
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

@section('script')
@if($errors->has('email') || $errors->has('password')|| $errors->has('password_confirmation'))
    <script>
    $(function() {
        $('#registerModal').modal({
            show: true
        });
    });
    </script>
@endif
{{--
@if($errors->has('email') || $errors->has('password'))
    <script>
    $(function() {
        $('#exampleModal').modal({
            show: true
        });
    });
    </script>
@endif --}}

@endsection

