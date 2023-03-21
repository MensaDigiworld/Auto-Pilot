@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category Chart of Account</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active"><a href="#">Category Chart of Account</a></li>
              
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
              <div class="card-header bg-success">
                <h3 class="card-title text-lg">Category Chart of Account Setup</h3>
              </div>

            <form action="#" class="form-horizontal" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Category Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Category Name" value="" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Type</label>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <div class="icheck-success d-block">
                          <input type="radio" name="r3" checked="" value="Asset" id="Asset">
                          <label for="Asset">Asset</label>
                      </div>
                      <div class="icheck-success d-block">
                          <input type="radio" name="r3" id="Fixed" value="Fixed">
                          <label for="Fixed">Fixed Asset</label>
                      </div>
                      <div class="icheck-success d-block">
                          <input type="radio" name="r3" id="Liability" value="Liability">
                          <label for="Liability">Liability</label>
                      </div>
                      <div class="icheck-success d-block">
                          <input type="radio" name="r3" id="Income" value="Income">
                          <label for="Income">Income</label>
                      </div>
                      <div class="icheck-success d-block">
                          <input type="radio" name="r3" id="Expense" value="Expense">
                          <label for="Expense">Expense</label>
                      </div>
                   
                  </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Status</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="">
                      <option>Select</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
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