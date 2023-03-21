@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customer List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer List</li>
              <li class="breadcrumb-item"></li>
              <a href="{{ route('sales.add_customer') }}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add New</a>
              
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
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-header">
            <div class="row">

              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Customer Type</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">City</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Profession</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Organization</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Assigned to</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Gender</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Returned</option>
                    </select> 
                  </div>
                </div>
                                        
                    <div class="col-sm-12 col-lg-6 col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Queck Serach</label>
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="eg: Name/Contact/Email/Country etc..." value="">
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Sl </th>
                      <th>Name </th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>Profession</th>
                      <th>Organization</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Arafat Islam</td>
                      <td></td>
                      <td>NA</td>
                      <td>01703606960</td>
                      <td></td>
                      <td></td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#confirmed_sales"> <i class="fas fa-edit"></i></a>
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
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection