@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> List of Department  Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Department  Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-12">

            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title col-md-4">List of Department  Information</h3>
                <a href="{{ route('add-department')}}" class="card-title float-right btn-success btn col-md-2"><i class="fas fa-plus"></i> Add New Department </a>
                <div class="input-group input-group-md float-right col-md-6">
                  <input type="text" class="form-control" placeholder="Search Department">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat"> <i class="fas fa-search"></i> Search!</button>
                  </span>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Code</th>
                      <th>Name of Department</th>
                      <th>Status</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($departments as $department)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$department->code}}</td>
                      <td>{{$department->name}}</td>
                      <td>{{$department->status}}</td>
                      <td class="text-center">
                        <a href="{{route('department.edit', ['id' => $department->id])}}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> </a>
                      <a href="{{ route('department.delete',['id' => $department->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash-alt"></i> </a></td>                      
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-md m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection