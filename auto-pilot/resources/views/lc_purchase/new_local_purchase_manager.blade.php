@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Local Purchase Manager</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Local Purchase Manager</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('lc.new-local-purchase')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> New Local Purchase</a>
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
                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r1" checked="" value="" id="radioSuccess1">
                            <label for="radioSuccess1">
                              Purchase
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r1" id="radioSuccess2" value="BrandNew">
                            <label for="radioSuccess2">
                              Transferred 
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                              <input type="radio" name="r1" id="radioSuccess3" value="BrandNew">
                              <label for="radioSuccess3">
                                Document Only 
                              </label>
                              </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r2" value="" id="radioSuccess4">
                            <label for="radioSuccess4">
                              Port
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r2" id="radioSuccess5" value="BrandNew">
                            <label for="radioSuccess5">
                              Showroom 
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                              <input type="radio" name="r2" id="radioSuccess6" value="BrandNew">
                              <label for="radioSuccess6">
                                Individual
                              </label>
                              </div>
                            <div class="icheck-success d-inline">
                              <input type="radio" name="r2" id="radioSuccess7" value="BrandNew">
                              <label for="radioSuccess7">
                                Overseas
                              </label>
                              </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r3"  value="" id="radioSuccess8">
                            <label for="radioSuccess8">
                              Recondition
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r3" id="radioSuccess9" value="BrandNew">
                            <label for="radioSuccess9">
                              Brand New 
                            </label>
                            </div>
                            <div class="icheck-success d-inline">
                              <input type="radio" name="r3" id="radioSuccess10" value="BrandNew">
                              <label for="radioSuccess10">
                                Used 
                              </label>
                              </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                        
                            <select class="form-control select2 w100" name="year">
                              <option>Select Costing Status</option>
                              <option>Pending</option>
                              <option>Confirmed</option>
                            </select> 
                        </div>
                    </div>
                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                        
                            <select class="form-control select2 w100" name="month">
                              <option>Select Supplier</option>
                              <option>January</option>
                            </select> 
                        </div>
                    </div>
                  
                  <div class="col-sm-12 col-lg-5 col-md-5">

                    <div class="form-group">
                      <div class="input-group input-group-sm">
                      <input type="search" class="form-control form-control-sm" placeholder="">
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
                <div class="text-lg fw600 py-3 px-4">Purchase From Showroom/Local Supplier</div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Innvoice Number </th>
                      <th>Vehicle </th>
                      <th>Vin/Chassis No </th>
                      <th>Year of Manufacture</th>
                      <th>Vehicle Condition</th>
                      <th>Dates</th>
                      <th>Supplier</th>
                      <th>Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>012025220618909</td>
                      <td>Nissan-GT-R (R35, GT-R NISMO, 3800cc, Auto, 4WD, 4 seater)</td>
                      <td>R35-1001012</td>
                      <td>2019</td>
                      <td>Recondition</td>
                      <td>Date of Purchase: 10/Aug/2022</td>
                      <td>TOKYO MOTORS</td>
                      <td>Pending
                        <span class="text-sm text-danger d-block">Costinng Approvel Pending</span> 
                      </td>
                      <td class="justify-content-center"><a href="{{ route('lc.edit_local_purchase')}}" class="btn btn-sm btn-danger float-left"> <i class="fas fa-book-open text-sm"></i> Costing</a>
                      <a href="{{ route('lc.edit_local_purchase')}}" class="btn btn-sm btn-info float-left mx-1"> <i class="fas fa-edit"></i> </a>
                      <a href="" class="btn btn-sm btn-warning float-left"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>012025220618909</td>
                      <td>Nissan-GT-R (R35, GT-R NISMO, 3800cc, Auto, 4WD, 4 seater)</td>
                      <td>R35-1001012</td>
                      <td>2019</td>
                      <td>Recondition</td>
                      <td>Date of Purchase: 10/Aug/2022</td>
                      <td>TOKYO MOTORS</td>
                      <td>Pending
                        <span class="text-sm text-danger d-block">Costinng Approvel Pending</span> 
                      </td>
                      <td class="justify-content-center"><a href="" class="btn btn-sm btn-danger float-left"> <i class="fas fa-book-open text-sm"></i> Costing</a>
                      <a href="" class="btn btn-sm btn-info float-left mx-1"> <i class="fas fa-edit"></i> </a>
                      <a href="" class="btn btn-sm btn-warning float-left"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
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