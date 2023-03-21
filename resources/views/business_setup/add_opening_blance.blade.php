@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Spare Parts Opening Stock</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Spare Parts Opening Stock</li>
              
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

          
          <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">Transaction Entry</h3>
              </div>

            <form action="#" class="form-horizontal" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Fiscal Year</label>
                  <div class="col-sm-10">
                    <select class="form-control form-control-sm" name="supplier">
                      <option>2000</option>
                      <option>2022</option>
                      
                    </select> 
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="DATE" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Business Name" value="" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Ledger</label>
                  <div class="col-sm-10">
                    <select class="form-control form-control-sm select2" name="supplier">
                      <option>Type Account Name</option>
                      <option>2000</option>
                      <option>2022</option>
                      
                    </select> 
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vin/Chassis No</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Emount" value="" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Balance</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Emount" value="" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks</label>
                  <div class="col-sm-10">
                    <textarea class="form-control form-control-sm" rows="3" placeholder="Write something about transaction..." name="address"></textarea>
                  </div>
                </div>
             
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-success col-sm-12 col-lg-3 col-md-3"> Add</button>               
              </div>
              <!-- /.card-footer -->
            </form>
            </div>
          </div>

          <div class="col-lg-7 col-md-7 col-sm-12">

            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">Transaction List</h3>
             
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table class="table table-bordered mb-5">
                  <thead>
                    <tr>
                      <th>Ledger Name</th>
                      <th>Vin/Chassis No</th>
                      <th>Balance </th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Cash Account</td>
                      <td>555</td>
                      <td>50000.00</td>
                      <td class="text-center">
                      <a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                      <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                      
                    </tr>
                  </tbody>
                    <tr>
                        <th colspan="3" class="text-right">
                          Debit=50000.00, Credit=0, Surplus/Capital=50000.00
                        </th>
                        <th>
                         
                        </th>
                    </tr>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-danger col-sm-12 col-lg-2 col-md-2 float-right"><i class="fas fa-times-circle"></i> Cancel</button>               
                <button type="submit" class="btn btn-success col-sm-12 col-lg-2 col-md-2 float-right mx-lg-1"> <i class="fas fa-check"></i> Approve</button>               
                <button type="submit" class="btn btn-warning col-sm-12 col-lg-2 col-md-2 float-right"> <i class="fas fa-trash-alt"></i> Remove</button>               
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