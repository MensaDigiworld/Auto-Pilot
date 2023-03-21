@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Inventory Manager</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Inventory Manager List</li>
              <li class="breadcrumb-item active"></li>
              {{-- <a href="{{ route('lc.new-foregin-purchase')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Foreign Purchase</a> --}}
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
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-12 col-lg-8 col-md-8">
                      <div class="form-group">
                      <div class="pt-lg-2 col-sm-7 col-md-8 col-lg-8 float-left">
                        <div class="icheck-success d-inline">
                          <input type="radio" name="r3" checked="" value="Recondition" id="radioSuccess1">
                          <label for="radioSuccess1">
                            All
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" id="radioSuccess2" value="BrandNew">
                          <label for="radioSuccess2">
                            Purchased
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r3" id="radioSuccess3" value="BrandNew">
                            <label for="radioSuccess3">
                              Transferred
                            </label>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
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
                          <option>Select Year of Manufactuer</option>
                          <option>2012</option>
                        </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Sourcing Type</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>Select Vehicle condition</option>
                        <option>Good</option>
                      </select> 
                  </div>
              </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Vehicle Location</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>Select Vehicle Location</option>
                        <option>January</option>
                      </select> 
                  </div>
              </div>
              <div class="col-sm-12 col-lg-2 col-md-2">
                <div class="form-group">
                    {{-- <label for="inputEmail3" class="col-form-label">Supplier</label> --}}
                
                    <select class="form-control select2" name="" >
                      <option>Select BL Location</option>
                      <option>January</option>
                    </select> 
                </div>
            </div>
            </div>

            <div class="row">
              
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Costing status</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>Select Costing status</option>
                        <option>Complete</option>
                        <option>In-Complete</option>
                      </select> 
                  </div>
                </div>

                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Sales status</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>Select Sales status</option>
                        <option>Complete</option>
                        <option>In-Complete</option>
                      </select> 
                  </div>
                </div>

                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Bl Location</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>Select ETA(Day to Month)</option>
                        <option>Complete</option>
                        <option>In-Complete</option>
                      </select> 
                  </div>
                </div>

                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Year of Manufacture</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>ETA(Longest-Shortest)</option>
                        <option>Complete</option>
                        <option>In-Complete</option>
                      </select> 
                  </div>
                </div>

                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Event</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>LC(Longest-Shortest)</option>
                        <option>Complete</option>
                        <option>In-Complete</option>
                      </select> 
                  </div>
                </div>
                 <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      {{-- <label for="inputEmail3" class="col-form-label">Event</label> --}}
                  
                      <select class="form-control select2" name="" >
                        <option>Purchase date</option>
                        <option>Complete</option>
                        <option>In-Complete</option>
                      </select> 
                  </div>
                </div>
                  <div class="col-sm-12 col-lg-10 col-md-10">
                    </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group ">
                    {{-- <label for="inputEmail3" class="col-form-label">Quick Search</label> --}}
                    <div class="input-group input-group-sm ">
                    <input type="search" class="form-control form-control-sm " placeholder="eg: vin/chassis no/engine no/vehicle tracking code" name="">
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
          <!-- ./card end -->
          <div class="card card-outline card-primary shadow">
            <div class="card-header py-1">
                <h2 class="card-title text-bold"> <span class="badge bg-warning text-lg">3</span> Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)
                  <a href="{{ route('inventory.vehicle-correction-price-update')}}" class="btn"><i class="fas fa-edit text-success"></i></a><img src="1.jpg" alt="img"></h2>
                <div class="card-tools mr-lg-3">
                  <div class="text-lg text-bold float-left mr-4">
                    2200000.00 
                  </div>
                  <div class="btn-group btn-groum-sm float-lg-left text-sm-center">
                    <button type="button" class="btn btn-sm  btn-info">Action</button>
                    <button type="button" class="btn btn-info btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu-sm dropdown-menu" role="menu" style="">
                    <a class="dropdown-item" href="{{ route('inventory.edit_vehicle_inspection')}}">Inspection</a>
                    <a class="dropdown-item" href="{{ route('inventory.vehicle_recondition')}}">Reconditioning</a>
                    <a class="dropdown-item" href="{{ route('inventory.vehicle_transfer')}}">Transfer</a>
                    <a class="dropdown-item" href="{{ route('inventory.new_windows_sticker')}}">Window Sticker</a>
                    <a class="dropdown-item" href="{{ route('inventory.temporary_challan')}}">Temporary Challan</a>
                    </div>
                  </div>
                </div>
            
            </div>
            
            <div class="card-body p-1">
              <div class="row p-0 m-0">
                  <div class="col-sm-12 col-lg-7 col-md-7 p-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                          Year of Manufacture
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                          2016
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                          Color
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                          Red
                        </div>
                        <div class="col-sm-6 col-lg-1 col-md-1 text-bold text-sm p-0">
                          Features
                        </div>
                        <div class="col-sm-6 col-lg-1 col-md-1 text-sm text-left p-0">
                          POWER SEAT, 
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Vin/Chassis No
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        GM4-232425
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Auction Grade
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        4
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Engine Number
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Mileage
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        340000.00
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Reg. Number
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Tracking Code
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>
                    {{-- col end --}}
                  </div>

                  <div class="col-sm-12 col-lg-5 col-md-5 border-left">
                    <div class="row p-0 m-0">

                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Supplier
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        WD XYZ Auto
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Shipping Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jun-2022
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Number
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        TM0601
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        ETA Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (90 days)
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                       <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Opening Bank
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (90 days)
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        BL Location
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        Overseas
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Noting Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        08-Aug-2022
                      </div>
                    </div>

                    <div class="row p-0 m-0">

                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Vehicle Location
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        Showroom
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Assessment
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        08-Aug-2022
                      </div>
                    </div>
                    {{-- col end --}}
                  </div>
                
                {{-- row end --}}
              </div>
            </div>

            <div class="card-footer p-2">
                <div class="row p-0 m-0">
                  <div class="col-sm-12 col-lg-9 col-md-9 p-0">
                      <h3 class="float-left text-bold text-primary text-md px-2">Import</h3>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Proforma
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Insurance 
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Letter of Credit
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Bill of Lading
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Bill of Entry
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Inspection 
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Reconditioning &nbsp;
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                          <i class="nav-icon fas fa-2x fa-tachometer-alt bg-warning" data-toggle="modal" data-target="#vehicle_costing_calculation"></i>
                      </div>

                  </div>

                  <div class="col-sm-12 col-lg-3 col-md-3 p-0">
                    <a href="{{ route('inventory.new-pre-order')}}" class="text-bold text-success float-lg-right">
                      Add Pre Order</a>
                  </div>
                </div>
                
            </div>
            
          </div>

          <div class="card card-outline card-primary shadow">
            <div class="card-header py-1">
                <h2 class="card-title text-bold"> <span class="badge bg-warning text-lg">3</span> Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)
                  <a href="{{ route('inventory.vehicle-correction-price-update')}}" class="btn"><i class="fas fa-edit text-success"></i></a><img src="1.jpg" alt="img"></h2>
                <div class="card-tools mr-lg-3">
                  <div class="text-lg text-bold float-left mr-4">
                    2200000.00 
                  </div>
                  <div class="btn-group btn-groum-sm float-lg-left text-sm-center">
                    <button type="button" class="btn btn-sm  btn-info">Action</button>
                    <button type="button" class="btn btn-info btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu-sm dropdown-menu" role="menu" style="">
                    <a class="dropdown-item" href="{{ route('inventory.edit_vehicle_inspection')}}">Inspection</a>
                    <a class="dropdown-item" href="{{ route('inventory.vehicle_recondition')}}">Reconditioning</a>
                    <a class="dropdown-item" href="{{ route('inventory.vehicle_transfer')}}">Transfer</a>
                    <a class="dropdown-item" href="{{ route('inventory.new_windows_sticker')}}">Window Sticker</a>
                    <a class="dropdown-item" href="{{ route('inventory.temporary_challan')}}">Temporary Challan</a>
                    </div>
                  </div>
                </div>
            
            </div>
            
            <div class="card-body p-1">
              <div class="row p-0 m-0">
                  <div class="col-sm-12 col-lg-7 col-md-7 p-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                          Year of Manufacture
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                          2016
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                          Color
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                          Red
                        </div>
                        <div class="col-sm-6 col-lg-1 col-md-1 text-bold text-sm p-0">
                          Features
                        </div>
                        <div class="col-sm-6 col-lg-1 col-md-1 text-sm text-left p-0">
                          POWER SEAT, 
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Vin/Chassis No
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        GM4-232425
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Auction Grade
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        4
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Engine Number
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Mileage
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        340000.00
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Reg. Number
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Tracking Code
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>
                    {{-- col end --}}
                  </div>

                  <div class="col-sm-12 col-lg-5 col-md-5 border-left">
                    <div class="row p-0 m-0">

                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Supplier
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        WD XYZ Auto
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Shipping Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jun-2022
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Number
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        TM0601
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        ETA Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (90 days)
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                       <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Opening Bank
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (90 days)
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        BL Location
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        Overseas
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Noting Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        08-Aug-2022
                      </div>
                    </div>

                    <div class="row p-0 m-0">

                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Vehicle Location
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        Showroom
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Assessment
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        08-Aug-2022
                      </div>
                    </div>
                    {{-- col end --}}
                  </div>
                
                {{-- row end --}}
              </div>
            </div>

            <div class="card-footer p-2">
                <div class="row p-0 m-0">
                  <div class="col-sm-12 col-lg-9 col-md-9 p-0">
                      <h3 class="float-left text-bold text-primary text-md px-2">Import</h3>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Proforma
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Insurance 
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Letter of Credit
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Bill of Lading
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Bill of Entry
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Inspection 
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Reconditioning &nbsp;
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                          <i class="nav-icon fas fa-2x fa-tachometer-alt bg-warning" data-toggle="modal" data-target="#vehicle_costing_calculation"></i>
                      </div>

                  </div>

                  <div class="col-sm-12 col-lg-3 col-md-3 p-0">
                    <a href="{{ route('inventory.new-pre-order')}}" class="text-bold text-success float-lg-right">
                      Add Pre Order</a>
                  </div>
                </div>
                
            </div>
            
          </div>

          <div class="card card-outline card-primary shadow">
            <div class="card-header py-1">
                <h2 class="card-title text-bold"> <span class="badge bg-warning text-lg">3</span> Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)
                  <a href="{{ route('inventory.vehicle-correction-price-update')}}" class="btn"><i class="fas fa-edit text-success"></i></a><img src="1.jpg" alt="img"></h2>
                <div class="card-tools mr-lg-3">
                  <div class="text-lg text-bold float-left mr-4">
                    2200000.00 
                  </div>
                  <div class="btn-group btn-groum-sm float-lg-left text-sm-center">
                    <button type="button" class="btn btn-sm  btn-info">Action</button>
                    <button type="button" class="btn btn-info btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu-sm dropdown-menu" role="menu" style="">
                    <a class="dropdown-item" href="{{ route('inventory.edit_vehicle_inspection')}}">Inspection</a>
                    <a class="dropdown-item" href="{{ route('inventory.vehicle_recondition')}}">Reconditioning</a>
                    <a class="dropdown-item" href="{{ route('inventory.vehicle_transfer')}}">Transfer</a>
                    <a class="dropdown-item" href="{{ route('inventory.new_windows_sticker')}}">Window Sticker</a>
                    <a class="dropdown-item" href="{{ route('inventory.temporary_challan')}}">Temporary Challan</a>
                    </div>
                  </div>
                </div>
            
            </div>
            
            <div class="card-body p-1">
              <div class="row p-0 m-0">
                  <div class="col-sm-12 col-lg-7 col-md-7 p-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                          Year of Manufacture
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                          2016
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                          Color
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                          Red
                        </div>
                        <div class="col-sm-6 col-lg-1 col-md-1 text-bold text-sm p-0">
                          Features
                        </div>
                        <div class="col-sm-6 col-lg-1 col-md-1 text-sm text-left p-0">
                          POWER SEAT, 
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Vin/Chassis No
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        GM4-232425
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Auction Grade
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        4
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Engine Number
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Mileage
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        340000.00
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Reg. Number
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        Tracking Code
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-sm">
                        N/A
                      </div>
                      <div class="col-sm-6 col-lg-2 col-md-2 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-1 col-md-1 text-sm">

                      </div>
                    </div>
                    {{-- col end --}}
                  </div>

                  <div class="col-sm-12 col-lg-5 col-md-5 border-left">
                    <div class="row p-0 m-0">

                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Supplier
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        WD XYZ Auto
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Shipping Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jun-2022
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Number
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        TM0601
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        ETA Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (90 days)
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                       <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        LC Opening Bank
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (90 days)
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        18-Jul-2022 (21 day(s)) (Mongla)
                      </div>
                    </div>

                    <div class="row p-0 m-0">
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        BL Location
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        Overseas
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Noting Date
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        08-Aug-2022
                      </div>
                    </div>

                    <div class="row p-0 m-0">

                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Vehicle Location
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        Showroom
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-bold text-sm">
                        Assessment
                      </div>
                      <div class="col-sm-6 col-lg-3 col-md-3 text-sm">
                        08-Aug-2022
                      </div>
                    </div>
                    {{-- col end --}}
                  </div>
                
                {{-- row end --}}
              </div>
            </div>

            <div class="card-footer p-2">
                <div class="row p-0 m-0">
                  <div class="col-sm-12 col-lg-9 col-md-9 p-0">
                      <h3 class="float-left text-bold text-primary text-md px-2">Import</h3>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Proforma
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Insurance 
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Letter of Credit
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Bill of Lading
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Bill of Entry
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Inspection 
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                          Reconditioning &nbsp;
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                          <i class="nav-icon fas fa-2x fa-tachometer-alt bg-warning" data-toggle="modal" data-target="#vehicle_costing_calculation"></i>
                      </div>

                  </div>

                  <div class="col-sm-12 col-lg-3 col-md-3 p-0">
                    <a href="{{ route('inventory.new-pre-order')}}" class="text-bold text-success float-lg-right">
                      Add Pre Order</a>
                  </div>
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