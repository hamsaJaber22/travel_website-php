@extends('user.layout.master')

@section('title')
  content
@endsection

@section('content')
    <!--start content section -->
    <section class="contct" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-4 col-sm-7 py-3 my-4 bg-gray">
                    <hr>

                    <form action="email.html" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control mb-2" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control mb-2" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" class="form-control mb-2" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="">message</label>
                            <textarea class="form-control mb-2" name="message" id="message" rows="4" placeholder="write your message"></textarea>
                        </div>
                        <button name="btn-send" class="btn btn-info">send</button>
                    </form>

                </div>
                <div class=" col-4 col-lg-4 col-md-4 col-sm-6 offset-2 d-flex align-items-center">
                    <img src="{{asset('user/images/cat-banner.jpg')}}" class="img-fluid " alt=" ">
                </div>
            </div>
        </div>
    </section>
    <!-- end content section -->

@endsection

