@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Fixed Asset Setup Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active"><a href="#">Fixed Asset Setup Information</a></li>
              
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
            <form action="#" class="form-horizontal" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Ledger</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="">
                      <option>Select</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                  </div>
                </div>                
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Type</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="">
                      <option>Select</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Margin</label>
                  <div class="col-sm-8">
                    <div class="row">
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Charge" value="Expense" name="name">
                      </div>
                      <div class="col-sm-6">
                        <select class="form-control select2" name="">
                          <option>Percent</option>
                          <option>Amount</option>
                        </select>
                      </div>
                    </div>
                    
                  </div>
                </div>
                
             
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-success"> Save</button>               
                <a href="" class="btn btn-primary"> List</a>               
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