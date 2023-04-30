@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Body Type/ Vehicle Type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Body Type/ Vehicle Type</li>
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
                <h3 class="card-title">Body Type/ Vehicle Type</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="userFrom" method="POST"
              action="{{ isset($bodyType) ? route('bodyTypes.update',$bodyType->id) : route('bodyTypes.store') }}"
              enctype="multipart/form-data" class="form-horizontal">
              @csrf
              @if (isset($bodyType))
              @method('PUT')
              @endif
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Body Type/Vehicle Type Name<span class="text-danger fw-600">*</span></label>
                      <input type="text" class="form-control  form-control-sm" id="inputEmail3" value="{{ $bodyType->type_name ?? ''}}" name="type_name" placeholder="Type">
                      </div>
                    </div>


                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Category <span class="text-danger fw-600">*</span></label>

                      <select class="form-control select2" name="category_id">
                        <option >Select vehicle Category</option>
                        @foreach ($categories as $item)


                        <option value="{{ $item->id }}" @isset($bodyType) @if($item->id == $bodyType->category_id ) selected @endif @endisset  >{{ $item->name }}</option>
                        @endforeach
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
                        <img src="{{ asset('public/cover_image') }}/{{ $item->image }}" class="img-circle img-thumbnail" height="100" width="100" alt="">
                  </div>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">
                    @isset($bodyType)
                    Update
                      @else
                    Save
                    @endisset
                    </button>
                    <a href="{{ route('bodyTypes.index') }}"  class="btn btn-default float-right">Cancel</a>
         </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->

          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="card">

              <div class="card-header">
                <h3 class="card-title">List of Body Type/ Vehicle Type</h3>

              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Body Type/Type</th>
                      <th>Vehicle Category</th>
                      <th>Image </th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($bodytypes as $item)


                    <tr>
                      <td>{{ $loop->index +1 }}</td>
                      <td>{{ $item->type_name }}</td>
                      <td>{{ $item->category->name }}</td>
                      <td><div class="widget-user-image">
                        <img src="{{ asset('public/cover_image') }}/{{ $item->image }}" class="img-circle img-thumbnail"  style="height:60px; width:60px;"/>
                      </div></td>
    		<td class="text-center"><a href="{{ route('bodyTypes.edit',$item->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                        <form action="{{ route('bodyTypes.destroy',$item->id) }}"
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
                  {{-- <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li> --}}
                    {{ $bodytypes->links() }}
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
