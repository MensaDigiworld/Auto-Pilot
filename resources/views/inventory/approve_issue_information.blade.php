@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Issue Information Approve</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Issue Information List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('inventory.new_issue_information')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add Issue Information</a>
            
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
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Date</th>
                      <th>Destination</th>
                      <th>Total Quantity</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>CRDISU000000000001</td>
                      <td>15/Sep/2022</td>
                      <td>Mensa</td>
                      <td>1</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-check"></i> approve</a>
                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> view</a>
                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> cancel</a>
                      </td>
                      
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