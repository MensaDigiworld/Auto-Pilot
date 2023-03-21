@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Booking</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Booking</li>
              
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
                      <div class="row">
                            <div class="col-12 text-center">
                              <div class="card">
                                <div class="card-body">
                                <span class="text-xl d-block text-bold">Toyota-Prius (ZVW50, S, 1800cc, Auto, 2WD, 5 seater)</span>
                                <span class="text-md d-block">Vin/Chassis No: ZVW50-8075523 | Engine No: NA</span>
                                <span class="text-md d-block">Color: WINE | Mileage: 0.00 | Auction Grade: NA</span>
                                <span class="text-md d-block">Vehicle Tracking Code:454512XAS</span>
                                <span class="text-lg d-block text-bold">0.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="card">
                            <div class="card-body p-1">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Registration</label>
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="card">
                            <div class="card-body p-1">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Insurance</label>
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="card">
                            <div class="card-body p-1">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Loan Fee</label>
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="card">
                            <div class="card-body p-1">
                              <div class="form-group">
                                <a heft="" for="inputEmail3" class="btn-block btn btn-lg btn btn-warning"  data-toggle="modal" data-target="#service_warranty">Service/Warranty</a>
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="card">
                            <div class="card-body p-1">
                              <div class="form-group">
                               <a heft="" for="inputEmail3" class="btn-block btn btn-lg btn btn-success"  data-toggle="modal" data-target="#membership_card">MemberShip Card</a>
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="card">
                            <div class="card-body p-1">
                              <div class="form-group">
                              <a heft="" for="inputEmail3" class="btn-block btn btn-lg btn btn-info"  data-toggle="modal" data-target="#new_spares_parts2">Spare Parts</a>
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12  text-right">
                            <label for="inputEmail3" class="col-form-label text-bold text-lg">Grand total:300000.00 + 9000.00 = 390000.00</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="inputEmail3" class="col-form-label text-primary text-bold text-md">Loan Information:</label>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="card">
                            <div class="card-body p-1">
                              <div class="row">
                                <label for="inputEmail3" class="col-form-label col-sm-3">expected Loan Amount</label>

                                <input type="number" class="form-control form-control-sm col-sm-4 mx-1" id="inputEmail3" value="" name="">

                                <input type="date" class="form-control form-control-sm col-sm-4 mr-1 " id="inputEmail3" value="{{ date('Y-m-d') }}" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="inputEmail3" class="col-form-label text-primary text-bold text-md">Customer Information:</label>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="card">
                            <div class="card-body p-2">
                              <div class="row">
                                  <label for="inputEmail3" class="col-form-label col-sm-2">Name</label>
                                
                                  <select class="form-control select2 col-sm-4" name="">
                                    <option>Select Customer</option>
                                    <option>MD. Harun</option>
                                  </select>
                                
                                  <a href="" class="bg-success pt-1 pb-0 px-2 mb-1 mx-2" data-toggle="modal" data-target="#add_customer"> <i class="fas fa-plus"></i></a>
                                
                                  <select class="form-control select2 col-sm-5" name="">
                                    <option>Select Customer</option>
                                    <option>MD. Harun</option>
                                  </select>

                                  <label for="inputEmail3" class="col-form-label col-sm-2">Refrence:</label>

                                  <div class="form-group col-sm-4 pt-2">
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
                                  <span class="pt-1 pb-0 px-3 mb-1 mx-2"></span>
                                  <select class="form-control select2 col-sm-5 pt-2" name="">
                                    <option>Select Reference</option>
                                    <option>MD. Harun</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="inputEmail3" class="col-form-label text-primary text-bold text-md">Part Exchange:</label>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                          <div class="card-body p-2">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Vehicle</label>
                              </div>
                              <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                              <div class="col-lg-1 col-md-1 col-sm-12">
                                <a href="" class="btn btn-sm btn-success"> <i class="fas fa-plus"></i></a>
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Value</label>
                              </div>
                              <div class="col-lg-10 col-md-10 col-sm-12">
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
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
                          <label for="inputEmail3" class="col-form-label text-danger text-bold ">Invoice No:25421231</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Date</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="date" class="form-control form-control-sm" id="inputEmail3" value="{{ date('Y-m-d') }}" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Sold By</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 border-bottom">
                        <select class="form-control select2" name="">
                          <option>Select</option>
                          <option>MD. Harun</option>
                        </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Vehicle Price</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Discount</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Final Price</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Registration</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Insurance</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Loan Fee</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Service Warranty</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Membership Card</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Spare Parts</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Vat</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Part Exchange</label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">

                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label text-lg text-bold">$ 1755000.00</label>
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
                        <label for="inputEmail3" class="col-form-label" data-toggle="modal" data-target="#add_booking_remark">Remarks</label>
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