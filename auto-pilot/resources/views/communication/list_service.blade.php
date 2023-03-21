@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Service Reminder</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service Reminder</li>
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
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-body">
            <div class="row">

              <div class="col-sm-12 col-lg-4 col-md-4">
                <div class="form-group">
                  <div class="row">
                    <div class="col-12">
                      <label for="inputEmail3" class="col-form-label">Date</label>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="input-group input-group-sm">
                        {{-- <div class="input-group-append">
                          <button type="submit" class="btn btn-sm btn-default">
                          From
                          </button>
                          </div> --}}
                      <input type="date" class="form-control form-control-sm" value="{{ date('d-m-YY') }}">
                      
                      </div>
                    </div>
                    
                  </div>
                  
                  </div>
                
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Due to Next</label>               
                    <input type="text" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Service Type</label>               
                      <select class="form-control select2" name="">
                        <option selected>Select</option>
                        <option>Pending</option>
                        <option>Active</option>
                      </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                              
                      <select class="form-control select2" name="">
                        <option selected>Manufacture</option>
                        <option>Pending</option>
                        <option>Active</option>
                      </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                              
                      <select class="form-control select2" name="">
                        <option selected>Model</option>
                        <option>Pending</option>
                        <option>Active</option>
                      </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                              
                      <select class="form-control select2" name="">
                        <option selected>Chassis Code</option>
                        <option>Pending</option>
                        <option>Active</option>
                      </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                              
                      <select class="form-control select2" name="">
                        <option selected>Year of Manufacture</option>
                        <option>Pending</option>
                        <option>Active</option>
                      </select> 
                    </div>
                </div>
                                                                       
                <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="Type here..." value="">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-info">
                        <i class="fa fa-search"></i>
                        </button>
                        </div>
                        </div>
                        </div>
                  </div>

              
              </div>
              </div>
              </form>
            </div>

              <div class="card">
                
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered">
                    <thead class="bg-gray">
                      <tr>
                        <th>Sl</th>
                        <th>Name </th>
                        <th>Address</th>
                        <th>Manufacture</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Fuel</th>
                        <th>CC</th>
                        <th>Chassis</th>
                        <th>Service</th>
                        <th>Due Date</th>
                        <th>Deli Date</th>
                        <th>Contact</th>
                        <th colspan="4" class="text-center">
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" id="SpareParts" value="Spare Parts">
                          <label for="SpareParts">
                            Select All 
                          </label>
                        </div>
                      </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>Mr.xyz</td>
                        <td>Dhanmondi</td>
                        <td>Male</td>
                        <td>Engineer</td>
                        <td>25/10/1990</td>
                        <td>Toyota</td>
                        <td>Corolla</td>
                        <td>25/10/1990</td>
                        <td>Sazzad</td>
                        <td>Sazzad</td>
                        <td>Sazzad</td>
                        <td>01706866493 <i class="fas fa-phone-alt text-success"></i><br>
                        customer@gmail.com</td>
                        <td><i class="fab fa-facebook-messenger text-md"> SMS </i> </td>
                        <td><i class="fas fa-envelope text-md"> Email </i> </td>
                        <td>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r3" id="Select" value="Select">
                            <label for="Select">
                              Select 
                            </label>
                          </div>  
                        </td>
                        <td class="text-center">
                          <div class="d-flex flex-column justify-centent-center">
                            <a href="{{ route('sales.add_loan_information')}}" class="btn btn-sm btn-warning flex-fill"><i class="fas fa-eye "></i> Other Action</a>
                          </div>
                        </td>
                                                
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-md m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
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