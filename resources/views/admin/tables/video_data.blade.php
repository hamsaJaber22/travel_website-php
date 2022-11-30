@extends('admin.layout.master')

@section('page_name')
    Videos
@endsection

@section('main_page')
    Home
@endsection

@section('sub_page')
    Videos
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div> --}}

                        <div class="d-flex justify-content-between mx-3 mt-3 align-items-center">
                            {{-- filter --}}
                            <input class="py-2 " type="text" id="myInput" onkeyup="myFunction()"
                                placeholder="Search for names.."
                                style="background-image: url('{{ asset('admin/assets/img/Vector_search_icon.svg.png') }}');"
                                title="Type in a name" />

                            {{-- add video --}}
                            <div>
                                <a class="add_video btn btn-success" href="{{ url('admin/add_video') }}">add video
                                    {{-- <i class="fa fa-trash text-white pl-2"></i> --}}
                                </a>
                                {{-- delete all --}}
                                <a class="btn btn-danger" href="{{ url('delet_all_videos') }}">delete all
                                    <i class="fa fa-trash text-white pl-2"></i>
                                </a>
                            </div>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="background-image: url('{{ asset('admin/assets/img/Vector_search_icon.svg.png')}}');"  title="Type in a name"> --}}
                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="bg-black"><i class="fa fa-video pr-1"></i>Video Name</th>
                                        <th>Created At</th>
                                        <th>Poster</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($videos as $video)
                                        <tr>
                                            <td>{{ $video->name }}</td>
                                            <td>{{ Carbon\carbon::parse($video->created_at)->format('d M Y') }}</td>
                                            {{-- <td>{{ $video->description }}</td> --}}

                                            {{-- poster --}}
                                            <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2"
                                                    data-toggle="modal" data-target="#posterModal">
                                                    <i class="fa fa-image"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="posterModal" tabindex="-1"
                                                    aria-labelledby="posterModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Vdieo Poster</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ asset('storage/' . $video->poster) }}"
                                                                    class="img-thumbnail" alt="user photo" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            {{-- description --}}
                                            <td class="text-center">
                                                {{-- video description --}}
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2"
                                                    data-toggle="modal" data-target="#videoModal">
                                                    <i class="fa fa-info"></i> </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="videoModal" tabindex="-1"
                                                    aria-labelledby="videoModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Vdieo Description</h5>
                                                            </div>

                                                            <div class="modal-body">
                                                                <p>{{ $video->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            {{-- edit and delete --}}
                                            <td class="d-flex justify-content-center">
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                    class="btn btn-primary btn btn-info text-capitalize ms-3 px-2 py-1"
                                                    data-toggle="modal" data-target="#editModal{{ $video->id }}">
                                                    <i class="nav-icon fas fa-edit text-white"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="editModal{{ $video->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Modal title
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <form method="post"
                                                                        action="{{ url("
                                                                        /$video->id") }}"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <!-- text input -->
                                                                        <div class="form-group">
                                                                            <label class="text-capitalize">video
                                                                                name</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name" placeholder="Enter ..."
                                                                                value="{{ $video->name }}">
                                                                        </div>
                                                                        @error('name')
                                                                            <div class="alert alert-danger mb-2">
                                                                                {{ $message }}</div>
                                                                        @enderror

                                                                        <!-- textarea -->
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="text-capitalize">description</label>
                                                                            <textarea class="form-control" rows="2" name="description" placeholder="Enter ...">{{ $video->description }}</textarea>
                                                                        </div>
                                                                        @error('description')
                                                                            <div class="alert alert-danger mb-2">
                                                                                {{ $message }}</div>
                                                                        @enderror

                                                                        <div class="form-group">
                                                                            <label for="exampleInputFile">video
                                                                                input</label>
                                                                            {{-- <div class="input-group">
                                                                                <div class="custom-file"> --}}
                                                                            <input type="file"
                                                                                class="form-control-file border rounded"
                                                                                id="exampleInputFile" name="video"
                                                                                value="{{ $video->video }}">
                                                                        </div>
                                                                        @error('video')
                                                                            <div class="alert alert-danger mb-2">
                                                                                {{ $message }}</div>
                                                                        @enderror

                                                                        <div class="form-group">
                                                                            <label for="exampleInputFile">poster
                                                                                input</label>
                                                                            <input type="file"
                                                                                class="form-control-file border rounded"
                                                                                id="exampleInputFile" name="poster"
                                                                                value="{{ $video->poster }}">
                                                                        </div>
                                                                        @error('poster')
                                                                            <div class="alert alert-danger mb-2">
                                                                                {{ $message }}</div>
                                                                        @enderror

                                                                        <!-- select -->

                                                                        <div class="form-group">
                                                                            <label>Select Category</label>
                                                                            <select class="form-control" name="cat_id"
                                                                                value="{{ old('select') }}">

                                                                                <option value="{{ $video->cat_id }}">
                                                                                    {{ $video->cat->name }}</option>

                                                                            </select>

                                                                        </div>
                                                                        @error('select')
                                                                            <div class="alert alert-danger mb-2">
                                                                                {{ $message }}</div>
                                                                        @enderror

                                                                        <!-- radio to choose video type-->

                                                                        <div class="form-group">
                                                                            <label class="text-capitalize">video
                                                                                type</label>
                                                                            <div class="d-flex">
                                                                                <div class="form-check mx-3">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="type"
                                                                                        value="1"
                                                                                        {{ $video->type == '1' ? 'checked' : '' }}>
                                                                                    <label
                                                                                        class="form-check-label text-capitalize">film</label>


                                                                                </div>
                                                                                <div class="form-check mx-3">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="type"
                                                                                        value="2"
                                                                                        {{ $video->type == '2' ? 'checked' : '' }}>
                                                                                    <label
                                                                                        class="form-check-label text-capitalize">series</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @error('type')
                                                                            <div class="alert alert-danger mb-2">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                        {{--
                                                                        <div class="d-flex justify-content-center pt-2">
                                                                            <input class="btn btn-info w-25" type="submit" value="Add">
                                                                        </div> --}}

                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <input class="btn btn-info w-25" type="submit"
                                                                    value="Add">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- delete modal --}}
                                                <form method="post" action="{{ url("destroy/$video->id") }}"
                                                    class="ml-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger text-capitalize ms-3 px-2 py-1">
                                                        <i class="fa fa-trash text-white"></i>
                                                    </button>
                                                </form>

                                                </button>
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection

@section('script')
    {{-- filter for user data --}}
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
