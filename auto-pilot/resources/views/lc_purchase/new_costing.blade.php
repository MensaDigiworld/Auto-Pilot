@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Costing</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Costing</li>
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

            <div class="card card-info">
              {{-- <div class="card-header">
                <h3 class="card-title">Add New Insurance</h3>
                <a href="{{ route('lc.list_insurance')}}" class="card-title float-right btn-success btn">List of Insurance</a>
              </div> --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-8 h6">Product Name : Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater) - GM4-232425 </div>
                    <div class="col-lg-2 col-md-2 col-sm-4"> <a href="" class="text-sm text-info pb-3 float-right" data-toggle="modal" data-target="#insurance"> <i class="fas fa-list"></i> View Details</a></div>
                  </div>
                  <div class="row bg-gray text-white border py-3">
                    <div class="col-sm-12 col-lg-4 col-md-4">

                      <div class="fw600 d-block pb-3">PI No: <span class="fw100"> TM15/06/22</span></div>
                      <div class="fw600 d-block pb-3">IRC Number: <span class="fw100"> WORLD AUTOMOBILES - 788777</span></div>

                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">

                      <div class="fw600 d-block pb-3">LC No: <span class="fw100"> TM0601</span></div>
                      <div class="fw600 d-block pb-3">Bank : <span class="fw100"> EXIM BANK-NORTH END-GULSHAN-9955</span></div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="fw600 d-block pb-3">Supplier : <span class="fw100"> WD XYZ Auto</span></div>
                      
                    </div>

                  </div>


                  <div class="row py-3 px-0">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="col-lg-10 col-md-10 col-sm-8 h4"> <span class="text-primary">LC Value:</span> $10300.00 </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4 text-sm">
                        <span class="text-primary border-right">PI Value: 10300.00 (USD)</span>
                        <span class="text-primary">
                          <div class="input-group input-group-sm">
                            <div class="input-group-prepend input-group-prepend-sm">
                            <span class="input-group-text">Auction Price</span>
                            </div>
                            <input type="text" class="form-control form-control-sm" value="10000.00 (USD)">
                            </div>
                        </span>                    
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4 float-right">
                      <label for="inputEmail3" class="col-form-label pt-0 pr-2">Adjustment </label>
                        <div class="icheck-success d-inline pt-1">
                            <input type="radio" name="r2" checked="" value="Recondition" id="under">
                            <label for="under">
                              Under
                            </label>
                        </div>
                        <div class="icheck-success d-inline pt-1">
                            <input type="radio" name="r2"  value="Recondition" id="over">
                            <label for="over">
                              Over
                            </label>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-lg-8 col-md-8">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">LC Margin (USD) &nbsp;<span class="text-danger">90%</span></label>
                              <div class="input-group input-group-sm">
                                <input type="text" value="7725.00" class="form-control" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">USD Rate</label>
                              <div class="input-group input-group-sm">
                                <input type="text" value="7725.00" class="form-control" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">LC Margin (TK)</label>
                              <div class="input-group input-group-sm">
                                <input type="text" value="7725.00" class="form-control" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4 under">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Adjustment/TT (USD) </label>
                            <div class="input-group input-group-sm">
                              <input type="text" class="form-control" id="inputEmail3" value="0"  name="exp_date">
                            </div>
                            
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">USD Rate </label>
                            <div class="input-group input-group-sm">
                              <input type="text" class="form-control" id="inputEmail3" value="0"  name="exp_date">
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="col-sm-12 col-lg-4 col-md-4 over" style="display: none">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Over Adjustment (USD) </label>
                            <div class="input-group input-group-sm">
                              <input type="text" class="form-control" id="inputEmail3" value="0"  name="exp_date">
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-lg-8 col-md-8">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Doc/BL Release (USD)  &nbsp;<span class="text-danger">10%</span></label>
                              <div class="input-group input-group-sm">
                                <input type="text" value="7725.00" class="form-control" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">USD Rate</label>
                              <div class="input-group input-group-sm">
                                <input type="text" value="7725.00" class="form-control" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Doc/BL Release (Tk)</label>
                              <div class="input-group input-group-sm">
                                <input type="text" value="7725.00" class="form-control" id="inputEmail3"  name="exp_date">
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4 under">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Adjustment/TT (Tk) </label>
                            <div class="input-group input-group-sm">
                              <input type="text" class="form-control" id="inputEmail3" value="0"  name="exp_date">
                            </div>
                            
                          </div>
                                             
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4 over" style="display: none">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Over Adjustment (TK) </label>
                            <div class="input-group input-group-sm">
                              <input type="text" class="form-control" id="inputEmail3" value="0"  name="exp_date" readonly>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                      <div class="row pb-2">
                    <div class="col-sm-12 col-lg-8 col-md-8">
                      <div class="row">
                        <div class="col-lg-6"> 
                         </div>
                        <div class="col-lg-4 offset-lg-1">                      
                       </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3 h4 ">
                      <button class="btn btn-success">Add</button>
                      <button class="btn btn-info">Edit</button>
                      <button class="btn btn-primary">Confirm</button>
                    </div>
                  </div>

                  <div class="row pb-2">
                    <div class="col-sm-12 col-lg-8 col-md-8">
                      <div class="row">
                        <div class="col-lg-6"> 
                          <span class="text-gray float-right text-lg ">Total LC Value(Tk):</span>
                         </div>
                        <div class="col-lg-4 offset-lg-1">
                          <input type="text" class="form-control form-control-sm float-left text-lg text-gray" id="inputEmail3" value="978500.00"  name="exp_date">
                      
                       </div>
                      </div>

                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4 h4">
                      <span class="text-primary">Vehicle Price:</span> 	978500.00
                    </div>
                  </div>

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
                    <div class="row mt-3">
                    <div class="col-sm-12 col-lg-8 col-md-8">
                       <div class="icheck-success d-inline">
                                <input type="checkbox" name="od" value="preorder" id="radioSuccess6">
                                <label for="radioSuccess6">&nbsp;Add multiple cost in the same invoice
                                </label>
                           </div>
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
                              <label for="inputEmail3" class="col-form-label">Invoice Number</label>
                              <div class="input-group input-group-sm">
                                <input type="text" value="" class="form-control" id="inputEmail3"  name="exp_date" >
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
                              <label for="inputEmail3" class="col-form-label">Vendor</label>
                              <div class="input-group input-group-sm">
                                <select class="form-control select2" name="supplier">
                                  <option>Select Vendor</option>
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
                            <td>15501.67  &nbsp;<i class="fas fa-check text-success"></i></td>
                                                       
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>31/Jul/2022</td>
                            <td>INS_NA11</td>
                            <td>Insurance</td>
                            <td>PRIME INSURANCE CO</td>
                            <td>15501.67  &nbsp;<i class="fas fa-times text-danger"></i></td>
                                                       
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
                    <div class="col-sm-12 col-lg-6 col-md-6">                                     
                    </div>
                    <div class="col-sm-12 col-lg-2 col-md-2"> 
                            <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Added By</label>
                              <div class="input-group input-group-sm">
                                <select class="form-control select2" name="supplier">
                                  <option>Select Vendor</option>
                                  <option>Bangladesh</option>
                                  <option>India</option>                                  
                                </select> 
                              </div>
                          </div>                                                 
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
                      <div class="col-sm-12 col-lg-11 col-md-11">                                     
                      </div>  
                        <div class="col-sm-12 col-md-1 col-sm-1">
                          <div class="form-group">
                            <button type="button" class="btn btn-outline-warning">Add Note</button>
                          </div>
                        </div>
                  </div>
                                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-warning">Add</button>
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


@endsection

