@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Company Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Business</li>
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
          <div class="col-lg-8 col-8">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Comapny Information</h3>
                <a href="{{ route('business.index')}}" class="card-title float-right btn-success btn">List of Business</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal"action="{{ route('business.update', $business->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $business->id }}">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                      <input type="text" name="code" class="form-control" id="inputEmail3" value="{{$business->code}}" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Business Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Business Name" value="{{$business->business_name}}" name="business_name">
                      
                      <span class="text-danger text-sm text-bold">@error('business_name') {{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      
                      <textarea class="form-control" rows="3" placeholder="Addresss" name="address">{{$business->address}}</textarea>
                    </div>
                  </div>

                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="country_id">
                        <option selected disabled>Select Country</option>
                        <option value="bangladesh"{{ $business->country_id=='bangladesh' ? 'selected':''}}>Bangladesh</option>
                        <option value="srilanka"{{ $business->country_id=='srilanka' ? 'selected':''}}>Srilanka</option>
                        <option value="india"{{ $business->country_id=='india' ? 'selected':''}}>India</option>
                        <option value="usa"{{ $business->country_id=='usa' ? 'selected':''}}>USA</option>                        
                      </select>                   
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact No</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Contact Number" name="contact_no" value="{{$business->contact_no}}">
                      
                      <span class="text-danger text-sm text-bold">@error('contact_no') {{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" value="{{$business->email}}" placeholder="Email" name="email">
                      
                      <span class="text-danger text-sm text-bold">@error('email') {{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Web Address</label>
                    <div class="col-sm-10">
                      <input type="url" class="form-control" id="inputEmail3" value="{{$business->web_address}}" placeholder="exp www.example.com" name="web_address">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Currency</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="currency_id">
                        <option selected disabled>Select Currency</option>
                        <option value="bdt"{{ $business->currency_id=='bdt' ? 'selected':''}}>BDT</option>
                        <option value="usd"{{ $business->currency_id=='usd' ? 'selected':''}}>USD</option>                        
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputFile" class="col-sm-2 col-form-label">Logo</label>                   
                    <div class="col-sm-10">
                       <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="logo" id="exampleInputFile" accept="image/png, image/jpeg, image/svg">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>                       
                     </div>
                    </div>                    
                      <span class="text-danger text-sm text-bold">@error('logo') {{ $message }} @enderror</span>
                     <img src="{{ asset('public/images/business/'.$business->logo.'') }}" class="img-thumbnail" width="100" height="100" />
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="status">
                        <option value="active" {{ $business->status=='active' ?  'selected':''}}>Active</option>
                        <option value="inactive" {{ $business->status=='inactive' ?  'selected':''}}>Inactive</option>                      
                      </select>                   
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info btn-lg">Update</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
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