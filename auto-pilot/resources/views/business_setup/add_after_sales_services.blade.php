@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">After Sales & Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">After Sales & Service</li>
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
                <h3 class="card-title">Add After Sales & Service</h3>
                <a href="{{ route('list-after-sales')}}" class="card-title float-right btn-success btn">List of After Sales & Service</a>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('salesandservices.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Title</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Service Title" name="title" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Service Details</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="3" placeholder="WASH, ENGINE OIL FILTER CHANGE" name="services_details">{{ old('services_details')}}</textarea>
                    </div>
                  </div>

                  <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Velidity(Month)</label>                            
                                <input type="text" class="form-control" id="inputEmail3" placeholder="validity_month" value="{{ old('validity_month')}}" name="validity_month">                              
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Velidity(KM)</label>                            
                                <input type="text" class="form-control" id="inputEmail3" placeholder="validity_km" value="{{ old('validity_km')}}" name="validity_km">                              
                            </div>
                        </div>

                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Service Warranty Details</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="3" placeholder="wash, engine servicing" name="services_warranty">{{ old('services_warranty')}}</textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Velidity(Month)</label>                        
                            <input type="text" class="form-control" id="inputEmail3" placeholder="validity_month" value="{{ old('validity_month')}}" name="validity_month2">                          
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Velidity(KM)</label>                        
                            <input type="text" class="form-control" id="inputEmail3" placeholder="validity_km" value="{{ old('validity_km')}}" name="validity_km2">                          
                        </div>
                    </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Number of Service</label>                        
                            <input type="text" class="form-control" id="inputEmail3" placeholder="" value="" name="service">                          
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Price</label>                        
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Service Price" value="{{ old('price')}}" name="price">                          
                        </div>
                    </div>
                  </div>

                 
                  {{-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div> --}}
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save</button>
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