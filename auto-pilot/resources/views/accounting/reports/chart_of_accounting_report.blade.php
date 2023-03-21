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
          <div class="col-lg-8 col-md-8 com-sm-12 ">
            <div class="card">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Chart of Accounts</h2>
                  </div>                  
                  <div class="card-body">
                      <form action="" method="post">
                          @csrf
                          <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                             <div class="form-group">
                                <select class="form-control select2" name="">
                                  <option>Select Ledger Sourcee</option>
                                  <option>2000</option>
                                  <option>2022</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                  <div class="input-group input-group-sm">
                                  <input type="search" class="form-control" placeholder="" value="">
                                  <div class="input-group-append">
                                  <button type="submit" class="btn btn-lg btn-info">
                                  <i class="fa fa-search"></i> Search
                                  </button>
                                  </div>
                                  </div>
                                  </div>
                                </div>
                          </div>
                      </form>
              
                        <div class="row mt-2">
                          <div class="col-md-12 col-sm-12 col-lg-12">
                            <table class="table table-bordered">
                              <tr class="bg-secondary">
                                <th>Code</th>
                                <th>Name</th>
                                <th>Contact No</th>
                                <th>Type</th>
                                <th>Action</th>
                              </tr>
                              <tr>
                                <td>DHYI54545K</td>
                                <td>Auto-Pilot</td>
                                <td>+546578754</td>
                                <td>Asset</td>
                                <td><button type="submit" class="btn btn-success"><i class="fas fa-eye"> Monthly Ledger View</i></button><br>
                                <button type="submit" class="btn btn-success mt-2"><i class="fas fa-eye"> Date Wise Ledger View</i></button></td>
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