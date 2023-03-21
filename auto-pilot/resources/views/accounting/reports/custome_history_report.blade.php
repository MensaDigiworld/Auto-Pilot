@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-md-6 com-sm-12 float-left">
            <div class="card">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Customer List</h2>
                  </div>                  
                  <div class="card-body">
                    <form action="" method="post">
                      @csrf
                                          <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Status</label>
                          <select class="form-control select2" name="">
                            <option>All</option>
                            <option>Pending</option>
                            <option>Complete</option>                            
                          </select>
                        </div>
                      </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Sales Month</label>
                          <select class="form-control select2" name="">
                            <option>Month</option>
                            <option>January</option>
                            <option>February</option>                            
                            <option>March</option>                            
                            <option>April</option>                            
                          </select>
                        </div>
                      </div>
                       <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Sales Year</label>
                          <select class="form-control select2" name="">
                            <option>Year</option>
                            <option>2019</option>
                            <option>2020</option>                            
                            <option>2021</option>                            
                            <option>2022</option>                            
                          </select>
                        </div>
                      </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class=" col-form-label">Quick Search</label>
                          <div class="input-group input-group-sm">
                          <input type="search" class="form-control form-control-sm" placeholder="" value="">
                          <div class="input-group-append">
                          <button type="submit" class="btn btn-lg btn-success">
                          <i class="fa fa-search"></i> Search
                          </button>
                          </div>
                          </div>
                          </div>
                          </div>
                    </div>
                    </form>

                    <div class="row mt-3">
                      <div class="col-12 col-sm-12">
                        <table class="table">
                          <tr class="bg-secondary">
                            <th>Name</th>
                            <th>Phone or Address</th>
                            <th>Amount</th>
                            <th class="float-right">
                             <button type="submit" class="btn btn-light btn-sm btn-bordered"> <i class="fas fa-edit"></i></button>
                             <button type="submit" class="btn btn-success btn-sm"> <i class="fas fa-history "></i></button>
                            </th>
                          </tr>
                          <tr class="bg-light">
                            <td>Toyota-Raize (A200A, Z, 1000cc, Auto, 2WD, 5 seater)</td>
                            <td>Chassis No: A200A-061322 
                               <button type="submit" class="btn btn-light btn-sm btn-bordered"> <i class="fas fa-edit"></i></button>
                            </td>
                            <td>Engine No: NA</td>
                            <td><button type="submit" class="btn btn-success btn-sm float-right"> <i class="fas fa-history "></i></button></td>
                          </tr>
                        </table>
                      </div>
                    </div>
              </div>  
              <div class=" card card-body">
                <div class="row mt-3">
                      <div class="col-12 col-sm-12">
                        <table class="table">
                          <tr class="bg-secondary">
                            <th>Name</th>
                            <th>Phone or Address</th>
                            <th>Amount</th>
                            <th class="float-right">
                             <button type="submit" class="btn btn-light btn-sm btn-bordered"> <i class="fas fa-edit"></i></button>
                             <button type="submit" class="btn btn-success btn-sm"> <i class="fas fa-history "></i></button>
                            </th>
                          </tr>
                          <tr class="bg-light">
                            <td>Toyota-Raize (A200A, Z, 1000cc, Auto, 2WD, 5 seater)</td>
                            <td>Chassis No: A200A-061322 
                               <button type="submit" class="btn btn-light btn-sm btn-bordered"> <i class="fas fa-edit"></i></button>
                            </td>
                            <td>Engine No: NA</td>
                            <td><button type="submit" class="btn btn-success btn-sm float-right"> <i class="fas fa-history "></i></button></td>
                          </tr>
                            <tr class="bg-light">
                            <td>Toyota-Raize (A200A, Z, 1000cc, Auto, 2WD, 5 seater)</td>
                            <td>Chassis No: A200A-061322 
                               <button type="submit" class="btn btn-light btn-sm btn-bordered"> <i class="fas fa-edit"></i></button>
                            </td>
                            <td>Engine No: NA</td>
                            <td><button type="submit" class="btn btn-success btn-sm float-right"> <i class="fas fa-history "></i></button></td>
                          </tr>
                                                    <tr class="bg-light">
                            <td>Toyota-Raize (A200A, Z, 1000cc, Auto, 2WD, 5 seater)</td>
                            <td>Chassis No: A200A-061322 
                               <button type="submit" class="btn btn-light btn-sm btn-bordered"> <i class="fas fa-edit"></i></button>
                            </td>
                            <td>Engine No: NA</td>
                            <td><button type="submit" class="btn btn-success btn-sm float-right"> <i class="fas fa-history "></i></button></td>
                          </tr>
                        </table>
                      </div>
                    </div>
              
              </div>      
              </div>        
                
                

          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection