@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Country Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Country Information</li>
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
          <div class="col-lg-6 col-6">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Country Information</h3>
                <a href="{{ route('list-country')}}" class="card-title float-right btn-success btn">List of Country Information</a>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('country.update', $country->id)}}">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Country Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="{{ $country->name}}" name="name" placeholder="Enter Country Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Country Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Country Code" value="{{ $country->code}}" name="code">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="status">
                      <option>Active</option>
                      <option>Inactive</option>                      
                    </select> 
                  </div>
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection