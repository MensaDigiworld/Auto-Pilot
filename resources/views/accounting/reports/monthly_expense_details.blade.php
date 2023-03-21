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
          <div class="col-lg-4 col-md-4 com-sm-12 ">
            <div class="card">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Expence List</h2>
                  </div>                  
                  <div class="card-body">
                     <div class="row">
                     <div class="col-6 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class=" col-form-label"></label>
                          <div class="input-group input-group-sm">
                          <input type="search" class="form-control form-control-sm" placeholder="" value="">
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
              </div>       
          </div>
        <div class="row mt-2">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <table class="table table-bordered">
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Type</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>05CHSHGDT</td>
                <td>Auto-Pilot</td>
                <td>Expense</td>
                <td><button type="submit" class="btn btn-success"><i class="fas fa-eye"> View </i></button></td>
              </tr>
              <tr>
                <td>05CHSHGDT</td>
                <td>Auto-Pilot</td>
                <td>Expense</td>
                <td><button type="submit" class="btn btn-success"><i class="fas fa-eye"> View </i></button></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsections