@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dealership Sale</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dealership Sale</li>
              
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

              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card">
                      <div class="card-body">
      
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                  <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between">
                                    
                                      <label for="inputEmail3" class="col-form-label mr-lg-1">Vehicle</label>
                                      <select class="form-control select2" name="month">
                                        <option selected>Select Vehicle</option>
                                        <option>Pending</option>
                                        <option>Active</option>
                                      </select>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between">
                                    
                                      <label for="inputEmail3" class="col-form-label mr-lg-1">Package/Trim</label>
                                      <select class="form-control select2" name="month">
                                        <option selected>Select Package/Trim</option>
                                        <option>Pending</option>
                                        <option>Active</option>
                                      </select>
                                  </div>
                                </div>
                                
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="from-group">
                                  <input type="number" class="form-control form-control-sm" placeholder="Chassis/Vin" id="inputEmail3" value="" name="">
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="from-group">
                                  <input type="number" class="form-control form-control-sm" placeholder="Engine" id="inputEmail3" value="" name="">
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="from-group">
                                <select class="form-control select2" name="month">
                                  <option selected>Select Year</option>
                                  <option>Pending</option>
                                  <option>Active</option>
                                </select>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="from-group">
                                <select class="form-control select2" name="month">
                                  <option selected>Select Color</option>
                                  <option>Pending</option>
                                  <option>Active</option>
                                </select>
                                </div>
                              </div> 
                              
                              
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                      <label for="inputEmail3" class="col-form-label text-primary text-bold text-md">Customer Information:</label>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                          <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="row">
                                              <label for="inputEmail3" class="col-form-label col-sm-2">Name</label>
                                          
                                            <div class="input-group input-group-sm col-sm-10">
                                              <select class="form-control select2" name="">
                                                <option>Select Customer</option>
                                                <option>MD. Harun</option>
                                              </select> 
                                              <span class="input-group-append">
                                              <a href="" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                              </span>
                                              </div>
                                            </div>
                                            <div class="row">

                                              <label for="inputEmail3" class="col-form-label col-sm-2">Refrence:</label>
          
                                            <div class="form-group col-sm-10 pt-2">
                                              <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" checked="" value="Customer" id="Customer">
                                                <label for="Customer">
                                                  Customer
                                                </label>
                                              </div>
                                              <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" id="Employee" value="Employee">
                                                <label for="Employee">
                                                  Employee
                                                </label>
                                              </div>
                                              <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" id="Partner" value="Partner">
                                                <label for="Partner">
                                                  Partner
                                                </label>
                                              </div>      
                                                <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" id="None" value="None">
                                                <label for="None">
                                                  None
                                                </label>
                                              </div>                
                                            </div>
                                          
                                            </div>
                                            

                                          </div>
                                          <div class="col-sm-12 col-md-6 col-lg-6">
                               
                                            <select class="form-control select2 float-lg-right" name="">
                                              <option>Select Source</option>
                                              <option>MD. Harun</option>
                                            </select>
                                            <p></p>
                                            <select class="form-control select2" name="">
                                              <option>Select Reference</option>
                                              <option>MD. Harun</option>
                                            </select>
                                            
                                            
                                          </div>

                                            
                                          </div>
                                        
                                  </div>
                                </div>
                              </div>
                              
                              
                          </div>
                          </div>
                                                  
                        </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                      <div class="card-body p-2">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 border-bottom my-2">
                          <label for="inputEmail3" class="col-form-label text-danger text-lg text-bold ">Invoice No:25421231</label>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Date</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <input type="date" class="form-control form-control-sm" id="inputEmail3" value="{{ date('Y-m-d') }}" name="">
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Sold By</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <select class="form-control select2" name="">
                          <option>Select</option>
                          <option>MD. Harun</option>
                        </select>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 border-bottom my-2">
                      </div>
                      
                      
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Vehicle Price</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label text-lg text-bold float-lg-right">$ 1755000.00</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label text-xs text-primary">Tearms & Condation</label>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <select class="form-control select2" name="">
                          <option>Deafult Updated on 2020</option>
                        </select>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group pt-2">
                          <div class="icheck-success d-inline">
                            <input type="checkbox" name="r3" checked="" value="Customer" id="Customer">
                            <label for="Customer">
                              Send SMS
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group pt-2">
                          <div class="icheck-success d-inline">
                            <input type="checkbox" name="r3" checked="" value="Customer" id="Customer">
                            <label for="Customer">
                              Send Email
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label" data-toggle="modal" data-target="#dealership_booking_remarks">Remarks</label>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 my-2">
                        <button type="submit" class="btn-block btn btn-lg btn-success text-bold text-xl">Proceed</button>
                      </div>
                      <div class="col-4 text-left">
                        <button type="submit" class="btn-block btn btn-md btn-primary">Print</button>
                      </div>
                      <div class="col-4  text-center">
                        <button type="submit" class=" btn-block btn btn-md btn-warning">Hold</button>
                      </div>
                      <div class="col-4  text-right">
                        <button type="submit" class="btn-block btn btn-md btn-danger">Cancel</button>
                      </div>
                    </div>

                    </div>
                  </div>
                  </div>
                </div>

               
            </form>


          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection