@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bill of Lading</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Costing</li>
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
          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card card-info">
              {{-- <div class="card-header">
                <h3 class="card-title">Add New Insurance</h3>
                <a href="{{ route('lc.list_insurance')}}" class="card-title float-right btn-success btn">List of Insurance</a>
              </div> --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                      <div class="row">
                        <div class="col-6 h6">Proforma Invoice </div>
                        <div class="col-6"> <a href="" class="text-sm text-info pb-3 float-right" data-toggle="modal" data-target="#insurance"> <i class="fas fa-list"></i> View Details</a></div>
                      </div>
                      <div class="row bg-navy text-white border py-3">
                        <div class="col-sm-12 col-lg-6 col-md-6">
    
                          <div class="fw600 d-block pb-3">Date: <span class="fw100"> 15-Jun-2022</span></div>
                          <div class="fw600 d-block pb-3">Product: <span class="fw100">Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)</span></div>
                          <div class="fw600 d-block pb-3">Supplier: <span class="fw100">----</span></div>
    
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6">
    
                          <div class="fw600 d-block pb-3">Proforma Invoice No: <span class="fw100"> TM15/06/22  </span></div>
                          <div class="fw600 d-block pb-3">Vin/Chassis No: <span class="fw100"> GM4-232425</span></div>
                        </div>
                        
                      </div>

                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                      <div class="row">
                        <div class="col-6 h6">Letter of Credit (LC) </div>
                        <div class="col-6"> <a href="" class="text-sm text-info pb-3 float-right" data-toggle="modal" data-target="#insurance"> <i class="fas fa-list"></i> View Details</a></div>
                      </div>
                      <div class="row bg-navy text-white border py-3">
                        <div class="col-sm-12 col-lg-6 col-md-6">
    
                          <div class="fw600 d-block pb-3">LC Numebr: <span class="fw100"> 112231321</span></div>
                          <div class="fw600 d-block pb-3">LC Opening Bank Account: <span class="fw100">HSBC Bank</span></div>
                          <div class="fw600 d-block pb-3">IRC: <span class="fw100">------</span></div>
                          <div class="fw600 d-block pb-3">LC Margin: <span class="fw100">-----</span></div>
    
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6">
                          <div class="fw600 d-block pb-3">LC Date: <span class="fw100"> TM15/06/22  </span></div>
                        </div>
                        
                      </div>

                    </div>
                  </div>
                  



                  <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-8">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">BL Code <span class="text-danger fw-600">*</span></label>
                              <div class="input-group">
                                <input type="text" value="7725.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date" required>
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Issue Date</label>
                              <div class="input-group">
                                <input type="date" value="7725.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Document Release Date</label>
                              <div class="input-group">
                                <input type="date" value="7725.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">C & F Agent</label>
                              <div class="input-group">
                                <select class="form-control select2" name="supplier">
                                  <option>Select Supplier</option>
                                  <option>Xeon Car</option>
                                  <option>Monspeed</option>
                                  
                                </select>
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Added by</label>
                              <div class="input-group">
                                <select class="form-control select2" name="supplier">
                                  <option>Select Employe</option>
                                  <option>Xeon Car</option>
                                  <option>Monspeed</option>
                                  
                                </select>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <div class="row bill-lading-show" style="display: none">
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Booking No<span class="text-danger fw-600">*</span></label>
                              <div class="input-group">
                                <input type="text" placeholder="Enter Booking No" value="" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">SVC Contact</label>
                              <div class="input-group">
                                <input type="text" value="" placeholder="Enter SVC Contact" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Carrier Name</label>
                              <div class="input-group">
                                <input type="text" value="" placeholder="Enter Carrier Name" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Voyage No</label>
                              <div class="input-group">
                                <input type="text" value="" placeholder="Enter Voyage No" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <div class="row bill-lading-show" style="display: none">
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Tracking No</label>
                              <div class="input-group">
                                <input type="text" placeholder="Enter Tracking No" value="" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Tracking Link</label>
                              <div class="input-group">
                                <input type="text" value="" placeholder="Enter Tracking Link" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">No of Sequence</label>
                              <div class="input-group">
                                <input type="text" value="" placeholder="Enter No of Sequence" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="btn-sm bill-lading1 text-right pt-lg-5"> Show Less</div>
                          </div>
                        </div>
                        {{-- <div class="row bill-lading-show" style="display: none">
                          <div class="col-12">
                            <div class="btn-sm text-left text-lg fw900"> BL Release Payment Information</div>
                          </div>
                        
                        </div> --}}
                        
                        <div class="row">
                          <div class="col-6">
                            <div class="btn-sm text-left text-lg fw900"> BL Release Payment Information</div>
                          </div>
                          <div class="col-6">
                            <div class="btn-sm bill-lading text-right"> Show More</div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-12 ">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label d-flex justify-content-between">Doc/Bill Release(USD) <span class="text-success ">90%</span></label>
                              <div class="input-group">
                                <input type="text" value="9000.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date" readonly>
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">USD Rate</label>
                              <div class="input-group">
                                <input type="text" value="85.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date" readonly>
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Doc/Bill Release(TK)</label>
                              <div class="input-group">
                                <input type="text" value="765000.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date" readonly>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label d-flex justify-content-between">Doc/Bill Release(USD) <span class="text-success ">10%</span></label>
                              <div class="input-group">
                                <input type="text" value="9000.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date" readonly>
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">USD Rate</label>
                              <div class="input-group">
                                <input type="text" value="85.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Doc/Bill Release(TK)</label>
                              <div class="input-group">
                                <input type="text" value="765000.00" class="form-control form-control-sm" id="inputEmail3"  name="exp_date" >
                              </div>
                              
                            </div>
                          </div>
                          
                          <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label text-white" >none</label>
                              <div class="input-group">
                                <button type="submit" class="btn btn-success btn-sm">Add</button>
                                <button type="submit" class="btn btn-info btn-sm mx-lg-1">Edit</button>
                                <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
                                <button type="submit" class="btn btn-primary btn-sm mx-lg-1">Payment</button>
                              </div>
                              
                            </div>
                            
                          </div>
                        </div>
                    </div>

                  </div>
                                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-success">Add</button>
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="submit" class="btn btn-danger">Remove</button>
                  <button type="submit" class="btn btn-success">Confirm</button>
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

