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
          <div class="col-lg-4 col-md-4 com-sm-12 ">
            <div class="card">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Direct Cost Payment Details</h2>
                  </div>                  
                  <div class="card-body">
                      <form action="" method="post">
                    <div class="row ">
                     <div class="col-4 text-right">
                        <label for=""><h4>Vendor</h4></label>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                          <input type="search" class="form-control" placeholder="search vendor">
                      </div>
                     </div>
                    </div>

                    <div class="row mt-2">
                     <div class="col-4 text-right">
                        <label for=""><h4>Chassis No</h4></label>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                          <input type="search" class="form-control"  placeholder="search chassis no">
                      </div>
                     </div>
                    </div>

                    <div class="row mt-2">
                     <div class="col-4 text-right">
                        <label for=""><h4>Task</h4></label>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                          <input type="search" class="form-control"  placeholder="search task">                          
                      </div>
                     </div>
                    </div>
                    <div class="row mt-2">
                     <div class="col-4 text-right">
                        <label for=""><h4>Date</h4></label>
                     </div>
                     <div class="col-4">
                        <div class="form-group">
                          <input value="2022-12-03" class="form-control input-date" id="StartDate" name="StartDate" type="date" autocomplete="off">
                      </div>
                     </div>
                     <div class="col-4">
                        <div class="form-group">
                          <input value="2023-12-03" class="form-control input-date" id="EndDate" name="EndDate" type="date" autocomplete="off">
                      </div>
                     </div>
                    </div>

                     <div class="row mt-2">
                     <div class="col-12">
                        <div class="form-group float-end">                          
                        <button type="submit" class="btn btn-info float-right "> <i class="fa fa-print "> Print Preview</i> </button>
                      </div>
                     </div>
                    </div>
                      </form>

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