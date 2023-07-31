@extends('layouts.admin')

@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Our Team Member</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Member list</h3>
                <a href="{{ route('service.create') }}" class="btn btn-sm btn-primary" style="float:right">Add New</a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 10px">Sl</th>
                            <th>Service Name</th>
                            <th>Category </th>
                            <th>SubCategory </th>
                            <th>Service Details</th>
                            <th>Image</th>

                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->service_name }}</td>
                                <td>{{ $data->category_name }}</td>
                                <td>{{ $data->subcategory_name }}</td>
                                <td>{{ $data->service_details }}</td>
                                <td><img style="width: 70px; height:70px" src="{{ asset($data->service_img) }}" alt="">
                                <td>
                                    <a href="" class="btn btn-sm btn-info edit" data-id="{{ $data->id }}"
                                        data-toggle="modal" data-target="#editServiceModel">edit</a>
                                    <a href="{{ route('service.destroy', $data->id) }}"
                                        class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.content -->
    </div>

    {{-- category edit model --}}
    <!-- Modal -->
    <div class="modal fade" id="editServiceModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Service </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update.service') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="e_service_id">
                        <div class="card-body">
                            <div class="mb-3 mb-3">
                                <label for="service_name" class="form-label">Service Name:</label>
                                <input type="text" class="form-control @error('service_name') is-invalid @enderror"
                                    value="{{ old('service_name') }}" name="service_name" id="e_service_name" placeholder="Enter Name">
                            </div>
                            @error('service_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="service_details" class="form-label">Service Details:</label>
                                <textarea name="service_details" id="e_service_details"  class="form-control @error('service_details') is-invalid @enderror"  cols="" rows="" >{{ old('service_details') }}</textarea>
                            </div>
                            @error('service_details')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="service_img" class="form-label">Service Image:</label>
                                <input type="file" class="form-control @error('service_img') is-invalid @enderror"
                                    value="{{ old('service_img') }}" name="service_img" id="e_service_img">
                            </div>
                            @error('service_img')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('body').on('click', '.edit', function() {
            let service_id = $(this).data('id');
            $.get("service/edit/" + service_id, function(data) {
                $('#e_service_name').val(data.service_name);
                $('#e_service_details').val(data.service_details);
                $('#e_service_img').val(data.service_img);
                $('#e_service_id').val(data.id);
            })
        })
    </script>
@endsection
