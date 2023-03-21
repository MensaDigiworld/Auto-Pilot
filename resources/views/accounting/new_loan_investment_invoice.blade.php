@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Loan/Investment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Accounting</a></li>
              <li class="breadcrumb-item active"><a href="#">Add New Loan/Investment</a></li>
              
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
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Business Name" value="{{ date('Y-m-d') }}" name="name">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Loan</label>
                      <div class="col-sm-10">
                        <select class="form-control select2" name="">
                          <option>Select Loan</option>
                          <option>2000</option>
                          <option>2022</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Loan Amount</label>
                      <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Amount" value="" name="">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Deposit Account</label>
                      <select class="form-control select2" name="">
                        <option>Select Account</option>
                        <option>2000</option>
                        <option>2022</option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Remarks</label>
                      <div class="input-group input-group-sm">
                        <input type="number" class="form-control form-control-sm" placeholder="Remarks" value="">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-sm btn-success">
                            <i class="fa fa-plus"></i> Add
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                      <div class="table-responsive">
                        <table class="table table-bordered mb-5">
                          <thead class="bg-navy">
                            <tr>
                              <th>Date</th>
                              <th>Deposited Acount</th>
                              <th>Amount </th>
                              <th class="text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class="text-center">
                              <a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                              <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                              
                            </tr>
                          </tbody>
                            {{-- <tr>
                                <th colspan="3" class="text-right text-lg">
                                  Total Amount =50000.00
                                </th>
                                <th>
                                
                                </th>
                            </tr> --}}
                          <tfoot>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        {{-- <button type="submit" class="btn btn-primary btn-sm col-sm-12 col-lg-2 col-md-2 float-left"><i class="fas fa-eye"></i> View History</button>                --}}
                        <button type="submit" class="btn btn-success col-sm-12 col-lg-2 col-md-2 float-right mx-lg-1"> <i class="fas fa-check"></i> Confirm</button>               
                        <button type="submit" class="btn btn-danger col-sm-12 col-lg-2 col-md-2 float-right"> <i class="fas fa-trash-alt"></i> Remove</button>               
                      </div>
                   
                  </div>
                </div>
                
                  
    
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