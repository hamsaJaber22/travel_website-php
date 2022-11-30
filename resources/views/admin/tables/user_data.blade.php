@extends('admin.layout.master')

@section('page_name')
    Users
@endsection

@section('main_page')
    Home
@endsection

@section('sub_page')
    Users
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
                            <input class="py-2 " type="text" id="myInput" onkeyup="myFunction()"
                                placeholder="Search for names.."
                                style="background-image: url('{{ asset('admin/assets/img/Vector_search_icon.svg.png') }}');"
                                title="Type in a name">

                            <a class="btn btn-danger" href="{{ url('delet_all_users') }}">delete all
                                <i class="fa fa-trash text-white pl-2"></i>
                            </a>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="background-image: url('{{ asset('admin/assets/img/Vector_search_icon.svg.png')}}');"  title="Type in a name"> --}}
                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="bg-black"><i class="fa fa-users px-2"></i>User Name</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Last Profile Edit</th>
                                        <th>photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td class="text-center">
                                                {{-- user image --}}
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2"
                                                    data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fa fa-image"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img src="{{ asset('storage/' . $user->image) }}"
                                                                    class="img-thumbnail" alt="user photo" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{-- <a href="#"><i class="nav-icon fas fa-edit text-info"></i></a> --}}
                                                {{-- <a href="#"><i class="fa fa-trash text-danger"></i></a> --}}
                                                <button class="btn btn-info text-capitalize ms-3 px-2 py-1"><i
                                                        class="nav-icon fas fa-edit text-white"></i></button>
                                                <button class="btn btn-danger text-capitalize ms-3 px-2 py-1"><i
                                                        class="fa fa-trash text-white"></i></button>
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
