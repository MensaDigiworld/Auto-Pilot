@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pending BE List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pending BE</li>
              
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
              {{-- <div class="card-header">
            <div class="row">
                                        
                  <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Quick Search</label>
                    
                        <input type="text" class="form-control" placeholder="Search Area">

                          <button type="button" class="btn btn-info"> <i class="fas fa-search"></i> Search!</button>
                    </div>

                    <div class="form-group">
                      <div class="input-group input-group-sm">
                      <input type="search" class="form-control form-control-sm" placeholder="eg: Customer Name, Contact No, Product, dd/MM/yyyy" name="">
                      <div class="input-group-append">
                      <button type="submit" class="btn btn-lg btn-info">
                      <i class="fa fa-search"></i>
                      </button>
                      </div>
                      </div>
                      </div>
                </div>
                  <div class="col-sm-12 col-lg-6 col-md-6">
                    <a href="{{ route('inventory.new-pre-order')}}" class="btn float-right btn-info p-1"><i class="fas fa-plus"></i> Add New </a>
                </div>

            

              </div>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Proforma Date</th>
                      <th>Proforma Invoice/Ref No	</th>
                      <th>IRC Number</th>
                      <th>Supplier</th>
                      <th>BL Code</th>
                      <th>Vin/Chassis No</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>12-Oct-2022</td>
                      <td>34/2022</td>
                      <td>WORLD AUTOMOBILES</td>
                      <td>Cross Continent Corporation</td>
                      <td>12311</td>
                      <td>GM4-1110001</td>
                      <td class="text-center">
                      <a href="{{ route('lc.lc_manager')}}" class="btn btn-sm btn-info"> <i class="fas fa-plus"></i> Add</a>
                      <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#pending_lc"><i class="fas fa-eye"></i> Details</a></td>
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