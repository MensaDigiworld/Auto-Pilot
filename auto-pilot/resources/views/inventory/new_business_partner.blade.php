@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Business Partner</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Business Partner</li>
           
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
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Business Category<span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-12 pt-lg-9 col-lg-10 col-md-10">
          
                        <div class="d-block">
                        
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r1" checked="" value="Recondition" id="InsuranceCompany">
                          <label for="InsuranceCompany">
                            Insurance Company
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r1" id="CFAgent" value="BrandNew">
                          <label for="CFAgent">
                            C & F Agent 
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r1" id="BRTAAgent" value="BrandNew">
                            <label for="BRTAAgent">
                              BRTA Agent 
                            </label>
                            </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r1" id="LoanProcessingAgent" value="BrandNew">
                            <label for="LoanProcessingAgent">
                              Loan Processing Agent 
                            </label>
                            </div>
                          </div>
                            <div class="d-block pt-2">
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r1" id="Vendor" value="BrandNew">
                            <label for="Vendor">
                              Vendor (Vehicle) 
                            </label>
                            </div>
                          
                          
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r1" id="General" value="BrandNew">
                            <label for="General">
                              Vendor (General)
                            </label>
                            </div>
                          
                          
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r1" id="Broker" value="BrandNew">
                            <label for="Broker">
                              Broker
                            </label>
                            </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r1" id="Workshop" value="BrandNew">
                            <label for="Workshop">
                              Workshop
                            </label>
                            </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r1" id="Government" value="BrandNew">
                            <label for="Government">
                              Government
                            </label>
                            </div>
                          </div>
                        </div>
                                        
                    </div>

                    <div class="form-group form-group-sm row">
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Business Type <span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">
          
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" checked="" value="Recondition" id="International">
                          <label for="International">
                            International
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" id="Local" value="BrandNew">
                          <label for="Local">
                            Local 
                          </label>
                          </div>
                      </div>
                  
                    </div>
          
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Contact Number <span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Contact Number" value="{{ old('')}}" name=""> 
                      </div>
                  
                    </div>
          
                    <div class="form-group form-group-sm row">
                                           
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Description</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <textarea class="form-control" placeholder="Enter Description" name="" rows="3"></textarea> 
                      </div>
                  
                    </div>
                                  
                  
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-success"> Save</button>
                <a href="{{ route('inventory.list_business_partner')}}" class="btn btn-primary float-right">List</a>
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