@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lead Manager</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lead Manager</li>
              <li class="breadcrumb-item active"></li>
              <li class="breadcrumb-item active"><a href="{{ route('communication.add_active_lead') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add New</a></li>
             
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
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card card-success">
                      <div class="card-header text-center text-lg text-bold">
                        ACTIVE LEAD 12 <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="The count showing all the active leads."></i>
                      </div>
                      <div class="card-body d-flex flex-row justify-content-between">
                        <div class="text-md">High <span class="text-bold"> 4</span></div>
                        <div class="text-md">Medium <span class="text-bold"> 4</span></div>
                        <div class="text-md">Low <span class="text-bold"> 4</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card card-primary">
                      <div class="card-header text-center text-lg text-bold">
                        TASK STATUS 12 <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="The count showing all the tasks status for today."></i>
                      </div>
                      <div class="card-body d-flex flex-row justify-content-between">
                        <div class="text-md">Complete  <span class="text-bold"> 4</span></div>
                        <div class="text-md">Pending  <span class="text-bold"> 4</span></div>
                        <div class="text-md">Overdue  <span class="text-bold"> 4</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                  <label for="inputEmail3" class="col-form-label">Status</label>
                
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
                      <option selected>Select Task</option>
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
                    <select class="form-control select2" name="">
                      <option selected>Select Potential</option>
                      <option>Pending</option>
                      <option>Active</option>
                    </select> 
                  </div>
              </div>
                                         
                <div class="col-sm-12 col-lg-9 col-md-9">
                      <div class="form-group">
                        <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" placeholder="Type here..." value="">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-info">
                        <i class="fa fa-search"></i>Search
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
                <div class="card-header text-lg text-danger">
                  Overdue
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered">
                    <thead class="bg-gray">
                      <tr>
                        <th>Sl </th>
                        <th>Initiated Date </th>
                        <th>Looking to</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Contact</th>
                        <th>Action</th>
                        <th>Assign to</th>
                        <th>Potential</th>
                        <th class="text-center">Update</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="border-left: 2px solid red ">01</td>
                        <td>03/Nov/2022</td>
                        <td>Prodct</td>
                        <td>Toyota Axio Ex 2017</td>
                        <td>Arafat Islam<br> Sector-5,Uttora</td>
                        <td>Arafat Islam<br> customar@gmail.com</td>
                        <td class="bg-success align-middle">call Back Later</td>
                        <td>Sazzad hossain</td>
                        <td class="bg-danger align-middle">High</td>
                        <td class="text-center">
                          <div class="d-flex flex-column justify-centent-center">
                            <a href="{{ route('sales.add_loan_information')}}" class="btn btn-sm btn-primary p-1"><i class="fas fa-edit "></i> Update</a>
                          </div>
                          <div class="d-flex flex-row justify-content-between py-1">
                            
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fas fa-phone-volume text-md text-dark"></i> </a>
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fas fa-envelope text-md text-dark"></i>  </a>
                            <a href="{{ route('sales.add_loan_information')}}" class="text-dark"><i class="fab fa-facebook-messenger text-md text-dark"></i>  </a>
                         
                          </div>

                          </td>
                        
                      </tr>
                      <tr>
                        <td style="border-left: 2px solid red ">02</td>
                        <td>03/Nov/2022</td>
                        <td>Prodct</td>
                        <td>Toyota Axio Ex 2017</td>
                        <td>Arafat Islam<br> Sector-5,Uttora</td>
                        <td>Arafat Islam<br> customar@gmail.com</td>
                        <td class="bg-info align-middle">call Back Later</td>
                        <td>Sazzad hossain</td>
                        <td class="bg-danger align-middle">High</td>
                        <td class="text-center">
                          <div class="d-flex flex-column justify-centent-center">
                            <a href="{{ route('sales.add_loan_information')}}" class="btn btn-sm btn-success p-1"><i class="fas fa-edit "></i> Update</a>
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
                  Pending
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered">
                    <thead class="bg-gray">
                      <tr>
                        <th>Sl </th>
                        <th>Initiated Date </th>
                        <th>Looking to</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Contact</th>
                        <th>Action</th>
                        <th>Assign to</th>
                        <th>Potential</th>
                        <th class="text-center">Update</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="border-left: 2px solid #ffa600 ">01</td>
                        <td>03/Nov/2022</td>
                        <td>Prodct</td>
                        <td>Toyota Axio Ex 2017</td>
                        <td>Arafat Islam<br> Sector-5,Uttora</td>
                        <td>Arafat Islam<br> customar@gmail.com</td>
                        <td class="bg-warning align-middle">call Back Later</td>
                        <td>Sazzad hossain</td>
                        <td class="bg-warning align-middle">High</td>
                        <td class="text-center">
                          <div class="d-flex flex-column justify-centent-center">
                            <a href="{{ route('sales.add_loan_information')}}" class="btn btn-sm btn-primary p-1"><i class="fas fa-edit "></i> Update</a>
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
                  Complete
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered">
                    <thead class="bg-gray">
                      <tr>
                        <th>Sl </th>
                        <th>Initiated Date </th>
                        <th>Looking to</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Contact</th>
                        <th>Action</th>
                        <th>Assign to</th>
                        <th>Potential</th>
                        <th class="text-center">Update</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="border-left: 2px solid #007bff ">01</td>
                        <td>03/Nov/2022</td>
                        <td>Prodct</td>
                        <td>Toyota Axio Ex 2017</td>
                        <td>Arafat Islam<br> Sector-5,Uttora</td>
                        <td>Arafat Islam<br> customar@gmail.com</td>
                        <td class="bg-success align-middle">call Back Later</td>
                        <td>Sazzad hossain</td>
                        <td class="bg-primary align-middle">Low</td>
                        <td class="text-center">
                          <div class="d-flex flex-column justify-centent-center">
                            <a href="{{ route('sales.add_loan_information')}}" class="btn btn-sm btn-primary p-1"><i class="fas fa-edit "></i> Update</a>
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