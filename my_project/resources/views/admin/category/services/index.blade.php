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
                                <td>{{ $data->service_details }}</td>
                                <td><img style="width: 70px; height:70px" src="{{ asset($data->image) }}" alt="">
                                <td>
                                    <a href="" class="btn btn-sm btn-info edit" data-id="{{ $data->id }}"
                                        data-toggle="modal" data-target="#editteamModel">edit</a>
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
    <div class="modal fade" id="editteamModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit team Member </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('service.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="e_teamMember_id">
                        <div class="card-body">
                            <div class="mb-3 mb-3">
                                <label for="name" class="form-label">Full Name:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" name="name" id="e_name" placeholder="Enter Name">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3 mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" name="email" id="e_email" placeholder="Enter Email">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3 mb-3">
                                <label for="phone" class="form-label">Phone :</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" name="phone" id="e_phone" placeholder="Enter Phone">
                            </div>
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3 mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}" name="address" id="e_address"
                                    placeholder="Enter address">
                            </div>
                            @error('address')
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
            let member_id = $(this).data('id');
            $.get("service/edit/" + member_id, function(data) {
                $('#e_name').val(data.name);
                $('#e_email').val(data.email);
                $('#e_phone').val(data.phone);
                $('#e_address').val(data.address);
                $('#e_teamMember_id').val(data.id);
            })
        })
    </script>
@endsection
