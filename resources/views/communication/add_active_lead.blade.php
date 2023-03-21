@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lead Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lead Information</li>
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
          <div class="col-lg-12 col-12">
            <form action="#" class="form-horizontal" method="POST">
              @csrf
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-center">
                        <label for="inputEmail3" class="col-form-label">Date</label>
                        <input type="date" class="form-control form-control-sm mx-lg-2" id="inputEmail3" value="" name="">  
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-center">
                        <label for="inputEmail3" class="col-form-label">Source</label>
                        <div class="icheck-success d-inline mx-2">
                            <input type="radio" name="r3" checked="" value="Online" id="Online">
                            <label for="Online">
                              Online
                            </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r3" id="Visit" value="Visit">
                            <label for="Visit">
                              Visit
                            </label>
                          </div>   
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-center">
                        <select class="form-control select2" name="">
                            <option selected>Select online source</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>  
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-center">
                        <select class="form-control select2" name="">
                            <option selected>Lead Potential</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>  
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Looking to <span class="text-danger text-bold">*</span></label><br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="r3" checked="" value="Buy" id="Buy">
                                    <label for="Buy">
                                      Buy
                                    </label>
                                  </div>
                                  <div class="icheck-success d-inline">
                                    <input type="radio" name="r3" id="Sell" value="Sell">
                                    <label for="Sell">
                                      Sell
                                    </label>
                                  </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Product type <span class="text-danger text-bold">*</span></label><br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="r3" checked="" value="Vehicle" id="Vehicle">
                                    <label for="Vehicle">
                                      Vehicle
                                    </label>
                                  </div>
                                  <div class="icheck-success d-inline">
                                    <input type="radio" name="r3" id="SpareParts" value="Spare Parts">
                                    <label for="SpareParts">
                                      Spare Parts
                                    </label>
                                  </div>
                            </div>

                        </div>

                        <div class="row vehicle">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Product <span class="text-danger text-bold">*</span></label><br>
                                <select class="form-control select2" name="">
                                    <option selected>Select Product</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Product-2 (Optional)</label><br>
                                <select class="form-control select2" name="">
                                    <option selected>Select Product-2 (Optional)</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Product-3 (Optional)</label><br>
                                <select class="form-control select2" name="">
                                    <option selected>Select Product-3 (Optional)</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select> 
                            </div>
                        </div>
                        <div class="row spareparts" style="display: none">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Spare Parts <span class="text-danger text-bold">*</span></label><br>
                                <select class="form-control select2" name="">
                                    <option selected>Select Spare Parts</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Spare Parts-2 (Optional)</label><br>
                                <select class="form-control select2" name="">
                                    <option selected>Select Spare Parts-2 (Optional)</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Spare Parts-3 (Optional)</label><br>
                                <select class="form-control select2" name="">
                                    <option selected>Select Spare Parts-3 (Optional)</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="inputEmail3" class="col-form-label">Lead Remarks</label>
                                <textarea class="form-control form-control-sm" rows="2" placeholder="Lead Description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Supervised By</label>
                                <select class="form-control select2" name="">
                                    <option selected>Select</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Initiated By <span class="text-danger text-bold">*</span></label>
                                <select class="form-control select2" name="">
                                    <option selected>Select</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select>
                            </div>
                        </div>
                        
                        

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Customer Information </label><br>
                                <div class="input-group input-group-sm">
                                    <select class="form-control select2" name="">
                                        <option selected>Select Customer</option>
                                        <option>Pending</option>
                                        <option>Active</option>
                                      </select>  
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-success">Add New Lead</button>
                                    </span>
                                </div>
        
                            </div>
                        </div>
                        <div class="row my-3 ">
                            <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between">
                                <i class="fas fa-envelope text-lg text-navy"> Send a Mail</i> 
                            
                                <i class="fab fa-facebook-messenger text-lg text-primary"> Share via Messenger</i> 
                           
                                <i class="fas fa-phone-volume text-lg text-danger"> Call</i> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Next Action <span class="text-danger text-bold">*</span></label>
                                <select class="form-control select2" name="">
                                    <option selected>Select Next Action</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Date </label>
                                <input type="date" class="form-control form-control-sm mx-lg-2" id="inputEmail3" value="" name="">  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Assigned To</label>
                                <select class="form-control select2" name="">
                                    <option selected>Select</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Note</label>
                                <textarea class="form-control form-control-sm" rows="2" placeholder="Next Action Description"></textarea>
                            </div>
                            
                        </div>

                    </div>
                    
                  </div>
                  
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-list"></i> Lsit</button>
                <button type="submit" class="btn btn-danger mx-lg-1"><i class="fas fa-times"></i> Cancel</button>
                <button type="submit" class="btn btn-success mr-lg-1"> <i class="fas fa-times"></i> Close Deal</button>
                <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Save</button>
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