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
                    <span class="info-box-icon bg-warning"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Active Lead</span>
                    <span class="info-box-number text-xl my-0">20</span>
                    <span class="info-box-text">This Month</span>
                    
                    </div>
                    
                  </div>


                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fa fa-check"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Close Lead</span>
                      <span class="info-box-number text-xl my-0">5</span>
                      <span class="info-box-text">This Month</span>
                    
                    </div>
                    
                  </div>


                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-times"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Canceled Lead</span>
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
              <h5 class="text-bold text-white bg-dark card-header card-header-primary card">Communaction Module </h5>
              <!-- row 2-------->
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">

                  <a href="{{ route('communication.list_lead_manager')}}"> <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">Lead Manager </span>
                    </div>
                  
                  </div>
                </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">

                  <a href="{{ route('communication.list_lead_manager')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-search"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Vehicle/Customer Information Lookup</span>
                    </div>
                  
                  </div>
                </a>           
                </div>

              </div>

            </div>

        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection