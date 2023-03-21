@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Terms & Condition</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Terms & Condition</li>
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
          <div class="col-lg-8 col-8">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Terms & Condition</h3>
                <a href="{{ route('list-terms-condition')}}" class="card-title float-right btn-success btn">List of Terms & Condition</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="COMPNY000000000002" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="type">
                        <option selected>Select Type</option>
                        <option>Sales</option>
                        <option>Parts Sales</option>
                        <option>Pre Order</option>
                        
                      </select>                   
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Subcategory</label>
                    <div class="col-sm-10">
                      <select class="form-control select2 w100" name="type">
                        <option selected>Select Subcategory</option>
                        <option>Sales</option>
                        <option>Parts Sales</option>
                        <option>Pre Order</option>
                        
                      </select>
                      <a href="" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#subcategory"> <i class="fas fa-plus"></i></a>                   
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Condition</label>
                    <div class="col-sm-10">
                      
                      <textarea class="form-control" rows="3" placeholder="Condition" name="condition">{{ old('condition')}}</textarea>
                    </div>
                  </div>


                 
                  {{-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div> --}}
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

  <div class="modal fade" id="subcategory" aria-hidden="true" style="display: none;">
    <div class="modal-dialog md">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">New Subcategorie</h4>
    </div>
    <div class="modal-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">Sub Categorie Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="inputEmail3" value="" required>
        </div>
      </div>
    </div>
    <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
    
    </div>
    
    </div>
@endsection