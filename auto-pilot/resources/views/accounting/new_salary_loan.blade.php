@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Advanced Salary/ Loan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active"><a href="#">Advanced Salary/ Loan</a></li>
              
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

          
          <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title text-lg">Advanced Salary/ Loan</h3>
              </div>

            <form action="#" class="form-horizontal" method="POST">
              @csrf
              <div class="card-body">
                              
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Employee<span class="text-danger text-bold">*</span> </label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-sm">
                      <select class="form-control select2" name="" required>
                        <option>Select Employee</option>
                        <option>2000</option>
                        <option>2022</option>
                      </select>
                      <div class="input-group-append">
                      <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#employee"><i class="fas fa-plus"></i></a>
                      </div>
                      </div>
                  </div>
                </div>
                
                
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Month<span class="text-danger text-bold">*</span> </label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="" required>
                      <option>Type Month</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Year<span class="text-danger text-bold">*</span></label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="" required>
                      <option>Type Year</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label"> Advanced Salary/Loan Amount<span class="text-danger text-bold">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Advanced Salary/Loan Amount" value="" name="" required>
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