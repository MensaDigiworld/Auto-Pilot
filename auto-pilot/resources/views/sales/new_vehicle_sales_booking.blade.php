@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Vehicel Sales/Booking</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Vehicel Sales/Booking List</li>
              <li class="breadcrumb-item"></li>
              {{-- <a href="{{ route('sales.add_customer') }}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add New</a> --}}
              
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
          <div class="col-lg-12 col-12">

            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header">
                <div class="row my-2">
                  <div class="col-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between">
                    <div>
                      <a href="" class="btn btn-sm btn-flat btn-default"><i class="fas fa-check"></i> Ready</a>
                      <a href="" class="btn btn-sm btn-flat btn-default"><i class="fas fa-chevron-down"></i> Upcomming</a>
                      <a href="" class="btn btn-sm btn-flat btn-default"><i class="fas fa-exchange-alt"></i> Transfer</a>
                    </div>
                    <div>
                      <div class="text-lg text-bold text-navy">Total Stock : 0 </div>
                    </div>
                    
                  </div>
                </div>
                <div class="row">

                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                  
                        <select class="form-control select2" name="month">
                          <option selected>Select Manufacture</option>
                          <option>Returned</option>
                        </select> 
                      </div>
                    </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select</option>
                          <option>Returned</option>
                        </select> 
                      </div>
                    </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">               
                        <select class="form-control select2" name="month">
                          <option selected>Select year</option>
                          <option>Returned</option>
                        </select> 
                      </div>
                    </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                
                        <select class="form-control select2" name="month">
                          <option selected>Select Color</option>
                          <option>Returned</option>
                        </select> 
                      </div>
                    </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select Condition</option>
                          <option>Returned</option>
                        </select> 
                      </div>
                    </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select Status</option>
                          <option>Returned</option>
                        </select> 
                      </div>
                    </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select Location</option>
                          <option>Returned</option>
                        </select> 
                      </div>
                    </div>
                                            
                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
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
                  </form>
              
            </div>

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between border-bottom border-info mb-lg-2">
                    <div>
                      <div class="text-lg text-sm-sm text-bold">
                        Toyota-Prius (ZVW50, S, 1800cc, Auto, 2WD, 5 seater) - 2017- Red
                      </div>
                    </div>
                    <div>
                      <div class="text-lg text-bold">
                        <i class="fas fa-exclamation-triangle text-warning"  data-toggle="modal" data-target="#vehicle_price_hide_show"></i> 0.00
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start">
                    
                      <div class="text-bold">Vin/Chassis No: <span class="fw400">ZVW50-8075523</span></div><br>
                   
                      <div class="text-bold">Engine No:<span class="fw400">789-8075523</span></div><br>

                      <div class="text-bold">Exterior Color<span class="fw400"></span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start border-lg-left border-dark">
                    
                      <div class="text-bold">Condition: <span class="fw400">Recondition</span></div><br>
                   
                      <div class="text-bold">Reg. No:<span class="fw400">789-8075523</span></div><br>

                      <div class="text-bold">Code:<span class="fw400">Wine</span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start border-lg-left border-dark">
                    
                      <div class="text-bold">Auction Grade: <span class="fw400">N/A</span></div><br>
                   
                      <div class="text-bold">Mileage:<span class="fw400">0.00</span></div><br>

                      <div class="text-bold">Location:<span class="fw400">Overseas</span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between border-lg-left border-dark">
                    
                      <div class="text-bold align-content-center flex-wrap">description: <span class="fw400">N/A</span></div>
                   
                      <div class="align-content-center flex-wrap">
                        <a href="{{ route('sales.booking') }}" class="btn btn-sm btn-primary btn-flat text-xs"><i class="fas fa-check text-xs"></i> Booking</a><br>
                        <div class="input-group input-group-xs">
                          <div class="input-group-prepend">
                            <div class="dropdown-toggle text-bold" data-toggle="dropdown" aria-expanded="false">
                            More Action
                            </div>
                            <ul class="dropdown-menu" style="">
                              <li class="dropdown-item"><a href="#">Action</a></li>
                              <li class="dropdown-item"><a href="#">Another action</a></li>
                              <li class="dropdown-item"><a href="#">Something else here</a></li>
                              <li class="dropdown-divider"></li>
                              <li class="dropdown-item"><a href="#">Separated link</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="user-section mt-4">
                          <i class="fas fa-eye text-success">image</i>&nbsp;&nbsp;
                          <i class="fas fa-user fa-2x"></i>
                        </div>

                      </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between border-bottom border-info mb-lg-2">
                    <div>
                      <div class="text-lg text-sm-sm text-bold">
                        Toyota-Prius (ZVW50, S, 1800cc, Auto, 2WD, 5 seater) - 2017- Red
                      </div>
                    </div>
                    <div>
                      <div class="text-lg text-bold">
                        <i class="fas fa-exclamation-triangle text-warning" data-toggle="modal" data-target="#vehicle_price_hide_show"></i> 0.00
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start">
                    
                      <div class="text-bold">Vin/Chassis No: <span class="fw400">ZVW50-8075523</span></div><br>
                   
                      <div class="text-bold">Engine No:<span class="fw400">789-8075523</span></div><br>

                      <div class="text-bold">Exterior Color<span class="fw400"></span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start border-lg-left border-dark">
                    
                      <div class="text-bold">Condition: <span class="fw400">Recondition</span></div><br>
                   
                      <div class="text-bold">Reg. No:<span class="fw400">789-8075523</span></div><br>

                      <div class="text-bold">Code:<span class="fw400">Wine</span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start border-lg-left border-dark">
                    
                      <div class="text-bold">Auction Grade: <span class="fw400">N/A</span></div><br>
                   
                      <div class="text-bold">Mileage:<span class="fw400">0.00</span></div><br>

                      <div class="text-bold">Location:<span class="fw400">Overseas</span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between border-left border-dark">
                    
                      <div class="text-bold align-content-center flex-wrap">description: <span class="fw400">N/A</span></div>
                   
                      <div class="align-content-center flex-wrap">
                        <a href="{{ route('sales.booking') }}" class="btn btn-sm btn-primary btn-flat text-xs"><i class="fas fa-check text-xs"></i> Booking</a><br>
                        <div class="input-group input-group-xs">
                          <div class="input-group-prepend">
                            <div class="dropdown-toggle text-bold" data-toggle="dropdown" aria-expanded="false">
                            More Action
                            </div>
                            <ul class="dropdown-menu" style="">
                              <li class="dropdown-item"><a href="#">Action</a></li>
                              <li class="dropdown-item"><a href="#">Another action</a></li>
                              <li class="dropdown-item"><a href="#">Something else here</a></li>
                              <li class="dropdown-divider"></li>
                              <li class="dropdown-item"><a href="#">Separated link</a></li>
                            </ul>
                          </div>
                        </div>
                          <div class="user-section mt-4">
                          <i class="fas fa-eye text-success">image</i>&nbsp;&nbsp;
                          <i class="fas fa-user fa-2x"></i>
                        </div>

                      </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between border-bottom border-info mb-lg-2">
                    <div>
                      <div class="text-lg text-sm-sm text-bold">
                        Toyota-Prius (ZVW50, S, 1800cc, Auto, 2WD, 5 seater) - 2017 - Red
                      </div>
                    </div>
                    <div>
                      <div class="text-lg text-bold">
                        <i class="fas fa-check text-success" data-toggle="modal" data-target="#vehicle_price_hide_show"></i> 0.00
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start">
                    
                      <div class="text-bold">Vin/Chassis No: <span class="fw400">ZVW50-8075523</span></div><br>
                   
                      <div class="text-bold">Engine No:<span class="fw400">789-8075523</span></div><br>

                      <div class="text-bold">Exterior Color<span class="fw400"></span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start border-lg-left border-dark">
                    
                      <div class="text-bold">Condition: <span class="fw400">Recondition</span></div><br>
                   
                      <div class="text-bold">Reg. No:<span class="fw400">789-8075523</span></div><br>

                      <div class="text-bold">Code:<span class="fw400">Wine</span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column justify-content-start border-lg-left border-dark">
                    
                      <div class="text-bold">Auction Grade: <span class="fw400">N/A</span></div><br>
                   
                      <div class="text-bold">Mileage:<span class="fw400">0.00</span></div><br>

                      <div class="text-bold">Location:<span class="fw400">Overseas</span></div><br>
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column flex-lg-row flex-md-row justify-content-between border-lg-left border-dark">
                    
                      <div class="text-bold align-content-center flex-wrap">description: <span class="fw400">N/A</span></div>
                   
                      <div class="align-content-center flex-wrap">
                        <a href="{{ route('sales.booking') }}" class="btn btn-sm btn-primary btn-flat text-xs"><i class="fas fa-check text-xs"></i> Booking</a><br>
                        <div class="input-group input-group-xs">
                          <div class="input-group-prepend">
                            <div class="dropdown-toggle text-bold" data-toggle="dropdown" aria-expanded="false">
                            More Action
                            </div>
                            <ul class="dropdown-menu" style="">
                              <li class="dropdown-item"><a href="#">Action</a></li>
                              <li class="dropdown-item"><a href="#">Another action</a></li>
                              <li class="dropdown-item"><a href="#">Something else here</a></li>
                              <li class="dropdown-divider"></li>
                              <li class="dropdown-item"><a href="#">Separated link</a></li>
                            </ul>
                          </div>
                        </div>
                          <div class="user-section mt-4">
                          <i class="fas fa-eye text-success">image</i>&nbsp;&nbsp;
                          <i class="fas fa-user fa-2x"></i>
                        </div>

                      </div>
                    
                  </div>
                </div>
              </div>
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