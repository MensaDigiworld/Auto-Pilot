@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Warehouse/Showroom</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Warehouse/Showroom</li>
           
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
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  @csrf
                            
                    <div class="form-group form-group-sm row">
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Type <span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">
          
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" checked="" value="Recondition" id="Warehouse">
                          <label for="Warehouse">
                            Warehouse
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" id="Partner" value="BrandNew">
                          <label for="Partner">
                            Partner Showroom 
                          </label>
                          </div>
                      </div>
                  
                    </div>
          
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Warehouse/Showroom Name <span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Warehouse/Showroom Name" value="{{ old('')}}" name=""> 
                      </div>
                  
                    </div>
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Contact</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Contact" value="{{ old('')}}" name=""> 
                      </div>
                  
                    </div>
          
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Address</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <textarea class="form-control" placeholder="Enter Address" name="" rows="3"></textarea> 
                      </div>
                  
                    </div>
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">City</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <select class="form-control select2 " name="city">
                          <option>Select City</option>
                          <option>Active</option>
                          <option>Inactive</option>
                        </select>
                      </div>
                  
                    </div>
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Email</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Email" value="{{ old('')}}" name="email"> 
                      </div>
                  
                    </div>
                                  
                  
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-success"> Save</button>
                <a href="{{ route('inventory.list_warehouse_showroom')}}" class="btn btn-primary float-right">List</a>
              </div>
              <!-- /.card-footer -->
            </form>
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