@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Wharfrent</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wharfrent Charge Set Up</li>
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
          <div class="col-lg-6 col-6">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Wharfrent Charge Set Up</h3>
                <a href="{{ route('list-city')}}" class="card-title float-right btn-success btn">List Of Charge</a>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Code</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" disabled id="inputEmail3" value="000EFR000" name="name" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label  text-right">Select Port</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="country">
                        <option selected>Select Port</option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label  text-right">Slot 1 (Shade)</label>
                    <div class="col-sm-3">
                      <label for="">From (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">To (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">Charge</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label  text-right">Yard</label>
                    <div class="col-sm-3">
                      <label for="">From (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">To (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">Charge</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label  text-right">Slot 2 (Shade)</label>
                    <div class="col-sm-3">
                      <label for="">From (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">To (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">Charge</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label  text-right">Yard</label>
                    <div class="col-sm-3">
                      <label for="">From (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">To (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">Charge</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label  text-right">Slot 3 (Shade)</label>
                    <div class="col-sm-3">
                      <label for="">From (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">To (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">Charge</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label  text-right">Yard</label>
                    <div class="col-sm-3">
                      <label for="">From (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">To (Day)</label>
                      <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> 
                    </div>
                    <div class="col-sm-3">
                      <label for="">Charge</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="row d-flex justify-content-end">
                    <button type="submit" class="btn btn-success btn-lg ">Add</button>
                  </div>

                  <div class="row mt-2">
                    <div class="col-sm-3 text-right"><b>Vat</b></div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-sm-2 text-right"><b>Curancy</b></div>
                    <div class="col-sm-3"> <select class="form-control" name="country">
                        <option selected></option>
                        <option value="88">Bangladesh</option>
                        <option value="91">India</option>                        
                      </select> </div>
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

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection