@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Category</li>
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
          <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Vehicle Category</h3>
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('inventory.vehicle_category_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name <span class="text-danger fw-600">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control  form-control-sm" id="inputEmail3" value="{{ $catid->name}}" name="name" placeholder="e.g Passenger/Commercial/Bike">
                      <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                  </div>                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                        </div>
                        </div>
                  </div>
                  <img src="{{ asset('public/cover_image/'.$catid->image.'') }}" class="img-thumbnail" width="100" height="100" />
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Vehicle Category</h3>
                
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Category Name</th>
                      <th>Image </th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($vehicle_category as $vehicle_categori)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$vehicle_categori->name}}</td>
                      <td><div class="widget-user-image text-center">
                        <img src="../public/cover_image/{{ $vehicle_categori->image}}" class="img-circle img-thumbnail" style="height:60px; width:60px;" />
                      </div>
                    </td>
                    <td class="text-center"><a href="{{ route('inventory.vehicle_category_edit',['id' => $vehicle_categori->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                        </td>                      
                    </tr>       
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection