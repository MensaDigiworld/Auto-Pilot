@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Model</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Model</li>
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
          <div class="col-lg-5 col-md-5 col-sm-12">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Vehicle Model</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('inventory.model_update') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
               <input type="hidden" name="id" value="{{ $catid->id }}">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Model Name <span class="text-danger fw-600">*</span></label>
                      <input type="text" class="form-control form-control-sm" id="inputEmail3" value="{{$catid->name}}" name="name" placeholder="Type">
                      <span class="text-danger text-sm text-bold">@error('name') {{ $message }} @enderror</span>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Manufacturer <span class="text-danger fw-600">*</span></label>
                      <select class="form-control select2" name="manufacture_id">
                        <option selected disabled>Select vehicle Manufacturer</option>
                         @foreach ($mnaufactures as $mnaufacture)
                          <option value="{{ $mnaufacture->id }}" @if ($catid->manufacture_id == $mnaufacture->id) selected @endif>{{ $mnaufacture->name }}</option>
                        @endforeach
                      </select>
                       <span class="text-danger text-sm text-bold">@error('manufacture_id') {{ $message }} @enderror</span>
                    </div>
                  </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Category <span class="text-danger fw-600">*</span></label>
                      <select class="form-control select2" name="category_id">
                        <option selected disabled>Select vehicle Category</option>
                        @foreach ($vehicle_categories as $category)
                          <option value="{{ $category->id }}" @if ($catid->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                      </select>
                       <span class="text-danger text-sm text-bold">@error('category_id') {{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Country of Origin</label>
                      <select class="form-control select2" name="country_id">
                        <option  selected disabled>Select Country</option>
                         {{-- @foreach ($country as $countrys)
                        <option value="{{ $countrys->id }}" @if ($catid->country_id == $countrys->id) selected @endif>{{ $countrys->name }}</option>
                      @endforeach           --}}

                      <option value="1" @if ($catid->country_id == 1) selected @endif>Bangladesh</option>
                            <option value="2" @if ($catid->country_id == 2) selected @endif>India</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                        </div>
                        </div>
                        <img src="{{ asset('public/cover_image') }}/{{ $catid->image}}" alt="" height="100" width="100">
                  </div>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                  <a href="{{ route('inventory.add_vehicle_model') }}" class="btn btn-default float-right">Cancel</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->

          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Vehicle Model</h3>

              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Model Name</th>
                      <th>Vehicle Manufacturer</th>
                      <th>Vehicle Category</th>
                      <th>Country </th>
                      <th>Image </th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($models as $model)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $model->name }}</td>
                    <td>{{ $model->manufacture->name }}</td>
                    <td>{{ $model->category->name }}</td>
                    <td>{{ $model->country_id }}</td>

                    <td>
                      <div class="widget-user-image">
                        <img src="{{ asset('public/cover_image') }}/{{ $model->image}}" class="img-circle img-thumbnail" style="height:60px; width:60px;" />
                      </div>
                    </td>
                    <td class="text-center">
                      <a href="{{ route('inventory.model_edit',['id' => $model->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                        <a href="{{ route('inventory.model_delete',['id' => $model->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash-alt"></i></a>
                    </td>

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
                  {{ $models->links() }}
                </ul>
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
