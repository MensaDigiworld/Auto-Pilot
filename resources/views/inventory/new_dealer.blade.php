@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Dealer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Dealer</li>
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
              <div class="card-header">
                <h3 class="card-title">Add New Dealer</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Dealer</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                    
                        <label for="inputEmail3" class="col-form-label col-sm-12 col-lg-3 col-md-3">Contact Start Date <span class="text-danger fw-600">*</span></label>
                         
                        <input type="date" class="form-control form-control-sm col-sm-12 col-lg-3 col-md-3" id="inputEmail3" placeholder="Contact Start Date" value="" name="exp_date">
                                          
                        <label for="inputEmail3" class="col-form-label col-sm-12 col-lg-3 col-md-3">Contact Start Date <span class="text-danger fw-600">*</span></label>
                       
                        <input type="date" class="form-control form-control-sm col-sm-12 col-lg-3 col-md-3" id="inputEmail3" placeholder="Contact Start Date" value="" name="exp_date">
                                         
                  </div>

                  <div class="row">
                    
                    <label for="inputEmail3" class="col-form-label col-sm-12 col-lg-3 col-md-3">Dealer Name <span class="text-danger fw-600">*</span></label>
                     
                    <input type="text" class="form-control form-control-sm col-sm-12 col-lg-3 col-md-3" id="inputEmail3" placeholder="Enter Dealer Name" value="" name="exp_date">
                                      
                    <label for="inputEmail3" class="col-form-label col-sm-12 col-lg-3 col-md-3">Dealer Name <span class="text-danger fw-600">*</span></label>
                   
                    <input type="text" class="form-control form-control-sm col-sm-12 col-lg-3 col-md-3" id="inputEmail3" placeholder="Enter Dealer Name" value="" name="exp_date">
                                     
                  </div>

                  <div class="row">
                    
                    <label for="inputEmail3" class="col-form-label col-sm-12 col-lg-3 col-md-3">Address</label>
                     
                    <textarea class="form-control form-control-sm col-sm-12 col-lg-9 col-md-9" rows="3" placeholder="Enter Dealer Address" name="address"></textarea>
                                                                          
                  </div>
                 
                  <h5 class="py-2">Vehicle Information</h5>

                    <div class="row">
                      
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <div class="form-group">
                          <select class="form-control select2 " name="vehicle">
                            <option>Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)</option>
                            <option>ALION-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)</option>
                          </select>
                          
                        </div>
                      </div>

                        <div class="col-sm-12 col-lg-2 col-md-2">
                          <div class="form-group">
                                                       
                              <input type="submit" class="form-control form-control-sm btn btn-sm btn-success float-left" value="Add" name="add">
                            
                          </div>
                        </div>

                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="table-responsive p-0">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>SL </th>
                              <th>Name </th>
                              <th>Body Type </th>
                              <th>Vehicle Type</th>
                              <th>Fuel Type</th>
                              <th>Country Of Orgin</th>
                              <th class="text-center" colspan="2">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>22/2/2022</td>
                              <td>Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)</td>
                              <td>GM4-232425</td>
                              <td>Passenger</td>
                              <td>Jamil Hassan</td>
                              <td>Japan</td>
                              <td class="text-center"><a href="" data-toggle="modal" data-target="#comission" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Commission</a>
                                 
                                  <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                              
                            </tr>
                            
                          </tbody>
                        </table>
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