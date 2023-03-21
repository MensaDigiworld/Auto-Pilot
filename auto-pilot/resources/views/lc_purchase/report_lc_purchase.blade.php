@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">LC & Purchase Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">LC & Purchase Report</li>
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-md-4 com-sm-12">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Letter of Credit Report</h2>
                  </div>
                  
                  <div class="card-body">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('lc_purchase.vehicle_wise_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Vehicle Wise LC</a></li></h6>
                      <h6><li><a href="{{route('lc_purchase.pending_auction_list')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Pending Auction List For LC</a></li></h6>
                      <h6><li><a href="{{route('lc_purchase.lc_overview')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> LC Overview</a></li></h6>
                    </ul>
                  </div>
              
              </div>          

          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-md-4 com-sm-12">
            <div class="card card-outline card-success">
                  <div class="card-header">
                    <h2 class="card-title fwbold">Bill of Lading Report</h2>
                  </div>
                  
                  <div class="card-body">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('lc_purchase.bill_of_lading_list')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>  Bill of Lading List</a></li></h6>
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