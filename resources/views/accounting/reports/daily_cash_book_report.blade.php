@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-md-6 com-sm-12 float-left">
            <div class="card">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Daily Cash Book</h2>
                  </div>                  
                  <div class="card-body">
                    <div class="row">
                     <div class="col-4 text-right">
                        <label for=""><h4>Date</h4></label>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                          <input type="date" class="forn-control">
                        </select>
                      </div>
                     </div>
                    </div>
                     <div class="row mt-2">
                     <div class="col-12">
                        <div class="form-group float-end">
                        <button type="submit" class="btn btn-info float-right"> <i class="fa fa-print "> Print Preview</i> </button>
                      </div>
                     </div>
                    </div>
                  </div>
              
              </div>          

          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection