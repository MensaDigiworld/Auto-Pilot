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
                    <span class="info-box-icon bg-warning"><i class="fas fa-money-bill-alt"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-bold text-md">Primary Cash</span>
                    <span class="info-box-number text-xl my-0"> ৳ 2000.00</span>                   
                    </div>
                    
                  </div>


                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-money-bill-alt"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-bold text-md">Petty Cash</span>
                      <span class="info-box-number text-xl my-0"> ৳ 2000.00</span>                    
                    </div>
                    
                  </div>


                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-university"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-bold text-md">Bank</span>
                      <span class="info-box-number text-xl my-0"> ৳ 2000.00</span>
                    </div>
                    
                  </div>


                </div>

              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-primary"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-bold text-md">Supplier Balance</span>
                    <span class="info-box-number text-xl my-0"> ৳ 456000.00</span>                   
                    </div>
                    
                  </div>


                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-maroon"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-bold text-md">Customer Balance</span>
                      <span class="info-box-number text-xl my-0"> ৳ 2000.00</span>                    
                    </div>
                    
                  </div>


                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-indigo"><i class="fas fa-minus-square"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-bold text-md">Expense <span class="text-sm text-normal">(this month)</span> </span>
                      <span class="info-box-number text-xl my-0"> ৳ 2000.00</span>
                    </div>
                    
                  </div>


                </div>

              </div>

            </div>

        </div>

        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
              <h5 class="text-bold text-white bg-dark card-header card-header-primary card">Accounting Module </h5>
              <!-- row 2-------->
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.new_vehicle_sales_booking')}}"> <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">Receive Customer Payment </span>
                    </div>
                  
                  </div>
                </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.add_dealer_sales')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Supplier Payment</span>
                    </div>
                  
                  </div>
                </a>           
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.new_pre_order')}}"><div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-car"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Direct Cost Payment <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="Cost Related to Vehicle, eg: BL, Duty, LC, Insurance, C&F, Workshop bill & retail purchase of Alloy, DVD, Bumper, Oil & Filters"></i></span>
                    </div>
                  
                  </div>
                </a>           
                </div>
                
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.add_spare_parts_sales')}}"><div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-car"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Vehicle Reg. & Others Payment <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="BRTA Registration, Insurance & Loan Processing Payment"></i></span>
                    </div>                  
                  </div>
                </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.add_generate_quotation')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-exchange-alt"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">Other Transactions <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="Transactions Not Directly Related to Vehicles"></i></span>
                    </div>
                  </div>
                </a>
                </div>
              
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('sales.list_loan_manager')}}"><div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-file"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Indirect Cost Payment <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="Indirect invoices are not related to vehicles."></i></span>
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
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete Voucher</div>
                  </a>

                  <a href="{{ route('sales.confirmed_sales')}}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Daily Cash Book </div>
                  </a>

                  <a href="{{ route('sales.confirmed_delivery')}}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Bank Statement </div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Daily Transaction Details</div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Daily</div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Date Wise General Ledger</div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Customer History</div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i>  Supplier History</div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Vendor Payment History</div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Unpaid direct invoice list</div>
                  </a>

                  <a href="{{ route('sales.list_customer') }}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-list border-right pr-2"></i> Unpaid reg. & other payments List</div>
                  </a>

                  <a href=" {{ route('sales.add_customer')}}" class="btn btn-app btn-md text-dark p-1 bg-success">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> Add New Customer </div>
                  </a>

                  <a href=" {{ route('sales.add_customer')}}" class="btn btn-app btn-md text-dark p-1 bg-success">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> Indirect Cost Invoice</div>
                  </a>

                  <a href=" {{ route('sales.add_customer')}}" class="btn btn-app btn-md text-dark p-1 bg-success">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> New Supplier</div>
                  </a>

                  <a href=" {{ route('sales.add_customer')}}" class="btn btn-app btn-md text-dark p-1 bg-success">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> New Customer</div>
                  </a>

                  <a href=" {{ route('sales.add_customer')}}" class="btn btn-app btn-md text-dark p-1 bg-success">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> Cheque Register</div>
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