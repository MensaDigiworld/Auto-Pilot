@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Passenger Vehicle</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Passenger Vehicle</li>
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
          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Passenger Vehicle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="inputEmail3" class="col-form-label text-lg">Toyota-Aqua (NHP10, 1500cc, Auto, 2WD, 5 seater) Manufacture-Model (Chassis Code, CC, Auto, 
                        2WD, 5 Seater,Hybrid)
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Manufacturer <span class="text-danger fw-600">*</span></label>
                    
                      <select class="form-control select2" name="supplier">
                        <option >Select vehicle Manufacturer</option>
                        <option >Passenger</option>
                        <option >Commercial</option>
                        <option >Bike</option>              
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Body Type/Type <span class="text-danger fw-600">*</span></label>
                    
                      <select class="form-control select2" name="supplier">
                        <option >Select Body Type/Type</option>
                        <option >Japan</option>
                        <option >China</option>
                        <option >USA</option>              
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Transmission <span class="text-danger fw-600">*</span></label>
                    
                      <select class="form-control select2" name="supplier">
                        <option >Select Transmission </option>
                        <option >Japan</option>
                        <option >China</option>
                        <option >USA</option>              
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Model <span class="text-danger fw-600">*</span></label>
                  
                    <select class="form-control select2" name="supplier">
                      <option >Select vehicle Model</option>
                      <option >Passenger</option>
                      <option >Commercial</option>
                      <option >Bike</option>              
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Fuel Type <span class="text-danger fw-600">*</span></label>
                  
                    <select class="form-control select2" name="supplier">
                      <option >Select Fuel Type</option>
                      <option >Japan</option>
                      <option >China</option>
                      <option >USA</option>              
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Drive system/Drive Train <span class="text-danger fw-600">*</span></label>
                  
                    <select class="form-control select2" name="supplier">
                      <option >Select Drive system/Drive Train</option>
                      <option >Japan</option>
                      <option >China</option>
                      <option >USA</option>              
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Chassis Code </label>
                  
                    <select class="form-control select2" name="supplier">
                      <option >Select Chassis Code</option>
                      <option >Japan</option>
                      <option >China</option>
                      <option >USA</option>              
                    </select>
                  </div>
                </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Engine CC <span class="text-danger fw-600">*</span></label>
                    
                      <select class="form-control select2" name="supplier">
                        <option >Select Engine CC</option>
                        <option >Passenger</option>
                        <option >Commercial</option>
                        <option >Bike</option>              
                      </select>
                    </div>
                  </div>
                                    
                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Number of doors</label>
                    
                      <select class="form-control select2" name="supplier">
                        <option >Select Number of doors </option>
                        <option >Japan</option>
                        <option >China</option>
                        <option >USA</option>              
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-form-label">Seating Capacity </label>
                    
                      <select class="form-control select2" name="supplier">
                        <option >Select Seating Capacity</option>
                        <option >1</option>
                        <option >2</option>
                        <option >3</option>              
                      </select>
                    </div>
                  </div>

                </div>
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

          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header">
                <h3 class="card-title col-12 py-3">List of Passenger Vehicle</h3>
                <div class="row">
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                      
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select vehicle Manufacture</option>
                          <option>Returned</option>
                        </select> 
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                      
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select vehicle Model</option>
                          <option>Returned</option>
                        </select> 
                    </div>
                  </div>
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="form-group">
                      
                    
                        <select class="form-control select2" name="month">
                          <option selected>Select Chassis code</option>
                          <option>Returned</option>
                        </select> 
                    </div>
                  </div>
                
           
                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="" value="">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-info">
                        <i class="fa fa-search"></i> Search
                        </button>
                        </div>
                        </div>
                        </div>
                  </div>

        

                </div>
              </div>
              </form>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Vehicle</th>
                      <th>Fuel Type</th>
                      <th>Body Type</th>
                      <th>Orgin </th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Toyota-Aqua (NHP10, 1500cc, Auto, 2WD, 5 seater) Manufacture-Model (Chassis Code, CC, Auto, 
                        2WD, 5 Seater,Hybrid)</td>
                      <td>Hybrid</td>
                      <td>Sedan</td>
                      <td>China</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                      
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
        
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection