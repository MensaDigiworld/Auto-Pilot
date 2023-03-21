@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bill of Entry List (BOE)</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bill of Entry List (BOE)</li>
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
                            <label for="inputEmail3" class="col-form-label">Year</label>
                        
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
                        
                            <select class="form-control select2 w100" name="year">
                              <option>Select Status</option>
                              <option>Pending</option>
                              <option>Confirmed</option>
                            </select> 
                        </div>
                    </div>
                      <div class="col-sm-12 col-lg-2 col-md-2">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Added By</label>
                        
                            <select class="form-control select2 w100" name="year">
                              <option>Select Status</option>
                              <option>Pending</option>
                              <option>Confirmed</option>
                            </select> 
                        </div>
                    </div>
                  
                  <div class="col-sm-12 col-lg-4 col-md-4">
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
                      <th>Sl</th>
                      <th>Date</th>
                      <th>Ref No</th>
                      <th>Vin/Chassis No</th>
                      <th>LC Number	</th>
                      <th>HS Code</th>
                      <th>Duty Amount</th>
                      <th>Added By Employee & User</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>RU3-252526</td>
                      <td>22010010070</td>
                      <td>TOKYO MOTORS</td>
                      <td>SS Trading</td>
                      <td>1341991.07</td>
                      <td>1341991.07</td>
                      <td>1341991.07</td>
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