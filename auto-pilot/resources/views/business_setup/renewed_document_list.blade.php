@extends('layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Renewed Document List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row ">
          <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                        <h2>Renewed Document List</h2>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                    @csrf
                   <div class="row">
                     <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3">Reminder Type</label>
                            <select class="form-control" name="status">
                              <option>Select Country </option>
                              <option>Japan</option>
                              <option>China</option>
                              <option>Bangladesh</option>                              
                            </select> 
                          </div>     

                          <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3">License/Document Type</label>
                            <select class="form-control" name="status">
                              <option>Select Country </option>
                              <option>Japan</option>
                              <option>China</option>
                              <option>Bangladesh</option>                              
                            </select> 
                          </div>

                          <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3">Renewal Year</label>
                            <select class="form-control" name="status">
                              <option>Select Country </option>
                              <option>Japan</option>
                              <option>China</option>
                              <option>Bangladesh</option>                              
                            </select> 
                          </div>
                          <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3">Renewal Month</label>
                            <select class="form-control" name="status">
                              <option>Select Country </option>
                              <option>Japan</option>
                              <option>China</option>
                              <option>Bangladesh</option>                              
                            </select> 
                          </div>

                          <div class="col-md-4 col-lg-4 col-sm-12">                            
                            <label for="inputEmail3">Quick Search</label>
                              <div class="input-group input-group-md float-right ">
                                <input type="text" class="form-control" placeholder="Type Here">
                                <span class="input-group-append">
                                  <button type="button" class="btn btn-info btn-flat"> <i class="fas fa-search"></i> Search!</button>
                                </span>
                              </div>
                          </div>

                     </div>
                  </form>

                </div>
              </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <tr class="bg-gray">
                      <th>SL.</th>
                      <th>Reminder Type</th>
                      <th>Document Type</th>
                      <th>Description</th>
                      <th>Renewed by & user</th>
                      <th>Renewal Date</th>
                      <th>Next Expiry Date</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>01</td>
                      <td>Licensing</td>
                      <td>Dhanmondi</td>
                      <td></td>
                      <td>Licensing</td>
                      <td>Dhanmondi</td>
                      <td>01/12/2022</td>
                      <td>
                        <button type="submit" class="btn btn-success btn-lg text-center">Details</button>
                      </td>
                    </tr>

                  </table>
                </div>
              </div>
            </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection