@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Commercial Vehicle</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Commercial Vehicle</li>
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
          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Commercial Vehicle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label text-lg">
                      <span><p id="mannamep"></p></span> - <span><p id="modelnamep"></p>- <p id="chassiscodep"></p> <p id="engineccp"></p>
                    <p id="seatp"></p> <p id="transp"></p>
                    <p id="drivep"></p>
                    </span>

                        </label>
                        <input type="hidden" id="manname" name="manname">
                        <input type="hidden" id="modelname" name="modelname">
                        <input type="hidden" id="chassiscode" name="chassiscode">
                        <input type="hidden" id="enginecc" name="enginecc">
                        <input type="hidden" id="seat" name="seat">
                        <input type="hidden" id="trans" name="trans">
                        <input type="hidden" id="category_id" name="category_id">
                      </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Manufacturer <span class="text-danger fw-600">*</span></label>

                      <select class="form-control select2" name="manufacture_id" onchange="getDataMan(this.value)">
                        <option >Select vehicle Manufacturer</option>
                        @foreach ($manufacturers as $manufacture)


                        <option value="{{ $manufacture->id }}">{{ $manufacture->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Body Type/Type <span class="text-danger fw-600">*</span></label>

                      <select class="form-control select2" name="body_type_id" onchange="getDataBType(this.value)">
                        <option >Select Body Type/Type</option>
                        @foreach ($bodytypes as $body)


                        <option value="{{ $body->id }}">{{ $body->type_name }}</option>

                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Transmission <span class="text-danger fw-600">*</span></label>

                      <select class="form-control select2" name="transmission_id" onchange="getDataTrans(this.value)">
                        <option >Select Transmission </option>
                        @foreach ($transmissions as $tran)
                        <option value="{{ $tran->id }}" >{{ $tran->transmission }}</option>
                        @endforeach


                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Model <span class="text-danger fw-600">*</span></label>

                    <select class="form-control select2" name="model_id" id="model_id" onchange="getDataModel(this.value)">
                      {{-- <option >Select vehicle Model</option>
                      @foreach ($models as $model)
                      <option value="{{ $model->id }}" >{{ $model->name }}</option>
                      @endforeach --}}
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Fuel Type <span class="text-danger fw-600">*</span></label>

                    <select class="form-control select2" name="fuel_type_id" >
                      <option >Select Fuel Type</option>
                      @foreach ($fueltypes as $ftype)
                      <option value="{{ $ftype->id }}" >{{ $ftype->fuel_type }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Drive system/Drive Train <span class="text-danger fw-600">*</span></label>

                    <select class="form-control select2" name="drive_system_id" onchange="getDataDrivesystem(this.value)">
                      <option >Select Drive system/Drive Train</option>
                      @foreach ($drivesystems as $drive)
                      <option value="{{ $drive->id }}" >{{ $drive->drive_system }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Chassis Code </label>

                    <select class="form-control select2" name="chassis_id" onchange="getDataChasis(this.value)">
                      <option >Select Chassis Code</option>
                      @foreach ($chassises as $chasis)
                      <option value="{{ $chasis->id }}" >{{ $chasis->chassis_code }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Engine CC <span class="text-danger fw-600">*</span></label>

                      <select class="form-control select2" name="enginecc_id" onchange="getDataEngineCC(this.value)">
                        <option >Select Engine CC</option>
                        @foreach ($enginecc as $engine)
                        <option value="{{ $engine->id }}" >{{ $engine->enginecc }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Number of doors</label>

                      <select class="form-control select2" name="door_id">
                        <option >Select Number of doors </option>
                        @foreach ($doors as $door)
                        <option value="{{ $door->id }}" >{{ $door->vehicle_door_no }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Seating Capacity </label>

                      <select class="form-control select2" name="seating_capacity_id" onchange="getDataSeat(this.value)">
                        <option >Select Seating Capacity</option>
                        @foreach ($seaters as $seat)
                        <option value="{{ $seat->id }}" >{{ $seat->seating_capacity }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->

          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

              <div class="card-header">
                <h3 class="card-title col-12 py-3">List of Passenger Vehicle</h3>
                <div class="row">

                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group ">

                        <form method="post" action="{{route('product.man.select.csearch')}}">
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

                        <form method="post" action="{{route('product.model.select.csearch')}}">
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

                        <form method="post" action="{{route('product.chasis.select.csearch')}}">
                            @csrf
                        <select class="form-control select2" name="chasis" onchange="this.form.submit()">

                          <option selected>Select Chassis code</option>
                          @foreach ($chassises as $chasis)
                          <option value="{{ $chasis->id }}" >{{ $chasis->chassis_code }}</option>
                          @endforeach

                        </select>
                        </form>
                    </div>
                  </div>


                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <form action="{{ route('product.search.cword') }}" method="POST">
                            @csrf
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="" name="word">
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

              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Vehicle</th>
                      <th>Fuel Type</th>
                      <th>Body Type</th>
                      <th>Orgin </th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)


                    <tr>
                      <td>{{ $loop->index +1 }}</td>
                      {{-- <td>Toyota-Aqua (NHP10, 1500cc, Auto, 2WD, 5 seater) Manufacture-Model (Chassis Code, CC, Auto,
                        2WD, 5 Seater,Hybrid)</td> --}}
                        <td>{{ $product->name }}</td>
                      <td>{{ $product->fueltype->fuel_type }}</td>
                      <td>{{ $product->bodytype->type_name }}</td>
                      <td>{{ $product->drivesystem->drive_system }}</td>
                      <td class="text-center"><a href="{{ route('product.edit.commercial',$product->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>

                        {{-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td> --}}
                        <form action="{{ route('products.destroy',$product->id) }}"
                            method="POST" style="display: inline;">
                            @csrf()
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>

                            </button>
                        </form>
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
                  {{$products->links()}}
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


@push('js')
<script>
function getDataMan(id) {
  if (id !== '') {
    $.ajax({
      url: '{{ route("get.data.man", ":id") }}'.replace(':id', id),
      type: 'GET',
      success: function(data) {
        // update the page with the retrieved data
        console.log(data.data.name);
        $('#manname').val(data.data.name);
        $('#category_id').val(data.data.category_id);
        $('#mannamep').text(data.data.name);
        $('#model_id').html(data.html);

      }
    });
  }
}
function getDataModel(id) {
  if (id !== '') {
    $.ajax({
      url: '{{ route("get.data.model", ":id") }}'.replace(':id', id),
      type: 'GET',
      success: function(data) {
        // update the page with the retrieved data
        console.log(data.name);
        $('#modelname').val(data.name);
        $('#modelnamep').text(data.name);
      }
    });
  }
}
function getDataChasis(id) {
  if (id !== '') {
    $.ajax({
      url: '{{ route("get.data.chasis", ":id") }}'.replace(':id', id),
      type: 'GET',
      success: function(data) {
        // update the page with the retrieved data
        console.log(data.name);
        $('#chassiscode').val(data.chassis_code);
        $('#chassiscodep').text(data.chassis_code);
      }
    });
  }
}
function getDataEngineCC(id) {

  if (id !== '') {
    $.ajax({
      url: '{{ route("get.data.engine", ":id") }}'.replace(':id', id),
      type: 'GET',
      success: function(data) {
        // update the page with the retrieved data
        console.log(data.name);
        $('#enginecc').val(data.enginecc);
        $('#engineccp').text(data.enginecc);
      }
    });
  }
}

function getDataSeat(id) {

  if (id !== '') {
    $.ajax({
      url: '{{ route("get.data.seat", ":id") }}'.replace(':id', id),
      type: 'GET',
      success: function(data) {
        // update the page with the retrieved data
        console.log(data.name);
        $('#seat').val(data.seating_capacity);
        $('#seatp').text(data.seating_capacity);
      }
    });
  }
}
function getDataTrans(id) {

  if (id !== '') {
    $.ajax({
      url: '{{ route("get.data.trans", ":id") }}'.replace(':id', id),
      type: 'GET',
      success: function(data) {
        // update the page with the retrieved data
        console.log(data.name);
        $('#trans').val(data.transmission);
        $('#transp').text(data.transmission);
      }
    });
  }
}
function getDataDrivesystem(id) {

  if (id !== '') {
    $.ajax({
      url: '{{ route("get.data.drive", ":id") }}'.replace(':id', id),
      type: 'GET',
      success: function(data) {
        // update the page with the retrieved data

        $('#drivei').val(data.drive_system);
        $('#drivep').text(data.drive_system);
      }
    });
  }
}
</script>

{{-- <script type="text/javascript">


    $("#manufacture_id").change(function(){
        $.ajax({
            url: "{{ route('getvehiclemodel') }}?manufacture_id=" + $(this).val(),
            method: 'GET',
            success: function(data) {
                $('#carmodel').html(data.html);
            }
        });
    });




</script> --}}
@endpush
