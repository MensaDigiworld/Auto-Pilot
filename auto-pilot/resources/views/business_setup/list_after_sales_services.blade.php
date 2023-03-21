@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> List of After Sales & Service </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of After Sales & Service</li>
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
              <div class="card-header">
                <h3 class="card-title">After Sales & Service List</h3>
                <a href="{{ route('after-sales')}}" class="card-title float-right btn-success btn"><i class="fas fa-plus"></i> Add After Sales & Service</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Details</th>
                      <th>Validity</th>
                      <th>Price</th>
                      <th>Number of Service</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($salesandservice as $service)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$service->title}}</td>
                      <td>{{$service->services_details}}</td>
                      <td>{{$service->validity_month}}</td>
                      <td>{{$service->price}}</td>
                      <td>{{$service->service}}</td>
                      <td class="text-center">
                          <a href="{{ route('edit_after_sales_service.edit',$service->id)}}" class="btn btn-info btn-sm"><span class="fas fa-edit"> </span></a>
                          <a href="{{ route('salse-after-service-delete', $service->id) }}" onclick="return confirm('Are You sure ?')" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>

                      </td>
                      
                    </tr>
                    @endforeach
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