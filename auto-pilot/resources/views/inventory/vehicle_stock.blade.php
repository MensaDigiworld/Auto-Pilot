@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Stock List</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Stock List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('inventory.vehicle_stock')}}" class="btn float-right btn-warning text-navy p-1"><i class="fas fa-download"></i> Download List</a>
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12 col-12">

            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header">
                
              <div class="row pt-2">
                      <div class="col-sm-12 col-lg-2 col-md-2">
                        <div class="form-group">
                            {{-- <label for="inputEmail3" class="col-form-label">Manufacturer</label> --}}
                        
                            <select class="form-control select2" name="" >
                              <option>Select Manufacturer</option>
                              <option>January</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 col-md-2">
                      <div class="form-group">
                          {{-- <label for="inputEmail3" class="col-form-label">Model</label> --}}
                      
                          <select class="form-control select2" name="" >
                            <option>Select Model</option>
                            <option>2000</option>
                          </select> 
                      </div>
                  </div>
                  <div class="col-sm-12 col-lg-2 col-md-2">
                    <div class="form-group">
                        {{-- <label for="inputEmail3" class="col-form-label">Vehicle Condition</label> --}}
                    
                        <select class="form-control select2" name="" >
                          <option>Select Year</option>
                          <option>Honda</option>
                        </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Sourcing Type</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>Select Color</option>
                        <option>Honda</option>
                      </select> 
                  </div>
              </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Vehicle Location</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>Select Condition</option>
                        <option>January</option>
                      </select> 
                  </div>
              </div>
              <div class="col-sm-12 col-lg-2 col-md-2">
                <div class="form-group">
                    {{-- <label for="inputEmail3" class="col-form-label">Supplier</label> --}}
                
                    <select class="form-control select2" name="" >
                      <option>Select Location</option>
                      <option>January</option>
                    </select> 
                </div>
            </div>
            </div>

            <div class="row">

                <div class="col-sm-12 col-lg-12 col-md-12">
                  <div class="form-group form-group-sm">
                    {{-- <label for="inputEmail3" class="col-form-label">Quick Search</label> --}}
                    <div class="input-group input-group-sm">
                    <input type="search" class="form-control form-control-sm" placeholder="eg: vin/chassis no/engine no/vehicle tracking code" name="">
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-lg btn-info">
                    <i class="fa fa-search"></i>
                    </button>
                    </div>
                    </div>
                    </div>
                </div>
  
              
  
            </div>

            </div>
          </div>
        </form>
          <!-- ./card end -->
          <div class="card card-outline card-primary shadow">
            <div class="card-header py-1">
                <h2 class="card-title text-bold"> <span class="badge bg-danger text-lg">1</span> Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)</h2>
            </div>
            
            <div class="card-body p-1">
              <div class="row p-0 m-0">
                  <div class="col-sm-12 col-lg-17 col-md-17 p-0">
                    <div class="table-responsive p-0" style="height: 200px;">
                      <table class="table table-sm table-head-fixed text-nowrap table-bordered">
                          <thead>
                            <tr>
                              <th>Ref. </th>
                              <th>Year </th>
                              <th>Fuel Type </th>
                              <th>Package </th>
                              <th>Color</th>
                              <th>Mileage & Grade</th>
                              <th>VIN, Eng & Reg.</th>
                              <th>Location/ ETA</th>
                              <th>Description</th>
                              <th>Price(BDT)</th>
                              <th>Photo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>01 <br> DB01521</td>
                              <td>2017</td>
                              <td>Plug In<br> Hybrid</td>
                              <td>Advanced Premioum Black Edition</td>
                              <td>Gray Metalic</td>
                              <td>232000 <br> 4.5</td>
                              <td>N!0-25323<br>INGFE-25463<br>BIN 52312 </td>
                              <td> <span class="bg-success p-2 d-block">Transit</span> Shipping: 15/5/2022 <br> ETA-5123(Mongla)</td>
                              <td> <span class="text-bold"> BRand NEW</span><br>
                              DVD, AC, Window ... <a href="">More...</a> </td>
                              <td>52321212</td>
                              <td class="text-center"><a href="" class="text-info"> <i class="fas fa-eye"></i> Image</a></td>
                              
                            </tr>
                            <tr>
                              <td>01 <br> DB01521</td>
                              <td>2017</td>
                              <td>Plug In<br> Hybrid</td>
                              <td>Advanced Premioum Black Edition</td>
                              <td>Gray Metalic</td>
                              <td>232000 <br> 4.5</td>
                              <td>N!0-25323<br>INGFE-25463<br>BIN 52312 </td>
                              <td> <span class="bg-success p-2 d-block">Transit</span> Shipping: 15/5/2022 <br> ETA-5123(Mongla)</td>
                              <td> <span class="text-bold"> BRand NEW</span><br>
                              DVD, AC, Window ... <a href="">More...</a> </td>
                              <td>52321212</td>
                              <td class="text-center"><a href="" class="text-info"> <i class="fas fa-eye"></i> Image</a></td>
                              
                            </tr>
                            <tr>
                              <td>01 <br> DB01521</td>
                              <td>2017</td>
                              <td>Plug In<br> Hybrid</td>
                              <td>Advanced Premioum Black Edition</td>
                              <td>Gray Metalic</td>
                              <td>232000 <br> 4.5</td>
                              <td>N!0-25323<br>INGFE-25463<br>BIN 52312 </td>
                              <td> <span class="bg-success p-2 d-block">Transit</span> Shipping: 15/5/2022 <br> ETA-5123(Mongla)</td>
                              <td> <span class="text-bold"> BRand NEW</span><br>
                              DVD, AC, Window ... <a href="">More...</a> </td>
                              <td>52321212</td>
                              <td class="text-center"><a href="" class="text-info"> <i class="fas fa-eye"></i> Image</a></td>
                              
                            </tr>
                            <tr>
                              <td>01 <br> DB01521</td>
                              <td>2017</td>
                              <td>Plug In<br> Hybrid</td>
                              <td>Advanced Premioum Black Edition</td>
                              <td>Gray Metalic</td>
                              <td>232000 <br> 4.5</td>
                              <td>N!0-25323<br>INGFE-25463<br>BIN 52312 </td>
                              <td> <span class="bg-success p-2 d-block">Transit</span> Shipping: 15/5/2022 <br> ETA-5123(Mongla)</td>
                              <td> <span class="text-bold"> BRand NEW</span><br>
                              DVD, AC, Window ... <a href="">More...</a> </td>
                              <td>52321212</td>
                              <td class="text-center"><a href="" class="text-info"> <i class="fas fa-eye"></i> Image</a></td>
                              
                            </tr>
                          </tbody>
                      </table>
                    </div>
                    
                  </div>

                
                {{-- row end --}}
              </div>
            </div>
            
          </div>

          <div class="card card-outline card-primary shadow">
            <div class="card-header py-1">
              <h2 class="card-title text-bold"> <span class="badge bg-danger text-lg">2</span> Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)</h2>
            </div>
            
            <div class="card-body p-1">
              <div class="row p-0 m-0">
                  <div class="col-sm-12 col-lg-17 col-md-17 p-0">
                    <div class="table-responsive p-0" style="height: 200px;">
                      <table class="table table-sm table-head-fixed text-nowrap table-bordered">
                          <thead>
                            <tr>
                              <th>Ref. </th>
                              <th>Year </th>
                              <th>Fuel Type </th>
                              <th>Package </th>
                              <th>Color</th>
                              <th>Mileage & Grade</th>
                              <th>VIN, Eng & Reg.</th>
                              <th>Location/ ETA</th>
                              <th>Description</th>
                              <th>Price(BDT)</th>
                              <th>Photo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>01 <br> DB01521</td>
                              <td>2017</td>
                              <td>Plug In<br> Hybrid</td>
                              <td>Advanced Premioum Black Edition</td>
                              <td>Gray Metalic</td>
                              <td>232000 <br> 4.5</td>
                              <td>N!0-25323<br>INGFE-25463<br>BIN 52312 </td>
                              <td> <span class="bg-success p-2 d-block">Transit</span> Shipping: 15/5/2022 <br> ETA-5123(Mongla)</td>
                              <td> <span class="text-bold"> BRand NEW</span><br>
                              DVD, AC, Window ... <a href="">More...</a> </td>
                              <td>52321212</td>
                              <td class="text-center"><a href="" class="text-info"> <i class="fas fa-eye"></i> Image</a></td>
                              
                            </tr>
                          </tbody>
                      </table>
                    </div>
                    
                  </div>

                
                {{-- row end --}}
              </div>
            </div>
            
          </div>

        <!-- ./card end -->
         
        </div>
         <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection