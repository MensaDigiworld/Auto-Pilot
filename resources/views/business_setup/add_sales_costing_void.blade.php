@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Sales/Invoice Void</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Sales/Invoice Voids</li>
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
          <div class="col-lg-7 col-md-7 col-sm-12">

            <div class="card card-info">
              <div class="card-header bg-dark">
                <h3 class="card-title h3 text-bold pt-2">Vehicle Sales/Invoice Void</h3>
                <a href="{{ route('lc.new-spare-parts-purchase')}}" class="card-title float-right btn-success btn">Add New Purches</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Invoice No</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Invoice No" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Action</label>
                    <div class="col-sm-10">
                      <div class="form-group pt-2">
                          
                        <div class="icheck-success d-inline">
                        <input type="radio" name="r3" checked="" value="Recondition" id="Import">
                        <label for="Import">
                          Edit
                        </label>
                        </div>
                        <div class="icheck-danger d-inline">
                        <input type="radio" name="r3" id="Local" value="BrandNew">
                        <label for="Local">
                          Remove
                        </label>
                        </div>
                                          
                  </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks</label>
                    <div class="col-sm-10">
                      <textarea class="form-control form-control-sm" rows="3" placeholder="" name="Remarks">{{ old('Remarks')}}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">User</label>
                    <div class="col-sm-10">
                      
                      <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter User Id" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Password" value="">                 
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

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection