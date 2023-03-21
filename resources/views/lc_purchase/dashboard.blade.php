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
                    <span class="info-box-text">Foreign Purchase</span>
                    <span class="info-box-number text-lg">0</span>
                    <span class="info-box-text">This month</span>
                    </div>
                    
                  </div>


                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fa fa-car"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Local Purchase</span>
                    <span class="info-box-number text-lg">0</span>
                    <span class="info-box-text">This month</span>
                    </div>
                    
                  </div>


                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-envelope-open"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">LC Opened</span>
                    <span class="info-box-number text-lg">0</span>
                    <span class="info-box-text">This month</span>
                    </div>
                    
                  </div>


                </div>

              </div>

            </div>

        </div>

        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
              <h5 class="text-bold text-white bg-dark card-header card-header-primary card">LC & Purchase Module</h5>
              <!-- row 2-------->
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                    <a href="{{ route('lc.new-foregin-purchase')}}"> <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fa fa-car"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">New Foreign Purchase</span>
                    </div>
                    
                  </div>
                </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('lc.new-proforma-invoice')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-file-alt"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">New Proforma</span>
                    </div>
                    
                  </div>
                  </a>


                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                    <a href="{{ route('lc.lc_manager')}}"><div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-desktop"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">LC Manager</span>
                    </div>
                    
                  </div>
                    </a>


                </div>

              </div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                   <a href="{{ route('lc.new-local-purchase')}}"><div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-store"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">New Local Purchase</span>
                    </div>
                    
                  </div>
                   </a>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('lc.local_purchase_manager')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-tasks"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Local Purchase Manager</span>
                    </div>
                    
                  </div>
                  </a>

                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                    <a href="{{ route('lc.new-spare-parts-purchase')}}"><div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-car"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Purchase Spare Parts</span>
                    </div>
                    
                  </div>
                    </a>

                </div>

              </div>

            </div>

        </div>


        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
              <h5 class="text-bold text-white bg-info card-header card-header-primary card">ShortCut</h5>
              <!-- row 2-------->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                  <a href="{{ route('lc.list-proforma-invoice')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete PI</div>
                  </a>

                  <a href="{{ route('lc.list_insurance')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete Insurance</div>
                  </a>

                  <a href="{{ route('lc.list-letter-credit')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete LC</div>
                  </a>

                  <a href="{{ route('lc.list-bill-lading')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete BL </div>
                  </a>

                  <a href="{{ route('lc.list-bill-entry')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete BOE </div>
                  </a>

                  <a href="{{ route('lc.in-local-purchase')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete Costing </div>
                  </a>

                  <a href="{{ route('lc.list-in-spare-parts')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete Spare Parts Purchase </div>
                  </a>

                  <a href="" class="btn btn-app btn-md text-dark p-1 bg-success">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> Add New vehicle </div>
                  </a>

                  <a href="" class="btn btn-app btn-md text-dark p-1 bg-success">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> Add New Spare Parts </div>
                  </a>

                  <a href="" class="btn btn-app btn-md text-dark p-1 bg-success">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-user border-right pr-2"></i> Add New Supplier</div>
                  </a>

                  <a href="" class="btn btn-app btn-md text-dark p-1 bg-success">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-user border-right pr-2"></i> Add New Business Parnet</div>
                  </a>
                  <a href="{{ route('lc.vehicle_track')}}" class="btn btn-app btn-md text-light p-1 bg-navy">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-car border-right pr-2"></i> Vehicle Track</div>
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