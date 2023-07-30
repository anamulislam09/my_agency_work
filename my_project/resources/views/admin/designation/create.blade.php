@extends('layouts.admin')

@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Designation</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Designation</h3>
                <a href="{{ route('designation.index') }}" class="btn btn-sm btn-primary" style="float:right">Designation list</a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('store.designation') }}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="designation_name" class="form-label"> designation:</label>
                        <input type="text" class="form-control @error('designation_name') is-invalid @enderror" value="{{ old('designation_name') }}" name="designation_name" id="designation_name" placeholder="Enter  designation">
                    </div>
                    @error('designation_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
