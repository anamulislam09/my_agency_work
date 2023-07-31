@extends('layouts.admin')

@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Services</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Service</h3>
                <a href="{{ route('service.index') }}" class="btn btn-sm btn-primary" style="float:right"> Service list</a>

            </div>
            <!-- /.card-header -->
            <form action="{{ route('store.service') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mt-3">
                        <label for="category_id" class="form-label">Select Category:</label>
                        <select name="category_id" id="category_id"
                            class="form-control @error('category_id') is-invalid @enderror">
                            <option value="" selected disabled>Select Once</option>
                            @foreach ($cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="subcategory_id" class="form-label">Select SubCategory:</label>
                        <select name="subcategory_id" id="subcategory_id"
                            class="form-control @error('subcategory_id') is-invalid @enderror">
                            <option value="" selected disabled>Select Once</option>
                            @foreach ($subcats as $subcat)
                                <option value="{{ $subcat->id }}">{{ $subcat->subcategory_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="service_name" class="form-label">Service Name:</label>
                        <input type="text" class="form-control @error('service_name') is-invalid @enderror"
                            value="{{ old('service_name') }}" name="service_name" id="service_name"
                            placeholder="Enter Service name.">
                    </div>
                    @error('service_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="service_img" class="form-label">Service Image:</label>
                        <input type="file" class="form-control @error('service_img') is-invalid @enderror"
                            value="{{ old('service_img') }}" name="service_img" id="service_img">
                    </div>
                    @error('service_img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="service_details" class="form-label">Service Details:</label>
                        <textarea name="service_details" id="service_details"  class="form-control @error('service_details') is-invalid @enderror"  cols="" rows="" placeholder="Write serveice details.">{{ old('service_details') }}</textarea>
                    </div>
                    @error('service_details')
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

