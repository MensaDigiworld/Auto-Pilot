@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Insurance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Insurance</li>
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
          <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Insurance</h3>
                <a href="{{ route('lc.list_insurance')}}" class="card-title float-right btn-success btn">List of Insurance</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">

                  <div class="row border py-3">
                    <div class="col-sm-12 col-lg-4 col-md-4">

                      <div class="fw600 d-block pb-3">PI Date: <span class="fw100"> 22-Jun-2022</span></div>
                      <div class="fw600 d-block pb-3">IRC Number: <span class="fw100"> WORLD AUTOMOBILES - 788777</span></div>

                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">

                      <div class="fw600 d-block pb-3">PI Number: <span class="fw100"> 2000</span></div>
                      <div class="fw600 d-block pb-3">Supplier: <span class="fw100"> TOKYO MOTORS</span></div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">

                      <a href="" class="text-sm text-info pb-3 float-right" data-toggle="modal" data-target="#insurance"> <i class="fas fa-list"></i> View Details</a>
                    </div>

                  </div>


                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="today" class="col-form-label">Insurance Date <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                            <input type="date" class="form-control form-control-sm" id="today"  name="exp_date">
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Insurance Company <span class="text-danger fw-600">*</span></label>
                        <div class="input-group">
                        
                          <select class="form-control select2" name="supplier">
                            <option>Select Supplier</option>
                            <option>Xeon Car</option>
                            <option>Monspeed</option>
                            
                          </select> 
                          
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">ID No/Insurance No</label>
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter ID No"  name="exp_date">
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Marine Cover Note</label>
                          <div class="input-group">
                            <input type="text" placeholder="Marine Cover Note" class="form-control form-control-sm" id="inputEmail3"  name="exp_date">
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Insured Amount(USD) <span class="text-danger fw-600">*</span></label>
                        <div class="input-group">
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" value="67000.00"  name="exp_date">
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Grand Total(BDT) <span class="text-danger fw-600">*</span></label>
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder=""  name="exp_date">
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3 pt-lg-4 mt-lg-2">
                     
                        <button type="submit" class="btn btn-block btn-sm btn-primary " name="">Payment</button>
                      
                        
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Remarks</label>
                          <div class="input-group">
                            <textarea class="form-control form-control-sm" rows="1" placeholder="" name="pe_address" spellcheck="false"></textarea>
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Added by</label>
                          <div class="input-group">
                            <select class="form-control select2" name="supplier">
                              <option>Select Supplier</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select>
                          </div>
                          
                        </div>
                    </div>
                  </div>
                                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-success">Add</button>
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="submit" class="btn btn-danger">Remove</button>
                  <button type="submit" class="btn btn-success">Confirm</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

    {{-- Insurance modal --}}

  <div class="modal fade show" id="insurance" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Proforma Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">

             {{-- block 1 row 1 --}}
            <div class="row py-1">
                <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Date</div>
                <div class="col-lg-3 col-md-3 col-sm-6"> 22-Jun-2022</div>
                <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Supplier</div>
                <div class="col-lg-3 col-md-3 col-sm-6"> TOKYO MOTORS</div>
            </div>
            {{-- block 1 row 2 --}}
            <div class="row py-1">
                <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Proforma Invoice/Ref No</div>
                <div class="col-lg-3 col-md-3 col-sm-6"> 2000</div>
                <div class="col-lg-3 col-md-3 col-sm-6 fw600"> IRC Number</div>
                <div class="col-lg-3 col-md-3 col-sm-6"> WORLD AUTOMOBILES - 788777</div>
            </div>
              {{-- block 1 row 3 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Port of delivery</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Port of shipment</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
            </div>
              {{-- block 1 row 4 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Shipping Mark</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Destination</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
            </div>
              {{-- block 1 row 5 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Carrier</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Carrier Name</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

            {{-- block 2 row 1 --}}
            <div class="row py-1 border-top border-bottom border-gray">
              <div class="col-lg-10 col-md-10 col-sm-12 fw600 text-lg"> Toyota-Vitz (NHP130, Hybrid jeweler, 1500cc, Auto, 2WD, 5 seater)</div>
              <div class="col-lg-2 col-md-2 col-sm-12 fw600 float-md-right text-md"> Recondition</div>
              
           </div>
            
           {{-- block 2 row 1 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Vin/Chassis No</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> NHP130-2551</div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Engine Number</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> N/A</div>
           </div>
           {{-- block 2 row 2 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Year of Manufacture</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> 2022</div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Year of Registration</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

              {{-- block 2 row 3 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Color</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> White</div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Auction Grade</div>
              <div class="col-lg-3 col-md-3 col-sm-6">5 </div>
           </div>

                {{-- block 2 row 4 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Mileage</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> 20000.00</div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600">Dimension</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

              {{-- block 2 row 5 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Net Weight(kg)</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600">Gross Weight(kg)</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

            {{-- block 2 row 6 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Country of Origin</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600">HS Code</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

                {{-- block 2 row 7 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Vehicle Description</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600">Price Including Freight(USD)</div>
              <div class="col-lg-3 col-md-3 col-sm-6">45000.00 </div>
           </div>

              {{-- block 3 row 1 --}}
            <div class="row py-1 border-top border-bottom border-gray">
              <div class="col-lg-10 col-md-10 col-sm-12 fw600 text-lg"> Nissan-Serena (GFC27, Highway Star V Urban Chrome, 2000cc, Auto, 2WD, 8 seater)</div>
              <div class="col-lg-2 col-md-2 col-sm-12 fw600 float-md-right text-md"> Recondition</div>
              
           </div>

                  {{-- block 3 row 1 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Vin/Chassis No</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> GFC27-6698</div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Engine Number</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> N/A</div>
           </div>
           {{-- block 3 row 2 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Year of Manufacture</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> 2020</div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Year of Registration</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

              {{-- block 3 row 3 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Color</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> White</div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Auction Grade</div>
              <div class="col-lg-3 col-md-3 col-sm-6">5 </div>
           </div>

                {{-- block 3 row 4 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Mileage</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> 50000.00</div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600">Dimension</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

              {{-- block 3 row 5 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Net Weight(kg)</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600">Gross Weight(kg)</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

            {{-- block 3 row 6 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Country of Origin</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600">HS Code</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
           </div>

                {{-- block 3 row 7 --}}
            <div class="row py-1">
              <div class="col-lg-3 col-md-3 col-sm-6 fw600"> Vehicle Description</div>
              <div class="col-lg-3 col-md-3 col-sm-6"> </div>
              <div class="col-lg-3 col-md-3 col-sm-6 fw600">Price Including Freight(USD)</div>
              <div class="col-lg-3 col-md-3 col-sm-6">22000.00 </div>
           </div>

          </div>  {{-- Modal body end --}}
          <div class="modal-footer justify-content-center">
            
            <div class="text-lg text-success fw600"> Total: 67000.00</div>
          </div>
      </div>

    
    </div>
  
  </div>
@endsection