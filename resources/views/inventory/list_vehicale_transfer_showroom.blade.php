@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle(s) Transfarred From Other Showrooms</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Foreign Purchase List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('inventory.new-vehical-transfer')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add New</a>
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
                      <div class="col-sm-12 col-lg-2 col-md-2">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Month</label>
                        
                            <select class="form-control select2" name="month">
                              <option>Select Month</option>
                              <option>January</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 col-md-2">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Year</label>
                      
                          <select class="form-control select2" name="year">
                            <option>Select Year</option>
                            <option>2000</option>
                          </select> 
                      </div>
                  </div>
                  <div class="col-sm-12 col-lg-2 col-md-2">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Manufacturer</label>
                    
                        <select class="form-control select2" name="year">
                          <option>Select Manufacturer</option>
                          <option>Honda</option>
                        </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Model</label>
                  
                      <select class="form-control select2" name="year">
                        <option>Select Model</option>
                        <option>Honda</option>
                      </select> 
                  </div>
              </div>
            <div class="col-sm-12 col-lg-2 col-md-2">
              <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Supplier</label>
              
                  <select class="form-control select2" name="month">
                    <option>Select Supplier</option>
                    <option>January</option>
                  </select> 
              </div>
               </div>
               <div class="col-sm-12 col-lg-2 col-md-2">
              <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Received By</label>              
                  <select class="form-control select2" name="month">
                    <option>Select Receiver</option>
                    <option>January</option>
                  </select> 
              </div>

        </div>           

              </div>
               <div class="row">
                  <div class="col-sm-12 col-md-9 col-lg-9">
                  
                      </div>
                      <div class="col-sm-12 col-md-3 col-lg-3">
                      <div class="form-group">              
                        <div class="input-group ">
                          <label for="inputEmail3" class="col-form-label">Quick Search </label>&nbsp;
                        <input type="search" class="form-control" placeholder="eg: Vehicle/Chassis/Tracking Code etc..." value="">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-info">
                        <i class="fa fa-search "></i>
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
                      <th>SL </th>
                      <th>Date </th>
                      <th>Vehicle </th>
                      <th>Vin/Chassis No</th>
                      <th>Registration Number <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="For Used Car Only."></i></th>
                      <th>Received By</th>
                      <th>Users</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>22/2/2022</td>
                      <td>CR267</td>
                      <td>ES2532122</td>
                      <td>white</td>
                      <td>2510</td>
                      <td></td>
                       <td>5</td>
                      <td class="text-right"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a></td>
                      <td class="text-right"><a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                      
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