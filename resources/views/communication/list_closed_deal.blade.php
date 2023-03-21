@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Closed Deal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Closed Deal</li>
              <li class="breadcrumb-item active"></li>
             
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
            <form action="#" class="form-horizontal" method="POST">
              @csrf
            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
              <div class="card-body">
            <div class="row">

              <div class="col-sm-12 col-lg-4 col-md-4">
                <div class="form-group">
                  <div class="row">
                    <div class="col-12">
                      <label for="inputEmail3" class="col-form-label">Date Range</label>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="input-group input-group-sm">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-sm btn-default">
                          From
                          </button>
                          </div>
                      <input type="date" class="form-control form-control-sm" value="">
                      
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="input-group input-group-sm">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-sm btn-default">
                          To
                          </button>
                          </div>
                      <input type="date" class="form-control form-control-sm" value="">
                      
                      </div>
                    </div>
                  </div>
                  
                  </div>
                
                </div>
              <div class="col-sm-12 col-lg-4 col-md-4">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Employee</label>
                
                    <select class="form-control select2" name="">
                      <option selected>Select</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
                </div>
              <div class="col-sm-12 col-lg-4 col-md-4">
                <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Source</label>
                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
              </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">                
                    <select class="form-control select2" name="">
                      <option selected>Select Loking To</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
              </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">              
                    <select class="form-control select2" name="">
                      <option selected>Select Product type</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
              </div>
              <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="form-group">               
                    <select class="form-control select2" name="">
                      <option selected>Select Product</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
              </div>
                                         
                <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="Type here..." value="">
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
              </form>
            </div>

              <div class="card">
                <div class="card-header text-lg text-success">
                  Vehicle
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered">
                    <thead class="bg-gray">
                      <tr>
                        <th>Sl </th>
                        <th>Closed Date </th>
                        <th>Looking to</th>
                        <th>Product Type</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Source</th>
                        <th>Closed By</th>
                        <th>Reason</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="border-left: 2px solid #28a745 ">01</td>
                        <td>03/Nov/2022</td>
                        <td>buy</td>
                        <td>Pessanger</td>
                        <td>Suzuki-Hustler (MR52S, Hybrid X turbo, 660cc, Auto, 2WD, 4 seater)</td>
                        <td>Arafat Islam<br> 01703606960</td>
                        <td>Enamual Hasan Raihan</td>
                        <td>03/Nov/2022</td>
                        <td></td>
                        <td class="text-center">
                          <div class="d-flex flex-column justify-centent-center">
                            <a href="{{ route('sales.add_loan_information')}}" class="btn btn-sm btn-primary p-1"><i class="fas fa-eye "></i> View</a>
                          </div>
                          <div class="d-flex flex-row justify-content-between py-1">
                            
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fas fa-phone-volume text-md text-dark"></i> </a>
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fas fa-envelope text-md text-dark"></i>  </a>
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fab fa-facebook-messenger text-md text-dark"></i>  </a>
                         
                          </div>

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

              <div class="card">
                <div class="card-header text-lg text-primary">
                  Product
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered">
                    <thead class="bg-gray">
                      <tr>
                        <th>Sl </th>
                        <th>Closed Date </th>
                        <th>Looking to</th>
                        <th>Product Type</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Source</th>
                        <th>Closed By</th>
                        <th>Reason</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="border-left: 2px solid #007bff ">01</td>
                        <td>03/Nov/2022</td>
                        <td>buy</td>
                        <td>Pessanger</td>
                        <td>Suzuki-Hustler (MR52S, Hybrid X turbo, 660cc, Auto, 2WD, 4 seater)</td>
                        <td>Arafat Islam<br> 01703606960</td>
                        <td>Enamual Hasan Raihan</td>
                        <td>03/Nov/2022</td>
                        <td></td>
                        <td class="text-center">
                          <div class="d-flex flex-column justify-centent-center">
                            <a href="{{ route('sales.add_loan_information')}}" class="btn btn-sm btn-primary p-1"><i class="fas fa-eye "></i> View</a>
                          </div>
                          <div class="d-flex flex-row justify-content-between py-1">
                            
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fas fa-phone-volume text-md text-dark"></i> </a>
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fas fa-envelope text-md text-dark"></i>  </a>
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fab fa-facebook-messenger text-md text-dark"></i>  </a>
                         
                          </div>

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