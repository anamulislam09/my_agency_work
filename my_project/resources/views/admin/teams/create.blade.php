@extends('layouts.admin')

@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">member</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Team Member</h3>
                <a href="{{ route('member.index') }}" class="btn btn-sm btn-primary" style="float:right">Member list</a>

            </div>
            <!-- /.card-header -->
            <form action="{{ route('store.member') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3 mb-3">
                        <label for="name" class="form-label">Full Name:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" name="name" id="name" placeholder="Enter Name">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3 mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" name="email" id="email" placeholder="Enter Email">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3 mb-3">
                        <label for="phone" class="form-label">Phone :</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone') }}" name="phone" id="phone" placeholder="Enter Phone">
                    </div>
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3 mb-3">
                        <label for="address" class="form-label">Address:</label>

                        <textarea class="form-control @error('address') is-invalid @enderror" id="" cols="" rows=""  name="address" id="address" placeholder="Enter recent address"></textarea>

                    </div>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3 mb-3">
                        <label for="image" class="form-label"> Profile Picture:</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                            value="{{ old('image') }}" name="image" id="image">
                    </div>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mt-3 mb-3">
                        <label for="designation_id" class="form-label">Select Designation:</label>
                        <select name="designation_id" id="designation_id"
                            class="form-control @error('designation_id') is-invalid @enderror">
                            <option value="" selected disabled>Select Once</option>
                            @foreach ($datas as $data)
                                <option value="{{ $data->id }}">{{ $data->designation_name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </div>
@endsection
