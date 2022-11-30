@extends('user.layout.master')

@section('title')
    update user profile
@endsection

@section('content')
    <!-- start content update -->
    <section class="update_profile" class="">
        <div class="container w-50">
            <div class="row justify-content-center">
                <div class="p-3 my-5 bg-gray w-40" id="vayvo-progression-author-sidebar">
                    <h5 class="text-center pb-0 pt-1">Edit your Profile</h5>
                    <hr>

                    <form action="{{url("/update/$users->id")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control form-control-sm" name="name" id="username"
                                aria-describedby="helpId" required="required" placeholder="" value="{{ $users->name }}">
                        </div>

                        <div class="form-group">
                            <label for="userEmail">email</label>
                            <input type="text" name="email" value="{{ $users->email }}" class="form-control"
                                id="useremail" placeholder="email">

                            @error('fee')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="userPassword">password</label>
                            <div class="d-flex align-items-center justify-content-end">
                                <input type="password" class="show_pass form-control form-control-sm" name="password"
                                    id="id_password" aria-describedby="helpId" required="required" placeholder=""
                                    value="{{ $users->password }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="userEmail">photo</label>
                            <input type="file" class="form-control form-control-sm" name="image" id="userphoto"
                                aria-describedby="helpId"  placeholder="" value="">
                        </div>
                        <div id="vayvo-profile-sidebar-name" class="">
                            <img class="user_profileEdit_img" width="30%" src="{{ asset('storage/' .Auth::user()->image) }}">
                        </div>


                        <div class="form-group">
                            <label for="userEmail">biography</label>
                            <textarea rows="1" cols="50" name="biography" class="form-control" id="exampleInputEmail1">{{ $users->biography }}</textarea>
                        </div>

                        <input type="submit" class="btn btn-outline-info" name="edit" value="UPDATE DATA" />
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
