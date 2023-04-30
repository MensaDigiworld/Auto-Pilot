@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Warehouse/Showroom</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Warehouse/Showroom</li>

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
              <div class="card-body">
                <form role="form" id="userFrom" method="POST"
                action="{{ isset($showroom) ? route('showrooms.update',$showroom->id) : route('showrooms.store') }}"
                enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @if (isset($showroom))
                @method('PUT')
                @endif


                    <div class="form-group form-group-sm row">
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Type <span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">

                          <div class="icheck-success d-inline">
                          <input type="radio" name="type"  value="warehouse" id="Warehouse"@isset($showroom)
                          {{ $showroom->type == "warehouse" ? 'checked' : ''  }}@endisset >
                          <label for="Warehouse">
                            Warehouse
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="type" id="Partner" value="showroom" @isset($showroom)
                          {{ $showroom->type == "showroom" ? 'checked' : ''  }}@endisset>
                          <label for="Partner">
                            Partner Showroom
                          </label>
                          </div>
                      </div>

                    </div>

                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Warehouse/Showroom Name <span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Warehouse/Showroom Name" value="{{ $showroom->name ?? ''}}" name="name">
                      </div>

                    </div>
                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Contact</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Contact" value="{{ $showroom->contact ?? ''}}" name="contact">
                      </div>

                    </div>

                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Address</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <textarea class="form-control" placeholder="Enter Address" name="address" rows="3">
                            @isset($showroom)
                            {{ $showroom->address  }} @endisset

                        </textarea>
                      </div>

                    </div>
                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">City</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <select class="form-control select2 " name="city_code">
                          <option>Select City</option>
                          <option value="1" @isset($showroom)
                          {{ $showroom->city_code == 1 ? 'selected' : ''  }}@endisset>Chittagong</option>
                          <option value="2" @isset($showroom)
                          {{ $showroom->city_code == 2 ? 'selected' : ''  }}@endisset>Dhaka</option>
                        </select>
                      </div>

                    </div>
                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Email</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Email" value="{{ $showroom->email ?? ''}}" name="email">
                      </div>

                    </div>
                    <div class="form-group form-group-sm row">
                        <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Status <span class="text-danger fw-600">*</span></label>
                        <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">

                            <div class=" d-inline">
                            <input type="radio" name="status"  value="1" id="status" @isset($showroom)
                            {{ $showroom->status == 1 ? 'checked' : ''  }}@endisset >
                            <label for="status">
                              Active
                            </label>
                            </div>
                            <div class=" d-inline">
                            <input type="radio" name="status" id="status" value="0" @isset($showroom)
                            {{ $showroom->status == 0 ? 'checked' : ''  }}@endisset>
                            <label for="status">
                              DeActive
                            </label>
                            </div>
                        </div>

                      </div>

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-success">


                    @isset($showroom)

                    update
                    @else

                    save
                    @endisset

                </button>
                <a href="{{ route('showrooms.index')}}" class="btn btn-primary float-right">List</a>
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
