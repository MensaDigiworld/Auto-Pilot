@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Customer Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer Information</li>
              <li class="breadcrumb-item active"></li>
              <li class="breadcrumb-item"><a href="{{ route('sales.list_customer') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i> Customer List</a></li>
              
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

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  @csrf

                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 mb-lg-2 pb-lg-1">
                            <label for="inputEmail3" class="col-form-label">Customer Type <span class="text-danger fw-600">*</span></label>
                             <div class="form-group">
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r3" checked="" value="Recondition" id="Individual">
                                <label for="Individual">
                                  Individual
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r3" id="Corporate" value="">
                                <label for="Corporate">
                                  Corporate
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r3" id="Wholesale" value="">
                                <label for="Wholesale">
                                  Wholesale
                                </label>
                              </div>              
                            </div>

                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Name <span class="text-danger fw-600">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Name" value="" name="" >
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 bin" style="display: none">
                            <label for="inputEmail3" class="col-form-label">BIN </label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Business Identification Number" value="" name="" >
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 nid">
                            <label for="inputEmail3" class="col-form-label">              
                              <div class="icheck-success d-inline">
                                  <input type="radio" name="r4" checked="" value="" id="nid">
                                  <label for="nid">
                                    NID
                                  </label>
                                </div>
                                <div class="icheck-success d-inline">
                                  <input type="radio" name="r4" id="passport" value="">
                                  <label for="passport">
                                    Passport
                                  </label>
                                </div>
                                <div class="icheck-success d-inline">
                                  <input type="radio" name="r4" id="license" value="">
                                  <label for="license">
                                    Driving License
                                  </label>
                                </div>
                               </label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Identification Number" value="" name="" >
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Primary Contact<span class="text-danger fw-600">*</span></label>
                            <div class="input-group input-group-sm">
                              <div class="input-group-prepend">
                              <span class="input-group-text">+88</span>
                              </div>
                              <input type="tel" class="form-control form-control-sm" placeholder="Contact">
                              </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Contact-2</label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Contact-2" value="" name="" >
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Email</label>
                            <input type="email" class="form-control form-control-sm" id="inputEmail3" placeholder="Email" value="" name="" >
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                  <label for="inputEmail3" class="col-form-label">Gender</label>
                                  <div class="form-group">
                                    <div class="icheck-success d-inline">
                                      <input type="radio" name="g" checked="" value="Male" id="Male">
                                      <label for="Male">
                                        Male
                                      </label>
                                    </div>
                                    <div class="icheck-success d-inline">
                                      <input type="radio" name="g" id="Female" value="Female">
                                      <label for="Female">
                                        Female
                                      </label>
                                    </div>
                                    <div class="icheck-success d-inline">
                                      <input type="radio" name="g" id="Other" value="Other">
                                      <label for="Other">
                                        Other
                                      </label>
                                    </div>              
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                  <label for="inputEmail3" class="col-form-label">Date of Birth</label>
                                  <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="" >
                                </div>
                            </div>
                          </div>
                         <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="inputEmail3" class="col-form-label">Profession</label>
                          <div class="row">
                          <select class="form-control select2 float-left col-11" name="">
                            <option selected>Select Profession</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>
                          <a href="" class="btn btn-sm btn-success float-left col-1 d-inline"><i class="fas fa-plus"></i></a>
                        </div>
                        </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">                          
                          <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">CIN </label>
                        <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Auto Generate" value="">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-info">
                        <i class="fa fa-random" aria-hidden="true"></i>
                        </button>
                        </div>
                        </div>
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="inputEmail3" class="col-form-label">Address<span class="text-danger fw-600">*</span></label>
                          <textarea class="form-control form-control-sm" rows="2" placeholder="Address" name="pe_address" spellcheck="false" required></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">City<span class="text-danger fw-600">*</span></label>
                              <select class="form-control select2" name="" required>
                                <option selected>Select</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">Area</label>
                              <select class="form-control select2" name="">
                                <option selected>Select City</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">Zip Code</label>
                              <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Zip Code" value="" name="" >
                            </div>
                            
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 pt-4 mt-1">
                          <div class="text-lg ">OTHERS INFORMATION</div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="inputEmail3" class="col-form-label">Assigned to</label>
                          <select class="form-control select2" name="">
                            <option selected>Select</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="inputEmail3" class="col-form-label">Organization</label>
                          <div class="row">
                          <select class="form-control select2 float-left col-11" name="">
                            <option selected>Select Organization</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>
                          <a href="" class="btn btn-sm btn-success float-left col-1 d-inline"><i class="fas fa-plus"></i></a>
                        </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="inputEmail3" class="col-form-label">Credit Limit</label>
                          <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="" >
                        </div>
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