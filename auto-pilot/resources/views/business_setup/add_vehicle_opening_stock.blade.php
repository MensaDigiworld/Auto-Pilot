@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Opening Stock</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Opening Stock</li>
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
                <h3 class="card-title">Add Opening Stock</h3>
                <a href="{{ route('list_vehicle_open_stock')}}" class="card-title float-right btn-success btn">List of Opening Stock</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Opening Year</label>
                      
                        <select class="form-control select2" name="supplier">
                          <option>Select Opening Year</option>
                          <option>2000</option>
                          <option>2022</option>
                          
                        </select> 
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Supplier</label>
                      
                        <select class="form-control select2" name="supplier">
                          <option>Select Supplier</option>
                          <option>Rony Motors</option>
                          <option>Jony Motors</option>
                          
                        </select> 
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Remarks</label>
                      
                        <textarea class="form-control form-control-sm" rows="1" placeholder="" name="pe_address" spellcheck="false"></textarea>
                        
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-lg-8 col-md-7"><h5 class="text-bold pt-2">Vehicle Information</h5></div>

                    <label for="inputEmail3" class="col-form-label col-lg-1 col-sm-6 col-md-2 float-right pt-2">Purches Type</label>

                    <div class="col-sm-6 col-lg-3 col-md-3 pt-lg-2 float-right">
                      
                      <div class="form-group">
                          
                      
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r3" checked="" value="Recondition" id="Import">
                            <label for="Import">
                              Import
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r3" id="Local" value="BrandNew">
                            <label for="Local">
                              Local
                            </label>
                            </div>
                                              
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-lg-8 col-md-8">
                      <div class="form-group">
                    
                        <select class="form-control select2" name="supplier">
                          <option>Type Product Name</option>
                          <option>2000</option>
                          <option>2022</option>
                          
                        </select> 
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                                              
                          <input type="text" class="form-control form-control-sm" placeholder="Vin/Chassis No" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                                              
                          <input type="text" class="form-control form-control-sm" placeholder="Vehicle Tracking Code" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                                              
                          <input type="text" class="form-control form-control-sm" placeholder="Engine Number" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                    
                        <select class="form-control select2" name="supplier">
                          <option>Year of Manufacture</option>
                          <option>2000</option>
                          <option>2022</option>
                          
                        </select> 
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                    
                        <select class="form-control select2" name="supplier">
                          <option>Select Color</option>
                          <option>2000</option>
                          <option>2022</option>
                          
                        </select> 
                        
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <label for="inputEmail3" class="col-form-label col-lg-2 col-sm-6 col-md-2 pt-2"><h5 class="text-bold">Vehicle Condition</h5></label>

                    <div class="col-sm-6 col-lg-4 col-md-4 pt-lg-2 text-left">
                      
                      <div class="form-group">
                          
                      
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r3" value="Recondition" id="Recondition">
                            <label for="Recondition">
                              Recondition
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r3" id="BrandNew" value="BrandNew">
                            <label for="BrandNew">
                              Brand New
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r3" id="Used" value="BrandNew">
                            <label for="Used">
                              Used
                            </label>
                            </div>
                                              
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-md-3 pt-lg-2 Recondition" style="display: none">
                      <div class="form-group">
                                              
                        <input type="text" class="form-control form-control-sm" placeholder="Auction Grade" id="inputEmail3" value="" name="exp_date">
                           
                    </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-md-3 pt-lg-2 Recondition" style="display: none">
                      <div class="form-group">
                                              
                        <input type="number" class="form-control form-control-sm" placeholder="" id="inputEmail3" value="0" name="exp_date">
                           
                    </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-md-3 pt-lg-2 Used" style="display: none">
                      <div class="form-group">
                                              
                        <input type="text" class="form-control form-control-sm" placeholder="Registration Number" id="inputEmail3" value="" name="exp_date">
                           
                    </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-md-3 pt-lg-2 Used" style="display: none">
                      <div class="form-group">
                                              
                        <select class="form-control select2" name="supplier">
                          <option>Year of Registration</option>
                          <option>2000</option>
                          <option>2022</option>
                          
                        </select> 
                           
                    </div>
                    </div>
                  </div>

                  <div class="row Used" style="display: none">
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Document Status</label>              
                        <select class="form-control select2" name="supplier">
                          <option>Select Document Status</option>
                          <option>2000</option>
                          <option>2022</option>
                          
                        </select> 
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Document Expiry Date</label>  
                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Fitness Expiry Date</label>  
                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Tax token Expiry Date</label>  
                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-lg-2 col-md-2">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Price</label>  
                          <input type="text" class="form-control form-control-sm" placeholder="Price" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 col-md-2">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Estimated Cost</label>  
                          <input type="text" class="form-control form-control-sm" placeholder="Estimated Cost" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 col-md-2">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Total Cost</label>  
                          <input type="text" class="form-control form-control-sm" placeholder="Total Cost" id="inputEmail3" value="" readonly name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Margin</label>  
                          <input type="text" class="form-control form-control-sm" placeholder="Margin" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Sales Price</label>  
                          <input type="text" class="form-control form-control-sm" placeholder="Sales Price" id="inputEmail3" value="" name="exp_date" readonly>
                             
                      </div>
                    </div>

                  </div>
                  
                  <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                    
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Dealer Discount</label>  
                          <input type="text" class="form-control form-control-sm" placeholder="Dealer Discount" id="inputEmail3" value="" name="exp_date">
                             
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Dealer Price</label>  
                          <input type="text" class="form-control form-control-sm" placeholder="Dealer Price" id="inputEmail3" value="" name="exp_date" readonly>
                             
                      </div>
                    </div>

                  </div>
                 
                  <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vehicle Description</label>  
                        <textarea class="form-control form-control-sm" rows="2" placeholder="Vehicle Description" name="pe_address" spellcheck="false"></textarea>
                             
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Location</label>
                      
                        <select class="form-control select2" name="supplier">
                          <option>Select Show Room</option>
                          <option>2000</option>
                          <option>2022</option>
                          
                        </select> 
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Pre Order</label>
                      
                      <input type="text" class="form-control form-control-sm" placeholder="Dealer Discount" id="preorder" value="" name="exp_date" readonly >
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">

                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vehicle Warranty</label>

                          <div class="icheck-success icheck-sm d-inline">
                          <input type="checkbox" name="od" value="preorder" id="warrenty">
                          <label for="warrenty">
                          </label>
                          </div>
                          

                          <textarea class="form-control form-control-sm warrenty" style="display: none" rows="2" placeholder="" name="pe_address" spellcheck="false"></textarea>
                        
                        
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
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Product Name </th>
                      <th>Vin/Chassis No </th>
                      <th>Price </th>
                      <th>Sales Price</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>31/Jul/2022</td>
                      <td>Toyota-Land Cruiser </td>
                      <td>MR OBAED ISLAM</td>
                      <td>07/Sep/2022</td>
                      <td>12000000</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-success"> <i class="fas fa-check"></i> Select</a>
                      <a href="" class="btn btn-sm btn-primary"><i class="fas fa-book-open"></i> Details</a></td>
                      
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
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection