@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Membership Program</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Membership Program</li>
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
                <h3 class="card-title">Update Membership Program</h3>
                <a href="{{ route('memberships.index')}}" class="card-title float-right btn-success btn">List of Membership Program</a>                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('memberships.update',$membership->id)}}">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Program Name</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Program Name" required name="title" value="{{ $membership->title}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Details</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="3" placeholder="" name="details">{{ $membership->details}}</textarea>
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Velidity(Month)</label>                            
                                <input type="text" class="form-control" id="inputEmail3" placeholder="validity_month" value="{{$membership->validity_month}}" name="validity_month">                              
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Velidity(KM)</label>                            
                                <input type="text" class="form-control" id="inputEmail3" placeholder="validity_km" value="{{$membership->validity_km}}" name="validity_km">                              
                            </div>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Number of Service</label>                        
                            <input type="text" class="form-control" id="inputEmail3" placeholder="" value="{{$membership->service}}" name="service">                          
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Price</label>                        
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Service Price" value="{{$membership->price}}" name="price">                          
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