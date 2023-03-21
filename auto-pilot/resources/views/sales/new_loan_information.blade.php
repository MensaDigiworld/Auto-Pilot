@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Customer Loan Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Customer Loan Information</li>
              <li class="breadcrumb-item active"></li>
              <li class="breadcrumb-item active"><a href="{{ route('sales.list_loan_manager') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i> Customer Loan Manager List</a></li>
              
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
          <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header card-info">
                <h3 class="card-title text-lg">New Customer Loan Information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST">
                  @csrf
                <div class="row">

                  <div class="col-sm-12 col-lg-12 col-md-12">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Product</label>
                    
                      <select class="form-control select2" name="month">
                        <option selected>Select</option>
                        <option>Pending</option>
                        <option>Active</option>
                      </select> 
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Customer</label>
                      
                        <select class="form-control select2" name="month">
                          <option selected>Select</option>
                          <option>Pending</option>
                          <option>Active</option>
                        </select> 
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Expected Sanction Date </label>
                      
                        <input type="date" class="form-control form-control-sm" id="inputEmail3"  value="" name="" >
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Actual Sanction Date </label>
                      
                        <input type="date" class="form-control form-control-sm" id="inputEmail3"  value="" name="">
                        </div>
                      </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="row">
                  <div class="col-sm-12 col-lg-6 col-md-6">
                   
                      <label for="inputEmail3" class="col-form-label">Processing Agent</label>
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select</option>
                          <option>Pending</option>
                          <option>Active</option>
                        </select> 
                      
                    </div>
                  <div class="col-sm-12 col-lg-6 col-md-6">
                    
                      <label for="inputEmail3" class="col-form-label">Loan Processing Bank</label>
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select</option>
                          <option>Pending</option>
                          <option>Active</option>
                        </select> 
                     
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6">
                     
                        <label for="inputEmail3" class="col-form-label">Loan Amount</label>
                        <input type="date" class="form-control form-control-sm" id="inputEmail3"  value="100000.00" name="">
                       
                      </div>
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      
                        <label for="inputEmail3" class="col-form-label">Loan Processing Fee</label>
                        <input type="date" class="form-control form-control-sm" id="inputEmail3"  value="" name="">
                     
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Loan Processing Bank</label>
                    
                      <textarea class="form-control form-control-sm" rows="4" placeholder="Enter Loan Processing Bank" name="" spellcheck="false"></textarea>
                      </div>
                    </div>                                                 
    
                </div>
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