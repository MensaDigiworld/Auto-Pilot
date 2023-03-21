@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> List of Letter Head </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of Letter Head </li>
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
                <h3 class="card-title">Letter Head  List</h3>
                <a href="{{ route('latterheads.create')}}" class="card-title float-right btn-success btn"><i class="fas fa-plus"></i> Add Letter Head </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Bussness Name</th>
                      <th>Branch Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>BIN</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($latterhead as $latter)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$latter->business_name}}</td>
                      <td>{{$latter->branch_name}}</td>
                      <td>{{$latter->email}}</td>
                      <td>{{$latter->phone}}</td>
                      <td>{{$latter->bin}}</td>
                      <td class="text-center">
                        <a href="{{ route('latterheads.edit', $latter->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> </a>
                       <form action="{{ route('latterheads.destroy', $latter->id) }}" method="post" style="display: inline-block" onclick="return confirm('Are you sure to delete this?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
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