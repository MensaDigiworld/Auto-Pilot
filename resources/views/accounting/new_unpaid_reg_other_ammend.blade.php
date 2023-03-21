@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Additional Payment Adjustment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active"><a href="#">Additional Payment Adjustment</a></li>
              
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
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    
                      <label for="inputEmail3" class=" col-form-label">Additional Payment Adjustment</label>
                      <div class="form-group">
                        <div class="icheck-success d-inline">
                                <input type="radio" name="r3" checked="" value="Bill" id="Bill">
                                <label for="Bill">
                                  Bill to Customer <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="The invoice value will be charged to customer"></i>                          </label>
                        </div>
                        <div class="icheck-success d-inline">
                                <input type="radio" name="r3" id="Costing" value="Costing">
                                <label for="Costing">
                                  Add to Costing <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="The invoice value will be added to vehicle costing"></i>
                                </label>
                              </div>
                     
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Orginal Value</label>
                      <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="" readonly>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Additional Value</label>
                      <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Final Value</label>
                      <div class="input-group input-group-sm">
                        <input type="number" class="form-control form-control-sm" placeholder="Remarks" value="">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-sm btn-success">
                            <i class="fa fa-plus"></i> Add
                          </button>
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fa fa-check"></i> Confirm
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          
                    
                </div>
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