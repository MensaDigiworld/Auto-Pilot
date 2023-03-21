@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Confirmed Vehicle Delivery List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Confirmed Vehicle Delivery List</li>
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

            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header">
            <div class="row">

              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Month</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select Month</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Year</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select Year</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Manufacture</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select Manufacture</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Model</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select Model</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Fuel Type</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select Fuel Type</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Chessis Code</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select Chessis Code</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Fuel Type Delivery Status</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select Fuel Type Delivery Status</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Employee</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select Employee</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">User</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select User</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
                                         
                    <div class="col-sm-12 col-lg-9 col-md-9">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Queck Serach</label>
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="eg:Customer/Product/Chassis/Year/Package/Color/dd/MM/yyyy/dd-MM-yyyy/Month/MM yyyy" value="">
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
                      <th>Vehicle</th>
                      <th>VinChassisNo</th>
                      <th>Customer</th>
                      <th>Sold By</th>
                      <th>Sales Price</th>
                      <th>Delivery Status</th>
                      <th>Delivery By</th>
                      <th>User</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>03-Nov-2022</td>
                      <td>Suzuki-Hustler (MR41S, Tough wild, 660cc, Auto, 2WD, 4 seater)</td>
                      <td>MR41S-345005655</td>
                      <td>Arafat Islam<br>
                        01703606960</td>
                      <td>Mainul Hasan Rumman</td>
                      <td>2100000.00</td>
                      <td>Delivered<br>
                        03-Nov-2022</td>
                        <td>mx..</td>
                        <td>mx..</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#confirmed_sales"> <i class="fas fa-eye"></i></a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                      
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