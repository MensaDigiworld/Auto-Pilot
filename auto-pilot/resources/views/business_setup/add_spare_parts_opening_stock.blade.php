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
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('list-spare-parts-open-stock')}}" class="btn float-right btn-success p-1"><i class="fas fa-list"></i> List of Spare Parts Opening Stock</a>
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
          <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card">
              <div class="card-header">
            <div class="row">
                      <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Supplier</label>
                        
                            <select class="form-control select2 w100" name="">
                              <option>Select Supplier</option>
                              <option>January</option>
                            </select> 
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6 col-md-6">
                      
                  </div>
                      
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Spare Parts</label>
                      
                          <select class="form-control select2 w100" name="">
                            <option>Select Spare Parts</option>
                            <option>2000</option>
                          </select> 
                      </div>
                  </div>

                  <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Price</label>
                      
                          <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="" value="" name="">
                      </div>
                  </div>
                  <div class="col-sm-12 col-lg-2 col-md-2">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Quantity</label>
                    
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="" value="" name="">
                    </div>
                  </div>

                 
                  <div class="col-sm-12 col-lg-3 col-md-3">
                    {{-- <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Quick Search</label>
                    
                        <input type="text" class="form-control" placeholder="Search Area">

                          <button type="button" class="btn btn-info"> <i class="fas fa-search"></i> Search!</button>
                    </div> --}}

                    <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Amount</label>
                      <div class="input-group input-group-sm">
                      <input type="search" class="form-control form-control-sm" placeholder="" name="">
                      <div class="input-group-append">
                      <button type="submit" class="btn btn-lg btn-info">
                      <i class="fas fa-plus"></i> Add
                      </button>
                      </div>
                      </div>
                      </div>
                </div>

            

              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Spare Parts </th>
                      <th>Name</th>
                      <th>Price </th>
                      <th>Quanttity</th>
                      <th>Amount</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Android DVD Player</td>
                      <td>TOKYO MOTORS</td>
                      <td>50.00</td>
                      <td>2</td>
                      <td>100.00</td>
                      <td class="text-center">
                      <a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                      <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Remove</a></td>
                      
                    </tr>
                  </tbody>
                </table>
                <div class="h4 text-bold text-right">Sub Total: 100.00/-</div>
              </div>
              <!-- /.card-body -->
            </div>
            

          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">


            <form action="#" class="form-horizontal" method="POST">
              @csrf
              <div class="card-body">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Code</label>
                      
                          
                            <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="" value="CRDSPH000000000003" name="exp_date" readonly>
                          

                      </div>
                  </div>
                  <div class="col-sm-12 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Fiscal Year</label>
                    
                        <div class="input-group">
                                            
                          <select class="form-control form-control-sm" name="supplier">
                            <option>2000</option>
                            <option>2022</option>
                            
                          </select> 
                        
                        </div> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 col-md-12">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Total Quantity</label>
                  
                      
                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="2" name="exp_date" readonly>
                      

                  </div>
                </div>

                <div class="col-sm-12 col-lg-12 col-md-12">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Net Amount</label>
                  
                      
                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="100" name="exp_date" readonly>
                        <div class="h4 text-bold text-right">৳: 100.00</div>
                      

                  </div>
                </div>

                <div class="col-sm-12 col-lg-12 col-md-12">
                  <div class="form-group">
                    <textarea class="form-control form-control-sm" rows="1" placeholder="Write something about opening stock..." name="pe_address" spellcheck="false"></textarea>
                      

                  </div>
                </div>
              
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-success col-sm-12 col-lg-6 col-md-6"> Confirm</button>
                <button type="submit" class="btn btn-danger col-sm-12 col-lg-6 col-md-6 float-left">Remove</button>
                <br>
                <em class="pt-3 col-sm-12 col-lg-12 col-md-12">NB: Please Check all the information carefully,before clicking on the save button</em>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection