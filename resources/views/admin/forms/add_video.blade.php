@extends('admin.layout.master')

@section('page_name')
    Video
@endsection

@section('main_page')
    Home
@endsection

@section('sub_page')
    Add Video
@endsection



@section('content')
    <div class="add_form d-flex justify-content-center">
        <div class="card card-info w-50 d-flex">
            <div class="card-header">
                <h3 class="card-title text-capitalize">Add Video</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="{{ url('admin/store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- text input -->
                    <div class="form-group">
                        <label class="text-capitalize">video name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter ..."
                            value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror

                    <!-- textarea -->
                    <div class="form-group">
                        <label class="text-capitalize">description</label>
                        <textarea class="form-control" rows="2" name="description" placeholder="Enter ...">{{ old('description') }}</textarea>
                    </div>
                    @error('description')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputFile">video input</label>
                        {{-- <div class="input-group">
                            <div class="custom-file"> --}}
                        <input type="file" class="form-control-file border rounded" id="exampleInputFile" name="video"
                            value="{{ old('video') }}">
                    </div>
                    @error('video')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputFile">poster input</label>
                        <input type="file" class="form-control-file border rounded" id="exampleInputFile" name="poster"
                            value="{{ old('poster') }}">
                    </div>

                    @error('poster')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror

                    <!-- select -->

                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" name="cat_id" value="{{ old('select') }}">
                            @foreach ($cats as $cat)
                                <option value="{{$cat->id}}">{{ $cat->name }}</option>
                            @endforeach
                        </select>

                    </div>

                    @error('select')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror

                    <!-- radio to choose video type-->

                    <div class="form-group">
                        <label class="text-capitalize">video type</label>
                        <div class="d-flex">
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" name="type" value="1"
                                    {{ old('type') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label text-capitalize">film</label>


                            </div>
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" name="type" value="2"
                                    {{ old('type') == '2' ? 'checked' : '' }}>
                                <label class="form-check-label text-capitalize">series</label>
                            </div>
                        </div>
                    </div>
                    @error('type')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror

                    <div class="d-flex justify-content-center pt-2">
                        <input class="btn btn-info w-25" type="submit" value="Add">
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
