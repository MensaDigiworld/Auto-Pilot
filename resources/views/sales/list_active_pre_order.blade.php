@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Active Pre Order List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Active Pre Order List</li>
              <li class="breadcrumb-item active"></li>
              <li class="breadcrumb-item active"><a href="{{ route('sales.new_pre_order') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Add New Pre Order</a></li>
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
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
              @csrf
            <div class="card">
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
                  <label for="inputEmail3" class="col-form-label">Received By</label>
                
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
                      <th>Order Date </th>
                      <th>Vehicel</th>
                      <th>Customer</th>
                      <th>Budget</th>
                      <th>Loan Amount</th>
                      <th>Expected Delivery Date</th>
                      <th>Received by</th>
                      <th>User</th>
                      <th>Purchase Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>03/Nov/2022</td>
                      <td>Suzuki-Hustler (MR52S, Hybrid X turbo, 660cc, Auto, 2WD, 4 seater)</td>
                      <td>Arafat Islam</td>
                      <td>2500000</td>
                      <td>100000.00</td>
                      <td>04/Nov/2022</td>
                      <td>Mainul Hasan Rumman</td>
                      <td>Mr.x</td>
                      <td>Confirmed</td>
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