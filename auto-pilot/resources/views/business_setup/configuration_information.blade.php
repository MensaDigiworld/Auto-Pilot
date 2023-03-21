@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Configuration Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Configuration Information</li>
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

            <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" action="" method="post">
                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Capital Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Capital Account"  name="code">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Cash Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Cash Account"  name="code">
                    </div>
                  </div>

                   <div class="form-group row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Purchase Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Purchase Account" placeholder=""  name="code">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Sales Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Sales Account"  name="code">
                    </div>
                  </div>

                  <div class="form-group row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">VAT Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="VAT Account" placeholder=""  name="code">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Opening Stock Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Opening Stock Account"  name="code">
                    </div>
                  </div>

                  <div class="form-group row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Profit & Loss Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Profit & Loss Account" placeholder=""  name="code">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Capital Withdrawal Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Capital Withdrawal Account"  name="code">
                    </div>
                  </div>

                   <div class="form-group row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Doc/BL Release Account Name</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Doc/BL Release Account Name" placeholder=""  name="code">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">LC Charges Account Name</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="LC Charges Account Name"  name="code">
                    </div>
                  </div>

                   <div class="form-group row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Insurance Account Name</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Insurance Account Name" placeholder=""  name="code">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Discount & Commission Income Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Discount & Commission Income Account"  name="code">
                    </div>
                  </div>

                   <div class="form-group row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Payment Charge Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Payment Charge Income Account" placeholder=""  name="code">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Insurance Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Sales Insurance Account"  name="code">
                    </div>
                  </div>

                   <div class="form-group row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Registration Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Sales Registration Account" placeholder=""  name="code">
                    </div>
                    <div class="col-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Processing Fee Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Loan Processing Fee Account"  name="code">
                    </div>
                  </div>

                   <div class="form-group row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="inputEmail3">Petty Cash Account</label>                    
                      <input type="text" class="form-control" id="inputEmail3" value="Petty Cash Account" placeholder=""  name="code">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    </div>
                  </div>

                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right"><i class="fas fa-save">  Submit</i></button>
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