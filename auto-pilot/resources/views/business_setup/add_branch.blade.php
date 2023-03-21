@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Branch Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Branch Information</li>
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
                <h3 class="card-title">Add Branch Information</h3>
                <a href="{{ route('list-branch')}}" class="card-title float-right btn-success btn">List of Branch</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('add-branch.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Branch code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="" name="code" placeholder="Enter your Branch code">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Business Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your Business Name" value="" name="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      
                      <textarea class="form-control" rows="3" placeholder="Addresss" name="address"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="country">
                        <option selected disabled>Select Country</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Japan">Japan</option>
                        <option value="India">India</option>
                        <option value="Germany">Germany</option>
                        
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="city">
                        <option selected disabled>Select City</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Tokyo">Tokyo</option>
                        <option value="Dellhi">Dellhi</option>
                        <option value="Berlin">Berlin</option>
                        
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contac tNo</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" placeholder="Contact Number" name="contact_no" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" value="" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Web Address</label>
                    <div class="col-sm-10">
                      <input type="url" class="form-control" id="inputEmail3" value="" placeholder="exp www.example.com" name="web_address">
                    </div>
                  </div>
 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Currency</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="currency">
                        <option selected disabled>Select Currency</option>
                        <option value="BDT">BDT</option>
                        <option value="Dollar">Dollar </option>                        
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control file" id="inputEmail3" name="logo">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10 select2-purple">
                      <select class="select2" multiple="multiple" data-placeholder="Select a Type" data-dropdown-css-class="select2-purple" name="type[]" style="width: 100%">
                        <option>Brand New Vehicle</option>
                        <option>Reconditioned Vehicle</option>
                        <option>Pre-owned Vehicle</option>
                        <option>Commissioned vehicle dealer</option>
                        <option>Brand New Bike Dealer</option>
                        <option>Pre-Owned Bike Dealer</option>
                        <option>Commissioned Bike dealer</option>                       
                      </select> 
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Business hours</label>
                    <div class="col-sm-10">
                      <div class="row">
                          <div class="col-sm-3 select2-primary">
                            <div class="icheck-success d-inline col-sm-6">
                              <input type="checkbox" name="saturday" checked="" value="Saturday" id="Saturday">
                              <label for="Saturday">
                                Saturday
                              </label>
                              </div>
                          </div>

                          <div class="col-sm-3 select2-primary " id="open_hour">
                            <select class="select2 form-control " data-placeholder="Select a Open Time" data-dropdown-css-class="select2-purple" name="saturday_opentime">
                              <option>08:00 AM</option>
                              <option>09:00 AM</option>
                              <option>10:00 AM</option>                                 
                            </select> 
                          </div>

                          <div class="col-sm-3 select2-primary " id="close_hour">
                            <select class="select2 form-control" data-placeholder="Select a Closing Time" data-dropdown-css-class="select2-purple" name="saturday_closetime">
                              <option>09:00 PM</option>
                              <option>10:00 PM</option>
                              <option>11:00 PM</option>                             
                            </select> 
                          </div>
                    </div>
                          <div class="row pt-2">
                            <div class="col-sm-3 select2-primary">
                              <div class="icheck-success d-inline col-sm-6">
                                <input type="checkbox" name="sunday" value="Sunday" id="Sunday">
                                <label for="Sunday">
                                  Sunday
                                </label>
                                </div>
                            </div>
                            <div class="col-sm-3 select2-primary open_hour_sunday" id="open_hour_sunday">
                              <select class="select2 form-control " data-placeholder="Select a Open Time" data-dropdown-css-class="select2-purple" name="sunday_opentime">
                                <option>08:00 AM</option>
                                <option>09:00 AM</option>
                                <option>10:00 AM</option>                                
                              </select> 
                            </div>
                            <div class="col-sm-3 select2-primary close_hour_sunday" id="close_hour_sunday">
                              <select class="select2 form-control" data-placeholder="Select a Closing Time" data-dropdown-css-class="select2-purple" name="sunday_closetime">
                                <option>09:00 PM</option>
                                <option>10:00 PM</option>
                                <option>11:00 PM</option>                               
                              </select>
                            </div>
                          </div>
                          <div class="row pt-2">
                            <div class="col-sm-3 select2-primary">
                              <div class="icheck-success d-inline col-sm-6">
                                <input type="checkbox" name="monday" value="Monday" id="Monday">
                                <label for="Monday">
                                  Monday
                                </label>
                                </div>
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control " data-placeholder="Select a Open Time" data-dropdown-css-class="select2-purple" name="monday_opentime">
                                <option>08:00 AM</option>
                                <option>09:00 AM</option>
                                <option>10:00 AM</option>                              
                              </select> 
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control" data-placeholder="Select a Closing Time" data-dropdown-css-class="select2-purple" name="monday_closetime">
                                <option>09:00 PM</option>
                                <option>10:00 PM</option>
                                <option>11:00 PM</option>                              
                              </select> 
                            </div>
                          </div>
                          <div class="row pt-2">
                            <div class="col-sm-3 select2-primary">
                              <div class="icheck-success d-inline col-sm-6">
                                <input type="checkbox" name="tuesday" value="Tuesday" id="Tuesday">
                                <label for="Tuesday">
                                  Tuesday
                                </label>
                                </div>
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control " data-placeholder="Select a Open Time" data-dropdown-css-class="select2-purple" name="tuesday_opentime">
                                <option>08:00 AM</option>
                                <option>09:00 AM</option>
                                <option>10:00 AM</option>                               
                              </select> 
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control" data-placeholder="Select a Closing Time" data-dropdown-css-class="select2-purple" name="tuesday_closetime">
                                <option>09:00 PM</option>
                                <option>10:00 PM</option>
                                <option>11:00 PM</option>                               
                              </select> 
                            </div>
                          </div>
                          <div class="row pt-2">
                            <div class="col-sm-3 select2-primary">
                              <div class="icheck-success d-inline col-sm-6">
                                <input type="checkbox" name="wednesday" value="Wednesday" id="Wednesday">
                                <label for="Wednesday">
                                  Wednesday
                                </label>
                                </div>
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control " data-placeholder="Select a Open Time" data-dropdown-css-class="select2-purple" name="wednesday_opentime">
                                <option>08:00 AM</option>
                                <option>09:00 AM</option>
                                <option>10:00 AM</option>                                
                              </select> 
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control" data-placeholder="Select a Closing Time" data-dropdown-css-class="select2-purple" name="wednesday_closetime">
                                <option>09:00 PM</option>
                                <option>10:00 PM</option>
                                <option>11:00 PM</option>                               
                              </select>
                            </div>
                          </div>
                          <div class="row pt-2">
                            <div class="col-sm-3 select2-primary">
                              <div class="icheck-success d-inline col-sm-6">
                                <input type="checkbox" name="thursday" value="Thursday" id="Thursday">
                                <label for="Thursday">
                                  Thursday
                                </label>
                                </div>
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control " data-placeholder="Select a Open Time" data-dropdown-css-class="select2-purple" name="thursday_opentime">
                                <option>08:00 AM</option>
                                <option>09:00 AM</option>
                                <option>10:00 AM</option>                               
                              </select> 
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control" data-placeholder="Select a Closing Time" data-dropdown-css-class="select2-purple" name="thursday_closetime">
                                <option>09:00 PM</option>
                                <option>10:00 PM</option>
                                <option>11:00 PM</option>                                
                              </select> 
                            </div>
                          </div>
                          <div class="row pt-2">
                            <div class="col-sm-3 select2-primary">
                              <div class="icheck-success d-inline col-sm-6">
                                <input type="checkbox" name="friday" value="Friday" id="Friday">
                                <label for="Friday">
                                  Friday
                                </label>
                                </div>
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control " data-placeholder="Select a Open Time" data-dropdown-css-class="select2-purple" name="friday_opentime">
                                <option>08:00 AM</option>
                                <option>09:00 AM</option>
                                <option>10:00 AM</option>                             
                              </select> 
                            </div>
                            <div class="col-sm-3 select2-primary">
                              <select class="select2 form-control" data-placeholder="Select a Closing Time" data-dropdown-css-class="select2-purple" name="friday_closetime">
                                <option>09:00 PM</option>
                                <option>10:00 PM</option>
                                <option>11:00 PM</option>                              
                              </select> 
                            </div>
                          </div>
                </div>
              </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>                        
                      </select>                   
                    </div>
                  </div>
                 
                  {{-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div> --}}
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection