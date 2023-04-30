@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Door</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Door</li>
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
                <h3 class="card-title">Vehicle Door</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="userFrom" method="POST"
              action="{{ isset($vehicleDoor) ? route('vehicleDoors.update',$vehicleDoor->id) : route('vehicleDoors.store') }}"
              enctype="multipart/form-data" class="form-horizontal">
              @csrf
              @if (isset($vehicleDoor))
              @method('PUT')
              @endif
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label"> Number of Vehicle Door <span class="text-danger fw-600">*</span></label>
                      <input type="number" maxlength="2" class="form-control  form-control-sm" id="inputEmail3" value="{{ $vehicleDoor->vehicle_door_no ?? ''}}" name="vehicle_door_no" placeholder="Enter Number of Vehicle Door">
                      </div>
                    </div>

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">
                    @isset($vehicleDoor)
                    Update
                      @else
                    Save
                    @endisset
                    </button>
                    <a href="{{ route('vehicleDoors.index') }}"  class="btn btn-default float-right">Cancel</a>

                </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->

          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Vehicle Door</h3>

              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Vehicle Door</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($vehicledoors as $item)


                    <tr>
                      <td>{{ $loop->index +1 }}</td>
                      <td>{{ $item->vehicle_door_no }}</td>
                      <td class="text-center"><a href="{{ route('vehicleDoors.edit',$item->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                        <form action="{{ route('vehicleDoors.destroy',$item->id) }}"
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
           {{ $vehicledoors->links() }}
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
