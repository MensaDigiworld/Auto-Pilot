@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Proforma Invoice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Proforma Invoice</li>
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
                <h3 class="card-title">Add New Proforma Invoice</h3>
                <a href="{{ route('lc.list-proforma-invoice')}}" class="card-title float-right btn-success btn">List of Proforma Invoice</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Date <span class="text-danger fw-600">*</span></label>
                          <div class="input-group input-group-sm">
                          
                            <input type="date" class="form-control" id="inputEmail3" placeholder="Enter Purchase Date" value="@php echo $today=date('Y-m-d');@endphp" name="exp_date">
                           
                          </div>
                        </div>
                    </div>
                      <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Proforma Invoice/Ref No <span class="text-danger fw-600">*</span></label>
                          <div class="input-group input-group-sm">
                          
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Proforma Invoice/Ref No" value="Pi-123" name="exp_date">
                          
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">IRC Number<span class="text-danger fw-600">*</span></label>
                            <div class="input-group input-group-sm">
                            
                              <select class="form-control select2" name="supplier">
                                <option>Select Supplier</option>
                                <option>Xeon Car</option>
                                <option>Monspeed</option>
                                
                              </select>    
                            
                            </div>
                          </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Supplier<span class="text-danger fw-600">*</span></label>
                          <div class="input-group input-group-sm">
                          
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
                          <div class="input-group input-group-sm">
                          
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
                        <div class="input-group input-group-sm">
                        
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
                            <div class="input-group input-group-sm">
                            
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Shipping Mark" value="" name="">  
                            
                            </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Carrier</label>
                          <div class="input-group input-group-sm">
                          
                            <select class="form-control select2" name="supplier"  style="width: 100%">
                              <option>Select Carrier</option>
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
                            <div class="input-group input-group-sm">
                              <select class="form-control select2" name="supplier"  style="width: 100%">
                                <option>Select Carrier</option>
                                <option>Xeon Car</option>
                                <option>Monspeed</option>
                                
                              </select>  
                            </div>
                          </div>
                      </div>
                      
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">LC Advising/Negotiating Bank</label>
                        <div class="input-group input-group-sm">
                        
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
                      <div class="input-group input-group-sm">
                      
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
                    <label for="inputEmail3" class="col-form-label">Notify Party</label>
                    <div class="input-group input-group-sm">
                      <input type="text" class="form-control form-control-sm " id="inputEmail3" value="" name="">  
                    
                    </div>
                  </div>
              </div>
                    

                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-lg-9 col-md-3 d-sm-none">
                    </div>
                    
                    
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Destination</label>
                      <div class="input-group input-group-sm">
                      
                        <select class="form-control select2" name="supplier"  style="width: 100%">
                          <option>Select Destination</option>
                          <option>Xeon Car</option>
                          <option>Monspeed</option>
                          
                        </select>    
                      
                      </div>
                    </div>
                </div>
                    

                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <p class="text-success float-lg-right show0" style="cursor: default;">Show More...</p>
                  </div>
                </div>
                 
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-lg text-bold text-left my-2"> Vehicle(s) Purchased From TOKYO MOTORS</div>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Product </th>
                            <th class="text-center">Vin/Chassis & Year</th>
                            <th>Price(USD)</th>
                            <th colspan="1" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Toyota-Prius (ZVW51, A TOURING PREMIUM TSS-P, 1800cc, Auto, 2WD, 5 seater) <i class="fas fa-check-circle text-success"></i></td>
                            <td class="text-center">ZVW51-3445533 <br> 2022</td>
                            <td>123344.00</td>
                            <td class="px-0 text-center">
                              <a href="" class="btn btn-xs btn-info text-sm text-left"  data-toggle="modal" data-target="#add_proforma_invoice"> <i class="fas fa-plus text-sm"></i> </a>
                            <a href="" class="btn btn-xs btn-success text-sm text-right" data-toggle="modal" data-target="#proforma_invoice"><i class="fas fa-eye text-sm"></i> </a></td>
                            
                          </tr>
                        </tbody>
                      </table>


                    </div>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div> --}}
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-success">

              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                              
                                   

               
                 
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                      <div class="col-lg-6 com-md-6 col-sm-12">
                        <div class="text-lg text-bold text-left my-2"> Vehicle(s) Add To PI No: Pi-123</div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end flex-row">
                        <div>
                          <a href="" class="btn btn-sm btn-warning">Email</a>
                          <a href="" class="btn btn-sm btn-primary mx-1">Print</a>
                        </div>

                      </div>
                    </div>
                    
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Product </th>
                            <th class="text-center">Vin/Chassis & Year</th>
                            <th>PI Value</th>
                            <th colspan="1" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Toyota-Prius (ZVW51, A TOURING PREMIUM TSS-P, 1800cc, Auto, 2WD, 5 seater) <i class="fas fa-check-circle text-success"></i></td>
                            <td class="text-center">ZVW51-3445533 <br> 2022</td>
                            <td>123344.00</td>
                            <td class="px-0 text-center">
                              <a href="" class="btn btn-xs btn-info text-sm text-left"  data-toggle="modal" data-target="#add_proforma_invoice"> <i class="fas fa-check text-sm"></i> </a>
                            <a href="" class="btn btn-xs btn-success text-sm text-right" data-toggle="modal" data-target="#proforma_invoice"><i class="fas fa-edit text-sm"></i> </a></td>
                            
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th colspan="2" class="text-right">
                              Total
                            </th>
                            <th>123344.00</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </tfoot>
                      </table>
                      <div class="text-lg text-right text-success text-bold"> GRAND TOTAL USD: 123344.00</div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12"> <div class="text-md text-dark text-bold"> TOTAL Vehicle: 8</div></div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="input-group input-group-sm">
                      
                        <select class="form-control select2" name="supplier">
                          <option>Select Added By</option>
                          <option>Xeon Car</option>
                          <option>Monspeed</option>
                          
                        </select>    
                      
                      </div>
                   
                  </div>
                </div>               
              </div>
                <!-- /.card-body -->
                <div class="card-footer d-flex flex-row justify-content-between">
                  <div>
                    <button type="submit" class="btn btn-primary">Lsit</button>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-success">Add</button>
                    <button type="submit" class="btn btn-info">Update</button>
                    <button type="submit" class="btn btn-danger">Remove</button>
                    <button type="submit" class="btn btn-success">Confirm</button>
                  </div>

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