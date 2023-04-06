@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Business Partner</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Business Partner</li>

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
                action="{{ isset($businessPartner) ? route('businessPartners.update',$businessPartner->id) : route('businessPartners.store') }}"
                enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @if (isset($businessPartner))
                @method('PUT')
                @endif


                    <div class="form-group form-group-sm row">
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Business Category<span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-12 pt-lg-9 col-lg-10 col-md-10">

                        <div class="d-block">

                          <div class="icheck-success d-inline">
                          <input type="radio" name="business_category" checked="" value="Insurance Company" id="InsuranceCompany" >
                          <label for="InsuranceCompany">
                            Insurance Company
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="business_category" id="CFAgent" value="C & F Agent" @isset($businessPartner)
                          {{ $businessPartner->business_category == "C & F Agent" ? 'checked' : ''  }}@endisset>
                          <label for="CFAgent">
                            C & F Agent
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="business_category" id="BRTAAgent" value="BRTA Agent" @isset($businessPartner)
                            {{ $businessPartner->business_category == "BRTA Agent" ? 'checked' : ''  }}@endisset>
                            <label for="BRTAAgent">
                              BRTA Agent
                            </label>
                            </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="business_category" id="LoanProcessingAgent" value="Loan Processing Agent" @isset($businessPartner)
                            {{ $businessPartner->business_category == "Loan Processing Agent" ? 'checked' : ''  }}@endisset>
                            <label for="LoanProcessingAgent">
                              Loan Processing Agent
                            </label>
                            </div>
                          </div>
                            <div class="d-block pt-2">
                          <div class="icheck-success d-inline">
                            <input type="radio" name="business_category" id="Vendor" value="Vendor (Vehicle)" @isset($businessPartner)
                            {{ $businessPartner->business_category == "Vendor (Vehicle)" ? 'checked' : ''  }}@endisset>
                            <label for="Vendor">
                              Vendor (Vehicle)
                            </label>
                            </div>


                          <div class="icheck-success d-inline">
                            <input type="radio" name="business_category" id="General" value="Vendor (General)" @isset($businessPartner)
                            {{ $businessPartner->business_category == "Vendor (General)" ? 'checked' : ''  }}@endisset>
                            <label for="General">
                              Vendor (General)
                            </label>
                            </div>


                          <div class="icheck-success d-inline">
                            <input type="radio" name="business_category" id="Broker" value="Broker" @isset($businessPartner)
                            {{ $businessPartner->business_category == "Broker" ? 'checked' : ''  }}@endisset>
                            <label for="Broker">
                              Broker
                            </label>
                            </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="business_category" id="Workshop" value="Workshop" @isset($businessPartner)
                            {{ $businessPartner->business_category == "Workshop" ? 'checked' : ''  }}@endisset>
                            <label for="Workshop">
                              Workshop
                            </label>
                            </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="business_category" id="Government" value="Government" @isset($businessPartner)
                            {{ $businessPartner->business_category == "Government" ? 'checked' : ''  }}@endisset>
                            <label for="Government">
                              Government
                            </label>
                            </div>
                          </div>
                        </div>

                    </div>

                    <div class="form-group form-group-sm row">
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Business Type <span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">

                          <div class="icheck-success d-inline">
                          <input type="radio" name="business_type" checked="" value="International" id="International" @isset($businessPartner)
                          {{ $businessPartner->business_type == "International" ? 'checked' : ''  }}@endisset>
                          <label for="International">
                            International
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="business_type" id="Local" value="Local" @isset($businessPartner)
                          {{ $businessPartner->business_type == "Local" ? 'checked' : ''  }}@endisset>
                          <label for="Local">
                            Local
                          </label>
                          </div>
                      </div>

                    </div>

                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Contact Number <span class="text-danger fw-600">*</span></label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Contact Number" value="{{ $businessPartner->contact_number ?? ''}}" name="contact_number">
                      </div>

                    </div>

                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Description</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <textarea class="form-control" placeholder="Enter Description" name="description" rows="3">
                            @isset($businessPartner)
                            {{ $businessPartner->description  }} @endisset
                        </textarea>
                      </div>

                    </div>


              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-success">

                    @isset($businessPartner)

                    update
                    @else

                    save
                    @endisset


                </button>
                <a href="{{ route('businessPartners.index')}}" class="btn btn-primary float-right">List</a>
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
