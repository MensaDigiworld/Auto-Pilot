@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Generate Temporary Delivery Challan </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Generate Temporary Delivery Challan </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid mb-5">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card card-info">
              {{-- <div class="card-header">
                <h3 class="card-title">Add Local Purchase</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Local Purchase</a>
              </div> --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Delivey Date </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="date" class="form-control form-control-sm" id="inputEmail3" value="@php echo $today=date('Y-m-d');@endphp" name="">
                       
                      </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Delivered By</label>
                    <div class="col-sm-4">
                      <select class="form-control select2 w100" name="">
                        <option>Select Delivered By</option>
                        <option selected>MD. Harun</option>
                      </select> 
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Reason </label>
                    <div class="col-sm-4">
                      <select class="form-control select2 w100" name="">
                        <option>Test Drive</option>
                        <option>Transfer</option>
                      </select> 
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Delivered To</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                       
                      </div>
                    </div>
                 
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact No </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                       
                      </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Address</label>
                    <div class="col-sm-4">
                      <textarea class="form-control form-control-sm" rows="2" name="pe_address" spellcheck="false" ></textarea>
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Number of Key </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <select class="form-control select2 w100" name="">
                          <option>2</option>
                          <option>3</option>
                        </select> 
                       
                      </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Spare Tyre/Inflator</label>
                    <div class="col-sm-4">
                      <select class="form-control select2 w100" name="">
                        <option>Both</option>
                        <option>Spare Type</option>
                        <option>Inflator</option>
                      </select> 
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks </label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <textarea class="form-control form-control-sm" rows="2" name="pe_address" spellcheck="false" ></textarea>
                      </div>
                    </div>
                    
                  </div>



                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Retail Delivery </label>
                    <div class="col-sm-4">
                      <div class="input-group">                          
                        <div class="icheck-primary d-inline">
                          
                          <input type="checkbox" id="checkboxPrimary1">
                          <label for="checkboxPrimary1">
                            Check All
                          </label>

                        </div>
                      </div>

                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            BRTA Registration Certificate
                          </label>
                        </div>
                      </div>

                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Fitness Certificate
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Tax Token Certificate
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Insurance
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Vehicle Sales Invoice
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Money Receipt
                          </label>
                        </div>
                      </div>
                      
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Wholesale Delivery</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <div class="icheck-primary d-inline">                         
                          <input type="checkbox" id="checkboxPrimary1">
                          <label for="checkboxPrimary1">
                            Check All
                          </label>
                        </div>
                      </div>

                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Delivery Challan
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Bill of Lading(BL)
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Bill of Entry
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Cancellation(Japanese)
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Cancellation(Eng)
                          </label>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                            Authorization
                          </label>
                        </div>
                      </div>
                      
                    </div>

                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info"><i class="fas fa-print"></i> Print</button>
                  <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Update</button>
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
@endsection