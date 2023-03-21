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
                      <h2 class="card-title fwbold">Monthly General Ledger</h2>
                  </div>                  
                  <div class="card-body">
                      <form action="" method="post">
                        <div class="row">
                     <div class="col-4 text-right">
                        <label for=""><h4>Ledger</h4></label>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                          <input type="search" list="mylist" class="form-control" placeholder="Enter Account Name">
                        <datalist id="mylist">
                            <option value="Capital Account">
                            <option value="Cash Account">
                            <option value="Deposite Account">
                          </datalist>
                      </div>
                     </div>
                    </div>
                    <div class="row mt-2">
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
                        </select>
                      </div>
                     </div>
                    </div>
                     <div class="row mt-2">
                     <div class="col-12">
                        <div class="form-group float-end">                          
                        <button type="submit" class="btn btn-info float-right ml-2"> <i class="fa fa-print "> Print Preview</i> </button>
                        <button type="submit" class="btn btn-info float-right "> <i class="fa fa-download"> Export To Excel</i> </button>
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