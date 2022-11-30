@extends('admin.layout.master')
@section('head')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('page_name')
    Categories
@endsection

@section('main_page')
    Home
@endsection

@section('sub_page')
    Categories
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

                            <a class="btn btn-danger" href="{{ url('delet_all_cats') }}">delete all
                                <i class="fa fa-trash text-white pl-2"></i>
                            </a>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="background-image: url('{{ asset('admin/assets/img/Vector_search_icon.svg.png')}}');"  title="Type in a name"> --}}
                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="bg-black"><i class="fa fa-chart-pie pr-1"></i></i>Category Name</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($cats as $cat)
                                        <tr>
                                            <td>{{ $cat->name }}</td>
                                            <td>{{ $cat->created_at }}</td>
                                            <td>
                                                @if ($cat->status==true)
                                                    {{"active"}}
                                                @else
                                                    {{"not active"}}
                                                @endif
                                            </td>

                                            <td>
                                                {{-- <a class="btn btn-danger" href="{{url("edit_status/$cat->id")}}">edit</a> --}}
                                                    {{-- <input data-id="{{$cat->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $cat->status ? 'checked' : '' }}> --}}
                                                    <input data-id="{{$cat->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $cat->status ? 'checked' : '' }}>

                                            </td>

                                            <td class="d-flex justify-content-center">
                                                <button type="button" data-toggle="modal" data-target="#exampleModal"
                                                    class="btn btn-info text-capitalize ms-3 px-2 py-1">
                                                    <i class="nav-icon fas fa-edit text-white"></i>

                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Category Data</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                </button>

                                                <form method="post" action="{{ url("destroy/cat/$cat->id") }}"
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

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

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

<script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0;
          var user_id = $(this).data('id');

          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/changeStatus',
              data: {'status': status, 'user_id': user_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script>
@endsection
