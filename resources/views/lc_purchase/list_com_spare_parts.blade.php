@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Confirmed Spare Parts Purchase List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Confirmed Spare Parts Purchase List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('lc.new-spare-parts-purchase')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> New Spare Parts</a>
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
              <div class="card-header">
            <div class="row">
                                        
                  <div class="col-sm-12 col-lg-6 col-md-6">
                    {{-- <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Quick Search</label>
                    
                        <input type="text" class="form-control" placeholder="Search Area">

                          <button type="button" class="btn btn-info"> <i class="fas fa-search"></i> Search!</button>
                    </div> --}}

                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Quick Search</label>
                      <div class="input-group input-group-sm">
                      <input type="search" class="form-control form-control-sm" placeholder="eg: Chassis No/LC Number/Vehicle" name="">
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Invoice No</th>
                      <th>Total Quantity</th>
                      <th>Total Amount</th>
                      <th>Purchased by</th>
                      <th>User</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>CRDSPH000000000001</td>
                      <td>03-Aug-2022</td>
                      <td>	TOKYO MOTORS</td>
                      <td>	12</td>
                      <td>	1050.00 </td>
                      <td>	250000.00</td>
                      <td> </td>
                      <td>	</td>
                      <td class="text-center">
                      <a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                      <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
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