@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List of Cheque Register</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active">List of Cheque Register List</li>
              <li class="breadcrumb-item"><a href="{{ route('accounting.new_active_cheque') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Add New</a></li>
             
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
              <div class="card-body">
            <div class="row">
              <div class="col-sm-12 col-lg-2 col-md-2">
                <div class="form-group">
                  <select class="form-control select2" name="">
                    <option>Pending</option>
                    <option>2000</option>
                    <option>2022</option>
                  </select>
                  </div>
              </div>
              <div class="col-sm-12 col-lg-2 col-md-2">
                <div class="form-group">
                  <select class="form-control select2" name="">
                    <option>Select Receive or Loss</option>
                    <option>2000</option>
                    <option>2022</option>
                  </select>
                  </div>
              </div>
              
              <div class="col-sm-12 col-lg-2 col-md-2">
                <div class="form-group">
                 <input type="date" class="form-control form-control-sm" name="" value="" >
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
                        <th>Cheque Date </th>
                        <th>Receive or Loss </th>
                        <th>Party Name</th>
                        <th>Cheque Issuing Bank</th>
                        <th>Cheque Number</th>
                        <th>Cheque Ammount</th>
                        <th>Status</th>
                        <th>User</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>12/11/2021</td>
                        <td>INS_262<br>PI:72796</td>
                        <td>Japan Auto</td>
                        <td>Vehicle</td>
                        <td>Vehicle</td>
                        <td>Vehicle</td>
                        <td>Vehicle</td>
                        <td>Vehicle</td>
                        <td class="text-center">
                          <a href="{{ route('accounting.edit_voucher_void') }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                          <a href="{{ route('accounting.new_reg_other_payment') }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a>
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