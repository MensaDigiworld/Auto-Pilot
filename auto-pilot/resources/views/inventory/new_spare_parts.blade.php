@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Spare Parts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Spare Parts</li>
           
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

            <div class="card">
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  @csrf
                            
                    <div class="form-group form-group-sm row">
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Type</label>
                      <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">
          
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" checked="" value="Recondition" id="Product">
                          <label for="Product">
                            Product
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" id="Service" value="BrandNew">
                          <label for="Service">
                            Service 
                          </label>
                          </div>
                      </div>
                  
                    </div>
          
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Name </label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
                      </div>
                  
                    </div>
                    
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Sales Price</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Sales Price" value="{{ old('')}}" name=""> 
                      </div>
                  
                    </div>
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Discount</label>
                      <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" value="0">
                          <div class="input-group-append">
                          <span class="input-group-text">TK</span>
                          </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" value="0">
                          <div class="input-group-append">
                          <span class="input-group-text">%</span>
                          </div>
                          </div>
                      </div>
                  
                    </div>
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Vat Amount</label>
                      <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" value="0">
                          <div class="input-group-append">
                          <span class="input-group-text">%</span>
                          </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" value="0">
                          <div class="input-group-append">
                          <span class="input-group-text">TK</span>
                          </div>
                          </div>
                      </div>
                  
                    </div>
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Part Number</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Part Number" value="{{ old('')}}" name=""> 
                      </div>
                  
                    </div>
                      
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-success"> Save</button>
                <a href="{{ route('inventory.list_spare_parts')}}" class="btn btn-primary float-right">List</a>
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