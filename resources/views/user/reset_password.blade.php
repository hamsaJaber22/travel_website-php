@include('admin.layout.head')

<div class="d-flex justify-content-center mt-5">
    <div class="login-box mt-5">

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <div class="card_header text-start">
                    <a class="text-dark" href="#"><h4>Recover your password</h4></a>
                </div>
<hr>
                <p class="login-box-msg pt-2">You forgot your password? Please enter your email to search for your account.</p>

                <form action="recover-password.html" method="post" class="mb-0">
                    <div class="input-group mb-5">
                        <input type="email" class="form-control " placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row flex-nowrap w-100">
                        <div class="col-3">
                            <a href="{{url('/')}}" class="btn btn-primary">cancel</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Request</a>
                        </div>
                        <!-- /.col -->
                    </div>

                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>

{{-- <div class="modal" tabindex="-1" role="dialog"> --}}
    {{-- <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}



@include('admin.layout.script')
