@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Letter Head</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Letter Head</li>
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
          <div class="col-lg-8 col-8">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Letter Head</h3>
                <a href="{{ route('latterheads.index')}}" class="card-title float-right btn-success btn">List of Letter Head</a>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('latterheads.update',$latterhead->id)}}">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Business Name</label>                        
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Business Name" value="{{$latterhead->business_name }}" name="business_name">                          
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Branch Name</label>                        
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" Enter Branch Name" value="{{ $latterhead->branch_name}}" name="branch_name">                          
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Email</label>                        
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Entar Email Address" value="{{ $latterhead->email}}" name="email">                          
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Phone</label>                        
                            <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Phone Number" value="{{$latterhead->phone}}" name="phone">                          
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Address</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="3" placeholder=" Enter Address" name="address">{{ $latterhead->address}}</textarea>
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">BIN Number</label>                            
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter BIN Number " value="{{ $latterhead->bin}}" name="bin">                              
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Website</label>                            
                                <input type="url" class="form-control" id="inputEmail3" placeholder="Enter Website Address" value="{{ $latterhead->website}}" name="website">                              
                            </div>
                        </div>
                  </div>
                  <div class="form-group row">                    
                    <label for="inputEmail3" class="col-sm-6 col-lg-2 col-md-2 col-form-label d-sm-inline">Set as Default</label>
                    <div class="col-sm-6 col-lg-3 col-md-3 pt-lg-2">
                        <div class="icheck-success d-inline">
                        <input type="checkbox" name="set_default" value="Set Default" id="radioSuccess6">
                        <label for="radioSuccess6">
                        </label>
                        </div>                        
                    </div>
                  </div>                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
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