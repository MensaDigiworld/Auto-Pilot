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
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-md-4 com-sm-12 ">
            <div class="card">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Pending BL Release</h2>
                  </div>                  
                  <div class="card-body">
                      <form action="" method="post">
                     <div class="row mt-5">
                     <div class="col-12">
                        <div class="form-group text-center">                          
                        <button type="submit" class="btn btn-info  "> <i class="fa fa-print "> Print Preview</i> </button>
                      </div>
                     </div>
                    </div>
                      </form>

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