@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List of Vehicle Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of Vehicle Registration</li>
              <li class="breadcrumb-item active"></li>
              <li class="breadcrumb-item active"><a href="{{ route('sales.new_pre_order') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Add New</a></li>
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
              <div class="card-header">
            <div class="row">

              <div class="col-sm-12 col-lg-1 col-md-1">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Status</label>
                
                    <select class="form-control select2" name="">
                      <option selected>Select</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-2 col-md-2">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Registration Date</label>
                  <input type="date" class="form-control form-control-sm" id="inputEmail3" value="{{ date('Y-m-d') }}" name="" > 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-1 col-md-1">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Month</label>
                
                    <select class="form-control select2" name="">
                      <option selected>Select</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-1 col-md-1">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Year</label>
                
                    <select class="form-control select2" name="">
                      <option selected>Select</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-2 col-md-2">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Agent</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
              </div>
                                         
                <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Quick Search</label>
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="eg: vehicle/chassis no/customer name/contact" value="">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-info">
                        <i class="fa fa-search"></i> Search
                        </button>
                        </div>
                        </div>
                        </div>
                  </div>

              
              </div>
              </div>
              </form>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Sl </th>
                      <th>Product </th>
                      <th>Vin/Chassis No</th>
                      <th>Customer</th>
                      <th>Sales Date	</th>
                      <th>Delivery Date	</th>
                      <th>Start Date	</th>
                      <th>Complete Date </th>
                      <th>Agent</th>
                      <th>User</th>
                      <th>Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Suzuki-Hustler (MR41S, Tough wild, 660cc, Auto, 2WD, 4 seater)</td>
                      <td>MR41S-345005655</td>
                      <td>Arafat Islam</td>
                      <td>03/Nov/2022</td>
                      <td>03/Nov/2022</td>
                      <td>03/Nov/2022</td>
                      <td>03/Nov/2022</td>
                      <td>x</td>
                      <td>x</td>
                      <td>pending</td>
                      <td class="text-center">
                          <a href="{{ route('sales.add_vehicle_registration')}}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a></td>
                      
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