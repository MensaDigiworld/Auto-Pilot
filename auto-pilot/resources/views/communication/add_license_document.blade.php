@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Document/License Reminder</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Document/License Reminder</li>
              <li class="breadcrumb-item active"></li>
             
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
            <form action="{{route('analytics.license_document.store')}}" class="form-horizontal" method="POST">
              @csrf
            <div class="card">
              <div class="card-header bg-info">
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                          <h2>Add Registration Certificate</h2>
                  </div>
                     <div class="col-sm-12 col-md-6 col-lg-6">
                       <a href="#"><button type="button" class="btn btn-success float-right"><h3>List of License</h3></button></a>
                  </div>
                </div>
              </div>              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row mt-2 ">
                    <div class="col-md-3 col-lg-3 col-sm-12 d-flex justify-content-center">
                      <h5 class="text-center">Code</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                      <input type="text" class="form-control" name="code" value="00000" readonly>
                    </div>
                  </div>

                     <div class="row mt-2">
                    <div class="col-md-3 col-lg-3 col-sm-12 d-flex justify-content-center">
                      <h5 class="text-center">Document Type</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">                                                              
                          <div class="input-group ">
                            <select class="form-control select2" name="document_type">
                              <option>Active</option>
                              <option>Inactive</option>
                            </select> 
                            <span class="input-group-append">
                            <a href="" class="btn btn-success btn-sm "><i class="fas fa-plus"></i></a>
                            </span>
                            </div>
                    </div>
                  </div>

                     <div class="row mt-2">
                    <div class="col-md-3 col-lg-3 col-sm-12 d-flex justify-content-center">
                      <h5 class="text-center">License/Document Name</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                      <input type="text" class="form-control" name="license_document_name" value="">
                    </div>
                  </div>

                    <div class="row mt-2 d-flex justify-content-center">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                      <h5 class="text-center">Registrant</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                      <input type="text" class="form-control" name="registration" value="">
                    </div>
                  </div>

                    <div class="row mt-2 d-flex justify-content-center">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                      <h5 class="text-center">License/Document Number</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                      <input type="text" class="form-control" name="license_document_number" value="">
                    </div>
                  </div>

                  <div class="row mt-2 d-flex justify-content-center">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                      <h5 class="text-center">Address</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                      <textarea name="address" class="form-control" id="" cols="30" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="row mt-2 d-flex justify-content-center">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                      <h5 class="text-center">Register Date</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                      <input type="date" name="registration_date" class="form-control">
                    </div>
                  </div>

                  <div class="row mt-3 d-flex justify-content-center">
                    <div class="col-md-3 col-lg-3 col-sm-12 mt-2">
                      <h5 class="text-center">Renewal type</h5>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-6 mt-3">
                       <div class="icheck-success d-inline">
                            <input type="radio" name="renewal_type" value="recuring" id="recuring">
                            <label for="recuring">
                              Recurring
                            </label>
                          </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-6 mt-3">
                       <div class="icheck-success d-inline">
                          <input type="radio" name="renewal_type" value="notapplicable" id="notapplicable">
                          <label for="notapplicable">
                            Not Applicable
                          </label>
                        </div> 
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-12"></div>
                     <div class="col-md-2 col-lg-2 col-sm-6">
                          <label for="inputEmail3" class="col-form-label">Vehicle</label>
                          <select class="form-control select2" name="vehicle">
                            <option selected disabled>Select Vehicle</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-6  mt-2">
                       <label for="days">Validaty</label> 
                       <input type="date" name="velidaty_date" class="form-control form-control-sm">    
                    </div>

                  </div>


                    <div class="row mt-2 d-flex justify-content-center">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                      <h5 class="text-center">Remark</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                     <textarea name="remarks" class="form-control" id="" placeholder="" cols="30" rows="3"></textarea>
                    </div>
                  </div>

                   <div class="row mt-2 d-flex justify-content-center">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                      <h5 class="text-center">Status</h5>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">                                                              
                          <div class="input-group ">
                            <select class="form-control select2" name="status">
                              <option>Active</option>
                              <option>Inactive</option>
                            </select> 
                            </div>
                    </div>
                  </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer d-flex justify-content-center">
                
                <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Save</button>
                <button type="submit" class="btn btn-danger mr-lg-1"> <i class="fas fa-times"></i> Cancel</button>
              </div>
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