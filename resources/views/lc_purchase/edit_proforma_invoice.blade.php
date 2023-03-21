@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Proforma Invoice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Proforma Invoice</li>
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
          <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Proforma Invoice</h3>
                <a href="{{ route('lc.list_amend_proforma_invoice')}}" class="card-title float-right btn-success btn">List of Proforma Invoice</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Date <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                          
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Purchase Date" value="" name="exp_date">
                           
                          </div>
                        </div>
                    </div>
                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Proforma Invoice/Ref No <span class="text-danger fw-600">*</span></label>
                            <div class="input-group">
                            
                              <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Proforma Invoice/Ref No" value="" name="exp_date">
                            
                            </div>
                          </div>
                      </div>
                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">IRC Number<span class="text-danger fw-600">*</span></label>
                            <div class="input-group">
                            
                              <select class="form-control select2" name="supplier">
                                <option>Select Supplier</option>
                                <option>Xeon Car</option>
                                <option>Monspeed</option>
                                
                              </select>    
                            
                            </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Supplier<span class="text-danger fw-600">*</span></label>
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

                  <div class="show1" style="display: none">
                  <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Port of shipment</label>
                          <div class="input-group">
                          
                            <select class="form-control select2" name="supplier" style="width: 100%">
                              <option>Select Supplier</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select>
                           
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Port of delivery</label>
                        <div class="input-group">
                        
                          <select class="form-control select2" name="supplier"  style="width: 100%">
                            <option>Select Supplier</option>
                            <option>Xeon Car</option>
                            <option>Monspeed</option>
                            
                          </select>
                         
                        </div>
                      </div>
                     </div>
                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Shipping Mark</label>
                            <div class="input-group">
                            
                              <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Shipping Mark" value="" name="">  
                            
                            </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Carrier</label>
                          <div class="input-group">
                          
                            <select class="form-control select2" name="supplier"  style="width: 100%">
                              <option>Select Supplier</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select>    
                          
                          </div>
                        </div>
                    </div>

                  </div>

                  <div class="row">
                    
                    <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Carrier Name</label>
                            <div class="input-group">
                            
                              <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Carrier Name" value="" name="">  
                            
                            </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Destination</label>
                          <div class="input-group">
                          
                            <select class="form-control select2" name="supplier"  style="width: 100%">
                              <option>Select Destination</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select>    
                          
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">LC Advising/Negotiating Bank</label>
                        <div class="input-group">
                        
                          <select class="form-control select2" name="supplier"  style="width: 100%">
                            <option>Select Bank</option>
                            <option>Xeon Car</option>
                            <option>Monspeed</option>
                            
                          </select>    
                        
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">LC Opening Bank Account</label>
                      <div class="input-group">
                      
                        <select class="form-control select2" name="supplier"  style="width: 100%">
                          <option>Select Bank</option>
                          <option>Xeon Car</option>
                          <option>Monspeed</option>
                          
                        </select>    
                      
                      </div>
                    </div>
                </div>
                    

                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-3 d-sm-none">
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3 d-sm-none">
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3 d-sm-none">
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Notify Party</label>
                        <div class="input-group">
                          <input type="text" class="form-control form-control-sm " id="inputEmail3" value="" name="">  
                        
                        </div>
                      </div>
                  </div>
                    

                  </div>
                </div>
                  <p class="text-success float-lg-right show0" style="cursor: default;">Show More...</p>
                    <h3>Add a vehicle to the proforma invoice</h3>

                    <div class="row">
                      <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Product Information <span class="text-danger fw-600">*</span></label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Product Information" value="" readonly name="">
                          
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
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Vin/Chassis No" value="" readonly name="">
                          
                        </div>
                      </div>
                     
                    </div>

                    <div class="row">
                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Engine Number <span class="text-danger fw-600">*</span></label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Product Information" value="" name="">
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Year of Manufacture</label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Year of Manufacture" value="" readonly name="">
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Color<span class="text-danger fw-600">*</span></label>
                          <select class="form-control select2" name="supplier">
                            <option>Select Color</option>
                            <option>Red</option>
                            <option>White</option>
                            
                          </select>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vehicle Condition<span class="text-danger fw-600">*</span></label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" readonly value="" name="">
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Mileage</label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Mileage" value="" name="">
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Auction Grade<span class="text-danger fw-600">*</span></label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Auction Grade" value="" name="" required>
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group price">
                          <label for="inputEmail3" class="col-form-label">Price Including Freight(USD)</label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Price Including Freight(USD)" value="" name="">
                                                      
                        </div>

                        <div class="form-group price2" style="display: none">
                          <label for="inputEmail3" class="col-form-label">Year of Registration</label>
                        
                          <select class="form-control select2" name="supplier">
                            <option>Select Reg year</option>
                            <option>2000</option>
                            <option>2001</option>
                            
                          </select>
                                                      
                        </div>
                      </div>
                      
                    </div>

                    <div class="show11" style="display: none">

                    <div class="row">
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Dimension</label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Dimension" value="" name="">
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Net Weight(kg)</label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Net Weight(kg)" value="" name="">
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Gross Weight(kg)</label>
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Gross Weight(kg)" value="" name="">
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Country of Origin</label>
                        
                            <select class="form-control select2" name="supplier">
                              <option>Select</option>
                              <option>Bangladesh</option>
                              <option>Japan</option>
                              
                            </select> 
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">HS Code</label>
                        
                            <select class="form-control select2" name="supplier">
                              <option>Select HS Code</option>
                              <option>2323232</option>
                              <option>2323232</option>
                              
                            </select> 
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Vehicle Description</label>
                          <textarea class="form-control form-control-sm" rows="2" placeholder="Vehicle Description" name="pe_address" spellcheck="false"></textarea>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group price1">
                          <label for="inputEmail3" class="col-form-label">Price Including Freight(USD)</label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Price Including Freight(USD)" value="" name="">
                                                      
                        </div>
                      </div>
                      
                    </div>

                  </div>
                  <p class="text-success float-lg-right show00" style="cursor: default;">Show More...</p>
                
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

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Product </th>
                      <th>Vin/Chassis No </th>
                      <th>Engine Number </th>
                      <th>Year of Manuf.</th>
                      <th>Color</th>
                      <th>Country of Origin</th>
                      <th>Price Including Freight(USD)</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Toyota-Axio (NKE165, Hybrid X, 1500cc, Auto, 2WD, 5 seater)</td>
                      <td>NKE165-565758</td>
                      <td>NA</td>
                      <td>2019</td>
                      <td>Gray</td>
                      <td>N/A</td>
                      <td>8300.00</td>
                      <td colspan="2" class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                      <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                      
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="6" class="text-right">
                        Total Amount :
                      </th>
                      <th>
                        8300.00
                      </th>
                      <th>
                        
                      </th>
                    </tr>
                  </tfoot>
                </table>
                  <div class="text-right h4 text-bold text-success">Grand Total (USD) : 11500.00</div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-info">List</button>
                <button type="submit" class="btn btn-danger">Remove</button>
                <button type="submit" class="btn btn-warning">Amend</button>
                <button type="submit" class="btn btn-success">Confirm</button>
              </div>
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
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
                  </div>
              
                </div>
    
                <div class="form-group form-group-sm row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Branch Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Bank Branch Name" value="{{ old('')}}" name=""> 
                  </div>
                  
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Brank Address</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Bank Address" value="{{ old('')}}" name=""> 
                  </div>
              
                </div>
    
                <div class="form-group form-group-sm row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Swift Code</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Swift Code" value="{{ old('')}}" name=""> 
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