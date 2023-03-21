@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Generate New Quotation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Generate New Quotation</li>
              <li class="breadcrumb-item active"></li>
              <li class="breadcrumb-item"><a href="{{ route('sales.list_quotation') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i> Quotation List</a></li>
              
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
          <div class="col-lg-10 col-md-10 col-sm-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  @csrf

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-1 col-form-label">Type<span class="text-danger fw-600">*</span></label>
                    <div class="col-sm-5 pt-lg-2">
        
                        <div class="icheck-success d-inline">
                        <input type="radio" name="r3" checked="" value="Bank" id="Bank">
                        <label for="Bank">
                          Bank
                        </label>
                        </div>
                        <div class="icheck-success d-inline">
                        <input type="radio" name="r3" id="Personal" value="Personal">
                        <label for="Personal">
                         Personal
                        </label>
                        </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-1 col-form-label text-lg-right">Date</label>
                    <div class="col-sm-5">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Enter BIN/NID/Passport" value="" name=""> 
                      <div class="icheck-success  d-inline">
                        <input type="checkbox" name="r3" value="Recondition" id="dontprint">
                        <label for="dontprint">
                          Don't show date on the print
                        </label>
                      </div>
                    </div>
                
                  </div>

                  <div class="row bank">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">                     
                          <select class="form-control select2" name="">
                            <option selected>Select Bank</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select> 
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">                     
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Branch Name" value="" name="">
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">                     
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Name"  value="" name="">
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">                     
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Contact"  value="" name="">
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">                     
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Designation"  value="" name="">
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">                     
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Address"  value="" name="">
                        </div>
                      </div>
                    
                  </div>
                  <div class="row personal " style="display: none">
                    <div class="col-sm-12 col-lg-6 col-md-6">

                        <div class="row">
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Name"  value="" name="">
                          </div>
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Contact"  value="" name="">
                          </div>
                          <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Organization"  value="" name="">
                          </div>
                          <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Designation"  value="" name="">
                          </div>
                        </div>
                      
                      </div>
                      <div class="col-sm-12 col-lg-6 col-md-6">
                        <textarea class="form-control form-control-sm" rows="3" placeholder="Customer Address" name="pe_address" spellcheck="false" required=""></textarea>
                      </div>
                                        
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="inputEmail3" class="col-form-label text-bold text-lg">Vehicle Information</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <select class="form-control select2" name="month">
                            <option selected>Select Product</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <input type="text" class="form-control form-control-sm" placeholder="Vin/Chassis No." id="inputEmail3" value="" name="">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <input type="number" class="form-control form-control-sm" placeholder="Engine Number" id="inputEmail3" value="" name="">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 mt-lg-1">
                          <div class="form-group">
                            <select class="form-control select2" name="month">
                              <option selected>Select Condation</option>
                              <option>Pending</option>
                              <option>Active</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 mt-lg-1">
                          <div class="form-group">
                            <select class="form-control select2" name="month">
                              <option selected>Select Color</option>
                              <option>Pending</option>
                              <option>Active</option>
                            </select>
                          </div>
                        </div> 
                        <div class="col-lg-2 col-md-2 col-sm-12 mt-lg-1">
                          <div class="form-group">
                            <select class="form-control select2" name="month">
                              <option selected>Select</option>
                              <option>Pending</option>
                              <option>Active</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 mt-lg-1">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Mileage" id="inputEmail3" value="" name="">
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-1">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Auction Grade" id="inputEmail3" value="" name="">
                          </div>
                        </div>
                       
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-3 personal" style="display: none">
                              <label for="inputEmail3" class="col-form-label text-bold text-lg">Pricing Information</label><br>
                              <label for="inputEmail3" class="col-form-label text-xs">Unit Price</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-3 personal" style="display: none">
                              <label for="inputEmail3" class="col-form-label text-bold text-lg">Registration & Insurance Costs</label><br>
                              <label for="inputEmail3" class="col-form-label text-xs">Registration Amount</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-4 pt-lg-3 personal" style="display: none">
                              <br>
                              <label for="inputEmail3" class="col-form-label text-xs">Insurance Amount</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-lg-3 personal" style="display: none">
                              <label for="inputEmail3" class="col-form-label text-bold text-md">Others Expenses</label>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 mt-lg-3 personal" style="display: none">
                              <input type="text" class="form-control form-control-sm" placeholder="Note.." id="inputEmail3" value="" name="">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 mt-lg-3 personal" style="display: none">
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-3 personal" style="display: none">
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="" readonly>
                            </div>
                          
                        
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-3 bank">
                              <label for="inputEmail3" class="col-form-label text-bold text-lg">Pricing Information</label><br>
                              <label for="inputEmail3" class="col-form-label text-xs">Unit Price</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-4 pt-lg-3 bank">
                              <br>
                              <label for="inputEmail3" class="col-form-label text-xs"> Amount From Client</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-4 pt-lg-3 bank">
                              <br>
                              <label for="inputEmail3" class="col-form-label text-xs"> Amount From Bank</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                            </div>
                          

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="row">
                              <div class="col-12">
                                <label for="inputEmail3" class="col-form-label text-bold text-lg">Features</label>
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="all" id="all" onclick="toggle(this)">
                                  <label for="all">
                                    Select all
                                  </label>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="AirConditioning" id="Conditioning">
                                  <label for="Conditioning">
                                    Air Conditioning
                                  </label>
                                  </div>
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="PowerSteering" id="Power">
                                  <label for="Power">
                                    Power Steering
                                  </label>
                                  </div>
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="PowerWindow" id="PowerWindow">
                                  <label for="PowerWindow">
                                    Power Window
                                  </label>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="Airbags" id="Airbags">
                                  <label for="Airbags">
                                    Airbags 
                                  </label>
                                  </div>
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="ABSBrakes" id="ABSBrakes">
                                  <label for="ABSBrakes">
                                    ABS Brakes
                                  </label>
                                  </div>
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="MultimediaPlayer" id="MultimediaPlayer">
                                  <label for="MultimediaPlayer">
                                    Multimedia Player
                                  </label>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-12">
                                
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="RearViewCamera" id="RearViewCamera">
                                  <label for="RearViewCamera">
                                    Rear View Camera
                                  </label>
                                  </div>
                                <div class="icheck-success">
                                  <input type="checkbox" name="r31" value="AlloyWheel" id="AlloyWheel">
                                  <label for="AlloyWheel">
                                    Alloy Wheel
                                  </label>
                                  </div>
                              </div>
                            </div>
                          
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <label for="inputEmail3" class="col-form-label text-bold text-lg">Special Features</label>
                          <textarea class="form-control form-control-sm" rows="4" placeholder="Special Features" name="pe_address" spellcheck="false" required=""></textarea>
                          <label for="inputEmail3" class="col-form-label text-bold text-lg">Attach Photos</label><br>
                          <div class="form-group">  
                            <input type="file">
                          </div>
                        </div>
                        
                         <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="inputEmail3" class="col-form-label text-bold text-lg">Terms & Condition</label><br>
                          <div class="form-group">  
                          <textarea class="form-control form-control-sm" rows="2" placeholder="Tearms & Condition" name="pe_address" spellcheck="false" required=""></textarea>
                          </div>
                        </div>


                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="inputEmail3" class="col-form-label text-bold text-lg">Contact Person (Showroom)</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Name</label>  
                              <div class="form-group">
                                  <select class="form-control select2" name="month">
                                    <option selected>Select Employe</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                  </select>
                                </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">  
                            <label for="inputEmail3" class="col-form-label">Contact Number</label> 
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Contact Number"  value="" name="">
                          </div>
                        </div>
                    </div>
                  </div>

                  
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-info"><i class="fas fa-list"></i> List</button>
                <button type="submit" class="btn btn-info"><i class="fas fa-print"></i> Print Quotation</button>
                <button type="submit" class="btn btn-info"><i class="fas fa-print"></i> Print Bill</button>
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Remove</button>
                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> Rejected</button>
                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Accepted</button>
                <button type="submit" class="btn btn-success"><i class="fas fa-file"></i> Update</button>
                <button type="submit" class="btn btn-default">Print</button>
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

  <script language="JavaScript">
    function toggle(source) {
  checkboxes = document.getElementsByName('r31');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
    </script>
@endsection