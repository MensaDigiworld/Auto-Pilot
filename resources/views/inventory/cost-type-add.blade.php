@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Cost Type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Cost Type</li>

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
          <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="card">
              <div class="card-body">
                <form action="{{ route('inventory.cost_type_store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                    @csrf



                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Name </label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Name" value="{{ old('name') }}" name="name">
                      </div>

                    </div>


                    <div class="form-group form-group-sm row">
                        <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Type</label>
                        <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">

                            <div class="icheck-success d-inline">
                            <input type="radio" name="status"  value="1" id="Product"

                            >
                            <label for="Product">
                              Active
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                            <input type="radio" name="status" id="Service" value="0" >
                            <label for="Service">
                              Deactive
                            </label>
                            </div>
                        </div>

                      </div>



              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-success"> Save</button>
                <a href="{{ route('inventory.list_of_cost')}}" class="btn btn-primary float-right">List</a>
              </div>
              <!-- /.card-footer -->
            </form>
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
