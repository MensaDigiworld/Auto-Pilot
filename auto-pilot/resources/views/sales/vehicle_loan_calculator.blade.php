@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b>Car Finance Calculator</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Loan Calculator</li>
              <li class="breadcrumb-item"></li>
              
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
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">VEHICLE PRICE (BDT)</label>                
                   <input type="number" class="form-control">
                  </div>
               </div>
             </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">DOWN PAYMENT (BDT)</label>                
                   <input type="number" class="form-control">
                  </div>
               </div>
             </div>

             <div class="row ">
                <div class="col-md-12 col-sm-12 col-lg-12">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">INTEREST RATE (%)</label>                
                   <input type="number" class="form-control">
                  </div>
               </div>
             </div>

              <div class="row ">
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-form-label">PAYMENT TYPE</label>                
                    <select class="form-control select2" name="month">
                      <option selected>Select</option>
                      <option>Returned</option>
                    </select> 
                  </div>
               </div>
             </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                 <div class="form-group">
                    <label class="control-label" for="LoanPeriod" id="lblLoanPeriod">LOAN PERIOD (8 YEAR(S))</label>
                    <table style="width:100%;">
                        <tbody><tr>
                            <td style="width:45px;">
                                <button type="button" class="btn btn-primary pm-btn" onclick="YearMinus();"><i class="fa fa-minus"></i></button>
                            </td>
                            <td id="LoanPeriodContext">
                                <input value="1" data-placement="top" data-toggle="tooltip" id="LoanPeriod" max="25" min="1" style="width:100%;" name="LoanPeriod" step="1" title="" id="LoanPeriod" type="range" data-original-title="8 Year/s" autocomplete="off"><div class="tooltip fade top" style="top: 401.281px; left: 675.625px; display: block;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1 Year/s</div></div>
                            </td>
                            <td style="width:45px; text-align:right;">
                                <button type="button" class="btn btn-primary pm-btn" onclick="YearPlus();"><i class="fa fa-plus"></i></button>
                            </td>
                        </tr>
                    </tbody></table>
                    <span class="field-validation-valid text-danger" data-valmsg-for="LoanPeriod" data-valmsg-replace="true"></span>
                </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-12 col-lg-12 col-sm-12">
                 <button type="submit" class="btn btn-success float-right"> <i class="fas fa-plus"></i><b> CALCULATE </b></button>
               </div>
             </div>
              </div>
          <!-- ./col -->
        </div>
         
        </div>
        <div class="col-lg-5  col-md-5 col-sm-10 mx-auto mt-5">
           <div class="card mt-5">
             <div class="card-body bg-olive custom-card-style">
               <div class="result-context ">
                          <div class="result">
                              <div class="item mt-2">
                                  <div><h3 class="text-bold">Total Installment:</h3></div>
                                  <h4><div class="amount">BDT: <span id="InstallmentAmount">0.00</span></div></h4>
                              </div>
                              <div class="item mt-2">
                                  <div><h3 class="text-bold">Installment Amount</h3></div>
                                  <h4><div class="amount">BDT: <span id="InstallmentAmount">0.00</span></div></h4>
                              </div>
                              <div class="item mt-2">
                                 <h3> <div  class="text-bold">Total Interest Payment</div></h3>
                                  <h4><div class="amount">BDT: <span id="TotalInterest">0.00</span></div></h4>
                              </div>
                              <div class="item mt-2">
                                  <h3><div class="text-bold">Total Amount to Pay</div></h3>
                                  <h4><div class="amount">BDT: <span id="TotalAmount">0.00</span></div></h4>
                              </div>
                              <div class="arrow"></div>
                          </div>
                      </div>

             </div>
           </div>
             </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

      
    </section>
    <!-- /.content -->
    
  </div>

  <script type="text/javascript">
function YearPlus()
{
    var value = parseInt(document.getElementById('LoanPeriod').value, 10);
    value = isNaN(value) ? 1 : value;
    value++;
    document.getElementById('LoanPeriod').value = value;
}

function YearMinus()
{
    var value = parseInt(document.getElementById('LoanPeriod').value, 10);
    value = isNaN(value) ? 25 : value;
    value--;
    document.getElementById('LoanPeriod').value = value;
}
  </script>

@endsection