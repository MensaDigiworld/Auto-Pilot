@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add a New Pre-Order </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Pre-Order </li>
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
          <div class="col-lg-7 col-md-7 col-sm-12">

            <div class="card card-info">
              {{-- <div class="card-header">
                <h3 class="card-title">Add Local Purchase</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Local Purchase</a>
              </div> --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                      <div class="row">
                        <div class="col-sm-12 col-lg-12 col-md-12">
                          <div class="row">
                            <div class="col-sm-10 col-lg-10 col-md-10">
                                <div class="form-group">
                             
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Customer</option>
                                    <option selected>MD. Harun</option>
                                  </select> 
                                  
                                </div>
                              </div>
                              <div class="col-sm-2 col-lg-2 col-md-2">
                                <div class="form-group">
                                <a href="" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#customer"> <i class="fas fa-plus"></i> Customer</a>
                                </div>
                              </div>
                          </div>
                         
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <div class="row">
                            <div class="col-sm-12 col-lg-7 col-md-7">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Pre Order Received By</label>
                                <select class="form-control select2 w100" name="">
                                  <option>Select Customer</option>
                                  <option selected>MD. Harun</option>
                                </select> 
                              </div>
                            </div>
                            <div class="col-sm-12 col-lg-5 col-md-5">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Date</label>
                                <input type="date" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                              </div>
                            </div>
                          </div>
                        </div>

                        <h3 class="text-lg">Primary Vehicle Information</h3>

                        <div class="col-sm-12 col-lg-12 col-md-12">
                          <div class="row">
                            <div class="col-sm-12 col-lg-7 col-md-7">
                              <div class="form-group">
                                <select class="form-control select2" name="">
                                  <option selected>Select</option>
                                  <option>Pending</option>
                                  <option>Active</option>
                                </select> 
                              </div>
                            </div>
                            <div class="col-sm-12 col-lg-5 col-md-5">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="2016" name="nid" placeholder="Preferred Year">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-sm-12 col-lg-4 col-md-4">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm"  id="inputEmail3" placeholder="Preferred Color" value="red" name="nid">
                              </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 col-md-4">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="340000.00" placeholder="Preferred Mileage" name="nid">
                              </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 col-md-4">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="4" placeholder="Preferred Garde" name="nid">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-group">
                           
                            <textarea class="form-control" rows="2" name="pe_address" placeholder="Other Requirements" spellcheck="false" ></textarea>
                          </div>
                          <p class="btn btn-sm btn-success float-right click_optional_vehical"> <i class="fas fa-plus"></i> Add Optional Vehicle</p>
                        </div>

                        <div class="optional_vehical col-sm-12 col-lg-12 col-md-12" style="display: none">
                        <div class="col-sm-12 col-lg-12 col-md-12">
                          <div class="form-group">
                            <select class="form-control select2 w100" name="">
                              <option>Select Optional Product</option>
                              <option selected>MD. Harun</option>
                            </select> 
                          </div>
                        </div>
                        <div class="col-sm-12 col-lg-12 col-md-12">
                          <div class="form-group">
                            <select class="form-control select2 w100" name="">
                              <option>Select Optional Product</option>
                              <option selected>MD. Harun</option>
                            </select> 
                          </div>
                        </div>
                        <div class="col-sm-12 col-lg-12 col-md-12">
                          <div class="form-group">
                            <select class="form-control select2 w100" name="">
                              <option>Select Optional Product</option>
                              <option selected>MD. Harun</option>
                            </select> 
                          </div>
                        </div>
                      </div>
                       
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6 bg-success border">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label"> Budget <span class="text-danger fw-600">*</span></label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3" required value="" name="nid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-md-3">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Expected Delivery Date <span class="text-danger fw-600">*</span></label>
                                <input type="date" class="form-control form-control-sm" id="inputEmail3" required  value="" name="nid">
                              </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-md-3">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Booking Amount <span class="text-danger fw-600">*</span></label>
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" required  value="" name="nid">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <div class="icheck-primary d-inline">
                                    <label for="checkboxPrimary1">
                                      Loan Required
                                    </label>
                                    <input type="checkbox" id="loan_check">

                                  </div>
                                  <input type="number" class="form-control form-control-sm" id="loan"  value="0" name="nid" style="display: none">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                              <div class="form-group">

                                <textarea class="form-control" rows="2" name="pe_address" spellcheck="false" placeholder="Write aditional information if required"></textarea>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>

              </div>
                 
               
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right"> Confirm Pre-Order</button>
                  {{-- <button type="reset" class="btn btn-default float-right">Refresh</button> --}}
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