@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pre Order List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pre Order List</li>
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

            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header">
            <div class="row">

              <div class="col-sm-12 col-lg-4 col-md-4">
                <div class="form-group">
                
                    <select class="form-control select2" name="month">
                      <option selected>All</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
                                                      
                <div class="col-sm-12 col-lg-8 col-md-8">
                  <div class="form-group">
              
                    <div class="input-group input-group-sm">
                    <input type="search" class="form-control form-control-sm" placeholder="eg: Customer Name, Contact No, Product, dd/MM/yyyy" value="">
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
                      <th>Vehicle</th>
                      <th>Customer</th>
                      <th>Expected Delivery Date</th>
                      <th>Budget</th>
                      <th>Status</th>
                      <th>User</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>03-Nov-2022</td>
                      <td>Suzuki-Hustler (MR41S, Tough wild, 660cc, Auto, 2WD, 4 seater)</td>
                      <td>MR41S-345005655</td>
                      <td>Arafat Islam</td>
                      <td>Mainul Hasan Rumman</td>
                      <td>2100000.00</td>
                      <td>Not Delivered</td>
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