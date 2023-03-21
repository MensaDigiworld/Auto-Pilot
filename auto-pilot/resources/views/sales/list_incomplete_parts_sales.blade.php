@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Spare Parts Sales List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Spare Parts Sales List</li>
              <li class="breadcrumb-item active"></li>
              <li class="breadcrumb-item active"><a href="{{ route('sales.list_loan_manager') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add New</a></li>
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
                  <label for="inputEmail3" class="col-form-label">Bill Type</label>
                    <select class="form-control select2" name="">
                      <option selected>Select</option>
                      <option>Incomplete</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Sold Type</label>
                    <select class="form-control select2" name="">
                      <option selected>Select</option>
                      <option>Incomplete</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
                                         
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Quick Search</label>
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="" value="">
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
                      <th>Invoice No</th>
                      <th>Bill Type</th>
                      <th>Chassis</th>
                      <th>Customer Phone</th>
                      <th>User</th>
                      <th>Sold By</th>
                      <th>Tatal Quantity </th>
                      <th>Tatal Amount </th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                      
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