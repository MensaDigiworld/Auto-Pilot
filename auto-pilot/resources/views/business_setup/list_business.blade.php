@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> List of Company Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of  Business</li>
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
                <h3 class="card-title">Business Details List</h3>
                <a href="{{ route('business.create')}}" class="card-title float-right btn-success btn"><i class="fas fa-plus"></i> Add New Business</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Code</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Contact No</th>
                      <th>Email</th>
                      <th>Url</th>
                      <th>status</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($add_business as $business)
                         <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$business->code}}</td>
                      <td>{{$business->business_name}}</td>
                      <td>{{$business->address}}</td>
                      <td>{{$business->contact_no}}</td>
                      <td>{{$business->email}}</td>
                      <td>{{$business->web_address}}</td>
                      <td>{{$business->status}}</td>
                      <td><a href="{{ route('business.edit', $business->id)}}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> </a>
                     <form action="{{ route('business.destroy', ['business' => $business->id]) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </button>
                              </form>                      
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