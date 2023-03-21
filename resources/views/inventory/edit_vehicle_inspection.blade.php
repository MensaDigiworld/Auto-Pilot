@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Inspection </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Inspection </li>
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
              {{-- <div class="card-header">
                <h3 class="card-title">Add Local Purchase</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Local Purchase</a>
              </div> --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Product Name</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD,  5 seater)" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vin/Chassis No</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="GM4-232425" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Color</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="red" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Supplier</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="WD XYZ Auto" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Year of Manufacture</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="2016" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Engine Number</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="N/A" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Auction Grade</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="N/A" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Mileage</label>
                          <div class="input-group">
                              
                            <input type="number" class="form-control form-control-sm" id="inputEmail3" value="340000.00" name="">
                           
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Inspected By</label>
                          <div class="input-group">
                              
                            <select class="form-control select2" name="supplier">
                              <option>Select</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select> 
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6  pt-lg-4 mt-lg-3">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="Photo" checked="">
                        <label for="Photo">
                          Photo Taken
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6  pt-4 mt-lg-3">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="Auction" checked="">
                        <label for="Auction">
                          Auction Sheet
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row my-4">
                    <div class="col-12 border-top border-bottom">
                      <div class="text-gray text-md text-center"><em>NB: G = Good, F = Fair, P = Poor & NA = Not Applicable</em></div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div id="accordion">
                        <div class="card card-gray">
                          <div class="card-header">
                            <h4 class="card-title w-100">
                            <a class="d-block w-100 text-white text-bold text-md text-uppercase" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                              Exterior
                            </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <div class="row">
                                        <div class="col-1">
                                          <label for="inputEmail3" class="col-form-label text-center">G</label>
                                          <div class="icheck-primary d-block">
                                            <input type="checkbox" id="g" name="check" onclick="onlyOne(this)">
                                            <label for="g">
                                             
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-1">
                                          <label for="inputEmail3" class="col-form-label text-center">F</label>
                                          <div class="icheck-primary d-block">
                                            <input type="checkbox" id="f" name="check" onclick="onlyOne(this)">
                                            <label for="f">
                                             
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-1">
                                          <label for="inputEmail3" class="col-form-label text-center">P</label>
                                          <div class="icheck-primary d-block">
                                            <input type="checkbox" id="p" name="check" onclick="onlyOne(this)">
                                            <label for="p">
                                             
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-1">
                                          <label for="inputEmail3" class="col-form-label text-center">NA</label>
                                          <div class="icheck-primary d-block">
                                            <input type="checkbox" id="na" name="check" onclick="onlyOne(this)">
                                            <label for="na">
                                             Hood
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12">
                                          
                                              <div class="input-group">
                                                  
                                                <textarea disabled class="form-control form-control-sm na" rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                                               
                                              </div>
                                            
                                        </div>
                                      </div>
                                    
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">G</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="g" name="check" onclick="onlyOne(this)">
                                          <label for="g">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">F</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="f" name="check" onclick="onlyOne(this)">
                                          <label for="f">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">P</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="p" name="check" onclick="onlyOne(this)">
                                          <label for="p">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">NA</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="na" name="check" onclick="onlyOne(this)">
                                          <label for="na">
                                           Hood
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-12">
                                        
                                            <div class="input-group">
                                                
                                              <textarea class="form-control form-control-sm na" disabled rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                                             
                                            </div>
                                          
                                      </div>
                                    </div>
                                  
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <div class="row">
                                        <div class="col-1">
                                          <label for="inputEmail3" class="col-form-label text-center">G</label>
                                          <div class="icheck-primary d-block">
                                            <input type="checkbox" id="g" name="check" onclick="onlyOne(this)">
                                            <label for="g">
                                             
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-1">
                                          <label for="inputEmail3" class="col-form-label text-center">F</label>
                                          <div class="icheck-primary d-block">
                                            <input type="checkbox" id="f" name="check" onclick="onlyOne(this)">
                                            <label for="f">
                                             
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-1">
                                          <label for="inputEmail3" class="col-form-label text-center">P</label>
                                          <div class="icheck-primary d-block">
                                            <input type="checkbox" id="p" name="check" onclick="onlyOne(this)">
                                            <label for="p">
                                             
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-1">
                                          <label for="inputEmail3" class="col-form-label text-center">NA</label>
                                          <div class="icheck-primary d-block">
                                            <input type="checkbox" id="na" name="check" onclick="onlyOne(this)">
                                            <label for="na">
                                             Hood
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12">
                                          
                                              <div class="input-group">
                                                  
                                                <textarea disabled class="form-control form-control-sm na" rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                                               
                                              </div>
                                            
                                        </div>
                                      </div>
                                    
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">G</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="g" name="check" onclick="onlyOne(this)">
                                          <label for="g">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">F</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="f" name="check" onclick="onlyOne(this)">
                                          <label for="f">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">P</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="p" name="check" onclick="onlyOne(this)">
                                          <label for="p">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">NA</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="na" name="check" onclick="onlyOne(this)">
                                          <label for="na">
                                           Hood
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-12">
                                        
                                            <div class="input-group">
                                                
                                              <textarea class="form-control form-control-sm na" disabled rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                                             
                                            </div>
                                          
                                      </div>
                                    </div>
                                  
                                  </div>
                                </div>
                                <div class="row my-3">
                                  <div class="col-12">
                                    <button type="submit" class="btn btn-sm btn-success float-right">Save</button>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="card card-gray">
                          <div class="card-header">
                            <h4 class="card-title w-100">
                            <a class="d-block w-100 text-white text-bold text-md text-uppercase" data-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                              GLASS
                            </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">G</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="g" name="check" onclick="onlyOne(this)">
                                          <label for="g">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">F</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="f" name="check" onclick="onlyOne(this)">
                                          <label for="f">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">P</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="p" name="check" onclick="onlyOne(this)">
                                          <label for="p">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">NA</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="na" name="check" onclick="onlyOne(this)">
                                          <label for="na">
                                           Hood
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-12">
                                        
                                            <div class="input-group">
                                                
                                              <textarea disabled class="form-control form-control-sm na" rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                                             
                                            </div>
                                          
                                      </div>
                                    </div>
                                  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                  <div class="row">
                                    <div class="col-1">
                                      <label for="inputEmail3" class="col-form-label text-center">G</label>
                                      <div class="icheck-primary d-block">
                                        <input type="checkbox" id="g" name="check" onclick="onlyOne(this)">
                                        <label for="g">
                                         
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-1">
                                      <label for="inputEmail3" class="col-form-label text-center">F</label>
                                      <div class="icheck-primary d-block">
                                        <input type="checkbox" id="f" name="check" onclick="onlyOne(this)">
                                        <label for="f">
                                         
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-1">
                                      <label for="inputEmail3" class="col-form-label text-center">P</label>
                                      <div class="icheck-primary d-block">
                                        <input type="checkbox" id="p" name="check" onclick="onlyOne(this)">
                                        <label for="p">
                                         
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-1">
                                      <label for="inputEmail3" class="col-form-label text-center">NA</label>
                                      <div class="icheck-primary d-block">
                                        <input type="checkbox" id="na" name="check" onclick="onlyOne(this)">
                                        <label for="na">
                                         Hood
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-12">
                                      
                                          <div class="input-group">
                                              
                                            <textarea class="form-control form-control-sm na" disabled rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                                           
                                          </div>
                                        
                                    </div>
                                  </div>
                                
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">G</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="g" name="check" onclick="onlyOne(this)">
                                          <label for="g">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">F</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="f" name="check" onclick="onlyOne(this)">
                                          <label for="f">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">P</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="p" name="check" onclick="onlyOne(this)">
                                          <label for="p">
                                           
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-1">
                                        <label for="inputEmail3" class="col-form-label text-center">NA</label>
                                        <div class="icheck-primary d-block">
                                          <input type="checkbox" id="na" name="check" onclick="onlyOne(this)">
                                          <label for="na">
                                           Hood
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-12">
                                        
                                            <div class="input-group">
                                                
                                              <textarea disabled class="form-control form-control-sm na" rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                                             
                                            </div>
                                          
                                      </div>
                                    </div>
                                  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                  <div class="row">
                                    <div class="col-1">
                                      <label for="inputEmail3" class="col-form-label text-center">G</label>
                                      <div class="icheck-primary d-block">
                                        <input type="checkbox" id="g" name="check" onclick="onlyOne(this)">
                                        <label for="g">
                                         
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-1">
                                      <label for="inputEmail3" class="col-form-label text-center">F</label>
                                      <div class="icheck-primary d-block">
                                        <input type="checkbox" id="f" name="check" onclick="onlyOne(this)">
                                        <label for="f">
                                         
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-1">
                                      <label for="inputEmail3" class="col-form-label text-center">P</label>
                                      <div class="icheck-primary d-block">
                                        <input type="checkbox" id="p" name="check" onclick="onlyOne(this)">
                                        <label for="p">
                                         
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-1">
                                      <label for="inputEmail3" class="col-form-label text-center">NA</label>
                                      <div class="icheck-primary d-block">
                                        <input type="checkbox" id="na" name="check" onclick="onlyOne(this)">
                                        <label for="na">
                                         Hood
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-12">
                                      
                                          <div class="input-group">
                                              
                                            <textarea class="form-control form-control-sm na" disabled rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                                           
                                          </div>
                                        
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-12">
                                  <button type="submit" class="btn btn-sm btn-success float-right">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                                                
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks </label>
                        <div class="col-sm-10">
                          <div class="input-group">
                              
                            <textarea class="form-control" rows="2" name="pe_address" placeholder="Write something about inspection...."></textarea>
                           
                          </div>
                        </div>
                            
                      </div>
                    </div>
                  </div>

                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="reset" class="btn btn-primary"><i class="fas fa-list"></i> List</button>
                  <button type="submit" class="btn btn-info"><i class="fas fa-print"></i> Print</button>
                  <button type="submit" class="btn btn-secondary"><i class="fas fa-check"></i> Confirm</button>
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


  <script>
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}


  </script>
@endsection