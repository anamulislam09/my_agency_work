@extends('layouts.admin')

@section('admin_content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Designations</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Designations list</h3>
        <a href="{{ route('designation.create') }}" class="btn btn-sm btn-primary" style="float:right">Add New</a>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>Designation</th>
              <th>Slug</th>
              <th style="width: 150px">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $data)
              <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->designation_name }}</td>
                <td>{{ $data->designation_slug }}</td>
                <td>
                  <a href="" class="btn btn-sm btn-info edit" data-id="{{ $data->id }}" data-toggle="modal"
                    data-target="#editDegModel">edit</a>
                  <a href="{{ route('designation.destroy', $data->id) }}" class="btn btn-sm btn-danger">delete</a>
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
  <div class="modal fade" id="editDegModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Designation </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('designation.update') }}" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="designation_name" class="form-label">Designation :</label>
                    <input type="text" class="form-control @error('designation_name') is-invalid @enderror" value="{{ old('designation_name') }}" name="designation_name" id="e_designation_name" placeholder="Enter designation name">
                    <input type="hidden" name="id" id="e_designation_id">
                </div>
                @error('designation_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>

$('body').on('click', '.edit', function(){
  let deg_id = $(this).data('id');
  $.get("designation/edit/"+deg_id,function(data){
    $('#e_designation_name').val(data.designation_name);
    $('#e_designation_id').val(data.id);
  })
})

  </script>
@endsection
