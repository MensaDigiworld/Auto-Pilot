@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Of Cost</li>
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
          <!-- ./col -->

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header ">
                <h1 class="card-title"><b>List of Cost Type</b></h1>
                <a href="{{ route('inventory.cost_type_add')}}" class="btn btn-success float-right">Add New</a>

              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($types as $type)


                    <tr>
                      <td>{{ $loop->index++ }}</td>
                      <td>{{ $type->name }}</td>
                      <td>{{ $type->status == 1 ? 'Active':'Deactive' }}</td>
                      <td class="text-center"><a href="{{ route('inventory.cost_type_edit',$type->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit">Edit</i></a>

                        {{-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt">Remove</i></a></td> --}}
                        <form action="{{ route('inventory.cost_type_delete') }}"
                            method="POST" style="display: inline;">

                            @csrf()
                           <input type="hidden" name="costType_id" value="{{ $type->id }}">
                            <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt">Remove</i>
                            </button>
                        </form>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
