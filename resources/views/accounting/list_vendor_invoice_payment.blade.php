@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Vendor Invoice & Payment</h1>
            <div class="text-sm text-gray"> Showing 21 poy of 21 Invoice(s)</div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active">New Vendor Invoice & Payment</li>
              <li class="breadcrumb-item"><a href="{{ route('accounting.new_vendor_invoice') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Add New Invoice</a></li>
             
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
                                                      
                <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <select class="form-control select2" name="">
                          <option>Select Cost Type</option>
                          <option>2000</option>
                          <option>2022</option>
                        </select>
                        </div>
                  </div>
                <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <select class="form-control select2" name="">
                          <option>Select Vendor</option>
                          <option>2000</option>
                          <option>2022</option>
                        </select>
                        </div>
                  </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="eg: Vendor, date(dd-MM-yyyy/dd-MMM-yyyy/)" value="">
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
            </div>

              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered">
                    <thead class="bg-gray">
                      <tr>
                        <th>Sl </th>
                        <th>Invoice & Date </th>
                        <th>Business Partner</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Due Amount</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>INS_262<br>PI:72796</td>
                        <td>Japan Auto</td>
                        <td>Vehicle</td>
                        <td>VKE16213</td>
                        <td>100000</td>
                        <td class="text-center">
                          <a href="" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Details</a>
                          <a href="{{ route('accounting.new_vendor_payment') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Payment</a>
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