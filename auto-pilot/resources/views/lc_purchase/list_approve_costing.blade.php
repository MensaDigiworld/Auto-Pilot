@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Approved Costing List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Approved Costing List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('lc.new-local-purchase')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Local Purchase</a>
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
                      <div class="col-sm-12 col-lg-2 col-md-2">
                        <label for="inputEmail3" class="col-form-label">Purchase Type</label>
                        <div class="form-group py-1">
                            
                        
                              <div class="icheck-success d-inline px-1">
                              <input type="radio" name="import" value="all" id="all">
                              <label for="all">
                                All
                              </label>
                              </div>
                              <div class="icheck-success d-inline px-1">
                              <input type="radio" name="import" value="import" id="import">
                              <label for="import">
                                Import
                              </label>
                              </div>
                              <div class="icheck-success d-inline px-1">
                                <input type="radio" name="import" value="Local" id="local">
                                <label for="local">
                                  Local
                                </label>
                                </div>
                        </div>
                    </div>
                      <div class="col-sm-12 col-lg-2 col-md-2">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Month</label>
                        
                            <select class="form-control select2 w100" name="month">
                              <option>Select Month</option>
                              <option>January</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 col-md-2">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Year</label>
                      
                          <select class="form-control select2 w100" name="year">
                            <option>Select Year</option>
                            <option>2000</option>
                          </select> 
                      </div>
                  </div>

                  <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Manufacturer</label>
                      
                          <select class="form-control select2 w100" name="">
                            <option>Select Manufacturer</option>
                            <option>2000</option>
                          </select> 
                      </div>
                  </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Model</label>
                    
                        <select class="form-control select2 w100" name="">
                          <option>Select Model</option>
                          <option>2000</option>
                        </select> 
                    </div>
                </div>

                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Supplier</label>
                    
                        <select class="form-control select2 w100" name="">
                          <option>Select Supplier</option>
                          <option>2000</option>
                        </select> 
                    </div>
                </div>

                 
                  <div class="col-sm-12 col-lg-8 col-md-8">
                    {{-- <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Quick Search</label>
                    
                        <input type="text" class="form-control" placeholder="Search Area">

                          <button type="button" class="btn btn-info"> <i class="fas fa-search"></i> Search!</button>
                    </div> --}}

                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Quick Search</label>
                      <div class="input-group input-group-sm">
                      <input type="search" class="form-control form-control-sm" placeholder="eg: Vehicle/Chassis/Tracking Code etc..." name="">
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
                      <th>Date </th>
                      <th>Vehicle </th>
                      <th>Vin/Chassis No</th>
                      <th>Year of Manufacture</th>
                      <th>Reg. Number <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button" data-tooltip="tooltip" title="Toggle">
                      </th>
                      <th>Supplier </th>
                      <th>Total Cost </th>
                      <th>Sales Price </th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>20/Oct/2022	</td>
                      <td>	Toyota-Axio (NKE165, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)</td>
                      <td>NKE165-124578</td>
                      <td>2018</td>
                      <td></td>
                      <td>Cross Continent Corporation</td>
                      <td>1453000.00</td>
                      <td>2705000.00</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#approve_costing"> <i class="fas fa-book-open"></i> Details</a></td>
                      
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