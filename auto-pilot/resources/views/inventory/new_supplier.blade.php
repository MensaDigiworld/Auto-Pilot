@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Supplier</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Supplier</li>
           
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
          <div class="col-lg-12 col-12">

            <div class="card">
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  @csrf
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Type<span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-4 pt-lg-2">
          
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3"  value="" id="International">
                          <label for="International">
                            International
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r3" id="Local" value="">
                          <label for="Local">
                            Local 
                          </label>
                          </div>
                      </div>
                      
                      <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">BIN/NID/Passport</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter BIN/NID/Passport" value="{{ old('')}}" name=""> 
                      </div>
                  
                    </div>
          
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Business Category<span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-4 pt-lg-2">
          
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r4"  value="" id="Organization">
                          <label for="Organization">
                            Organization
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r4" id="Individual" value="">
                          <label for="Individual">
                            Individual 
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r4" id="Government" value="">
                            <label for="Government">
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
                          <input type="radio" name="r5" value="" id="Vehicle">
                          <label for="Vehicle">
                            Vehicle
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="r5" id="Spare" value="">
                          <label for="Spare">
                            Spare Parts 
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r5" id="Parts" value="">
                            <label for="Parts">
                              Vehicle & Spare Parts 
                            </label>
                            </div>
                      </div>
                      
                      <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
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
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
                        </div>
                    
                      </div>
          
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Contact Person</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Name" value="{{ old('')}}" name=""> 
                        </div>
                        
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Address</label>
                        <div class="col-sm-4">
                          <textarea class="form-control" rows="2" placeholder="Address" name="pe_address" spellcheck="false"></textarea>
                        </div>
                    
                      </div>
          
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Phone(Optional)</label>
                        <div class="col-sm-4">
                          <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Phone" value="{{ old('')}}" name=""> 
                        </div>
                        
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Alt. Contact (Optional)</label>
                        <div class="col-sm-4">
                          <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Alt. Contact (Optional)" value="{{ old('')}}" name=""> 
                        </div>
                    
                      </div>
          
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Email</label>
                        <div class="col-sm-4">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Enter email" value="{{ old('')}}" name=""> 
                        </div>
                        
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Zip Code</label>
                        <div class="col-sm-4">
                          <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Zip Code" value="{{ old('')}}" name=""> 
                        </div>
                    
                      </div>
                      <div class="card-header">
                        <h3 class="card-title">
                        <i class="fas fa-user"></i>
                        Bank Account Information
                        </h3>
                      </div>
                      <div id="bank">
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
                          <div class="form-group row">

                            <button type="button" class="btn btn-primary col-sm-6">Save changes</button>
                            <button type="button" class="btn btn-default col-sm-6" data-dismiss="modal">Close</button>
                                              
                          </div>
                      </div>
          
                
                
              </div>
              </div>
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

  <script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#bank").append('<div class="form-group form-group-sm row"><label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Bank</label><div class="col-sm-4 pt-lg-2"><select class="form-control select2" name="bank['+i+'][name]"><option>Select Bank</option><option>Bangladesh</option><option>India</option></select></div><label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Beneficiary Name</label><div class="col-sm-4"><input type="text" class="form-control" id="inputEmail3" placeholder="Enter Name" name="bank['+i+'][benificiery]"></div></div>');
    });
   
    $(document).on('click', '#remove', function(){  
         $(this).parents('div').remove();
    });  
   
</script>
@endsection