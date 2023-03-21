@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Local Purchase</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Local Purchase</li>
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

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Local Purchase</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Local Purchase</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Date <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                          
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Purchase Date" value="" name="exp_date">
                            
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Supplier Type <span class="text-danger fw-600">*</span></label>
                        <div class="form-group pt-2">
                            
                        
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r4" value="Recondition" id="radioSuccess11">
                              <label for="radioSuccess11">
                                Organization
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r4" id="radioSuccess12" value="BrandNew">
                              <label for="radioSuccess12">
                                Individual
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r4" id="radioSuccess13" value="BrandNew">
                              <label for="radioSuccess13">
                                Goverment
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r4" id="radioSuccess14" value="BrandNew">
                              <label for="radioSuccess14">
                                Customer (Part exchange)                                
                              </label>
                              </div>
                          
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 col-md-4 customer_table_hide">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Supplier <span class="text-danger fw-600">*</span></label>                      
                        <div class="input-group input-group-sm">
                          <select class="form-control select2" name="" required>
                            <option>Select Supplier</option>
                            <option>2000</option>
                            <option>2022</option>
                          </select>
                          <div class="input-group-append">
                          <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#employee"><i class="fas fa-plus"></i></a>
                          </div>
                          </div>                        
                      </div>
                    </div>              
                  </div>
                   <div class="col-sm-12 col-lg-4 col-md-4 customer_table" style="display:none;">            
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Innvoice Number <span class="text-danger fw-600">*</span></label>
                          <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="exp_date" placeholder="Innvoice Number Auto Generate">
                            <div class="input-group-append">
                            <a href="" class="btn btn-sm btn-default"><i class="fas fa-random"></i></a>
                            </div>
                            </div>                          
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Purchase Mode <span class="text-danger fw-600">*</span></label>
                        <div class="form-group pt-2">     
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r5" checked="" value="" id="radioSuccess15">
                              <label for="radioSuccess15">
                                Purchase
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r5" id="radioSuccess16" value="">
                              <label for="radioSuccess16">
                                Document Only
                              </label>
                              </div>                                                 
                        </div>
                    </div>


                    <div class="col-sm-12 col-lg-4 col-md-4 customer_table">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Customer <span class="text-danger fw-600">*</span></label>                      
                        <div class="input-group input-group-sm">
                          <select class="form-control select2" name="" required>
                            <option>Select Customer</option>
                            <option>2000</option>
                            <option>2022</option>
                          </select>
                          <div class="input-group-append">
                          <a href="" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                          </div>
                          </div>                        
                        </div>
                      </div>
                                    
                   <div class="col-sm-12 col-lg-4 col-md-4 customer_table_hide" style="display:none;">            
                  </div>
                      
                    
                    
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Source of Product</label>
                        <div class="form-group">
                            
                        
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r3" checked="" value="Recondition" id="radioSuccess3">
                              <label for="radioSuccess3">
                                Pre Order
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r3" id="radioSuccess4" value="BrandNew">
                              <label for="radioSuccess4">
                                Without Pre Order
                              </label>
                              </div>
                                                 
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Remarks <span class="text-danger fw-600">*</span></label>
                      
                        <textarea class="form-control form-control-sm" rows="1" placeholder="" name="pe_address" spellcheck="false"></textarea>
                        
                      </div>
                    </div>

                  </div>
                 
                  
                  <div class="card preorder">
                    <h3 class="px-3 py-1">Pre-Order</h3>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Order Date </th>
                            <th>Vehicle </th>
                            <th>Customer </th>
                            <th>Expected Delivery Date</th>
                            <th>Budget</th>
                            <th colspan="2" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>31/Jul/2022</td>
                            <td>Toyota-Land Cruiser Prado (GDJ151W, TZ-G, 2800cc, Auto, 4WD, 7 seater)</td>
                            <td>MR OBAED ISLAM</td>
                            <td>07/Sep/2022</td>
                            <td>12000000</td>
                            <td class="text-right"><a href="" class="btn btn-sm btn-success"> <i class="fas fa-check"></i> Select</a></td>
                            <td class="text-right"><a href="" class="btn btn-sm btn-primary"><i class="fas fa-book-open"></i> Details</a></td>
                            
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <ul class="pagination pagination-md m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="withoutpreorder" style="display: none">
                    <h3>Without Pre-Order</h3>

                    <div class="row">

                      <label for="inputEmail3" class="col-form-label col-lg-1 col-sm-4 col-md-2">Vehicle Condition <span class="text-danger fw-600">*</span></label>

                      <div class="col-sm-8 col-lg-6 col-md-6 pt-lg-2">
                        
                        <div class="form-group">
                            
                        
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r7" checked="" value="Recondition" id="Recondition">
                              <label for="Recondition">
                                Recondition
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r7" id="BrandNew" value="BrandNew">
                              <label for="BrandNew">
                                Brand New
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r7" id="Used" value="Used">
                                <label for="Used">
                                  Used
                                </label>
                                </div>
                                                 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-lg-6 col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vehicle <span class="text-danger fw-600">*</span></label>
                          
                            <select class="form-control select2" name="supplier">
                              <option>Select Vehicle</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select> 
                            
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-2 col-md-2">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Package/Trim</label>
                        
                            <select class="form-control select2" name="supplier">
                              <option>Select Package/Trim</option>
                              <option>2000</option>
                              <option>2008</option>
                              
                            </select> 
                          
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 col-md-4">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Vin/Chassis No <span class="text-danger fw-600">*</span></label>
                          
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Vin/Chassis No" value="" name="nid">
                            
                          </div>
                      </div>

                      
                          <div class="col-sm-6 col-lg-3 col-md-3">
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Engine No</label>
                              
                                  <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Engine No" value="" name="nid">
                                
                              </div>
                          </div>

                          <div class="col-sm-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Vehicle Tracking Code</label>
                            
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Vehicle Tracking Code" value="" name="nid">
                              
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-2 col-md-2">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Year of Manufacture <span class="text-danger fw-600">*</span></label>
                          
                              <select class="form-control select2" name="supplier" required>
                                <option>Select Year</option>
                                <option>2000</option>
                                <option>2008</option>
                                
                              </select> 
                            
                          </div>
                        </div>

                        <div class="col-sm-6 col-lg-2 col-md-2">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Exterior Color</label>
                          
                              <select class="form-control select2" name="supplier">
                                <option>Select Exterior Color</option>
                                <option>Red</option>
                                <option>White</option>
                                
                              </select> 
                            
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Interior Color</label>
                          
                              <select class="form-control select2" name="supplier">
                                <option>Select Interior Color</option>
                                <option>Red</option>
                                <option>White</option>
                                
                              </select> 
                            
                          </div>
                        </div>

                      
                        <div class="col-sm-12 col-lg-4 col-md-4">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Mileage</label>
                            
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Mileage" value="" name="nid">
                                                          
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-4 col-md-4 auction_grade">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Auction Grade</label>
                          
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Auction Grade" value="" name="nid">
                            
                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4 col-md-4">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Tyre Size</label>
                          
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Tyre Size" value="" name="nid">
                            
                          </div>
                        </div>

                    </div>

                    <div class="row used" style="display: none">
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Document status</label>
                        
                            <div class="form-group pt-2">
                          
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r11" checked="" value="Updated" id="Updated">
                              <label for="Updated">
                                Updated
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r11" id="Failed" value="Failed">
                              <label for="Failed">
                                Failed
                              </label>
                              </div>
                                                 
                        </div>
                          
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Fitness Expire Date </label>
                        
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                          
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Tax token Expire Date </label>
                        
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                          
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Insurance Expire Date </label>
                        
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                          
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      
                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="exampleInputFile">Vehical Image</label>
                          <div class="input-group">
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                          </div>
                          </div>

                          <div class="form-group row">
                    
                            <label for="inputEmail3" class="col-sm-6 col-lg-3 col-md-3 col-form-label d-sm-inline">Vehicle Warranty</label>
                            <div class="col-sm-6 col-lg-3 col-md-3 pt-lg-2">
        
                                <div class="icheck-success d-inline">
                                <input type="checkbox" name="od" value="preorder" id="radioSuccess6">
                                <label for="radioSuccess6">
                                </label>
                                </div>
                                
                            </div>
                          </div>
                          </div>
                      </div>

                      <div class="col-sm-12 col-lg-8 col-md-8">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vehicle Description</label>
                        
                            <textarea class="form-control form-control-sm" rows="2" placeholder="Vehicle Warranty Information" name="pe_address" autocomplete="on" spellcheck="false"></textarea>
                          
                        </div>
                      </div>

                  </div>

                  <div class="form-group row warrenty" style="display: none">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      
                      <textarea class="form-control form-control-sm" rows="3" placeholder="Addresss" name="address">{{ old('address')}}</textarea>
                    </div>
                  </div>

                  <h3>Pricing Information</h3>

                    <div class="row">
                      
                      <div class="col-sm-12 col-lg-4 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Net Price (USD)</label>
                        
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="nid">
                          
                        </div>
                      </div>

                        <div class="col-sm-12 col-lg-8 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Price Remarks</label>
                          
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="nid">
                            
                          </div>
                        </div>

                      
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Temporary Retail Price (BDT)</label>
                      
                          <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="nid">
                        
                      </div>
                    </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Dealer Discount (BDT)</label>
                        
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="nid">
                          
                        </div>
                      </div>

                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Temporary Dealer Price (BDT)</label>
                          
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="nid" readonly>
                            
                          </div>
                      </div>
                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Purchased By</label>
                          
                              <select class="form-control select2" name="">
                                <option>Select Employee</option>
                                <option>Red</option>
                                <option>White</option>
                                
                              </select> 
                            
                          </div>
                      </div>

                </div>
  



                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
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




  <div class="modal fade show" id="supplyer" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Add New Supplier</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
      <form action="#" class="form-horizontal" method="POST">
        @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Type<span class="text-danger fw-600">*</span></label>
            <div class="col-sm-4 pt-lg-2">

                <div class="icheck-success d-inline">
                <input type="radio" name="r3" checked="" value="Recondition" id="radioSuccess5">
                <label for="radioSuccess5">
                  International
                </label>
                </div>
                <div class="icheck-success d-inline">
                <input type="radio" name="r3" id="radioSuccess7" value="BrandNew">
                <label for="radioSuccess7">
                  Local 
                </label>
                </div>
            </div>
            
            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">BIN/NID/Passport</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter BIN/NID/Passport" value="{{ old('')}}" name=""> 
            </div>
        
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Business Category<span class="text-danger fw-600">*</span></label>
            <div class="col-sm-4 pt-lg-2">

                <div class="icheck-success d-inline">
                <input type="radio" name="r3" checked="" value="Recondition" id="radioSuccess5">
                <label for="radioSuccess5">
                  Organization
                </label>
                </div>
                <div class="icheck-success d-inline">
                <input type="radio" name="r3" id="radioSuccess7" value="BrandNew">
                <label for="radioSuccess7">
                  Individual 
                </label>
                </div>
                <div class="icheck-success d-inline">
                  <input type="radio" name="r3" id="radioSuccess7" value="BrandNew">
                  <label for="radioSuccess7">
                    Government 
                  </label>
                  </div>
            </div>
            
            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Enlistment Type</label>
            <div class="col-sm-4">
              <select class="form-control select2" name="supplier">
                <option>Select</option>
                <option>Xeon Car</option>
                <option>Monspeed</option>
                
              </select> 
            </div>
        
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Procurement Type<span class="text-danger fw-600">*</span></label>
            <div class="col-sm-4 pt-lg-2">

                <div class="icheck-success d-inline">
                <input type="radio" name="r3" checked="" value="Recondition" id="radioSuccess5">
                <label for="radioSuccess5">
                  Vehicle
                </label>
                </div>
                <div class="icheck-success d-inline">
                <input type="radio" name="r3" id="radioSuccess7" value="BrandNew">
                <label for="radioSuccess7">
                  Spare Parts 
                </label>
                </div>
                <div class="icheck-success d-inline">
                  <input type="radio" name="r3" id="radioSuccess7" value="BrandNew">
                  <label for="radioSuccess7">
                    Vehicle & Spare Parts 
                  </label>
                  </div>
            </div>
            
            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Name</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
            </div>
        
          </div>

            <div class="card-header">
              <h3 class="card-title">
              <i class="fas fa-user"></i>
              Contact Information
              </h3>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Country<span class="text-danger fw-600">*</span></label>
              <div class="col-sm-4 pt-lg-2">
  
                <select class="form-control select2" name="supplier">
                  <option>Select Country</option>
                  <option>Bangladesh</option>
                  <option>India</option>
                  
                </select> 
              </div>
              
              <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Contact No<span class="text-danger fw-600">*</span></label>
              <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
              </div>
          
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Contact Person</label>
              <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
              </div>
              
              <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Address</label>
              <div class="col-sm-4">
                <textarea class="form-control form-control-sm" rows="2" placeholder="Address" name="pe_address" spellcheck="false"></textarea>
              </div>
          
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Phone(Optional)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Phone" value="{{ old('')}}" name=""> 
              </div>
              
              <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Alt. Contact (Optional)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Alt. Contact (Optional)" value="{{ old('')}}" name=""> 
              </div>
          
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Email</label>
              <div class="col-sm-4">
                <input type="email" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter email" value="{{ old('')}}" name=""> 
              </div>
              
              <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Zip Code</label>
              <div class="col-sm-4">
                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Zip Code" value="{{ old('')}}" name=""> 
              </div>
          
            </div>
            <div class="card-header">
              <h3 class="card-title">
              <i class="fas fa-user"></i>
              Bank Account Information
              </h3>
            </div>
          
                <div class="form-group form-group-sm row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Bank</label>
                  <div class="col-sm-4 pt-lg-2">
      
                    <select class="form-control select2" name="bank">
                      <option>Select Bank</option>
                      <option>Bangladesh</option>
                      <option>India</option>
                      
                    </select> 
                  </div>
                  
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Beneficiary Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
                  </div>
              
                </div>
    
                <div class="form-group form-group-sm row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Branch Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Bank Branch Name" value="{{ old('')}}" name=""> 
                  </div>
                  
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Brank Address</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Bank Address" value="{{ old('')}}" name=""> 
                  </div>
              
                </div>
    
                <div class="form-group form-group-sm row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Swift Code</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Swift Code" value="{{ old('')}}" name=""> 
                  </div>
                  
                  
                  <div class="col-sm-6">
                    <a href="" class="btn btn-sm btn-danger float-right  mx-2" id="remove">Remove</a> 
                    <a href="" class="btn btn-sm btn-success float-right" id="add">Add</a> 

                  </div>
                                        
                </div>
    
                <div class="form-group row">
                  <h4 class="col-sm-12">Bank Acccount List</h4>
                                    
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label"> AB Bank Limited</label>
                  <label for="inputEmail3" class="col-sm-12 col-form-label"> AB Bank Limited</label>
                  <label for="inputEmail3" class="col-sm-12 col-form-label"> AB Bank Limited</label>
                  <label for="inputEmail3" class="col-sm-12 col-form-label"> AB Bank Limited</label>
                                    
                </div>

      </form>
      
    </div>
    <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
    
    </div>
    
  </div>
@endsection