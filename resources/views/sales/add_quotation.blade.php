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
                        <input type="radio" name="r3" checked="" value="Vehicle" id="g_vehicle">
                        <label for="g_vehicle">
                          Vehicle
                        </label>
                        </div>
                        <div class="icheck-success d-inline">
                        <input type="radio" name="r3" id="g_spareparts" value="SpareParts/Others">
                        <label for="g_spareparts">
                          Spare Parts/Others 
                        </label>
                        </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-1 col-form-label text-lg-right">Date</label>
                    <div class="col-sm-5">
                      <input type="date" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter BIN/NID/Passport" value="" name=""> 
                      <div class="icheck-success  d-inline">
                        <input type="checkbox" name="r3" value="Recondition" id="dontprint">
                        <label for="dontprint">
                          Don't show date on the print
                        </label>
                      </div>
                    </div>
                
                  </div>

                  {{-- <div class="row vehicle d-none">
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">                     
                          <select class="form-control select2" name="">
                            <option selected>Select Bank</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select> 
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">                     
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Branch Name" value="" name="">
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">                     
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Name"  value="" name="">
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">                     
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Contact"  value="" name="">
                        </div>
                      </div>
                    
                  </div> --}}
                  <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">

                        <div class="row">
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Name"  value="" name="">
                          </div>
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Contact"  value="" name="">
                          </div>
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Customer Organization"  value="" name="">
                          </div>
                          <div class="col-sm-12 col-lg-6 col-md-6">
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
                        <div class="col-12 vehicles">
                          <div class="row">
                            <div class="col-12 text-lg text-bold">Vehicle Information</div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                              <div class="form-group">
                              <select class="form-control select2" name="">
                                <option selected>Select Manufacture</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                              <div class="form-group">
                              <select class="form-control select2" name="">
                                <option selected>Model</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                              <div class="form-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Vin/Chassis No." id="inputEmail3" value="" name="">
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                              <div class="form-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Engine" id="inputEmail3" value="" name="">
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                              <div class="form-group">
                              <select class="form-control select2" name="">
                                <option selected>Color</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <div class="form-group">
                                <textarea class="form-control form-control-sm" id="inputEmail3" rows="1" placeholder="Description" name=""></textarea>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                              <div class="form-group">
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Vehicle Price" value="" name="">
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                              <div class="form-group">
                                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Reg." value="" name="">
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                              <div class="form-group">
                                <div class="input-group input-group-sm">
                                  <input type="number" class="form-control form-control-sm" placeholder="Qunetity" value="">
                                  <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-success">
                                      <i class="fa fa-plus"></i>Add
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-3">
                              <div class="table-responsive p-0">
                                <table class="table table-bordered mb-0">
                                  <thead class="bg-navy text-white">
                                    <tr>
                                      <th>Sl </th>
                                      <th>Vehicle </th>
                                      <th>Chassis/Vin</th>
                                      <th>Vehicle Price</th>
                                      <th>Reg. & Other</th>
                                      <th>Quantity</th>
                                      <th>Sub Total</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Suzuki-Hustler (MR41S, Tough wild, 660cc, Auto, 2WD, 4 seater)</td>
                                      <td>MR41S-345005655</td>
                                      <td>5200.00</td>
                                      <td>5200</td>
                                      <td>1</td>
                                      <td>25000.00</td>                                    
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <label for="inputEmail3" class="col-form-label text-bold text-lg p-0 m-0 float-lg-right">Subtotal= 390000.00</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 spareparts" style="display: none">
                          <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Spare Parts</label><br>
                            <select class="form-control select2" name="month">
                              <option selected>Select Product</option>
                              <option>Pending</option>
                              <option>Active</option>
                            </select>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Price</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Quentity</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Discount</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                          </div>
                          <div class="col-lg-1 col-md-1 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Vat</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                          </div> 
                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputEmail3" class="col-form-label">Amount</label>
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                          </div>
                          <div class="col-lg-1 col-md-1 col-sm-12">
                            <label for="inputEmail3" class="col-form-label text-white d-block">0</label>
                              <a href="" class="btn btn-sm btn-success">Add</a>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-3">
                            <div class="table-responsive p-0">
                              <table class="table table-bordered mb-0">
                                <thead class="bg-navy text-white">
                                  <tr>
                                    <th>Sl </th>
                                    <th>Product Name </th>
                                    <th>Price</th>
                                    <th>Quentity</th>
                                    <th>Discount(tk)</th>
                                    <th>Vat(%)</th>
                                    <th>Net total</th>
                                    <th class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>03-Nov-2022 </td>
                                    <td>Suzuki-Hustler (MR41S, Tough wild, 660cc, Auto, 2WD, 4 seater)</td>
                                    <td>MR41S-345005655</td>
                                    <td>Arafat Islam
                                      01703606960</td>
                                    <td>01703606960</td>
                                    <td>01703606960</td>
                                  
                                    <td class="text-center my-auto"><a href="" class="text-info" data-toggle="modal" data-target="#confirmed_sales"> <i class="fas fa-edit"></i></a>
                                        <a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
                                    
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="inputEmail3" class="col-form-label text-bold text-lg p-0 m-0 float-lg-right">Subtotal= 390000.00</label>
                          </div>
                        </div>
                      </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-group">  
                          <label for="inputEmail3" class="col-form-label text-bold text-lg">Tearms & Condition</label>
                          <textarea class="form-control form-control-sm" rows="2" placeholder="Tearms & Condition" name="pe_address" spellcheck="false" required=""></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">  
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Delivery Time"  value="" name="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">  
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Quatation Validity"  value="" name="">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="inputEmail3" class="col-form-label text-bold text-lg">Contact Person (Showroom)</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Name</label>  
                         <select class="form-control select2" name="month">
                              <option selected>Select Person</option>
                              <option>Pending</option>
                              <option>Active</option>
                            </select>
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
@endsection