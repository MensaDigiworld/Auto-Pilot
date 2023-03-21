@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List Of Letter of Credit (LC)</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Of Letter of Credit (LC)</li>
              <li class="breadcrumb-item active"></li>
              {{-- <a href="{{ route('lc.new-proforma-invoice')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> New Proforma Invoice</a> --}}
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
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Status</label>
                        
                            <select class="form-control select2 w100" name="year">
                              <option>Select Status</option>
                              <option>Pending</option>
                              <option>Confirmed</option>
                            </select> 
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

                  <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Supplier</label>
                      
                          <select class="form-control select2 w100" name="">
                            <option>Select Supplier</option>
                            <option>2000</option>
                          </select> 
                      </div>
                  </div>

                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Opening Bank</label>
                    
                        <select class="form-control select2 w100" name="">
                          <option>Select Opening Bank</option>
                          <option>2000</option>
                        </select> 
                    </div>
                </div>

                <div class="col-sm-12 col-lg-3 col-md-3">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">IRC Number</label>
                  
                      <select class="form-control select2 w100" name="">
                        <option>Select IRC Number</option>
                        <option>2000</option>
                      </select> 
                  </div>
              </div>
                  
                  <div class="col-sm-12 col-lg-6 col-md-6">
                    {{-- <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Quick Search</label>
                    
                        <input type="text" class="form-control" placeholder="Search Area">

                          <button type="button" class="btn btn-info"> <i class="fas fa-search"></i> Search!</button>
                    </div> --}}

                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Quick Search</label>
                      <div class="input-group input-group-sm">
                      <input type="search" class="form-control form-control-sm" placeholder="" name="">
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
                      <th>Opening Date </th>
                      <th>LC Number </th>
                      <th>Supplier</th>
                      <th>PI Number</th>
                      <th>IRC Number</th>
                      <th>Bank Account</th>
                      <th>LC Amount(USD)</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>22/2/2022</td>
                      <td>1222222</td>
                      <td>WORLD AUTOMOBILES - 788777</td>
                      <td>WD JP AUTOMOBILES</td>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-primary"> <i class="fas fa-book-open"></i> Details</a>
                      <a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
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