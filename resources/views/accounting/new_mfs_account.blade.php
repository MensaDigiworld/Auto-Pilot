@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New MFS/Online Payment Provider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active"><a href="#">MFS/Online Payment Provider</a></li>
              
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
                  <label for="inputEmail3" class="col-sm-4 col-form-label">MFS/Online Payment Provider</label>
                  <div class="input-group input-group-sm col-sm-8">
                    <select class="form-control  select2" name="">
                      <option>Select</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                    <div class="input-group-append">
                    <a href="" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Title/Phone/Number/Email</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Title/Phone/Number/Email" value="" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Account Type</label>
                  <div class="input-group col-sm-8">
                    <select class="form-control select2" name="">
                      <option>Select Account Type</option>
                      <option>2000</option>
                      <option>2022</option>
                    </select>
                    <div class="input-group-append">
                      <a href="" class="btn btn-success"><i class="fas fa-plus"></i></a>
                      </div>
                  </div>
                </div>                
              <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Account Holder Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Account Holder Name" value="" name="name">
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Ledger Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Ledger Name" value="" name="name">
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Opening Date</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="name">
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Overdraft</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="name">
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
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-success"> Save</button>               
                <a href="{{ route('accounting.list_fixed_asset') }}" class="btn btn-primary"> List</a>               
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