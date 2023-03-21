@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Vehical Document</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Vehical Document</li>
              <li class="breadcrumb-item active"></li>
             
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
          <div class="col-10">
            <div class="card">
              <div class="card-header bg-info">
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                          <h2>Add Vehicle Document</h2>
                  </div>
                     <div class="col-sm-12 col-md-6 col-lg-6">
                       <a href="#"><button type="button" class="btn btn-success float-right"><h3>List of Documents</h3></button></a>
                  </div>
                </div>
              </div>              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('vehicle-document.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                  <div class="row">
                        <div class="col-2">
                          <h5 class="text-center">Vehicle</h5>
                        </div>
                        <div class="col-5">
                          <select class="form-control select2" name="manufacture_id">
                                <option selected disabled>Select Manufacterur</option>
                                @foreach ($manufacture as $manufactures)
                                    <option value="{{ $manufactures->id }}">{{ $manufactures->name }}</option>
                              @endforeach   
                              </select>  
                        </div>
                        <div class="col-5">
                          <select class="form-control select2" name="Model_id">
                                <option selected disabled>Select Model</option>
                                 @foreach ($model as $models)
                                    <option value="{{ $models->id }}">{{ $models->name }}</option>
                              @endforeach   
                              </select>  
                        </div>
                  </div>

                 <div class="row mt-2">
                    <div class="col-2">
                      <h5 class="text-center">Year</h5>
                    </div>
                    <div class="col-5">
                       <select class="form-control select2" name="year_of_manufacture">
                            <option selected disabled>Manufacterur Year</option>
                           @for ($year = date('Y')+1; $year >=1960 ; $year--) <option value="{{ $year }}">{{ $year }}</option>
                      @endfor
                          </select>  
                    </div>
                    <div class="col-5">
                       <select class="form-control select2" name="year_of_registration">
                            <option selected disabled>Registration Year</option>
                      @for ($year = date('Y')+1; $year >=1960 ; $year--) <option value="{{ $year }}">{{ $year }}</option>
                      @endfor
                    </select>
                          </select>  
                    </div>
                  </div>
                    <div class="row mt-2">
                    <div class="col-2">
                      <h5 class="text-center">Vin</h5>
                    </div>
                    <div class="col-10">
                      <input type="text" class="form-control" name="vin" value="">
                    </div>
                  </div>

                     <div class="row mt-2">
                    <div class="col-2">
                      <h5 class="text-center">Reg</h5>
                    </div>
                    <div class="col-10">
                      <input type="text" class="form-control" name="reg" value="">
                    </div>
                  </div>

                     <div class="row mt-2">
                    <div class="col-2">
                      <h5 class="text-center">Reg</h5>
                    </div>
                    <div class="col-10">
                      <input type="text" class="form-control" name="reg1" value="">
                    </div>
                  </div>

                    <div class="row mt-4">
                    <div class="col-2">
                      <h5 class="text-center">Fitness</h5>
                    </div>
                    <div class="col-2">
                       <div class="icheck-success d-inline">
                            <input type="radio" name="fitness" value="Recurring" id="recuring">
                            <label for="recuring">
                              Recurring
                            </label>
                          </div>
                    </div>
                    <div class="col-2">
                       <div class="icheck-success d-inline">
                          <input type="radio" name="fitness" value="Not Applicable" id="notapplicable">
                          <label for="notapplicable">
                            Not Applicable
                          </label>
                        </div> 
                    </div>
                     <div class="col-3">
                       <label for="days">Validaty</label>                      
                       <select class="form-control form-control-sm" name="fitness_validity_day">                          
                            <option selected disabled>Days</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>  
                    </div>
                    <div class="col-3">
                       <label for="days">Validaty</label> 
                       <input type="date" class="form-control form-control-sm" name="fitness_validity_date">    
                    </div>
                  </div>

                   <div class="row mt-4">
                    <div class="col-2">
                      <h5 class="text-center">Insurence</h5>
                    </div>
                    <div class="col-2">
                       <div class="icheck-success d-inline">
                            <input type="radio" name="insurence" value="Recurring" id="insurence_recuring">
                            <label for="insurence_recuring">
                              Recurring
                            </label>
                          </div>
                    </div>
                    <div class="col-2">
                       <div class="icheck-success d-inline">
                          <input type="radio" name="insurence" value="Not Applicable" id="insurence_notapplicable">
                          <label for="insurence_notapplicable">
                            Not Applicable
                          </label>
                        </div> 
                    </div>
                     <div class="col-3">
                       <label for="days">Validaty</label>                      
                       <select class="form-control form-control-sm" name="insurence_validity_day">                          
                            <option selected disabled>Days</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>  
                    </div>
                    <div class="col-3">
                       <label for="days">Validaty</label> 
                       <input type="date" class="form-control form-control-sm" name="insurence_validity_date">    
                    </div>
                  </div>

                   <div class="row mt-4">
                    <div class="col-2">
                      <h5 class="text-center">Tax Token</h5>
                    </div>
                    <div class="col-2">
                       <div class="icheck-success d-inline">
                            <input type="radio" name="tax_token" value="Recurring" id="tax_recuring">
                            <label for="tax_recuring">
                              Recurring
                            </label>
                          </div>
                    </div>
                    <div class="col-2">
                       <div class="icheck-success d-inline">
                          <input type="radio" name="tax_token"  value="Not Applicable" id="tax_notapplicable">
                          <label for="tax_notapplicable">
                            Not Applicable
                          </label>
                        </div> 
                    </div>
                     <div class="col-3">
                       <label for="days">Validaty</label>                      
                       <select class="form-control form-control-sm" name="tax_token_validity_day">                          
                            <option selected disabled>Days</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>  
                    </div>
                    <div class="col-3">
                       <label for="days">Validaty</label> 
                       <input type="date" class="form-control form-control-sm" name="tax_token_validity_date">    
                    </div>
                  </div>

                   <div class="row mt-4">
                    <div class="col-2">
                      <h5 class="text-center">Route Permit</h5>
                    </div>
                    <div class="col-2">
                       <div class="icheck-success d-inline">
                            <input type="radio" name="route_permite" value="Recurring" id="route_recuring">
                            <label for="route_recuring">
                              Recurring
                            </label>
                          </div>
                    </div>
                    <div class="col-2">
                       <div class="icheck-success d-inline">
                          <input type="radio" name="route_permite" value="Not Applicable" id="route_notapplicable">
                          <label for="route_notapplicable">
                            Not Applicable
                          </label>
                        </div> 
                    </div>
                     <div class="col-3">
                       <label for="days">Validaty</label>                      
                       <select class="form-control form-control-sm" name="route_permite_validity_day">                          
                            <option selected disabled>Days</option>
                            <option>Pending</option>
                            <option>Active</option>
                          </select>  
                    </div>
                    <div class="col-3">
                       <label for="days">Validaty</label> 
                       <input type="date" class="form-control form-control-sm" name="route_permite_validity_date">    
                    </div>
                  </div>

                    <div class="row mt-4">
                    <div class="col-2">
                      <h5 class="text-center">Remark</h5>
                    </div>
                    <div class="col-10">
                     <textarea name="remark" class="form-control" id="" placeholder="Address" cols="30" rows="5"></textarea>
                    </div>
                  </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer d-flex justify-content-center">
                
                <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Save</button>
                <button type="submit" class="btn btn-danger mr-lg-1"> <i class="fas fa-times"></i> Cancel</button>
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
@endsection