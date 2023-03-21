@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Window Sticker Information </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Window Sticker Information </li>
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
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="date" class="form-control" id="inputEmail3" value="Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD,  5 seater)" name="">
                       
                      </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Vehicle Type</label>
                    <div class="col-sm-4">
                      <select class="form-control select2 w100" name="">
                        <option>Select Vehicle Type</option>
                        <option selected>MD. Harun</option>
                      </select> 
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vin/Chassis No </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="text" class="form-control" id="inputEmail3" readonly value="GM4-232425" name="">
                       
                      </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Loan Available</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                        <input type="checkbox">
                        </span>
                        </div>
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Up to 70%" readonly value="" name="">
                        </div>
                    </div>
                 
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Engine Number </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="text" class="form-control" id="inputEmail3" value="N/A" readonly name="">
                       
                      </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Special Feature</label>
                    <div class="col-sm-4">
                      <textarea class="form-control" rows="2" name="pe_address" spellcheck="false" ></textarea>
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Year of Manufacture </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="text" class="form-control" id="inputEmail3" value="2017" readonly name="">
                       
                      </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Price Type</label>
                    <div class="col-sm-4">
                      <select class="form-control select2 w100" name="">
                        <option>Select Price Type</option>
                        <option selected>Asking Price</option>
                      </select> 
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Exterior Color </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="text" class="form-control" id="inputEmail3" value="black" readonly name="">
                       
                      </div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Price</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" value="22200000" readonly name="">
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Interior Color </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="text" class="form-control" id="inputEmail3" value="black" readonly name="">
                       
                      </div>
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Mileage </label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          
                        <input type="text" class="form-control" id="inputEmail3" value="340000.00" readonly name="">
                       
                      </div>
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vehicle Description </label>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info"><i class="fas fa-print"></i> Print</button>
                  <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                  <button type="reset" class="btn btn-primary"><i class="fas fa-list"></i> List</button>
                </div>
                <!-- /.card-footer -->
              </form>
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