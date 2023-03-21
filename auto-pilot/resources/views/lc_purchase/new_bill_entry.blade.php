@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Bill of Entry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Bill of Entry</li>
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
                <h3 class="card-title">Add New Bill of Entry</h3>
                <a href="{{ route('lc.list-bill-entry')}}" class="card-title float-right btn-success btn">List of Bill Entry</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Reference No <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                            
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Date<span class="text-danger fw-600">*</span></label>
                        <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" readonly name="exp_date">
                        
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Added by <span class="text-danger fw-600">*</span></label>
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
                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Customs Office <span class="text-danger fw-600">*</span></label>
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
                        <label for="inputEmail3" class="col-form-label">Declarant <span class="text-danger fw-600">*</span></label>
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
                        <label for="inputEmail3" class="col-form-label">Consignee</label>
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" value="WORLD AUTOMOBILES" readonly name="exp_date">
                        <p class="text-sm text-dark float-left"> Dhaka-1000</p>
                        
                      </div>
                    </div>

                  </div>

                  <div class="row bill1" style="display: none">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Model </label>
                          <div class="input-group">
                          
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Model" value="" name="exp_date">
                            
                          </div>
                          
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Custom Reference </label>
                        <div class="input-group">
                        
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" placeholder="Custom Reference" name="exp_date">
                          
                        </div>
                        
                      </div>
                      </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Declarant Reference </label>
                        <div class="input-group">
                        
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" placeholder="Declarant Reference" name="exp_date">
                          
                        </div>
                        
                      </div>
                     </div>

                  </div>

                  <div class="row bill1" style="display: none">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Assessment Reference </label>
                          <div class="input-group">
                          
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Assessment Reference" value="" name="exp_date">
                            
                          </div>
                          
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Package</label>
                        <div class="input-group">
                        
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" placeholder="Package" name="exp_date">
                          
                        </div>
                        
                      </div>
                      </div>
                  </div>

                  
                  <div class="row">
                    
                    <div class="col-sm-12 col-lg-12 col-md-12">
                      <p class="text-success float-lg-right bill0" style="cursor: default;">Show more...</p>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12">

                      <div class="text-lg border p-1">
                        Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                      <span class="text-bold">Chassis:</span> -------
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                      <span class="text-bold">PI:</span> -------
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                      <span class="text-bold">LC Number:</span> -------
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                      <span class="text-bold">BL:</span> -------
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">HS Code <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                          
                            <select class="form-control select2" name="supplier">
                              <option>Select Supplier</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select> 
                            
                          </div>
                          
                        </div>
                      </div>
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Assessable Value <span class="text-danger fw-600">*</span></label>
                        <div class="input-group">
                        
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" placeholder="Assessable Value" name="exp_date">
                          
                        </div>
                        
                      </div>
                      </div>
                  </div>
                 
                  
                  <div class="card">
                    <h3 class="px-3 py-2 text-md text-primary fw600 global_tax"> <i class="fas fa-plus"></i> Add Global Taxs(Optional)</h3>
                    <div class="global_tax_content" style="display:none">
                        <h3 class="px-3 py-1">Global Taxs(Optional)</h3>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Tax Code</th>
                                <th>Tax Description </th>
                                <th>Tax Code </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>ITC</td>
                                <td>Income Tax on C & F Commission</td>
                                <td>0</td>                            
                              </tr>
                              <tr>
                                <td>FP</td>
                                <td>Fines/Penalties</td>
                                <td>0</td>                            
                              </tr>
                              <tr>
                                <td>DF</td>
                                <td>Document Processing Fee</td>
                                <td>0</td>                            
                              </tr>
                              <tr>
                                <td>CV</td>
                                <td>VAT on C & F Commission</td>
                                <td>0</td>                            
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan="2">Total Grand Taxs</td>
                                <td>0</td>                          
                              </tr>
                            </tfoot>
                          </table>
                        </div>

                    </div>

                    <h3 class="px-3 py-1">Item Taxs</h3>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Tax Code</th>
                            <th>Tax Description </th>
                            <th>Tax Value </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>CD</td>
                            <td>Customs Duty</td>
                            <td>0.00</td>                            
                          </tr>
                          <tr>
                            <td>RD</td>
                            <td>Regularity Duty</td>
                            <td>0.00</td>                            
                          </tr>
                          <tr>
                            <td>SD</td>
                            <td>Supplementary Duty</td>
                            <td>0.00</td>                            
                          </tr>
                          <tr>
                            <td>VAT</td>
                            <td>Value Added Tax</td>
                            <td>0.00</td>                             
                          </tr>
                          <tr>
                            <td>AIT</td>
                            <td>Advance Income Tax</td>
                            <td>0.00</td>                             
                          </tr>
                          <tr>
                            <td>AT</td>
                            <td>Advance Tax</td>
                            <td>0.00</td>                             
                          </tr>
                          <tr>
                            <td>ATV</td>
                            <td>Advance Tread VAT</td>
                            <td>0.00</td>                             
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="2">Total Item Taxs	</td>
                            <td>0.000</td>                          
                          </tr>
                          <tr>
                            <td colspan="2">Total assessed amount for the declaration	</td>
                            <td>0.000</td>                          
                          </tr>
                          <tr>
                            <td colspan="2">Total amount to be paid	</td>
                            <td>0.000</td>                          
                          </tr>
                        </tfoot>
                      </table>
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
@endsection