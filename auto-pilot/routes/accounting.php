<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Accounting;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');


// Accounting

Route::group(['middleware' => ['auth'],'prefix' =>'Accounting'], function(){

  Route::get('/Dashboard', [Accounting::class, 'dashboard'])->name('accounting.dashboard');

  Route::get('/customer-payment-voucher', [Accounting::class, 'new_customer_receive_payment'])->name('accounting.new_customer_receive_payment');

  Route::get('/customer-payment-list', [Accounting::class, 'list_receive_customer_payment'])->name('accounting.list_receive_customer_payment');

  Route::get('/customer-refund', [Accounting::class, 'new_customer_refund'])->name('accounting.new_customer_refund');

  Route::get('/customer-refund-list', [Accounting::class, 'list_refund_customer_payment'])->name('accounting.list_refund_customer_payment');

  Route::get('/vehicle-profit-adjust', [Accounting::class, 'new_customer_profit_adjust'])->name('accounting.new_customer_profit_adjust');

  Route::get('/vehicle-profit-adjust-list', [Accounting::class, 'list_customer_profit_adjust'])->name('accounting.list_customer_profit_adjust');

  Route::get('/vehicle-loss-adjust', [Accounting::class, 'new_customer_profit_adjust_under'])->name('accounting.new_customer_profit_adjust_under');

  //Supplier

  Route::get('/vehicle-loss-adjust-list', [Accounting::class, 'list_customer_profit_adjust_under'])->name('accounting.list_customer_profit_adjust_under');

  Route::get('/supplier-payment-invoice-list', [Accounting::class, 'list_invoice_payment_supplier'])->name('accounting.list_invoice_payment_supplier');

  Route::get('/supplier-payment', [Accounting::class, 'new_payment_supplier'])->name('accounting.new_payment_supplier');

  Route::get('/supplier-invoice', [Accounting::class, 'new_invoice_supplier'])->name('accounting.new_invoice_supplier');

  Route::get('/supplier-invoice-list', [Accounting::class, 'list_invoice_supplier'])->name('accounting.list_invoice_supplier');

  Route::get('/supplier-payment-list', [Accounting::class, 'list_payment_supplier'])->name('accounting.list_payment_supplier');


  // Dealer
 
  
  Route::get('/dealer-pending-commission-list', [Accounting::class, 'list_dealer_pending_commission'])->name('accounting.list_dealer_pending_commission');

  Route::get('/dealer-receive-commission', [Accounting::class, 'new_dealer_receive_commission'])->name('accounting.new_dealer_receive_commission');

  Route::get('/dealer-receive-commission-list', [Accounting::class, 'list_dealer_receive_commission'])->name('accounting.list_dealer_receive_commission');

  // Vendor

  Route::get('/vendor-invoice-payment-list', [Accounting::class, 'list_vendor_invoice_payment'])->name('accounting.list_vendor_invoice_payment');

  Route::get('/vendor-payment', [Accounting::class, 'new_vendor_payment'])->name('accounting.new_vendor_payment');

  Route::get('/vendor-invoice', [Accounting::class, 'new_vendor_invoice'])->name('accounting.new_vendor_invoice');

  Route::get('/vendor-paid-invoice-list', [Accounting::class, 'list_vendor_paid_invoice'])->name('accounting.list_vendor_paid_invoice');

  Route::get('/vendor-invoice-list', [Accounting::class, 'list_vendor_invoice'])->name('accounting.list_vendor_invoice');

  // LC Adjustment

  Route::get('/lc-invoice-payment-list', [Accounting::class, 'list_lc_invoice_payment'])->name('accounting.list_lc_invoice_payment');

  Route::get('/lc-payment', [Accounting::class, 'new_lc_payment'])->name('accounting.new_lc_payment');

  Route::get('/lc-invoice', [Accounting::class, 'new_lc_invoice'])->name('accounting.new_lc_invoice');

  Route::get('/lc-paid-invoice-list', [Accounting::class, 'list_lc_payment'])->name('accounting.list_lc_payment');

  Route::get('/lc-invoice-list', [Accounting::class, 'list_lc_invoice'])->name('accounting.list_lc_invoice');

  // Accrued Expense & Adjustment

  Route::get('/accrued-expense-adjustment-list', [Accounting::class, 'list_accrued_expense_adjustment'])->name('accounting.list_accrued_expense_adjustment');

  Route::get('/accrued-expense-adjustment-payment', [Accounting::class, 'new_accrued_expense_adjustment'])->name('accounting.new_accrued_expense_adjustment');

  Route::get('/adjustment-invoice', [Accounting::class, 'new_adjustment_invoice'])->name('accounting.new_adjustment_invoice');

  Route::get('/adjusted-accrued-expense-list', [Accounting::class, 'list_adjustment_accrued'])->name('accounting.list_adjustment_accrued');

  Route::get('/accrued-expense-list', [Accounting::class, 'list_accrued_expense'])->name('accounting.list_accrued_expense');


  // Pre Accrued Expense & Adjustment

  Route::get('/pre-payment-accrued-expense-adjustment-list', [Accounting::class, 'list_pre_accrued_expense_adjustment'])->name('accounting.list_pre_accrued_expense_adjustment');

  Route::get('/pre-payment-accrued-expense-adjustment-payment', [Accounting::class, 'new_pre_accrued_expense_adjustment'])->name('accounting.new_pre_accrued_expense_adjustment');

  Route::get('/pre-payment-adjustment-invoice', [Accounting::class, 'new_pre_adjustment_invoice'])->name('accounting.new_pre_adjustment_invoice');

  Route::get('/pre-payment-adjusted-accrued-expense-list', [Accounting::class, 'list_pre_adjustment_accrued'])->name('accounting.list_pre_adjustment_accrued');

  Route::get('/pre-payment-accrued-expense-list', [Accounting::class, 'list_pre_accrued_expense'])->name('accounting.list_pre_accrued_expense');


  // Loan/Insvestment & Repayment

  Route::get('/loan-investment-repayment-list', [Accounting::class, 'list_loan_investment'])->name('accounting.list_loan_investment');

  Route::get('/new-loan-investment', [Accounting::class, 'new_loan_investment'])->name('accounting.new_loan_investment');

  Route::get('/new-loan-repayment', [Accounting::class, 'new_repayment'])->name('accounting.new_repayment');

  Route::get('/new-loan-investment-invoice', [Accounting::class, 'new_loan_investment_invoice'])->name('accounting.new_loan_investment_invoice');

  Route::get('/new-loan', [Accounting::class, 'new_loan'])->name('accounting.new_loan');

  Route::get('/loan-repayment-list', [Accounting::class, 'list_loan_repyament'])->name('accounting.list_loan_repyament');

  Route::get('/all-loan-investment-list', [Accounting::class, 'list_all_loan_investment'])->name('accounting.list_all_loan_investment');

  // Vehicle Reg. & Other Payment

  Route::get('/unpaid-reg-other-invoice-list', [Accounting::class, 'list_reg_other_invoice'])->name('accounting.list_reg_other_invoice');

  Route::get('/unpaid-reg-other-ammend', [Accounting::class, 'new_unpaid_reg_other_ammend'])->name('accounting.new_unpaid_reg_other_ammend');

  Route::get('/new-reg-other-payment', [Accounting::class, 'new_reg_other_payment'])->name('accounting.new_reg_other_payment');

  Route::get('/list-reg-other-payment', [Accounting::class, 'list_reg_other_payment'])->name('accounting.list_reg_other_payment');

   // Other Transaction

   Route::get('/list-other-transcation', [Accounting::class, 'list_other_transcation'])->name('accounting.list_other_transcation');

   Route::get('/new-other-transcation', [Accounting::class, 'new_other_transcation'])->name('accounting.new_other_transcation');

   // Voucher Void
  
   Route::get('/edit-voucher-void', [Accounting::class, 'edit_voucher_void'])->name('accounting.edit_voucher_void');

   Route::get('/list-voucher-void', [Accounting::class, 'list_voucher_void'])->name('accounting.list_voucher_void');

   Route::get('/list-voucher-void-remove', [Accounting::class, 'list_voucher_void'])->name('accounting.list_voucher_void_remove');

   Route::get('/all-voucher', [Accounting::class, 'list_all_voucher_void'])->name('accounting.list_all_voucher_void');

     //Chart of Account

   Route::get('/new-category', [Accounting::class, 'new_category_chart_account'])->name('accounting.new_category_chart_account');

   Route::get('/new-chart-of-account', [Accounting::class, 'new_chart_account'])->name('accounting.new_chart_account');

   Route::get('/list-category', [Accounting::class, 'list_category_chart_account'])->name('accounting.list_category_chart_account');

   Route::get('/list-chart-of-account', [Accounting::class, 'list_chart_account'])->name('accounting.list_chart_account');

   //Cheque

   Route::get('/new-cheque', [Accounting::class, 'new_active_cheque'])->name('accounting.new_active_cheque');

   Route::get('/bank-cheque-manager', [Accounting::class, 'new_cheque_manager'])->name('accounting.new_cheque_manager');

   Route::get('/list-cheque', [Accounting::class, 'list_cheque'])->name('accounting.list_cheque');

  //Bank/MFS Transaction Charge Setup

  Route::get('/payment-charge', [Accounting::class, 'new_payment_charge'])->name('accounting.new_payment_charge');

  Route::get('/payment-method', [Accounting::class, 'new_payment_method'])->name('accounting.new_payment_method');

  Route::get('/payment-charge-list', [Accounting::class, 'list_payment_charge'])->name('accounting.list_payment_charge');

  Route::get('/payment-method-list', [Accounting::class, 'list_payment_method'])->name('accounting.list_payment_method');

  // Fixed Asste

  Route::get('/new-fixed-asset', [Accounting::class, 'new_fixed_asset'])->name('accounting.new_fixed_asset');

  Route::get('/list-fixed-asset', [Accounting::class, 'list_fixed_asset'])->name('accounting.list_fixed_asset');

  //Bank account & MFS set up

  Route::get('/new-bank-account', [Accounting::class, 'new_bank_account'])->name('accounting.new_bank_account');

  Route::get('/new-mfs-account', [Accounting::class, 'new_mfs_account'])->name('accounting.new_mfs_account');

  Route::get('/new-bank', [Accounting::class, 'new_bank'])->name('accounting.new_bank');

  Route::get('/list-bank', [Accounting::class, 'list_bank'])->name('accounting.list_bank');

  Route::get('/list-bank-account', [Accounting::class, 'list_bank_account'])->name('accounting.list_bank_account');

  Route::get('/list-mfs-account', [Accounting::class, 'list_mfs_account'])->name('accounting.list_mfs_account');

  // Salary

  
  Route::get('/salary-setup', [Accounting::class, 'new_salary_setup'])->name('accounting.new_salary_setup');

  Route::get('/salary-payment', [Accounting::class, 'new_salary_payment'])->name('accounting.new_salary_payment');

  Route::get('/advanced-salary-loan', [Accounting::class, 'new_salary_loan'])->name('accounting.new_salary_loan');

  Route::get('/list-salary-payment', [Accounting::class, 'list_salary_payment'])->name('accounting.list_salary_payment');

  //----------Reports--------------//
  Route::get('/list-accounting-reports', [Accounting::class, 'list_accounting_reports'])->name('accounting.list_accounting_reports');

  Route::get('/daily-cash-book-report', [Accounting::class, 'daily_cash_book_report'])->name('accounting.daily_cash_book_report');
  Route::get('/date-wise-bank-statement', [Accounting::class, 'date_wise_bank_statement'])->name('accounting.date_wise_bank_statement');
  Route::get('/daily-transactin-details', [Accounting::class, 'daily_transactin_details'])->name('accounting.daily_transactin_details');
  Route::get('/daily-voucher-list', [Accounting::class, 'daily_voucher_list'])->name('accounting.daily_voucher_list');

  Route::get('/Customer-history-report', [Accounting::class, 'custome_history_report'])->name('accounting.custome_history_report');
  Route::get('/date-wise-customer-payment', [Accounting::class, 'date_wise_customer_payment'])->name('accounting.date_wise_customer_payment');
  Route::get('/branch-wise-balance', [Accounting::class, 'branch_wise_balance'])->name('accounting.branch_wise_balance');
  Route::get('/company-wise-balance', [Accounting::class, 'company_wise_balance'])->name('accounting.company_wise_balance');

  Route::get('/supplier-history-report', [Accounting::class, 'supplier_history_report'])->name('accounting.supplier_history_report');
  Route::get('/date-wise-supplier-payment', [Accounting::class, 'date_wise_supplier_payment'])->name('accounting.date_wise_supplier_payment');
  Route::get('/branch-wise-balance-supplier', [Accounting::class, 'branch_wise_balance_supplier'])->name('accounting.branch_wise_balance_supplier');
  Route::get('/company-wise-balance-supplier', [Accounting::class, 'company_wise_balance_supplier'])->name('accounting.company_wise_balance_supplier');

  Route::get('/monthly-expense-details', [Accounting::class, 'monthly_expense_details'])->name('accounting.monthly_expense_details');
  Route::get('/date-wise-expense-summary', [Accounting::class, 'date_wise_expense_summary'])->name('accounting.date_wise_expense_summary');
  Route::get('/monthly-income-details-report', [Accounting::class, 'monthly_income_details'])->name('accounting.monthly_income_details');
  Route::get('/date-wise-income-summary', [Accounting::class, 'date_wise_income_summary'])->name('accounting.date_wise_income_summary');

  Route::get('/chart-of-accounting-report', [Accounting::class, 'chart_of_accounting_report'])->name('accounting.chart_of_accounting_report');
  Route::get('/monthly-general-ledger-report', [Accounting::class, 'monthly_general_ledger_report'])->name('accounting.monthly_general_ledger_report');
  Route::get('/date-wise-general-ledger', [Accounting::class, 'date_wise_general_ledger'])->name('accounting.date_wise_general_ledger');

  Route::get('/yearly-profit-loss-report', [Accounting::class, 'yearly_profit_loss_report'])->name('accounting.yearly_profit_loss_report');
  Route::get('/monthly-profit-loss-report', [Accounting::class, 'monthly_profit_loss_report'])->name('accounting.monthly_profit_loss_report');
  Route::get('/vehicle-profit-loss-report', [Accounting::class, 'vehicle_profit_loss_report'])->name('accounting.vehicle_profit_loss_report');

  Route::get('/yearly-trial-balance', [Accounting::class, 'yearly_trial_balance'])->name('accounting.yearly_trial_balance');
  Route::get('/date-wise-trial-balance', [Accounting::class, 'date_wise_trial_balance'])->name('accounting.date_wise_trial_balance');
  Route::get('/balance-sheet-report', [Accounting::class, 'balance_sheet_report'])->name('accounting.balance_sheet_report');

  Route::get('/direct-cost-invoice-payment-history', [Accounting::class, 'direct_cost_invoice_payment_history'])->name('accounting.direct_cost_invoice_payment_history');
  Route::get('/sale-processing-payment-history', [Accounting::class, 'sale_processing_payment_history'])->name('accounting.sale_processing_payment_history');
  Route::get('/sale-processing-payment-details', [Accounting::class, 'sale_processing_payment_details'])->name('accounting.sale_processing_payment_details');

  Route::get('/pending-bl-release-report', [Accounting::class, 'pending_bl_release'])->name('accounting.pending_bl_release');



});
