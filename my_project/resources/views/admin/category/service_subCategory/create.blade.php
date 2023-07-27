@extends('layouts.admin')

@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Service Categhory</h3>
                <a href="{{ route('subcategory.index') }}" class="btn btn-sm btn-primary" style="float:right">Sub Categhory list</a>

            </div>
            <!-- /.card-header -->
            <form action="{{ route('store.subcategory') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mt-3">
                        <label for="category_id" class="form-label">Select Category:</label>
                        <select name="category_id" id="category_id"
                            class="form-control @error('subcategory_id') is-invalid @enderror">
                            <option value="" selected disabled>Select Once</option>
                            @foreach ($datas as $data)
                                <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="subcategory_name" class="form-label">Service SubCategory:</label>
                        <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror"
                            value="{{ old('subcategory_name') }}" name="subcategory_name" id="subcategory_name"
                            placeholder="Enter Service SubCategory">
                    </div>
                    @error('subcategory_name')
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
