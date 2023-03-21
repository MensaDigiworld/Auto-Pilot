@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Vehicle Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Registration Information</li>
              <li class="breadcrumb-item active"><a href="{{route('sales.vehicle_registration')}}">Vehicle Registration List</a></li>
              
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
              <div class="card-header card-info">
                <h3 class="card-title text-lg">Add Vehicle Registration Information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  @csrf
                <div class="row">
                        <div class="col-md-6 col-lg-6 c0l-sm-12">
                                    <div class="row">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label for="start_date">Start Date</label>
                                              <input type="date" name="" class="form-control">
                                      </div>
                                    </div>
                                    <div class="row mt-2">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label for="start_date">Agent</label>
                                            <select class="form-control select2" name="">
                                            <option selected>--Select one--</option>
                                            <option>Pending</option>
                                            <option>Active</option>
                                          </select>  
                                      </div>
                                    </div>
                                    <div class="row mt-2">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label for="start_date">Registration Number</label>
                                        <input type="text" class="form-control" name="" placeholder="Registration Number">
                                          </select>  
                                      </div>
                                    </div>
                                     <div class="row mt-2">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label for="start_date">Registration Date</label>
                                              <input type="date" class="form-control" name="">
                                      </div>
                                    </div>

                            </div>


                        <div class="col-md-6 col-lg-6 c0l-sm-12">
                                    <div class="row">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label for="inputEmail3" class="col-form-label">Registration By</label>
                                            <div class="form-group ">
                                              <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" checked="" value="Male" id="Agent">
                                                <label for="Agent">
                                                  Agent
                                                </label>
                                              </div>
                                              <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" id="Customer" value="Customer">
                                                <label for="Customer">
                                                  Customer
                                                </label>
                                              </div>            
                                              </div>            
                                      </div>
                                    </div>
                                   <div class="row ">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label for="start_date">Ammount</label>
                                        <input type="text" class="form-control" name="" placeholder="Ammountr">
                                          </select>  
                                      </div>
                                    </div>
                                    <div class="row mt-2">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label for="start_date">BRTA Ofice</label>
                                        <input type="text" class="form-control" name="" placeholder="Enter BRTA office name">
                                          </select>  
                                      </div>
                                    </div>
                                    <div class="row mt-2">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label for="start_date">Supervised By</label>
                                            <select class="form-control select2" name="">
                                            <option selected>--Select one--</option>
                                            <option>Pending</option>
                                            <option>Active</option>
                                          </select>  
                                      </div>
                                    </div>
                        </div>
                 </div>
                 <div class="row mt-2">
                   <div class="col-md-12 col-lg-12 col-sm-12">
                     <label for="">Remark</label>
                     <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
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