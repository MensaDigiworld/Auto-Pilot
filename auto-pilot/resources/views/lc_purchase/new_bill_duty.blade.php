@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Custom Duty</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Custom Duty</li>
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
              <div class="card-header">
               <div class="row">
                 <div class="col-md-3"> <h3 class="card-title">Add Custom Duty</h3></div>
                 <div class="col-md-3"><h5>LC Number: </h5></div>
                 <div class="col-md-3"><h5>Vehicle  </h5></div>
                 <div class="col-md-3"><h5>Chassis Number</h5></div>
               </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Date<span class="text-danger fw-600">*</span></label>
                        <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="exp_date">
                        
                      </div>
                    </div>
                    
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Invoice No<span class="text-danger fw-600">*</span></label>
                       <div class="input-group mb-3">
                          <input type="text" class="form-control form-control-sm" placeholder="Invoice number auto generate" >
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-random" aria-hidden="true">Generate</i></button>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vendor/Account <span class="text-danger fw-600">*</span></label>
                        <div class="input-group">                          
                          <select class="form-control select2" name="supplier">
                            <option>Select Supplier</option>
                            <option>Xeon Car</option>
                            <option>Monspeed</option>                            
                          </select> 
                        </div>                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Added By <span class="text-danger fw-600">*</span></label>
                        <div class="input-group">                          
                          <select class="form-control select2" name="supplier">
                            <option>Select Employee</option>
                            <option>Xeon Car</option>
                            <option>Monspeed</option>                            
                          </select> 
                        </div>                        
                      </div>
                    </div>
                    
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-3 col-lg-1 col-md-1">
                      <b>Cost Type:</b>
                      </div>
                       <div class="col-sm-9 col-lg-3 col-md-3">
                      <div class="icheck-success d-inline">
                        <input type="radio" name="od" id="radioSuccess4" value="order">
                        <label for="radioSuccess4">
                          <b>Direct</b>
                        </label>
                        </div>
                      </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Direct Cost <span class="text-danger fw-600">*</span></label>
                        <div class="input-group">
                          
                          <select class="form-control select2" name="supplier">
                            <option>Select Supplier</option>
                            <option>Xeon Car</option>
                            <option>Monspeed</option>
                            
                          </select> 
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-3">
                      <div class="form-group ">
                        <label for="inputEmail3" class="col-form-label">Win/Chassis No <span class="text-danger fw-600">*</span></label>
                        <div class="input-group ">                          
                          <select class="form-control select2" name="supplier">
                            <option>Select Supplier</option>
                            <option>Xeon Car</option>
                            <option>Monspeed</option>
                            
                          </select> 
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 col-md-2">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Amount <span class="text-danger fw-600">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="" value="">
                      </div>
                    </div>
                    
                     <div class="col-sm-12 col-lg-3 col-md-3">
                    <label for="inputEmail3" class="col-form-label">Amount <span class="text-danger fw-600">*</span></label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control form-control-sm" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                    <button class="btn btn-success form-control-sm" type="button"><i class="fas fa-plus"></i> Add</button>
                                  </div>
                                </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <table class="table table-bordered">
                                <thead class="bg-secondary">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Vin/Cassis No</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>50000.00</td>
                                    <td><button class="btn btn-info" type="button"><i class="fas fa-edit"></i> Edit</button>
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Remove</button></td>
                                  </tr>
                                </tbody>
                                <tr>
                                  <td colspan="3" class="text-center"><b>Total Amount </b><span><b> =50000.00</b></span></td>
                                </tr>
                              </table>
                    </div>
                  </div>                 
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-warning">Add</button>
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="submit" class="btn btn-danger">Remove</button>
                  <button type="submit" class="btn btn-success">Confirm</button>
                  <button type="submit" class="btn btn-primary">Payment</button>
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