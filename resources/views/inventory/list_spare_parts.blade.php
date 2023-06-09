@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Spare Parts List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Spare Parts List</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('inventory.new_spare_parts')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add New</a>
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
                        <div class="form-group form-group-sm">
                                                 
                          <select class="form-control select2" name="status">
                              <option>All</option>
                              <option>Product</option>
                              <option>Service</option>
                            </select> 
                        </div>
                    </div>
                    
               
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group form-group-sm">
                        
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL </th>
                      <th>Type </th>
                      <th>Name </th>
                      <th>Part Number </th>
                      <th>Sales Price </th>
                      <th>Vat Amount</th>
                      <th>Discount </th>
                      <th>Status</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Product</td>
                      <td>Android DVD Player</td>
                      <td>2159875</td>
                      <td>10000.00</td>
                      <td>100.00</td>
                      <td>0.00 (0.00)</td>
                      <td>Active</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                      
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Product</td>
                      <td>Android DVD Player</td>
                      <td>2159875</td>
                      <td>10000.00</td>
                      <td>100.00</td>
                      <td>0.00 (0.00)</td>
                      <td>Active</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                      
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Product</td>
                      <td>Android DVD Player</td>
                      <td>2159875</td>
                      <td>10000.00</td>
                      <td>100.00</td>
                      <td>0.00 (0.00)</td>
                      <td>Active</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                          <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                      
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