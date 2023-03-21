@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Transferred Vehicle </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Transferred Vehicle </li>
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
                <h3 class="card-title">Add Local Purchase</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Local Purchase</a>
              </div> --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12 col-lg-7 col-md-7">
                        <div class="row">
                          <div class="col-sm-12 col-lg-12 col-md-12 px-0">
                            <div class="row">
                              <div class="col-sm-12 col-lg-6 col-md-6">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-form-label">Date<span class="text-danger fw-600">*</span></label>
                                    <input type="date" class="form-control form-control-sm" id="inputEmail3"  value="" name="">
                                    
                                  </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-form-label">Vehicle Condition<span class="text-danger fw-600">*</span></label>
                                  <div class="pt-lg-1">
                                    <div class="icheck-success d-inline">
                                      <input type="radio" name="r3" checked value="Recondition" id="vehiclecondition1">
                                      <label for="vehiclecondition1">
                                        Recondition
                                      </label>
                                      </div>
                                      <div class="icheck-success d-inline">
                                      <input type="radio" name="r3" id="vehiclecondition2" value="BrandNew">
                                      <label for="vehiclecondition2">
                                        Brand New
                                      </label>
                                      </div>
                                      <div class="icheck-success d-inline">
                                        <input type="radio" name="r3" id="vehiclecondition3" value="BrandNew">
                                        <label for="vehiclecondition3">
                                          Used
                                        </label>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                          
                          </div>
                          <div class="col-sm-12 col-md-12 col-lg-12 px-0">
                            <div class="row">
                              <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Vehicle <span class="text-danger fw-600">*</span></label>
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Vehicle</option>
                                    <option selected>Probox</option>
                                  </select> 
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-3 col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Package Trim <span class="text-danger fw-600">*</span></label>
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Package Trim</option>
                                    <option selected>Probox</option>
                                  </select> 
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-3 col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Vin/Chassis No <span class="text-danger fw-600">*</span></label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Vin/Chassis No"  value="" name="nid">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-12 col-md-12 col-lg-12 px-0">
                            <div class="row">
                              <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Engine Number <span class="text-danger fw-600">*</span></label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Vehicle Tracking Code</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="nid">
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-sm-12 px-0">
                            <div class="row">
                              <div class="col-sm-12 col-lg-2 col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Year of Manufacture <span class="text-danger fw-600">*</span></label>
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Year of Manufacture</option>
                                    <option selected>2000</option>
                                  </select> 
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-2 col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Exterior Color <span class="text-danger fw-600">*</span></label>
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Color</option>
                                    <option selected>red</option>
                                  </select> 
                                </div>
                              </div>
                               <div class="col-sm-12 col-lg-2 col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Interior Color <span class="text-danger fw-600">*</span></label>
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Color</option>
                                    <option selected>red</option>
                                  </select> 
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-3 col-md-3">
                                <div class="form-group brand">
                                  <label for="inputEmail3" class="col-form-label">Auction Grade</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                                <div class="form-group used" style="display: none">
                                  <label for="inputEmail3" class="col-form-label">Mileage</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-3 col-md-3">
                                <div class="form-group brand">
                                  <label for="inputEmail3" class="col-form-label">Mileage</label>
                                  <input type="number" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                                <div class="form-group used" style="display: none">
                                  <label for="inputEmail3" class="col-form-label">Registration Number</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-12 used px-0" style="display: none" >
                            <div class="row">
                              <div class="col-sm-12 col-lg-3 col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Year of Registration</label>
                                  <select class="form-control select2 w100" name="">
                                    <option>Select Year of Registration</option>
                                    <option selected>2000</option>
                                  </select> 
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-3 col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label d-block">Document Status </label>
                                  <div class="icheck-success d-inline">
                                    <input type="radio" name="r4" checked="" value="Recondition" id="radioSuccess4">
                                    <label for="radioSuccess4">
                                      Updated
                                    </label>
                                    </div>
                                    <div class="icheck-success d-inline">
                                    <input type="radio" name="r4" id="radioSuccess5" value="BrandNew">
                                    <label for="radioSuccess5">
                                      failed
                                    </label>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-3 col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Document Expiry Date</label>
                                  <input type="date" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-3 col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Fitness Expiry Date</label>
                                  <input type="date" class="form-control form-control-sm" id="inputEmail3"  value="" name="nid">
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-lg-4 col-md-4 used px-0" style="display: none" >
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Tax token Expiry Date</label>
                              <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="nid">
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-12 col-lg-12 px-0">
                            <div class="row">
                              <div class="col-sm-12 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Temporary Sales Price(Tk)</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Temporary Sales Price"  value="" name="nid">
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Temporary Dealer Discount (Tk)</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Temporary Dealer Discount" value="" name="nid">
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Temporary Dealer Price (Tk)</label>
                                  <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Temporary Dealer Price" value="" readonly name="nid">
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-1 col-md-1">
                      </div>
                      <div class="col-sm-12 col-lg-4 col-md-4">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Supplier<span class="text-danger fw-600">*</span></label>
                            <select class="form-control select2 w100" name="">
                              <option>Select Supplier</option>
                              <option selected>MD. Harun</option>
                            </select> 
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vehicle Description</label>
                            <textarea class="form-control" rows="2" name="pe_address" spellcheck="false" ></textarea>
                            <div class="form-group mt-2">
                              <div class="icheck-success d-inline">
                                <label for="checkboxPrimary1">
                                  Vehicle Warranty
                                </label>
                                <input type="checkbox" id="warrenty_check">

                              </div>
                            </div>
                          </div>
                          <div class="form-group warrenty" style="display: none">
                            <label for="inputEmail3" class="col-form-label">Vehicle Warranty</label>
                            <textarea class="form-control" rows="2" name="pe_address" spellcheck="false" ></textarea>
                          </div>
                           <div class="form-group">
                            <label for="formFileMultiple" class="col-form-label">Vehicle Image</label>
                            <div class="input-group is-invalid">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                                <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Received By<span class="text-danger fw-600">*</span></label>
                            <select class="form-control select2 w100" name="">
                              <option>Select receiver</option>
                              <option selected>MD. Harun</option>
                            </select> 
                          </div>

                      </div>
                  </div>
                 
               
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success"> Save</button>
                  <button type="reset" class="btn btn-primary float-right">List</button>
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