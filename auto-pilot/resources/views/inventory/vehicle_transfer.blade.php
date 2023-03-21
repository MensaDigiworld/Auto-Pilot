@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transfer a Vehicle </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transfer a Vehicle </li>
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
          <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card card-info">
              
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vehicle</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD,  5 seater)" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vin/Chassis No</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="GM4-232425" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vehicle Tracking Code</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="GM4-232425" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Color</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="TM0601" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Supplier</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="WD XYZ Auto" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Transfer Date</label>
                          <div class="input-group">
                              
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" name="" value="@php echo $today=date('Y-m-d');@endphp">
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Transfer to</label>
                          <div class="input-group">
                              
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="checkboxPrimary1" checked="" name="transfer_to">
                              <label for="checkboxPrimary1">
                                Warehouse
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="checkboxPrimary2" name="transfer_to">
                              <label for="checkboxPrimary2">
                                Partner Showroom
                              </label>
                            </div>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Warehouse/Showroom</label>
                          <div class="input-group">
                              
                            <select class="form-control select2" name="supplier">
                              <option>Select</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select> 
                           
                          </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Driver Name</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Expected Return Date</label>
                          <div class="input-group">
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" name="" value="@php echo $today=date('Y-m-d');@endphp">                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Current Mileage </label>
                          <div class="input-group">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0.00" name="">
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Fuel Added(Liter)</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Transfered by</label>
                          <div class="input-group">
                              
                            <select class="form-control select2" name="supplier">
                              <option>Select</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select> 
                           
                          </div>
                      </div>
                    </div>
                  </div>

                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  
                  <button type="submit" class="btn btn-success float-left"><i class="fas fa-save"></i> Save</button>  
                  <a href="{{ route('inventory.list_incomplete_showroom_transfer')}}" class="btn btn-primary float-right"><i class="fas fa-list"></i> List</a>               
                </div>
                <!-- /.card-footer -->
              </form>
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