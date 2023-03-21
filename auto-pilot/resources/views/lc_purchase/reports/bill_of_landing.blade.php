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
      <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-md-6 com-sm-12">
            <div class="card">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Stock Transfer Report</h2>
                  </div>
                  
                  <div class="card-body">
                    <div class="row">
                     <div class="col-4 text-right">
                        <label for=""><h4>Year</h4></label>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                        <select name="" id="" class="form-control">
                          <option value="">Select Year</option>
                          <option value="">2022</option>
                          <option value="">2021</option>
                          <option value="">2020</option>
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
                        <select name="" id="" class="form-control">
                          <option value="">Select Month</option>
                          <option value="">Mar</option>
                          <option value="">Feb</option>
                          <option value="">Jan</option>
                        </select>
                      </div>
                    </div>
                    </div>
                     <div class="row mt-2">
                      <div class="col-4 text-right">
                        <label for="">Search Value</label>
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
                        <button type="submit" class="btn btn-success float-right"> <i class="fa fa-print "> Print Preview</i> </button>
                      </div>
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