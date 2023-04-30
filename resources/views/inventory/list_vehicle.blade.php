@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle(s) List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle(s) List</li>
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

              <div class="card-header">
            <div class="row">
                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">



                              <form method="post" action="{{route('product.vehicle.type.search')}}">
                                @csrf
                            <select class="form-control select2" name="type" onchange="this.form.submit()">
                              <option selected>Select Vehicle type</option>
                              @foreach ($categories as $category)


                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>
                        </form>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">


                            <form method="post" action="{{route('product.manall.select.search')}}">
                                @csrf
                            <select class="form-control select2" name="manufacture" onchange="this.form.submit()">
                              <option selected>Select vehicle Manufacture</option>
                              @foreach ($manufacturers as $manufacture)


                              <option value="{{ $manufacture->id }}">{{ $manufacture->name }}</option>
                              @endforeach
                            </select>
                        </form>
                        </div>
                    </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">


                            <form method="post" action="{{route('product.model.search')}}">
                                @csrf
                            <select class="form-control select2" name="model" onchange="this.form.submit()">
                              <option selected>Select vehicle Model</option>
                              @foreach ($models as $model)
                          <option value="{{ $model->id }}" >{{ $model->name }}</option>
                          @endforeach
                            </select>
                            </form>
                        </div>
                    </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">


                            <select class="form-control select2" name="month">
                              <option selected>Axio</option>
                              <option>Premio</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <form action="{{ route('product.all.search') }}" method="POST">
                            @csrf
                        <div class="input-group input-group-sm">
                          <input type="search" name="word" class="form-control form-control-sm" placeholder="eg: Vehicle/Transmission/Category/VehicleType/Country of Origin">
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

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL </th>
                      <th>Name </th>
                      <th>Vehicle Type </th>
                      <th>Body Type</th>
                      <th>Fuel Type</th>
                      {{-- <th>Country of Origin</th> --}}
                      <th>Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)


                    <tr>
                      <td>{{ $loop->index +1 }}</td>

                      <td>{{ $product->name }}</td>
                      <td>{{ $product->category_id }}</td>
                      <td>{{ $product->body_type_id }}</td>
                      <td>{{ $product->fuel_type_id }}</td>
                      {{-- <td>Japan</td> --}}
                      <td>{{ $product->status == 1 ? 'Active':'Deactive' }}</td>
                      <td class="text-center">
                        @if($product->category_id == 8)
                        <a href="{{ route('product.edit.bike',$product->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                        @else
                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                        @endif
                        <form action="{{ route('products.destroy',$product->id) }}"
                            method="POST" style="display: inline;">
                            @csrf()
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>

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
                  {{ $products->links() }}
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
