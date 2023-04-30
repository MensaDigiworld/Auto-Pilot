@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Incomplete Local Purchase Costing List
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Incomplete Local Purchase Costing List
              </li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('lc.new-local-purchase')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Local Purchase</a>
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
              <div class="card-header">
            <div class="row">
                      <div class="col-sm-12 col-lg-2 col-md-2">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Month</label>

                            <select class="form-control select2" name="month" required>
                              <option>Select Month</option>
                              @foreach ($months as $mon)
                              <option value="{{ $mon->month }}">{{ $mon->month }}</option>
                              @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-1 col-md-1">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Year</label>

                          <select class="form-control select2" name="year" required>
                            <option value="*">Select Year</option>
                            @for ($year = date('Y')+1; $year >=1980 ; $year--)
                                <option value="{{ $year }}" >{{ $year }}</option>
                                @endfor
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Supplier</label>

                        <select class="form-control select2" name="supplier" required>
                          <option value="*">Select All Supplier</option>
                          @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                  <div class="col-sm-12 col-lg-2 col-md-2">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Condition</label>

                        <select class="form-control select2" name="vehicle_condition">
                          <option value="*">All</option>
                          <option value="Recondition">Recondition</option>
                          <option value="BrandNew">Recondition</option>
                          <option value="Used">Used</option>
                        </select>
                    </div>
                </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Manufacturer</label>

                        <select class="form-control select2" name="year" required>
                          <option>Select Manufacturer</option>
                          @foreach ($manufacturers as $man)
                          <option value="{{ $man->id }}">{{ $man->name }}</option>
                          @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Model</label>

                      <select class="form-control select2" name="year" required>
                        <option>Select Model</option>
                        <option>Honda</option>
                      </select>
                  </div>
              </div>
                <div class="col-sm-12 col-lg-3 col-md-3">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Purchased by</label>

                      <select class="form-control select2" name="year" required>
                        <option>Select</option>
                        <option>Honda</option>
                      </select>
                  </div>
              </div>


          <div class="col-sm-12 col-lg-4 col-md-4">
            {{-- <div class="form-group">
                <label for="inputEmail3" class="col-form-label">Quick Search</label>

                <input type="text" class="form-control" placeholder="Search Area">

                  <button type="button" class="btn btn-info"> <i class="fas fa-search"></i> Search!</button>
            </div> --}}

            <div class="form-group">
              <label for="inputEmail3" class="col-form-label">Quick Search</label>
              <div class="input-group input-group-sm">
              <input type="search" class="form-control form-control-sm" placeholder="Type your keywords here" value="Lorem ipsum">
              <div class="input-group-append">
              <button type="submit" class="btn btn-lg btn-info">
              <i class="fa fa-search"></i>
              </button>
              </div>
              </div>
              </div>
        </div>



              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Purchase Date </th>
                      <th>Product </th>
                      <th>Vin/Chassis No </th>
                      <th>Reg. No</th>
                      <th>Condition</th>
                      <th>Supplier</th>
                      <th>Price</th>
                      <th>Purchased by</th>
                      <th>User</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($incpurs as $pur)


                    <tr>
                      <td>{{ $loop->index +1 }}</td>
                      <td>{{ $pur->date }}</td>
                      <td>{{ $pur->product->name }}</td>
                      <td>{{ $pur->vin_chassis_no }}</td>
                      <td>Reg. No</td>
                      <td>{{ $pur->vehicle_condition }}</td>
                      <td>{{ $pur->supplier->name }}</td>
                      <td>{{ $pur->price }}</td>
                      <td>{{ $pur->emp->name }}</td>
                      <td>user</td>
                      <td class="text-center">
                        <a href="{{ route('lc.in-local-purchase-edit',Crypt::encrypt($pur->id)) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>

                        <a href="{{ route('lc.in-local-purchase-destroy',Crypt::encrypt($pur->id)) }}"  onclick="return confirm('Are your sure?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a>
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
                  {{ $incpurs->links() }}
                </ul>
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
