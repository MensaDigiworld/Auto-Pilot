@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Purchase Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchase Information</li>
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
              {{-- <div class="card-header">
                <h3 class="card-title">Add Local Purchase</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Local Purchase</a>
              </div> --}}
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
                          
                            <input type="date" class="form-control" id="inputEmail3" placeholder="Enter Purchase Date" value="@php echo $today=date('Y-m-d');@endphp" name="exp_date">
                            
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Supplier Type <span class="text-danger fw-600">*</span></label>
                        <div class="form-group pt-2">
                            
                        
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r3" checked="" value="Recondition" id="radioSuccess11">
                              <label for="radioSuccess11">
                                Organization
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r3" id="radioSuccess12" value="BrandNew">
                              <label for="radioSuccess12">
                                Individual
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r3" id="radioSuccess13" value="BrandNew">
                              <label for="radioSuccess13">
                                Goverment
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r3" id="radioSuccess14" value="BrandNew">
                              <label for="radioSuccess14">
                                Customer (Part exchange)                                
                              </label>
                              </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Supplier <span class="text-danger fw-600">*</span></label>
                      
                        <select class="form-control select2" name="supplier">
                          <option>Select Supplier</option>
                          <option>Xeon Car</option>
                          <option>Monspeed</option>
                          
                        </select> 
                        
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Innvoice Number <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                          
                            <input type="number" class="form-control" id="inputEmail3" value="" name="exp_date">
                            
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Purchase Mode <span class="text-danger fw-600">*</span></label>
                        <div class="form-group pt-2">
                            
                        
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r4" checked="" value="Recondition" id="radioSuccess15">
                              <label for="radioSuccess15">
                                Purchase
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r4" id="radioSuccess16" value="BrandNew">
                              <label for="radioSuccess16">
                                Document Only
                              </label>
                              </div>
                                                 
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Remarks <span class="text-danger fw-600">*</span></label>
                      
                        <textarea class="form-control" rows="1" placeholder="" name="pe_address" spellcheck="false"></textarea>
                        
                      </div>
                    </div>

                  </div>

                 
                  
                  <div class="card">
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
                    
                  </div>

                
                   <div class="row">

                      <label for="inputEmail3" class="col-form-label col-lg-1 col-sm-4 col-md-2">Vehicle Condition <span class="text-danger fw-600">*</span></label>

                      <div class="col-sm-8 col-lg-6 col-md-6 pt-lg-2">
                        
                        <div class="form-group">
                            
                        
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r5" checked="" value="Recondition" id="radioSuccess17">
                              <label for="radioSuccess17">
                                Recondition
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r5" id="radioSuccess18" value="BrandNew">
                              <label for="radioSuccess18">
                                Brand New
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r5" id="radioSuccess19" value="BrandNew">
                                <label for="radioSuccess19">
                                  Used
                                </label>
                                </div>
                                                 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-4 col-md-4">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Vehicle <span class="text-danger fw-600">*</span></label>
                            
                              <select class="form-control select2" name="supplier">
                                <option>Select Vehicle</option>
                                <option>Xeon Car</option>
                                <option>Monspeed</option>
                                
                              </select> 
                              
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 col-md-4">
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
                        
                            <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Vin/Chassis No" value="" name="nid">
                           
                          
                        </div>
                    </div>


                    </div>

                    <div class="row">

                            <div class="col-sm-12 col-lg-3 col-md-3">
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Vehicle Reg. No</label>
                              
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Reg No" value="" name="nid">
                                
                              </div>
                          </div>
                      
                          <div class="col-sm-6 col-lg-3 col-md-3">
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Engine No</label>
                              
                                  <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Engine No" value="" name="nid">
                                
                              </div>
                          </div>

                          <div class="col-sm-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Vehicle Tracking Code</label>
                            
                                <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Vehicle Tracking Code" value="" name="nid">
                              
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Year of Manufacture <span class="text-danger fw-600">*</span></label>
                          
                              <select class="form-control select2" name="supplier" required>
                                <option>Select Year</option>
                                <option>2000</option>
                                <option>2008</option>
                                
                              </select> 
                            
                          </div>
                        </div>

                    </div>

                    <div class="row">

                      <div class="col-sm-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Color</label>
                        
                            <select class="form-control select2" name="supplier">
                              <option>Select Color</option>
                              <option>Red</option>
                              <option>White</option>
                              
                            </select> 
                          
                        </div>
                      </div>
                      
                      <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Mileage</label>
                          
                              <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Mileage" value="" name="nid">
                                                        
                          </div>
                      </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Auction Grade</label>
                        
                            <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Auction Grade" value="" name="nid">
                          
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Tyre Size</label>
                        
                            <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Tyre Size" value="" name="nid">
                          
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
                      
                          <textarea class="form-control" rows="2" placeholder="Vehicle Warranty Information" name="pe_address" spellcheck="false"></textarea>
                        
                      </div>
                  </div>
                  </div>

                  <div class="form-group row warrenty" style="display: none">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      
                      <textarea class="form-control" rows="3" placeholder="Addresss" name="address">{{ old('address')}}</textarea>
                    </div>
                  </div>

                  {{-- <h3>Pricing Information</h3>

                    <div class="row">
                      
                      <div class="col-sm-12 col-lg-4 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Net Price (USD)</label>
                        
                            <input type="number" class="form-control" id="inputEmail3" value="0" name="nid">
                          
                        </div>
                      </div>

                        <div class="col-sm-12 col-lg-8 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Price Remarks</label>
                          
                              <input type="number" class="form-control" id="inputEmail3" value="" name="nid">
                            
                          </div>
                        </div>

                  </div> --}}


                  {{-- <div class="row">
                      
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Temporary Retail Price (BDT)</label>
                      
                          <input type="number" class="form-control" id="inputEmail3" value="0" name="nid">
                        
                      </div>
                    </div>

                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Dealer Discount (BDT)</label>
                        
                            <input type="number" class="form-control" id="inputEmail3" value="" name="nid">
                          
                        </div>
                      </div>

                        <div class="col-sm-12 col-lg-4 col-md-4">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Temporary Dealer Price (BDT)</label>
                          
                              <input type="number" class="form-control" id="inputEmail3" value="0" name="nid" readonly>
                            
                          </div>
                      </div>

                </div> --}}

                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-success">Save</button>
                  <a href="" class="btn btn-danger"  data-toggle="modal" data-target="#costing">Costing</a>
                  <button type="submit" class="btn btn-primary">List</button>
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


  {{-- Costing  modal --}}

  <div class="modal fade show" id="costing" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-bold text-mute text-right"> <i class="fa fa-warning"></i>Temporary Sales Price: 122111.00</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
            <form action="#" class="form-horizontal" method="POST">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <div class="text-lg text-bold">Product Name : Toyota-Premio (NZT260, 1.5F EX package, 1500cc, Auto, 2WD, 5 seater) - NZT260-12343553</div>
                </div>
              </div>
              <div class="form-group row my-3">
                <label for="inputEmail3" class="col-sm-1 col-form-label">Price</label>
                <div class="col-sm-3 float-left">
                  <input type="text" class="form-control form-control-sm" id="inputEmail3" value="COMPNY000000000002" readonly="">
                </div>
                <div class="col-sm-2 float-left">
                  <button type="button" class="btn btn-success btn-sm">Add </button>
                  <button type="button" class="btn btn-info btn-sm">Edit </button>
                  <button type="button" class="btn btn-primary btn-sm">Confirm </button>
                </div>
                {{-- <div class="col-sm-2">
                 
                </div>
                <div class="col-sm-2">
                  
                </div> --}}
              </div>
              {{-- <div class="row">
                  <div class="col-lg-12 col-sm-12 col-md-12">
                    <label for="inputEmail3" class="col-form-label col-lg-2 col-md-2 col-sm-12">Price</label>
                    <div class="input-group input-group-sm">
                      <input type="number" value="0.00" class="form-control col-lg-3 col-md-3 col-sm-12" id="inputEmail3"  name="exp_date">
                    </div>
                    
                    <button type="button" class="btn btn-success col-lg-2 col-md-2 col-sm-12">Add </button>
                    <button type="button" class="btn btn-info col-lg-2 col-md-2 col-sm-12">Edit </button>
                    <button type="button" class="btn btn-primary col-lg-2 col-md-2 col-sm-12">Confirm </button>
               
                  </div>
              </div> --}}
              <div class="row">
                <div class="col-sm-12 col-lg-8 col-md-8">
                  <div class="icheck-success d-inline">
                    <input type="radio" name="r3" checked="" value="Recondition" id="costinvoice">
                    <label for="costinvoice">
                      Costing With Invoice
                    </label>
                  </div>
                  <div class="icheck-success d-inline">
                    <input type="radio" name="r3"  value="Recondition" id="costwithoutinvoice">
                    <label for="costwithoutinvoice">
                      Costing Without Invoice
                    </label>
                  </div>
                </div>
              </div>

              <div class="row costinvoice">
                <div class="col-12 text-lg my-3">Cost Invoice</div>
              </div>
              <div class="row">
                <div class="col-sm-12  col-lg-2 col-md-2"></div>
                    <div class="col-sm-12 col-lg-8 col-md-8">
                        <input type="checkbox" name="r3"  value="Recondition" id="">
                        <label for="multiplecost">
                           &nbsp;Add multiple cost in the same invoice
                        </label>
                    </div>
                  </div>
              <div class="row costinvoice">
                     <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Date</label>
                          <div class="input-group input-group-sm">
                            <input type="date" value="@php echo $today=date('Y-m-d');@endphp" class="form-control" id="inputEmail3"  name="exp_date">
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Invoice Number <span class="text-primary pl-1">Generate</span></label>
                          <div class="input-group input-group-sm">
                            <input type="text" value="023620221020102" class="form-control" id="inputEmail3"  name="exp_date" >
                          </div>
                          
                        </div>
                      </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Vendor</label>
                          <div class="input-group">
                            <select class="form-control select2" name="supplier">
                              <option>Select Vendor</option>
                              <option>Bangladesh</option>
                              <option>India</option>                              
                            </select> 
                          </div>                          
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Cost Type</label>
                          <div class="input-group input-group-sm">
                            <select class="form-control select2" name="supplier">
                              <option>Select Cost Type</option>
                              <option>Bangladesh</option>
                              <option>India</option>
                              
                            </select> 
                          </div>
                          
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Amount</label>
                          <div class="input-group input-group-sm">
                            <input type="text" value="" class="form-control" id="inputEmail3"  name="amount">
                          </div>
                          
                        </div>
                      </div>                    
              </div>
              <div class="row my-2 costinvoice">
                <div class="col-lg-11 col-md-11 col-sm-12">
                   <div class="form-group">
                     <div class="input-group input-group-sm">
                       <input type="text" value="" class="form-control" id="inputEmail3" placeholder="Write Something" name="exp_date">
                     </div>
                     
                   </div>
                 </div>
                 <div class="col-lg-1 col-md-1 col-sm-12">

                       <a href="" class="btn btn-success btn-sm d-block"><i class="fas fa-plus"></i> Add</a>
                 </div>
                                    
              </div>

              <div class="row costinvoice">
                <div class="col-12">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Date </th>
                        <th>Invoice No </th>
                        <th>Cost Type </th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th colspan="2" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>31/Jul/2022</td>
                        <td>INS_NA11</td>
                        <td>Insurance</td>
                        <td>PRIME INSURANCE CO</td>
                        <td>15501.67  &nbsp;<i class="fas fa-check text-success"></i></td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-success"> <i class="fas fa-check"></i></a>
                          <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        
                      </tr>
                      <tr>
                        <td>31/Jul/2022</td>
                        <td>INS_NA11</td>
                        <td>Insurance</td>
                        <td>PRIME INSURANCE CO</td>
                        <td>15501.67   &nbsp;<i class="fas fa-times text-danger"></i></td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-success"> <i class="fas fa-check"></i></a>
                          <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row mt-3 costwithoutinvoice" style="display: none">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="text-md d-block text-bold"> Estimated Cost</div>
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Duty</td>
                        <td><input type="number" class="form-control form-control-sm" value="0.00" placeholder="0.00" name=""></td>
                        <td><input type="text" class="form-control form-control-sm" placeholder="remarks" value="" name=""></td>
                        <td><i class="fas fa-close text-danger"></i></td>                         
                      </tr>
                      <tr>
                        <td>C&F Bill</td>
                        <td><input type="number" class="form-control form-control-sm" value="0.00" placeholder="0.00" name=""></td>
                        <td><input type="text" class="form-control form-control-sm" placeholder="remarks" value="" name=""></td>
                        <td><i class="fas fa-close text-danger"></i></td>                         
                      </tr>
                      <tr>
                        <td>Wharf Rent</td>
                        <td><input type="number" class="form-control form-control-sm" value="0.00" placeholder="0.00" name=""></td>
                        <td><input type="text" class="form-control form-control-sm" placeholder="remarks" value="" name=""></td>
                        <td><i class="fas fa-close text-danger"></i></td>                         
                      </tr>
                      <tr>
                        <td>Alloy/DVD/Workshop Bill</td>
                        <td><input type="number" class="form-control form-control-sm" value="0.00" placeholder="0.00" name=""></td>
                        <td><input type="text" class="form-control form-control-sm" placeholder="remarks" value="" name=""></td>
                        <td><i class="fas fa-close text-danger"></i></td>                         
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="text-md d-block text-bold"> Added Invoice</div>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>SL </th>
                        <th>Date </th>
                        <th>Invoice No </th>
                        <th>Cost Type </th>
                        <th>Vendor/Account</th>
                        <th>Amount</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>31/Jul/2022</td>
                        <td>INS_NA11</td>
                        <td>Insurance</td>
                        <td>PRIME INSURANCE CO</td>
                        <td>15501.67</td>
                                                   
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>31/Jul/2022</td>
                        <td>INS_NA11</td>
                        <td>Insurance</td>
                        <td>PRIME INSURANCE CO</td>
                        <td>15501.67</td>
                                                   
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 col-lg-8 col-md-8">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label text-orange">Vehicle Price</label>
                          <div class="input-group input-group-sm">
                            <input type="text" value="7725.00" class="form-control" id="inputEmail3"  name="exp_date" readonly>
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label text-orange">Total Invoice Cost</label>
                          <div class="input-group input-group-sm">
                            <input type="text" value="7725.00" class="form-control" id="inputEmail3"  name="exp_date" readonly>
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Total Estimated Cost</label>
                          <div class="input-group input-group-sm">
                            <input type="text" value="0.00" class="form-control" id="inputEmail3"  name="exp_date" readonly>
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Total Cost</label>
                          <div class="input-group input-group-sm">
                            <input type="text" value="100261.00" class="form-control" id="inputEmail3"  name="exp_date" readonly>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Margin </label>
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" id="inputEmail3" value="1197386.29"  name="exp_date">
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Sales Price </label>
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control text-bold text-green text-lg border-success" id="inputEmail3" value="2200000.00"  name="exp_date">
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                </div>

              </div>

              <div class="row">
                <div class="col-sm-12 col-lg-8 col-md-8">
                                           
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Dealer Discount (Tk) </label>
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" id="inputEmail3" value="00.29"  name="exp_date">
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Dealer Price (Tk) </label>
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" id="inputEmail3" value="2200000.00"  name="exp_date" readonly>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                </div>

              </div>
                        <div class="row">
                      <div class="col-sm-12 col-lg-10 col-md-10">                                     
                      </div>  
                        <div class="col-sm-12 col-md-2 col-sm-2 ">
                          <div class="form-group">
                            <button type="button" class="btn btn-outline-warning float-right">Add Note</button>
                          </div>
                        </div>
                  </div>
            
          </div>
           <div class="card-footer text-center">
                  <button type="submit" class="btn btn-warning">Add</button>
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="submit" class="btn btn-danger">Remove</button>
                  <button type="submit" class="btn btn-success">Confirm</button>
                   <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                </div>
      </div>
          </form>
    
    </div>
  
  </div>
@endsection