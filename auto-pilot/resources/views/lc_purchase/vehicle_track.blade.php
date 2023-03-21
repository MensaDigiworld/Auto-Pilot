@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Track</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Track</li>
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
          <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">

            <div class="card card-success shadow">
              <div class="card-header">
                {{-- <h3 class="card-title">Add New Proforma Invoice</h3>
                <a href="{{ route('lc.list-proforma-invoice')}}" class="card-title float-right btn-success btn">List of Proforma Invoice</a> --}}
              </div>
              <!-- /.card-header -->
              <!-- form start -->

                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      <form action="#" class="form-horizontal" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label text-lg">CHASSIS/REGISTRATION NUMBER <span class="text-danger fw-600">*</span></label>
                          <div class="input-group input-group-md">
                          
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Chassis or Registration Number" value="{{ old('track_number')}}" name="track_number">
                            <button type="submit" class="btn btn-sm btn-success ml-1 text-bold">Continue</button>
                          </div>
                        </div>
                        </form>


                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6 border">
                      <div class="text-lg text-bold text-uppercase my-2">Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater) - 2016 , Vin/Chassis No: GM4-232425 <span class="text-sm">(NKE165, 1500 CC, 2WD, 5 Seater)</span></div>

                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                      
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                      <div class="text-lg text-bold text-center border border-success p-1"> Current Location: PORT</div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                      
                      <div class="row mr-lg-1">
                        <div class="col-lg-6 col-md-6 col-sm-12 border-bottom">
                          <div class="text-md text-bold">Purchase Type : Import</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 border-bottom">
                          <div class="text-md text-bold">Purchase Price : 00.00</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Purchase Date : 22/10/22</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Auction House : 5</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Supplier : Honda</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Lot No : 15</div>
                        </div>
                      </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="row  ml-lg-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 border-bottom">
                          <div class="text-md text-bold">Shipping & ETA </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Shipping : 10/10/22 </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md">Carrier Name: </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">ETA: 12/09/2022 (Mongla. Yard) </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Remark: </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="row my-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                      
                      <div class="row mr-lg-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 border-bottom">
                          <div class="text-md text-bold">PI & Insurance </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">PI: 12222122(12/10/2022)</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">PI value : $100000</div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="text-md ">INS: 11221 (13/01/2022)</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md">Bangladesh Insurance Company</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md">Amount : 5500 BDT</div>
                        </div>
                      </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="row  ml-lg-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 border-bottom">
                          <div class="text-md text-bold">Nothing, Assesment & Vehicle Release </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Nothing Date : </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md">BL No: </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Assesment Date: </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">BL Release Date: </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="text-md ">Vehicle Release Date: </div>
                        </div>

                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                      
                      <div class="row mr-lg-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 border-bottom">
                          <div class="text-md text-bold">LC </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">LC No: 12222122</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">LC Value : </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="text-md ">Bank Account:</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">LC Margin: 10%</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Amount: 250000</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md "> IRC :</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md "> Exchange Rate: 89 BDT </div>
                        </div>
                      </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="row  ml-lg-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 border-bottom">
                          <div class="text-md text-bold">Costing & Sales </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="text-md ">Costing Status : Complete </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="text-md">Sales Status:  Sold (12/02/2022) </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="text-md ">Delivery Status:(12/2/2022) </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="text-md">Customer : MR. Akbarul ali khan -01999121221 </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md ">Vehicle Release Date: </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="text-md "> </div>
                        </div>
                      </div>
                    </div>

                  </div>


                </div>
                <!-- /.card-body -->
               
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection