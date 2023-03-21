@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
              <!-- row 1-------->
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fa fa-car"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Total Sale</span>
                    <span class="info-box-number text-xl my-0">20</span>
                    <span class="info-box-text">This Month</span>
                    
                    </div>
                    
                  </div>


                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fa fa-car"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Pre-Order & Booking</span>
                      <span class="info-box-number text-xl my-0">5</span>
                      <span class="info-box-text">This Month</span>
                    
                    </div>
                    
                  </div>


                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fa fa-car"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Delivery</span>
                      <span class="info-box-number text-xl my-0">5</span>
                      <span class="info-box-text">This Month</span>
                    </div>
                    
                  </div>


                </div>

              </div>

            </div>

        </div>

        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
              <h5 class="text-bold text-white bg-dark card-header card-header-primary card">Sales Module </h5>
              <!-- row 2-------->
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.new_vehicle_sales_booking')}}"> <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-car-alt"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">New Vehicle Sales/Booking </span>
                    </div>
                  
                  </div>
                </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.add_dealer_sales')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-warehouse"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Dealership sale</span>
                    </div>
                  
                  </div>
                </a>           
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.new_pre_order')}}"><div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-credit-card"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">New Pre-Order</span>
                    </div>
                  
                  </div>
                </a>           
                </div>
                
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.add_spare_parts_sales')}}"><div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-cog"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">New Spare Parts Sales-Vat</span>
                    </div>                  
                  </div>
                </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.add_generate_quotation')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-file"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">Bank Quotation</span>
                    </div>
                  </div>
                </a>
                </div>
              
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.list_loan_manager')}}"><div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-hand-holding-usd"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Loan Manager</span>
                    </div>
                    
                  </div>
                </a>

                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.list_after_sales_manager')}}"><div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-user-tie"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">After Sales Manager</span>
                    </div>
                  </div>
                  </a>
                </div>

              </div>

            </div>

        </div>


        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
              <h5 class="text-bold text-white bg-info card-header card-header-primary card">ShortCut</h5>
              <!-- row 2-------->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                  <a href="{{ route('sales.incomplete_sales')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incom. Vehicle Sales</div>
                  </a>

                  <a href="{{ route('sales.list_incomplete_booking')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incom. Booking</div>
                  </a>

                  <a href="{{ route('sales.list_incomplete_parts_sales') }}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incom. Parts Sales</div>
                  </a>
                  <a href="{{ route('sales.list_incom_after_sales') }}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incom. After Sales Entry</div>
                  </a>

                  <a href="{{ route('sales.confirmed_sales')}}" class="btn btn-app btn-md text-dark p-1 bg-gray">
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Confirmed Sales List </div>
                  </a>

                  <a href="{{ route('sales.confirmed_delivery')}}" class="btn btn-app btn-md text-dark p-1 bg-gray">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Confirmed Delivery List </div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-success">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Customer List </div>
                  </a>

                  <a href=" {{ route('sales.add_customer')}}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> Add New Customer </div>
                  </a>

                </div>

              </div>

            </div>

        </div>
        <!-- /.row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection