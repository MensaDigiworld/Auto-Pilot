@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info"><b>Vehicle Lookup</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
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
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
            <div class="card-body" style="border-radius:10px;">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                   <div class="form-group">
                        <div class="input-group ">
                        <input type="search" class="form-control form-control-lg rounded-2 " placeholder="" value="" style="border-radius:10px;">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-warning btn-rounded">
                        <i class="fa fa-search"></i> 
                        </button>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>`
              </form>
        </div>
        </div>
        </div>
        <!-- /.row -->
      <div class="row">
        <div class="col-md-8">
          <div class="card-header pb-0">
              <h4 class="text-blue">Vehicle & Sales Information</h4>
          </div>
          <div class="card card-body" style="border-radius:10px;">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <label for=""></label>
            <div class="row pt-2">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <h6 class="text-bold">Chassis No:</h6>
              <h6 class="text-bold" class="text-bold">Engine No:</h6>
              <h6 class="text-bold" class="text-bold">Registration No:</h6>
              <h6 class="text-bold" class="text-bold">Tracking Code:</h6>
              <h6 class="text-bold" class="text-bold">Condition:</h6>
            </div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-header pb-0">
                  <h4 class="text-blue">Purchase Information</h4>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 bg-success" style="border-radius:10px;">
            <h5 class="pl-4">Current Location:</h5>
            </div>
          </div>
          <div class="card card-body">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12 text-bold">
                <h6 class="text-bold">Purchase Date</h6>
              <h6 class="text-bold">LC Opening Date</h6>
              <h6 class="text-bold">Shipping Date</h6>
              <h6 class="text-bold">ETA Date</h6>
              <h6 class="text-bold">Vehicle Release Date</h6>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

        <div class="row">
        <div class="col-md-8">
          <div class="card-header pb-0">
              <h4 class="text-blue">Payment Information</h4>
          </div>
          <div class="card card-body" style="border-radius:10px;">
            <label for=""></label>
            <div class="row pt-2">
            <div class="col-md-6 col-lg-6 col-sm-12">
            </div>
           <div class="col-md-5 col-lg-5 col-sm-10">
             <h6 class="text-bold">Payment Date</h6>
             <h6 class="text-bold pt-2 pb-4">Total : 0.00</h6>
            </div>
            <div class="col-md-1 col-lg-1 col-sm-2">
              <h5 class="text-bold text-danger pt-3">Due:</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-header pb-0">
                  <h4 class="text-blue">Customer Loan Information</h4>
          </div>
          <div class="card card-body" style="border-radius:10px;">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12 text-bold">
                <h6 class="text-bold">Amount</h6>
              <h6 class="text-bold">Agent</h6>
              <h6 class="text-bold">Bank</h6>
              <h6 class="text-bold">Expected Sanction Date</h6>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>


         <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <div class="card-header pb-0">
              <h4 class="text-blue">Document Information</h4>
          </div>
          <div class="card card-body" style="border-radius:10px;">
            <label for=""></label>
            <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <h6>Registration Acg. Slip:</h6>
              <h6>Fitness Expiry Date:</h6>
              <h6>Tax Token Expiry Date:</h6>
            </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                </div>
            </div>
          </div>
        </div>

          <div class="col-md-3 col-lg-3 col-sm-6">
          <div class="card-header pb-0">
              <h4 class="text-blue">Service Reminder</h4>
          </div>
          <div class="card card-body" style="border-radius:10px;">
            <label for=""></label>
            <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <h6>Engine Oil Change:</h6>
              <h6>Transm. Oil Change:</h6>
              <h6>Clutch Oil Change:</h6>
            </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                </div>
            </div>
          </div>
        </div>

            <div class="col-md-3 col-lg-3 col-sm-6">
          <div class="card-header pb-0">
              <h4 class="text-blue">Service Reminder</h4>
          </div>
          <div class="card card-body" style="border-radius:10px;">
            <label for=""></label>
            <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <h6>Hybrid Battery::</h6>
              <h6>CNG Conversion:</h6>
              <h6>LPG Conversion:</h6>
            </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                </div>
            </div>
          </div>
        </div>

          <div class="col-md-3 col-lg-3 col-sm-6">
          <div class="card-header pb-0">
              <h4 class="text-blue">Key/Card</h4>
          </div>
          <div class="card card-body " style="border-radius:10px;">
            <label for=""></label>
            <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <h6>Key Received: , Delivered:</h6>
              <h6 class="pb-4">Card Received: , Delivered:</h6>
            </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                </div>
            </div>
          </div>
        </div>
      
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card-header pb-0">
              <h4 class="text-blue">Warranty Information</h4>
          </div>
            <div class="card" style="border-radius:15px;">            
            <div class="card-body">
              <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                    </div>
                  </div>
            </div>
        </div>
        </div>
        </div>

      </div><!-- /.container-fluid -->

      
    </section>
    <!-- /.content -->
    
  </div>


@endsection