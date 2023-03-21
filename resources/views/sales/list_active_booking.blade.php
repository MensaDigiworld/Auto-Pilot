@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Active Booking List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Active Booking List</li>
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
              <div class="card-header">
            <div class="row">

              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Month</label>
                
                    <select class="form-control select2" name="">
                      <option selected>Select</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Year</label>
                
                    <select class="form-control select2" name="">
                      <option selected>Select</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Booked By</label>
                
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
                      <th>Date </th>
                      <th>Vehicel</th>
                      <th>Vin/Chassis No</th>
                      <th>Customer</th>
                      <th>Booked by</th>
                      <th>User</th>
                      <th>Deposit</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>03/Nov/2022</td>
                      <td>Suzuki-Hustler (MR52S, Hybrid X turbo, 660cc, Auto, 2WD, 4 seater)</td>
                      <td>NZT260-2356789</td>
                      <td>Arafat Islam<br> 01703606960</td>
                      <td>Enamual Hasan Raihan</td>
                      <td>Mr.x</td>
                      <td>0.00</td>
                      <td class="text-center">
                          <a href="{{ route('sales.add_loan_information')}}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> Details</a></td>
                      
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