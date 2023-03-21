@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Incomplete After Sales Manager List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Incomplete After Sales Manager List</li>
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
               
                    <select class="form-control select2" name="month">
                      <option selected>Select status</option>
                      <option>Incomplete</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
                                         
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="form-group">
                        
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="eg: product name/vin/chassis no/customer name/contact" value="">
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
                      <th>Customer Name	</th>
                      <th>Delivery Date</th>
                      <th>Key</th>
                      <th>Card</th>
                      <th>Document</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Suzuki-Hustler (MR41S, Tough wild, 660cc, Auto, 2WD, 4 seater)</td>
                      <td>MR41S-345005655</td>
                      <td>Arafat Islam<br>
                        01703606960</td>
                      <td>03-Nov-2022</td>
                      <td>Received-2, Delivered-2	</td>
                      <td>Received-0, Delivered-0</td>
                      <td>One or more pending</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-plus"></i></a>
                          <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a></td>
                      
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