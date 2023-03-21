@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Report Pannel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Report Pannel</li>
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
          <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Cash & Bank</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.daily_cash_book_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>  Daily Cash Book</a></li></h6>
                      <h6><li><a href="{{route('accounting.date_wise_bank_statement')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Date Wise Bank Statement</a></li></h6>
                      <h6><li><a href="{{route('accounting.daily_transactin_details')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>  Daily Transaction Details</a></li></h6>
                      <h6><li><a href="{{route('accounting.daily_voucher_list')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Daily Voucher List</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
          <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Customer Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.custome_history_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Customer History</a></li></h6>
                      <h6><li><a href="{{route('accounting.date_wise_customer_payment')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Date Wise Customer Payment</a></li></h6>
                      <h6><li><a href="{{route('accounting.branch_wise_balance')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Branch Wise Balance</a></li></h6>
                      <h6><li><a href="{{route('accounting.company_wise_balance')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Company Wise Balance</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
          <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Supplier Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.supplier_history_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Supplier History</a></li></h6>
                      <h6><li><a href="{{route('accounting.date_wise_supplier_payment')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Date Wise Supplier Payment</a></li></h6>
                      <h6><li><a href="{{route('accounting.branch_wise_balance_supplier')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Branch Wise Balance</a></li></h6>
                      <h6><li><a href="{{route('accounting.company_wise_balance_supplier')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Company Wise Balance</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
           <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Income & Expense Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.monthly_expense_details')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Monthly Expense Details</a></li></h6>
                      <h6><li><a href="{{route('accounting.date_wise_expense_summary')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Date Wise Expense Summary</a></li></h6>
                      <h6><li><a href="{{route('accounting.monthly_income_details')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Monthly Income Details</a></li></h6>
                      <h6><li><a href="{{route('accounting.date_wise_income_summary')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Date Wise Income Summary</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
           <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Ledger Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.chart_of_accounting_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Chart of Accounting</a></li></h6>
                      <h6><li><a href="{{route('accounting.monthly_general_ledger_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Monthly General Ledger</a></li></h6>
                      <h6><li><a href="{{route('accounting.date_wise_general_ledger')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Date Wise General Ledger</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
            <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Profit & Loss Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.yearly_profit_loss_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Yearly Profit & Loss</a></li></h6>
                      <h6><li><a href="{{route('accounting.monthly_profit_loss_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Monthly Profit & Loss</a></li></h6>
                      <h6><li><a href="{{route('accounting.vehicle_profit_loss_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Vehicle Wise Profit & Loss</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
            <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Balance Sheet Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.yearly_trial_balance')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Yearly Trial Balance</a></li></h6>
                      <h6><li><a href="{{route('accounting.date_wise_trial_balance')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Date Wise Trial Balance</a></li></h6>
                      <h6><li><a href="{{route('accounting.balance_sheet_report')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Balance Sheet</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
          <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">Direct Cost & Sale Processing Payment</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.direct_cost_invoice_payment_history')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Direct Cost Invoice & Payment History</a></li></h6>
                      <h6><li><a href="{{route('accounting.sale_processing_payment_history')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i>Sale Processing Payment History</a></li></h6>
                      <h6><li><a href="{{route('accounting.sale_processing_payment_details')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Sale Processing Payment Details</a></li></h6>
                    </ul>
                  </div>              
              </div>      
          </div>
           <div class="col-lg-4 col-md-4 com-sm-12  ">
            <div class="card card-outline card-success">
                  <div class="card-header">
                      <h2 class="card-title fwbold">LC Report</h2>
                  </div>                  
                  <div class="card-body ">
                    <ul style="list-style-type: none;">
                     <h6> <li><a href="{{route('accounting.pending_bl_release')}}" class="nav-link"><i class="fas fa-star" style="font-size: 20px; color:DeepSkyBlue"></i> Pending BL Release</a></li></h6>
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