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
          <div class="col-lg-12 col-md-12 com-sm-12">
            <div class="card">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Bank List</h2>
                  </div>                  
                  <div class="card-body">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="eg: Bank,Account Number " value="">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-info">
                        <i class="fa fa-search"></i> Search
                        </button>
                        </div>
                        </div>
                        </div>
                  </div>
                    <table class="table table-bordered">
                      <tr>
                        <th>Bank</th>
                        <th>Account Number</th>
                        <th>Branch Name</th>
                        <th>Ledger Name</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td>Exim Bank</td>
                        <td>1235464787</td>
                        <td>Dhaka</td>
                        <td>EXIM BANK-NORTH END-GULSHAN-9955</td>
                        <td>
                          <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-eye"> view</i></button>
                        </td>
                      </tr>
                    </table>
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