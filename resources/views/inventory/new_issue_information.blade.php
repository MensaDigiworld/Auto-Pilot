@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Issue Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Issue Information</li>
              <li class="breadcrumb-item active"></li>
            
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
          <div class="col-lg-12 col-12">

            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header">
            <div class="row">
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Code</label>
                        
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" readonly  value="CRDISU000000000003" name="nid">
                        </div>
                      </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Remarks</label>
                        
                            <textarea class="form-control" rows="2" name="pe_address" spellcheck="false" placeholder="Write aditional information if required"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Date</label>
                      
                          <input type="date" class="form-control form-control-sm" id="inputEmail3"  name="nid">
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Destination</label>
                      
                          <select class="form-control select2 w100" name="">
                            <option>Select Optional Product</option>
                            <option selected>MD. Harun</option>
                          </select> 
                      </div>
                    </div>
                             
              </div>
              </div>
              </form>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Vin/Chassis No </th>
                      <th>Sales Price</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater)</td>
                      <td>CR267</td>
                      <td>ES2532122</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-check"></i> Select</a></td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-md m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
                <a href="{{ route('inventory.list_issue_information')}}" class="btn btn-success float-left"><i class="fas fa-list"></i> List</a>
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