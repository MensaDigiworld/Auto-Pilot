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
                    <span class="info-box-text">Total Stock</span>
                    <span class="info-box-number text-lg">20</span>
                    
                    </div>
                    
                  </div>


                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fa fa-car"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Transferred to Others Showroom</span>
                    <span class="info-box-number text-lg">15</span>
                    
                    </div>
                    
                  </div>


                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fa fa-car"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Transferred Received</span>
                    <span class="info-box-number text-lg">2</span>
                    </div>
                    
                  </div>


                </div>

              </div>

            </div>

        </div>

        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
              <h5 class="text-bold text-white bg-dark card-header card-header-primary card">Inventory Module </h5>
              <!-- row 2-------->
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('inventory.inventory-manager')}}"> <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-warehouse"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">Inventory Manager</span>
                    </div>
                  
                  </div>
                </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('inventory.new-vehical-transfer')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-exchange-alt"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Receive Vehicle Transfer</span>
                    </div>
                  
                  </div>
                </a>           
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('inventory.list-vehicale-transfer-showroom')}}"><div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-exchange-alt"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Transferred Vehicle Manager</span>
                    </div>                  
                  </div>
                </a>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('inventory.list-return-vehicle-workshop')}}"><div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-undo-alt"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text text-lg">Return Vehicle from Workshop</span>
                    </div>
                  </div>
                </a>
                </div>
              
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('inventory.list_vehicle_transfer_other_shoroom')}}"><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-handshake"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Return Vehicle from Partners</span>
                    </div>
                    
                  </div>
                </a>

                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <a href="{{ route('inventory.list_windows_sticker')}}"><div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-sticky-note"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text text-lg">Window Stickers</span>
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

                  <a href="{{ route('inventory.list_vehicle_inspection')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete Inspection</div>
                  </a>

                  <a href="{{ route('inventory.list_workshop_transfer_incomplete')}}" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incom. Reconditioning</div>
                  </a>

                  <a href="" class="btn btn-app btn-md text-dark p-1 bg-warning">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-exclamation-circle border-right pr-2"></i> Incomplete Transfer</div>
                  </a>

                  <a href="{{ route('inventory.vehicle_stock')}}" class="btn btn-app btn-md text-dark p-1 bg-success">
                    <span class="badge bg-danger ">12</span>
                    <div class="float-left"><i class="fas fa-car border-right pr-2"></i> Vehicle Stock </div>
                  </a>

                  <a href="{{ route('inventory.list_spare_parts_stock')}}" class="btn btn-app btn-md text-dark p-1 bg-success">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-cog border-right pr-2"></i> Parts Stock </div>
                  </a>

                  <a href="" class="btn btn-app btn-md text-dark p-1 bg-success">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> Add New Vehicle </div>
                  </a>

                  <a href=" {{ route('inventory.new_spare_parts')}}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> New Spare Parts </div>
                  </a>

                  <a href="{{ route('inventory.new_supplier')}}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-plus border-right pr-2"></i> Add New Supplier </div>
                  </a>

                  <a href="{{ route('inventory.new_business_partner')}}" class="btn btn-app btn-md text-dark p-1 bg-primary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-user border-right pr-2"></i> Add New Business Partner </div>
                  </a>
                  <a href="{{ route('inventory.new_dealer')}}" class="btn btn-app btn-md text-dark p-1 bg-info">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-user border-right pr-2"></i> Add New Dealer </div>
                  </a>
                  <a href="{{ route('inventory.new_vehicle_inspection')}}" class="btn btn-app btn-md text-dark p-1 bg-secondary">
                    {{-- <span class="badge bg-danger ">12</span> --}}
                    <div class="float-left"><i class="fas fa-car border-right pr-2"></i> New Vehicle Inspection </div>
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