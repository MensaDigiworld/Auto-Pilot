@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employee Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee Information</li>
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
                <h3 class="card-title">Update Employee Information</h3>
                <a href="{{ route('list-employee')}}" class="card-title float-right btn-success btn">List of Employee</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('employee.update', $employee->id)}}">
                @csrf
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Code</label>                          
                            <input type="text" class="form-control" id="inputEmail3" value="COMPNY000000000002" readonly name="code">                            
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">NID</label>                          
                              <input type="number" class="form-control" id="inputEmail3" placeholder="Enter NID Number" value="{{ $employee->national_id}}" name="national_id">                            
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Name</label>                          
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Name" value="{{ $employee->name}}" name="name">                            
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Birth Certificate</label>                          
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Birth Certificate Number" value="{{ $employee->birth_certificate_no}}" name="birth_certificate_no">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Father's Name</label>                          
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Father's Name" value="{{ $employee->fathers_name}}" name="fathers_name">
                            
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Mother's Name</label>                          
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Mother's Name" value="{{ $employee->mothers_name}}" name="mothers_name">
                            
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <label for="inputEmail3" class="col-form-label">Date of Birth</label>
                        <div class="input-group">                          
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Date of Birth" value="{{ $employee->date_of_birth}}" name="date_of_birth">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>                          
                            <input type="email" class="form-control" id="inputEmail3" value="{{ $employee->email}}" placeholder="Email" name="email">
                            
                          </div>
                      </div>        
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Permanent Address</label>                          
                            <textarea class="form-control" rows="3" placeholder="Enter Permanent Address" name="permanent_address">{{ $employee->permanent_address}}</textarea>
                            
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Present Address</label>
                            <textarea class="form-control" rows="3" placeholder="Enter Present Address" name="present_address">{{ $employee->present_address}}</textarea>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2">
                              <label class="form-check-label" for="exampleCheck2">Same As Permanent Address </label>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">ContactNo</label>                          
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Contact Number" name="contact_no" value="{{ $employee->contact_no}}">
                            
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Status</label>                          
                            <select class="form-control" name="status">
                              <option>Active</option>
                              <option>Inactive</option>                              
                            </select>                             
                          </div>
                      </div>
                    </div>                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
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