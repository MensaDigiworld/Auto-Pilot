@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Supplier List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Supplier List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('suppliers.create')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add New</a>
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
            <div class="row">
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <form action="{{ route('supllier.status') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                        <div class="form-group form-group-sm">


                            <select class="form-control select2" name="status" onchange="this.form.submit()">
                              <option>Select Status Type</option>
                              <option value="all">All</option>
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                            </select>
                        </div>
                        </form>
                    </div>


                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group form-group-sm">
<form action="{{ route('supllier.search') }}" method="POST">
    @csrf
                        <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-control-sm" placeholder="" name="search">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-info">
                        <i class="fa fa-search"></i> Search
                        </button>
                        </div>
                        </div>
                    </form>
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
                      <th>Name </th>
                      <th>Country </th>
                      <th>Contact No </th>
                      <th>Status</th>
                      {{-- <th>User</th> --}}
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($suppliers as $supplier)


                    <tr>
                      <td>{{ $supplier->name }}</td>
                      <td>{{ $supplier->country_code }}</td>
                      <td>{{ $supplier->contact }}</td>
                      <td>{{ $supplier->status == 1 ? 'Active':'Deactive' }}</td>
                      {{-- <td></td> --}}
                      <td class="text-center"><a href="{{ route('suppliers.edit',$supplier->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('suppliers.destroy',$supplier->id) }}"
                            method="POST" style="display: inline;">
                            @csrf()
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                                <span>Remove</span>
                            </button>
                        </form>

                        {{-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td> --}}

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-md m-0 float-right">
                  {{-- <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li> --}}
                  {{ $suppliers->links() }}
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
