@extends('admin.layout.master')

@section('page_name')
    Category
@endsection

@section('main_page')
    Home
@endsection

@section('sub_page')
    Add Category
@endsection



@section('content')
    <div class="add_form d-flex justify-content-center">
        <div class="card card-info w-50 d-flex ">
            <div class="card-header">
                <h3 class="card-title text-capitalize">Add Category</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="{{ url('admin/add_category') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="text-capitalize">category name</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="name" value="{{old('name')}}">
                            </div>
                            @error('name')
                                <div class="alert alert-danger mb-2">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <!-- status -->
                    <label>Category Status</label>
                    <div class="form-group pl-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="1"
                                {{ old('status') == '1' ? 'checked' : '' }}>
                            <label class="form-check-label">Active</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="2"
                                {{ old('status') == '2' ? 'checked' : '' }}>
                            <label class="form-check-label">Not Active</label>
                        </div>
                    </div>
                    @error('status')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <div class="d-flex justify-content-center pt-2">
                        <input class="btn btn-info w-25" type="submit" value="Add" />
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
