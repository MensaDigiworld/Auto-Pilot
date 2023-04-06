@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Spare Parts List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Spare Parts List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('inventory.new_spare_parts')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add New</a>
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
              <form action="{{ route('spare.parts.type.search') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header">
            <div class="row">
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group form-group-sm">
                            <form method="post" action="{{route('spare.parts.type.search')}}">
                                @csrf

                          <select class="form-control select2" name="type" onchange="this.form.submit()">

                            <option >Select Type</option>
                            <option value="all">All</option>
                              <option value="product">Product</option>
                              <option value="service">Service</option>
                            </select>
                            </form>
                        </div>
                    </div>


                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group form-group-sm">
                        <form action="{{ route('spare.parts.type.search.word') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="" name="search">
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
                      <th>SL </th>
                      <th>Type </th>
                      <th>Name </th>
                      <th>Part Number </th>
                      <th>Sales Price </th>
                      <th>Vat Amount</th>
                      <th>Discount </th>
                      <th>Status</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($spareParts as $sparePart)


                    <tr>
                      <td>{{ $loop->index++ }}</td>
                      <td>{{ $sparePart->name }}</td>
                      <td>Android DVD Player</td>
                      <td>2159875</td>
                      <td>10000.00</td>
                      <td>100.00</td>
                      <td>0.00 (0.00)</td>
                      <td>Active</td>
                      <td class="text-center">
                        <a href="{{ route('spareparts.edit',$sparePart->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>


                        <form action="{{ route('spareparts.destroy',$sparePart->id) }}"
                        method="POST" style="display: inline;">
                        @csrf()
                        @method('DELETE')


                        <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"> Remove</i>
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
