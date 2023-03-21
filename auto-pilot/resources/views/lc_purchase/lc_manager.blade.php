@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> LC Manager</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">LC Manager</li>
              <li class="breadcrumb-item active"></li>
              <a href="{{ route('lc.new-proforma-invoice')}}" class="btn float-right btn-primary p-1"><i class="fas fa-plus"></i> Add New Proforma</a>
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
              <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="form-group">
                  <div class="input-group">
                  <input type="search" class="form-control" placeholder="Type your keywords here" value="">
                  <div class="input-group-append">
                  <button type="submit" class="btn btn-lg btn-info">
                  <i class="fa fa-search text-md"></i>  Search
                  </button>
                  </div>
                  </div>
                  </div>
              </div>

            

              </div>
              </div>
              <!-- /.card-header -->

            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-12 col-12">

            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block text-lg pb-2">
                     <div class="card-tools">
                      <span class="badge bg-warning">1</span> Proforma Invoice 
                    </div> 
                    </div>
                    <div class="fw600 d-block">
                      PI No: <span class="fw100"> TM15/06/22</span> 
                    </div>
                    <div class="fw600 d-block">
                      IRC No: <span class="fw100"> 788777</span> 
                    </div>
                    <div class="fw600 d-block">
                      Supplier: <span class="fw100"> WD XYZ Auto</span> 
                    </div>
                    <div class="fw600 d-block text-danger">
                      IRC: <span class="fw100"> </span> 
                    </div>
                    <div class="fw600 d-block">
                      <a href="{{ route('lc.edit_proforma_invoice')}}" class="text-primary border-right border-dark d-inline pr-2">Amend Proforma Invoice</a>
                      <a href="" data-toggle="modal" data-target="#proforma" class="text-primary d-inline px-2">View Details</a> 
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block  text-lg pb-2">
                      Insurance
                    </div>
                    <div class="fw600 d-block">
                      ID No: <span class="fw100"> NA11</span> 
                    </div>
                    <div class="fw600 d-block">
                      Company: <span class="fw100">  PRIME INSURANCE CO</span> 
                    </div>
                    <div class="fw600 d-block">
                      <a href="" class="text-primary border-right border-dark d-inline pr-2">Amend Insurance</a>
                      <a href="" data-toggle="modal" data-target="#insurance" class="text-primary d-inline px-2">View Details</a> 
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block  text-lg pb-2">
                      Letter of Credit
                    </div>
                    <div class="fw600 d-block float-right bg-warning p-1 text-lg">
                      LC No: TM0601
                    </div>
                    <div class="fw600 d-block">
                      Bank: <span class="fw100"> EXIM BANK-NORTH END-GULSHAN-9955</span> 
                    </div>
                        <div class="fw600 d-block text-danger">
                      Opening Date : <span class="fw100"></span> 
                    </div>
                      <div class="fw600 d-block float-right">
                      <p class="text-success m-1"> Total Vehicle : 09</p>
                      <p class="text-success m-1"> Release : 06</p>
                      <p class="text-danger m-1"> Remaning : 03</p>
                    </div>
                    <div class="fw600 d-block">
                      <a href="" class="text-primary border-right border-dark d-inline pr-2">Amend LC</a>
                      <a href="" data-toggle="modal" data-target="#letter_credit" class="text-primary d-inline px-2">View Details</a> 
                    </div>
                  </div>
                  

                </div>

                <div class="table-responsive p-0" style="height: 200px;">
                  <table class="table table-sm table-head-fixed text-nowrap table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">Shipping Date & ETA </th>
                        <th class="text-center">Bill of Lading </th>
                        <th class="text-center">Noting & Assessment </th>
                        <th class="text-center">Custom Duty </th>
                        <th class="text-center">Vehicle Release Date</th>
                        <th class="text-center">Bill of Entry</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-sm">
                      <tr>
                          <td colspan="6">
                            <div class="card-tools">
                             <span class="badge bg-navy">1</span> Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater) - 2016 , Vin/Chassis No: GM4-232425
                            </div> 
                        </td>

                      </tr>
                      <tr>
                        <td> 
                          <div class="d-block"> Shipping Date: 18-Jun-2022 <a href="" class="text-info"> <i class="fas fa-edit"></i></a></div>
                          <div class="d-block"> ETA: 18-Jul-2022 <a href="" class="text-info"> <i class="fas fa-edit"></i></a></div>
                        </td>
                        <td>
                          <div class="d-block">12311</div>
                          <div class="d-block"><a href="{{ route('lc.new_bill_lading')}}" class="text-info"> <i class="fas fa-edit"></i> Bill of Lading</a></div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> BL Location: Overseas</a></div>
                        </td>
                        <td>
                          <div class="d-block">Noting Date: 08-Aug-2022</div>
                          <div class="d-block">Assessment Date: 08-Aug-2022</div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> Date</a></div>
                        </td>
                          <td> 
                            <a href="{{ route('lc.new_bill_duty')}}" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Duty</a>
                          </td>
                        <td>
                          <div class="d-block">08-Aug-2022</div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> Date</a></div>
                        </td>

                        <td> <a href="{{ route('lc.new_bill_entry')}}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Add Bill of Entry</a></td>
                        <td class="text-right">
                          <div class="d-block"><a href="{{ route('lc.new_costing')}}" class="btn btn-sm btn-info"> <i class="fas fa-file"></i>  Costing</a></div>
                          <div class="d-block"><i class="fas fa-check"></i> Approve</div>
                        </td>
                        
                      </tr>
                      <tr>
                        <td colspan="6"> 
                          <div class="card-tools">
                            <span class="badge bg-navy">2</span> Honda-Vezel (RU3, Hybrid, 1500cc, Auto, 2WD, 5 seater) - 2019 , Vin/Chassis No: RU3-787990
                           </div>
                          </td>

                    </tr>
                    <tr>
                      <td>
                        <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#shipping_date"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td> <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#bl_location"> <i class="fas fa-clander"></i> Add BL Location</a>
                      </td>
                      <td> <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#assessment"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="{{ route('lc.new_bill_duty')}}" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Duty</a>
                      </td>
                      <td> <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#vehicle_release"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="{{ route('lc.new_bill_entry')}}" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Bill of Entry</a>
                      </td>
                      <td class="text-right">
                        <div class="d-block"><a href="{{ route('lc.new_costing')}}" class="btn btn-sm btn-info"> <i class="fas fa-file"></i>  Costing</a></div>
                        <div class="d-block text-success"><i class="fas fa-check text-success"></i> Approve</div>
                      </td>
                    
                    </tr>
                    </tbody>
                  </table>
              
                </div>  
                
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-12 col-12">

            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block text-lg pb-2">
                      Proforma Invoice
                    </div>
                    <div class="fw600 d-block">
                      PI No: <span class="fw100"> TM15/06/22</span> 
                    </div>
                    <div class="fw600 d-block">
                      IRC No: <span class="fw100"> 788777</span> 
                    </div>
                    <div class="fw600 d-block">
                      Supplier: <span class="fw100"> WD XYZ Auto</span> 
                    </div>
                    <div class="fw600 d-block">
                      <a href="{{ route('lc.edit_proforma_invoice')}}" class="text-primary border-right border-dark d-inline pr-2">Amend Proforma Invoice</a>
                      <a href="" data-toggle="modal" data-target="#insurance" class="text-primary d-inline px-2">View Details</a> 
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block  text-lg pb-2">
                      Insurance
                    </div>
                    <div class="fw600 d-block">
                      <a href="{{ route('lc.new_insurance')}}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i>  Add Insurance Policy</a>
                    </div>
                    
                  </div>

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block  text-lg pb-2">
                      Letter of Credit
                    </div>
                    <div class="fw600 d-block">
                      <a href="{{ route('lc.new_lc')}}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i>  Add Letter of Credit</a>
                    </div>
                  </div>

                </div>

                <div class="table-responsive p-0" style="height: 200px;">
                  <table class="table table-sm table-head-fixed text-nowrap table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">Shipping Date & ETA </th>
                        <th class="text-center">Bill of Lading </th>
                        <th class="text-center">Noting & Assessment </th>
                        <th class="text-center">Vehicle Release Date</th>
                        <th class="text-center">Bill of Entry</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-sm">
                      <tr>
                          <td colspan="6"> Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater) - 2016 , Vin/Chassis No: GM4-232425</td>

                      </tr>
                      <tr>
                        <td> 
                          <div class="d-block"> Shipping Date: 18-Jun-2022 <a href="" class="text-info"> <i class="fas fa-edit"></i></a></div>
                          <div class="d-block"> ETA: 18-Jul-2022 <a href="" class="text-info"> <i class="fas fa-edit"></i></a></div>
                        </td>
                        <td>
                          <div class="d-block">12311</div>
                          <div class="d-block"><a href="{{ route('lc.new_bill_lading')}}" class="text-info"> <i class="fas fa-edit"></i> Bill of Lading</a></div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> BL Location: Overseas</a></div>
                        </td>
                        <td>
                          <div class="d-block">Noting Date: 08-Aug-2022</div>
                          <div class="d-block">Assessment Date: 08-Aug-2022</div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> Date</a></div>
                        </td>
                        <td>
                          <div class="d-block">08-Aug-2022</div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> Date</a></div>
                        </td>
                        <td> <a href="{{ route('lc.new_bill_entry')}}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Add Bill of Entry</a></td>
                        <td class="text-right">
                          <div class="d-block"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-file"></i>  Costing</a></div>
                          <div class="d-block"><i class="fas fa-check"></i> Approve</div>
                        </td>
                        
                      </tr>
                      <tr>
                        <td colspan="6"> Honda-Vezel (RU3, Hybrid, 1500cc, Auto, 2WD, 5 seater) - 2019 , Vin/Chassis No: RU3-787990</td>

                    </tr>
                    <tr>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td>
                      </td>
                    
                    </tr>
                    </tbody>
                  </table>
              
                </div>  
                
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- ./col -->
        </div>

        <div class="row">
          <div class="col-lg-12 col-12">

            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block text-lg pb-2">
                      Proforma Invoice
                    </div>
                    <div class="fw600 d-block">
                      PI No: <span class="fw100"> TM15/06/22</span> 
                    </div>
                    <div class="fw600 d-block">
                      IRC No: <span class="fw100"> 788777</span> 
                    </div>
                    <div class="fw600 d-block">
                      Supplier: <span class="fw100"> WD XYZ Auto</span> 
                    </div>
                    <div class="fw600 d-block">
                      <a href="{{ route('lc.edit_proforma_invoice')}}" class="text-primary border-right border-dark d-inline pr-2">Amend Proforma Invoice</a>
                      <a href="" data-toggle="modal" data-target="#insurance" class="text-primary d-inline px-2">View Details</a> 
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block  text-lg pb-2">
                      Insurance
                    </div>
                    <div class="fw600 d-block">
                      ID No: <span class="fw100"> NA11</span> 
                    </div>
                    <div class="fw600 d-block">
                      Company: <span class="fw100">  PRIME INSURANCE CO</span> 
                    </div>
                    <div class="fw600 d-block">
                      <a href="" class="text-primary border-right border-dark d-inline pr-2">Amend Insurance</a>
                      <a href="" data-toggle="modal" data-target="#insurance" class="text-primary d-inline px-2">View Details</a> 
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="fw600 d-block  text-lg pb-2">
                      Letter of Credit
                    </div>
                    <div class="fw600 d-block float-right bg-warning p-3 text-lg">
                      LC No: TM0603
                    </div>
                    <div class="fw600 d-block">
                      Bank: <span class="fw100"> EXIM BANK-NORTH END-GULSHAN-9955</span> 
                    </div>
                    <div class="fw600 d-block">
                      Opening Date : <span class="fw100"></span> 
                    </div>
                    <div class="fw600 d-block">
                      <a href="" class="text-primary border-right border-dark d-inline pr-2">Amend LC</a>
                      <a href=""  data-toggle="modal" data-target="#insurance" class="text-primary d-inline px-2">View Details</a> 
                    </div>
                  </div>

                </div>

                <div class="table-responsive">

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">Shipping Date & ETA </th>
                        <th class="text-center">Bill of Lading </th>
                        <th class="text-center">Noting & Assessment </th>
                        <th class="text-center">Vehicle Release Date</th>
                        <th class="text-center">Bill of Entry</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-sm">
                      <tr>
                          <td colspan="6"> Honda-Grace (GM4, Hybrid EX, 1500cc, Auto, 2WD, 5 seater) - 2016 , Vin/Chassis No: GM4-232425</td>

                      </tr>
                      <tr>
                        <td> 
                          <div class="d-block"> Shipping Date: 18-Jun-2022 <a href="" class="text-info"> <i class="fas fa-edit"></i></a></div>
                          <div class="d-block"> ETA: 18-Jul-2022 <a href="" class="text-info"> <i class="fas fa-edit"></i></a></div>
                        </td>
                        <td>
                          <div class="d-block">12311</div>
                          <div class="d-block"><a href="{{ route('lc.new_bill_lading')}}" class="text-info"> <i class="fas fa-edit"></i> Bill of Lading</a></div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> BL Location: Overseas</a></div>
                        </td>
                        <td>
                          <div class="d-block">Noting Date: 08-Aug-2022</div>
                          <div class="d-block">Assessment Date: 08-Aug-2022</div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> Date</a></div>
                        </td>
                        <td>
                          <div class="d-block">08-Aug-2022</div>
                          <div class="d-block"><a href="" class="text-info"> <i class="fas fa-edit"></i> Date</a></div>
                        </td>
                        <td> <a href="{{ route('lc.new_bill_entry')}}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Add Bill of Entry</a></td>
                        <td class="text-right">
                          <div class="d-block"><a href="" class="btn btn-sm btn-info"> <i class="fas fa-file"></i>  Costing</a></div>
                          <div class="d-block"><i class="fas fa-check"></i> Approve</div>
                        </td>
                        
                      </tr>
                      <tr>
                        <td colspan="6"> Honda-Vezel (RU3, Hybrid, 1500cc, Auto, 2WD, 5 seater) - 2019 , Vin/Chassis No: RU3-787990</td>

                    </tr>
                    <tr>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td><a href="" class="btn btn-sm btn-info"> <i class="fas fa-clander"></i> Add Date</a>
                      </td>
                      <td>
                      </td>
                    
                    </tr>
                    </tbody>
                  </table>
              
                </div>  
                
              </div>
              <!-- /.card-body -->
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