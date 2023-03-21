@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Vehicles Pending for Import
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicles Pending for Import
              </li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('lc.new-proforma-invoice')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add new Proforma</a>
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
              <div class="card-header">
            <div class="row">
                <div class="col-sm-12 col-lg-2 col-md-2">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Month</label>
                    
                        <select class="form-control select2" name="month">
                          <option>Select Month</option>
                          <option value="01">January</option>
                          <option value="02">February</option>
                          <option value="03">March</option>
                          <option value="04">April</option>
                          <option value="05">May</option>
                          <option value="06">June</option>
                          <option value="07">July</option>
                          <option value="08">August</option>
                          <option value="09">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                        </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-1 col-md-1">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Year</label>
                    
                        <select class="form-control select2" name="year">
                          <option>Select Year</option>
                          <option value="2023">2023</option>
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                          <option value="2011">2011</option>
                          <option value="2010">2010</option>
                          <option value="2009">2009</option>
                          <option value="2008">2008</option>
                          <option value="2007">2007</option>
                          <option value="2006">2006</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                          <option value="1999">1999</option>
                          <option value="1998">1998</option>
                          <option value="1997">1997</option>
                          <option value="1996">1996</option>
                          <option value="1995">1995</option>
                          <option value="1994">1994</option>
                          <option value="1993">1993</option>
                          <option value="1992">1992</option>
                          <option value="1991">1991</option>
                          <option value="1990">1990</option>
                          <option value="1989">1989</option>
                          <option value="1988">1988</option>
                          <option value="1987">1987</option>
                          <option value="1986">1986</option>
                          <option value="1985">1985</option>
                          <option value="1984">1984</option>
                          <option value="1983">1983</option>
                          <option value="1982">1982</option>
                          <option value="1981">1981</option>
                        </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Manufacturer</label>
                    
                        <select class="form-control select2" name="year" >
                          <option>Select Manufacturer</option>
                          <option>Honda</option>
                        </select> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 col-md-2">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-form-label">Model</label>
                  
                      <select class="form-control select2" name="model" >
                        <option>Select Model</option>
                        <option>Honda</option>
                      </select> 
                  </div>
              </div>
            <div class="col-sm-12 col-lg-2 col-md-2">
              <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">Supplier</label>
              
                  <select class="form-control select2" name="supplier" >
                    <option>Select Supplier</option>
                    <option>January</option>
                  </select> 
              </div>
          </div>

          <div class="col-sm-12 col-lg-3 col-md-3">

            <div class="form-group">
              <label for="inputEmail3" class="col-form-label">Quick Search</label>
              <div class="input-group input-group-sm">
              <input type="search" class="form-control form-control-sm" placeholder="eg: Vehicle/Chassis/Tracking Code etc...">
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Purchase Date</th>
                      <th>Product </th>
                      <th>Vin/Chassis No</th>
                      <th>Supplier</th>
                      <th>Price(USD)</th>
                      <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>10-Oct-2022</td>
                      <td>Toyota-Prius (ZVW50, S Touring Selection, 1800cc, Auto, 2WD, 5 seater)</td>
                      <td>ZVW50-8075524</td>
                      <td>Cross Continent Corporation</td>
                      <td>10700.00</td>
                      <td class="text-center">
                        <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#vehicle_import"> <i class="fas fa-eye"></i> Details</a>
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