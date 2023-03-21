@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Information Correction & Price Update </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Information Correction & Price Update </li>
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
          <div class="col-lg-10 col-md-10 col-sm-12">

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
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="row">
                        <div class="col-sm-12">
                          <h3 class="text-lg">Vehicle Information</h3>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Product Name</label>
                            <select class="form-control select2 w100" name="">
                              <option>Select Supplier</option>
                              <option selected>GM4-232425</option>
                            </select> 
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vin/Chassis No</label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="GM4-232425" name="nid">
                          </div>
                        </div>
                        
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Engine Number</label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="N/A" name="nid">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-sm-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Registration Number <i class="fas fa-info-circle" data-toggle="tooltip" title="For registered/pre-owned vehicle only"></i></label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                            </div>
                            
                          </div>
                          <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Year of Manufacture</label>
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Supplier</option>
                                    <option selected>2019</option>
                                  </select> 
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Year of Registration</label>
                                <select class="form-control select2 w100" name="">
                                  <option>Select Supplier</option>
                                  <option selected>2019</option>
                                </select> 
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Mileage</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Auction Grade</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Package/Trim</label>
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Package</option>
                                    <option >2019</option>
                                  </select> 
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Exterior Color</label>
                                <select class="form-control select2 w100" name="">
                                  <option>Select Color</option>
                                  <option selected>Red</option>
                                </select> 
                              </div>
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            </div>
                             <div class="col-sm-12 col-lg-6 col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Interior Color</label>
                                <select class="form-control select2 w100" name="">
                                  <option>Select Color</option>
                                  <option selected>Red</option>
                                </select> 
                              </div>
                            </div>
                          </div>
                         

                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vehicle Description</label>
                            <textarea class="form-control" rows="2" name="pe_address" spellcheck="false" >Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD,  5 seater)</textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 col-lg-6 col-md-6 py-0">
                      <h3 class="text-lg">Price Update</h3>
                      <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                              <div class="col-sm-12 col-lg-6 col-md-6">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-form-label">Total Cost</label>
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="1002613.71" name="nid" readonly>
                                  </div>
                              </div>
                              <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Estimated Cost</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="0.00" name="nid" readonly>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Margin</label>
                            <input type="number" class="form-control form-control-sm" id="inputEmail3"  value="1197386.29" name="nid">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Sale Price <div class="text-sm text-gray p-1 border d-inline"> Add Note</div></label>
                            <input type="number" class="form-control form-control-sm" id="inputEmail3"  value="1197386.29" name="nid">
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Dealer Discount</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="1002613.71" name="nid" readonly>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Dealer Price</label>
                                <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="0.00" name="nid" readonly>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Temporary Sales Price</label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="2300000.00" name="nid">
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Temporary Dealer Discount</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="1002613.71" name="nid" readonly>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Temporary Dealer Price</label>
                                <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="0.00" name="nid" readonly>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Location</label>
                                <select class="form-control select2 w100" name="">
                                  <option>Select Package</option>
                                  <option selected>Red</option>
                                </select> 
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vehicle Image</label>
                               <input type="file" class="form-control" multiple value="" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

              </div>
                 
               
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="reset" class="btn btn-default float-right">Refresh</button>
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