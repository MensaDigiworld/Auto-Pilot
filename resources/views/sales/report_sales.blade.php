@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Report Pannel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Report Pannel</li>
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
          <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Sales Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('sales.date_wise_sales_details')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Date Wise Sales Details</a></li></h6>
                      <h6><li><a href="{{route('sales.date_wise_sales_summary')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Date Wise Sales Summary</a></li></h6>
                      <h6><li><a href="{{route('sales.monthly_sales_details')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Monthly Sales Details</a></li></h6>
                      <h6><li><a href="{{route('sales.monthly_sales_summary')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Monthly Sales Summary</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
          <div class="col-lg-4 col-md-4 com-sm-12">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Delivery Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('sales.vehicle_delivery_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Vehicle Delivery Report</a></li></h6>
                      <h6><li><a href="{{route('sales.key_register_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Key Register Report</a></li></h6>
                      <h6><li><a href="{{route('sales.pending_delivery_list')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Pending Delivery List</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
          <div class="col-lg-4 col-md-4 com-sm-12">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Pre-Order Report</h2>
                  </div>                  
                  <div class="card-body">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('sales.pre_order_list_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Pre-Order List</a></li></h6>
                      <h6><li><a href="{{route('sales.report_booking_list')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Booking List</a></li></h6>
                      <h6><li><a href="{{route('sales.pending_pre_order_list_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Pending Pre-Order List</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
          <!-- ./col -->
        </div>
                <div class="row">
          <div class="col-lg-4 col-md-4 com-sm-12">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Others Report</h2>
                  </div>                  
                  <div class="card-body">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('sales.customer_loan_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Customer Loan Report</a></li></h6>
                      <h6><li><a href="{{route('sales.stock_transfer_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Stock Transfer Report</a></li></h6>
                      <h6><li><a href="{{route('sales.registration_pending_list_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Registration Pending List</a></li></h6>
                    </ul>
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