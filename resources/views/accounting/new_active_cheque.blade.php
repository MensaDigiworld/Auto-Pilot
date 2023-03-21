@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cheque Register</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active"><a href="#">Cheque Register</a></li>
              
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
            <div class="card">
              {{-- <div class="card-header bg-success">
                <h3 class="card-title text-lg">Cheque Register</h3>
              </div> --}}

            <form action="#" class="form-horizontal" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <div class="col-sm-6">
                  <label for="inputEmail3" class="col-form-label">Entry Date <span class="text-danger text-md">*</span></label>
                  <input type="date" class="form-control form-control-sm" id="inputEmail3" value="{{ date('Y-m-d') }}" name="name">
                  </div>
                  <div class="col-sm-6">
                  <label for="inputEmail3" class="col-form-label">Cheque Issuing Bank <span class="text-danger text-md">*</span></label>
                  <select class="form-control select2" name="">
                    <option>Select</option>
                    <option>2000</option>
                    <option>2022</option>
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="inputEmail3" class="col-form-label">Receive or Issue <span class="text-danger text-md">*</span></label>
                  
                    <div class="form-group">
                      <div class="icheck-success d-inline">
                          <input type="radio" name="r3" checked="" value="Receive" id="Receive">
                          <label for="Receive">Receive</label>
                      </div>
                      <div class="icheck-success d-inline">
                          <input type="radio" name="r3" value="Issue" id="Issue">
                          <label for="Issue">Issue</label>
                      </div>
                                        
                    </div>
                  </div>
                  <div class="col-sm-6">
                  <label for="inputEmail3" class="col-form-label">Cheque Date <span class="text-danger text-md">*</span></label>
                  <input type="date" class="form-control form-control-sm" id="inputEmail3" value="{{ date('Y-m-d') }}" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="inputEmail3" class="col-form-label">Received From <span class="text-danger text-md">*</span></label>
                    <select class="form-control select2" name="">
                      <option>Select Received From Account</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                    </div>
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Cheque Number <span class="text-danger text-md">*</span></label>
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="name">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Cheque Amount <span class="text-danger text-md">*</span></label>
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="name">
                      </div>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="inputEmail3" class="col-form-label">Vin/Chassis No</label>
                    <select class="form-control select2" name="">
                      <option>Select Received From Account</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                    </div>
                  <div class="col-sm-6">
                    <label for="inputEmail3" class="col-form-label">Deposited Account <span class="text-danger text-md">*</span></label>
                    <select class="form-control select2" name="">
                      <option>Select Deposited Account</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                  <label for="inputEmail3" class="col-form-label">Deposit Date <span class="text-danger text-md">*</span></label>
                  <input type="date" class="form-control form-control-sm" id="inputEmail3" value="{{ date('Y-m-d') }}" name="name">
                  </div>
                </div>
                               
             
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-success"> Save</button>               
                <button type="submit" class="btn btn-primary"> List</button>               
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