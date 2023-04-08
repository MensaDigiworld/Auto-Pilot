@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Package/Trim/Variant</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Package/Trim/Variant</li>
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
                <h3 class="card-title">Package/Trim/Variant</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="userFrom" method="POST"
              action="{{ isset($packageTrimVariant) ? route('packageTrimVariants.update',$packageTrimVariant->id) : route('packageTrimVariants.store') }}"
              enctype="multipart/form-data" class="form-horizontal">
              @csrf
              @if (isset($packageTrimVariant))
              @method('PUT')
              @endif
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Package/Trim/Variant Name<span class="text-danger fw-600">*</span></label>
                      <input type="text" class="form-control form-control-sm" id="inputEmail3" value="{{ $packageTrimVariant->name ?? ''}}" name="name" placeholder="Type">
                      </div>
                    </div>

                   
                    
                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Manufacture <span class="text-danger fw-600">*</span></label>
                    
                      <select class="form-control select2" name="manufacture_id">
                        <option >Select vehicle Manufacture</option>
                        @foreach ($manufacturerers as $item)
                        <option value="{{ $item->id }}" @isset($packageTrimVariant) @if ($item->id == $packageTrimVariant->manufacture_id) selected @endif @endisset>{{ $item->name }}</option>
                        @endforeach             
                      </select>
                    </div>
                  </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Model <span class="text-danger fw-600">*</span></label>
                    
                      <select class="form-control select2" name="model_id">
                        <option >Select vehicle Model</option>
                        @foreach ($models as $model)
                        <option value="{{ $model->id }}" @isset($packageTrimVariant) @if ($model->id == $packageTrimVariant->model_id) selected @endif @endisset >{{ $model->name }}</option>
                        @endforeach
                    
                                   
                      </select>
                    </div>
                  </div>
                                    
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">
                    @isset($packageTrimVariant)
                    Update
                      @else
                    Save
                    @endisset
                    </button>
                    <a href="{{ route('packageTrimVariants.index') }}"  class="btn btn-default float-right">Cancel</a> 
         </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->

          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Package/Trim/Variant</h3>
                
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Package/Trim/Variant</th>
                      <th>Manufacture</th>
                      <th>Model</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($packages as $item)
                        
                
                    <tr>
                      <td>{{ $loop->index +1 }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->manufacturerer->name }}</td>
                      <td>{{ $item->model->name }}</td>
    		<td class="text-center"><a href="{{ route('packageTrimVariants.edit',$item->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                        <form action="{{ route('packageTrimVariants.destroy',$item->id) }}"
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
                  {{ $packages->links() }}
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