@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Interior Color</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Interior Color</li>
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
                <h3 class="card-title">Color</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('interiorcolors.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Name of Color <span class="text-danger fw-600">*</span></label>
                      <input type="text" class="form-control form-control-sm" id="inputEmail3" value="{{ old('name')}}" name="name" placeholder="e.g Red" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Color Code <span class="text-danger fw-600">*</span></label>
                      <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="color_code" placeholder="e.g #fff" required>
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

          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Color</h3>

              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Color Name</th>
                      <th>Color Code</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($interiorcolors as $key=>$item)


                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->color_code }}</td>
                      <td class="text-center">
                        {{-- <button class="btn btn-sm btn-danger" onclick="getColor({{ $item->id }})"><i class="fas fa-edit"></i></button> --}}
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal"data-target="#details-modal-{{ $cardeal->id }}" >View</button> --}}
                        {{-- <a href="{{ route('interiorcolors.edit') }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a> --}}

                        <button type="button"
                        class="btn btn-primary" data-toggle="modal"
                        data-target="#details-modal-{{ $item->id }}" ><i class="fas fa-edit"></i></button>
                        {{-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a> --}}

                        <form action="{{ route('interiorcolors.destroy',$item->id) }}"
                            method="POST" style="display: inline;">
                            @csrf()
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                                {{-- <span><i class="fas fa-trash-alt"></i></span> --}}
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
    @foreach ($interiorcolors as $key=>$item)

{{-- modal start --}}
<div class="modal fade" id="details-modal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="details-modal-{{ $item->id }}"
    aria-hidden="true">
    <form action="{{ route('interiorcolor.update') }}" method="post">
        @csrf
        <input type="hidden" name="color_id" value="{{ $item->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Interior Color </h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Color Code:</label>
              <input type="text" class="form-control" id="color_code" name="color_code" value="{{ $item->color_code }}">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
</form>
  </div>
@endforeach
  </div>
@endsection


@push('js')
{{-- <script>
    function getColor(id) {
        // let id = $(this).val(id);
        console.log(id);
                    $.ajax({
                        type: "GET",
                        url: "/get-interior-color-data/" + id,
                        success: function (data) {

                            $('#name').val(data.name);
                            $('#color_code').val(data.name);


                            // $('#dataHeadshot').text("Headshot: " + data.headshot);
                            $('#exampleModal').modal('show');
                        }
                    });
    }
</script> --}}
@endpush
