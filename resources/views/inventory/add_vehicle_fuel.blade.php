@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Fuel Type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Fuel Type</li>
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
                <h3 class="card-title">Vehicle Fuel Type</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="userFrom" method="POST"
              action="{{ isset($fuelType) ? route('fuelTypes.update',$fuelType->id) : route('fuelTypes.store') }}"
              enctype="multipart/form-data" class="form-horizontal">
              @csrf
              @if (isset($fuelType))
              @method('PUT')
              @endif

                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Fuel Type <span class="text-danger fw-600">*</span></label>
                      <input type="text" class="form-control form-control-sm" id="inputEmail3" value="{{$fuelType->fuel_type ?? ''}}" name="fuel_type" placeholder="e.g Octane,Petrol,Diesel,Hybrid,Plug in Hybrid
                      Electric, Fuel Cell">
                      </div>
                    </div>

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">
                    @isset($fuelType)
                    Update
                      @else
                    Save
                    @endisset
                    </button>
                    <a href="{{ route('fuelTypes.index') }}"  class="btn btn-default float-right">Cancel</a> 
         </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->

          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Vehicle Fuel Type</h3>
                
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Vehicle Fuel Type</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($fuels as $item)
                        
                
                    <tr>
                      <td>{{ $loop->index +1 }}</td>
                      <td>{{ $item->fuel_type }}</td>
    		<td class="text-center"><a href="{{ route('fuelTypes.edit',$item->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                        <form action="{{ route('fuelTypes.destroy',$item->id) }}"
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
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
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