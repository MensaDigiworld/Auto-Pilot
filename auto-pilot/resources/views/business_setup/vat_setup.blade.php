@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">VAT Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Vat</li>
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
          <div class="col-lg-8 col-8">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add VAT Information</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('vat-setup.store')}}">
                @csrf
                <div class="card-body">
                  <label for="taxation">Chose Taxation</label>
                  <div class="form-group row">
                   <div class="col-sm-12 col-lg-12 col-md-12">
                      <div class="icheck-success d-inline">
                          <input type="radio" name="taxation"  value="NONE" id="none">
                          <label for="none">NONE</label>
                      </div>&nbsp;&nbsp;&nbsp;&nbsp;
                     <div class="icheck-success d-inline">
                          <input type="radio" name="taxation" checked id="vat" value="VAT">
                          <label for="vat">VAT</label>
                      </div> &nbsp;&nbsp;&nbsp;&nbsp;
                       <div class="icheck-success d-inline">
                          <input type="radio" name="taxation" id="sst" value="SST">
                          <label for="sst">SST</label>
                      </div> &nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="icheck-success d-inline">
                          <input type="radio" name="taxation" id="tax" value="TAX">
                          <label for="tax">TAX</label>
                      </div> &nbsp;&nbsp;&nbsp;&nbsp;
                       <div class="icheck-success d-inline">
                          <input type="radio" name="taxation"  value="GST" id="gst">
                          <label for="gst">GST(india)</label>
                      </div>&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="icheck-success d-inline">
                          <input type="radio" name="taxation" id="ppn" value="PPN">
                          <label for="ppn">PPN</label>
                      </div> &nbsp;&nbsp;&nbsp;&nbsp;
                       <div class="icheck-success d-inline">
                          <input type="radio" name="taxation" value="HST" id="hst">
                          <label for="hst">HST</label>
                      </div>&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="icheck-success d-inline">
                          <a href="" class="btn btn-xs btn-outline-info text-sm text-left"  data-toggle="modal" data-target="#add_vat_info_custom_text"> <i class="fas fa-plus text-sm"></i> </a> &nbsp;Add Custom Text
                          
                      </div>                   
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">VAT (%)</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" min="0.001" step="0.001" placeholder="0.00" value="" name="vat">
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