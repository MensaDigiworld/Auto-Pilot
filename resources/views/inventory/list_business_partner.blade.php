@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List of Business Partner</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Business Partner List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('businessPartners.create')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add New</a>
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
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <form action="{{ route('businessPartner.type') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                        <div class="form-group form-group-sm">

                            <select class="form-control select2" name="business_type" onchange="this.form.submit()" >
                              <option >Select Status Type</option>
                              <option value="all">All</option>
                              <option value="International">International</option>
                              <option value="Local">Local</option>
                            </select>
                        </div>
                        </form>
                    </div>

                     <div class="col-sm-12 col-lg-3 col-md-3">
                        <form action="{{ route('businessPartner.search.category') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                        <div class="form-group form-group-sm">

                            <select class="form-control select2" name="business_category" onchange="this.form.submit()" >
                              <option >Select Status Type</option>
                              <option value="all">All</option>
                              <option value="Insurance Company">Insurance Company</option>
                              <option value="C & F Agent">C & F Agent</option>
                              <option value="BRTA Agent">BRTA Agent</option>
                              <option value="Loan Processing Agent">Loan Processing Agent</option>
                              <option value="Vendor (Vehicle)">Vendor (Vehicle)</option>
                              <option value="Vendor (General)">Vendor (General)</option>
                              <option value="Broker">Broker</option>
                              <option value="Workshop">Workshop</option>
                              <option value="Government">Government</option>

                            </select>
                        </div>
                        </form>
                    </div>


                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group form-group-sm">
                        <form action="{{ route('businessPartner.search') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                        <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-control-sm" placeholder="" value="" name="search">
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
              </form>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Business Category </th>
                      <th>Name </th>
                      <th>Contact No </th>
                      <th>Status</th>
                      {{-- <th>User</th> --}}
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($business as $businessPartner)


                    <tr>
                      <td>{{ $businessPartner->business_category }}</td>
                      <td>{{ $businessPartner->business_type }}</td>
                      <td>{{ $businessPartner->contact_number }}</td>
                      <td>{{ $businessPartner->status == 1 ? 'Active': 'Deactive' }}</td>
                      {{-- <td></td> --}}
                      <td class="text-center"><a href="{{ route('businessPartners.edit',$businessPartner->id) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                          {{-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a> --}}
                          <form action="{{ route('businessPartners.destroy',$businessPartner->id) }}"
                            method="POST" style="display: inline;">
                            @csrf()
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                                <span>Remove</span>
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
                  {{-- {{ $business->links() }} --}}
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
