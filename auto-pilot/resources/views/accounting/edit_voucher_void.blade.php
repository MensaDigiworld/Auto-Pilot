@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Voucher Edit/Void</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active"><a href="#">Voucher Edit/Void</a></li>
              
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
                <h3 class="card-title text-lg">Voucher Edit/Void</h3>
              </div> --}}

            <form action="#" class="form-horizontal" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Voucher</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Voucher Code" value="" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Action</label>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <div class="icheck-success d-inline">
                          <input type="radio" name="r3" checked="" value="Edit" id="Edit">
                          <label for="Edit">Edit</label>
                      </div>
                      <div class="icheck-success d-inline">
                          <input type="radio" name="r3" id="Remove" value="Remove">
                          <label for="Remove">Remove</label>
                      </div>
                   
                  </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Remarks </label>
                  <div class="col-sm-8">
                    <textarea class="form-control form-control-sm" rows="2" placeholder="Remarks" name=""></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">User Id</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter User Id" value="" name="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Enter Password" value="" name="">
                  </div>
                </div>
                
             
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-success col-sm-12 col-lg-3 col-md-3"> Save</button>               
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