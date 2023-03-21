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
                      <h2 class="card-title fwbold">Vehicle Wise Profit & Loss</h2>
                  </div>                  
                  <div class="card-body">
                      <form action="" method="post">
                    <div class="row">
                     <div class="col-4 text-right">
                        <label for=""><h4>Year</h4></label>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                          <select class="form-control select2" name="">
                                  <option>Select Year</option>
                                  <option>2000</option>
                                  <option>2022</option>
                        </select>
                      </div>
                     </div>
                    </div>
                    <div class="row mt-2">
                     <div class="col-4 text-right">
                        <label for=""><h4>Month</h4></label>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                          <select class="form-control select2" name="">
                                  <option>Select Month</option>
                                  <option>January</option>
                                  <option>February</option>
                        </select>
                      </div>
                     </div>
                    </div>
                    <div class="row mt-2">
                     <div class="col-4 text-right">
                        <label for=""><h4>Vin/Chassis No</h4></label>
                     </div>
                     <div class="col-8">
                         <div class="input-group">                             
                            <select class="form-control select2" name="">
                              <option>Select Value</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                            </select> 
                           
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