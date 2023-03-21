@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vehicle Reconditioning </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Reconditioning </li>
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

            <div class="card card-info">
              {{-- <div class="card-header">
                <h3 class="card-title">Add Local Purchase</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Local Purchase</a>
              </div> --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-7">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vehicle</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD,  5 seater)" name="">
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Package/Trim</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD,  5 seater)" name="">
                           
                          </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vin/Chassis No</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="GM4-232425" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Reg. No</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="TM0601" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Engine No</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="WD XYZ Auto" name="" readonly>
                           
                          </div>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">LC Number</label>
                            <div class="input-group">
                                
                              <input type="text" class="form-control form-control-sm" id="inputEmail3" value="TM0601" name="" readonly>
                             
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Supplier Name</label>
                            <div class="input-group">
                                
                              <input type="text" class="form-control form-control-sm" id="inputEmail3" value="WD XYZ Auto" name="" readonly>
                             
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Current Mileage <span class="text-danger fw-600">*</span></label>
                            <div class="input-group">
                                
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="340000.00" name="" >
                             
                            </div>
                        </div>
                      </div>
                    </div>
                    
                  
                  <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Fuel Added(Liter)</label>
                          <div class="input-group">
                              
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="" >
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Arrival Date <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                              
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" value="@php echo $today=date('Y-m-d');@endphp" name="">
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Return Date <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                              
                            <input type="date" class="form-control form-control-sm" id="inputEmail3" value="@php echo $today=date('Y-m-d');@endphp" name="">
                           
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Work Type <span class="text-danger fw-600">*</span> </label>
                        <a href="" class="btn btn-sm btn-success float-right py-1"><i class="fas fa-plus text-sm"></i></a>
                          <div class="input-group">
                              
                            <select class="form-control select2" name="supplier">
                              <option>Select</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select> 
                           
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Vendor/Workshop <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">
                              
                            <select class="form-control select2" name="supplier">
                              <option>Select Vendor/Workshop</option>
                              <option>Xeon Car</option>
                              <option>Monspeed</option>
                              
                            </select> 
                           
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Work Description</label>
                          <div class="input-group">
                            <textarea class="form-control form-control-sm" rows="2" name="pe_address" placeholder="Details about the task to be carried out..."></textarea>
                          </div>
                      </div>
                    </div>
                  </div>

                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="btn btn-success float-left" data-toggle="modal" data-target="#inspection"><i class="fas fa-eye"></i>  Inspection Details</div>
                  <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> Add</button>                 
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Select </th>
                      <th>Work </th>
                      <th>Vendor </th>
                      <th>Remarks</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="icheck-primary d-inline">
                        <input type="checkbox" id="Auction" name="check">
                        <label for="Auction">
                        </label>
                        </div>
                    </td>
                      <td>Fender</td>
                      <td>GM4-232425</td>
                      <td>AUTO WORKS</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                  <a  href="{{ route('inventory.list_workshop_transfer_incomplete')}}" class="btn btn-primary"><i class="fas fa-list"></i> List</a>
                  <button type="submit" class="btn btn-info"><i class="fas fa-print"></i> Print</button>
                  <button type="submit" class="btn btn-secondary"><i class="fas fa-check"></i> Confirm</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <script>
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}


  </script>

@endsection