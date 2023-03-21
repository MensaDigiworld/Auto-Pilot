<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Accounting extends Controller
{

    public function dashboard(){
        return view('accounting.dashboard');
    }
    public function new_customer_receive_payment(){
        return view('accounting.new_customer_receive_payment');
    }
    public function list_receive_customer_payment(){
        return view('accounting.list_receive_customer_payment');
    }
    public function new_customer_refund(){
        return view('accounting.new_customer_refund');
    }
    public function list_refund_customer_payment(){
        return view('accounting.list_refund_customer_payment');
    }
    public function new_customer_profit_adjust(){
        return view('accounting.new_customer_profit_adjust');
    }
    public function list_customer_profit_adjust(){
        return view('accounting.list_customer_profit_adjustment');
    }
    public function new_customer_profit_adjust_under(){
        return view('accounting.new_customer_profit_adjust_under');
    }
    public function list_customer_profit_adjust_under(){
        return view('accounting.list_customer_profit_adjustment_under');
    }

    // Supplier
    public function new_payment_supplier(){
        return view('accounting.new_payment_supplier');
    }
    public function new_invoice_supplier(){
        return view('accounting.new_invoice_supplier');
    }
    public function list_invoice_payment_supplier(){
        return view('accounting.list_invoice_payment_supplier');
    }
    public function list_invoice_supplier(){
        return view('accounting.list_invoice_supplier');
    }
    public function list_payment_supplier(){
        return view('accounting.list_payment_supplier');
    }

    // Delaer

    public function list_dealer_pending_commission(){
        return view('accounting.list_dealer_pending_commission');
    }
    public function list_dealer_receive_commission(){
        return view('accounting.list_dealer_receive_commission');
    }
    public function new_dealer_receive_commission(){
        return view('accounting.new_dealer_receive_commission');
    }

    // Vendor

    public function list_vendor_invoice_payment(){
        return view('accounting.list_vendor_invoice_payment');
    }
    public function new_vendor_payment(){
        return view('accounting.new_vendor_payment');
    }
    public function new_vendor_invoice(){
        return view('accounting.new_vendor_invoice');
    }
    public function list_vendor_paid_invoice(){
        return view('accounting.list_vendor_paid_invoice');
    }
    public function list_vendor_invoice(){
        return view('accounting.list_vendor_invoice');
    }

    // LC Adjustment

    public function list_lc_invoice_payment(){
        return view('accounting.list_lc_invoice_payment');
    }
    public function new_lc_payment(){
        return view('accounting.new_lc_payment');
    }
    public function new_lc_invoice(){
        return view('accounting.new_lc_invoice');
    }
    public function list_lc_payment(){
        return view('accounting.list_lc_payment');
    }
    public function list_lc_invoice(){
        return view('accounting.list_lc_invoice');
    }

     // Accured Expense

     public function list_accrued_expense_adjustment(){
        return view('accounting.list_accrued_expense_adjustment');
    }
     public function new_accrued_expense_adjustment(){
        return view('accounting.new_accrued_expense_adjustment');
    }
     public function new_adjustment_invoice(){
        return view('accounting.new_adjustment_invoice');
    }
     public function list_adjustment_accrued(){
        return view('accounting.list_adjusted_accrued');
    }
     public function list_accrued_expense(){
        return view('accounting.list_accrued_expense');
    }
     // Pre-Payment Accured Expense

     public function list_pre_accrued_expense_adjustment(){
        return view('accounting.list_pre_accrued_expense_adjustment');
    }
     public function new_pre_accrued_expense_adjustment(){
        return view('accounting.new_pre_accrued_expense_adjustment');
    }
     public function new_pre_adjustment_invoice(){
        return view('accounting.new_pre_adjustment_invoice');
    }
     public function list_pre_adjustment_accrued(){
        return view('accounting.list_pre_adjusted_accrued');
    }
     public function list_pre_accrued_expense(){
        return view('accounting.list_pre_accrued_expense');
    }

    // Loan/Investment & Repayment

    public function list_loan_investment(){
        return view('accounting.list_loan_investment');
    }
    public function new_loan_investment(){
        return view('accounting.new_loan_investment');
    }
    public function new_repayment(){
        return view('accounting.new_repayment');
    }
    public function new_loan_investment_invoice(){
        return view('accounting.new_loan_investment_invoice');
    }
    public function new_loan(){
        return view('accounting.new_loan');
    }
    public function list_loan_repyament(){
        return view('accounting.list_loan_repyament');
    }
    public function list_all_loan_investment(){
        return view('accounting.list_all_loan_investment');
    }

    // Loan/Investment & Repayment

    public function list_reg_other_invoice(){
        return view('accounting.list_reg_other_invoice');
    }
    public function new_unpaid_reg_other_ammend(){
        return view('accounting.new_unpaid_reg_other_ammend');
    }
    public function new_reg_other_payment(){
        return view('accounting.new_reg_other_payment');
    }
    public function list_reg_other_payment(){
        return view('accounting.list_reg_other_payment');
    }

    // Other Transaction

    public function list_other_transcation(){
        return view('accounting.list_other_transcation');
    }
    public function new_other_transcation(){
        return view('accounting.new_other_transcation');
    }

    //Voucher Void

    public function edit_voucher_void(){
        return view('accounting.edit_voucher_void');
    }
    public function list_voucher_void(){
        return view('accounting.list_voucher_void');
    }
    public function list_all_voucher_void(){
        return view('accounting.list_all_voucher_void');
    }

    //Chart of Account

    public function new_category_chart_account(){
        return view('accounting.new_category_chart_account');
    }
    public function new_chart_account(){
        return view('accounting.new_chart_account');
    }
    public function list_category_chart_account(){
        return view('accounting.list_category_chart_account');
    }
    public function list_chart_account(){
        return view('accounting.list_chart_account');
    }

    //Cheque 

    public function new_active_cheque(){
        return view('accounting.new_active_cheque');
    }
    public function new_cheque_manager(){
        return view('accounting.new_cheque_manager');
    }
    public function list_cheque(){
        return view('accounting.list_cheque');
    }

    //Bank/MFS Transaction Charge Setup

    public function new_payment_charge(){
        return view('accounting.new_payment_charge');
    }
    public function list_payment_charge(){
        return view('accounting.list_payment_charge');
    }
    public function list_payment_method(){
        return view('accounting.list_payment_method');
    }
    public function new_payment_method(){
        return view('accounting.new_payment_method');
    }

    // Fixed Asste

    public function new_fixed_asset(){
        return view('accounting.new_fixed_asset_setup');
    }
    public function list_fixed_asset(){
        return view('accounting.list_fixed_asset');
    }

    //Bank account & MFS set up

    public function new_bank_account(){
        return view('accounting.new_bank_account');
    }
    public function new_mfs_account(){
        return view('accounting.new_mfs_account');
    }
    public function new_bank(){
        return view('accounting.new_bank');
    }
    public function list_bank(){
        return view('accounting.list_bank');
    }
    public function list_bank_account(){
        return view('accounting.list_bank_account');
    }
    public function list_mfs_account(){
        return view('accounting.list_mfs_account');
    }

    //Salary Setup

    public function new_salary_setup(){
        return view('accounting.new_salary_setup');
    }
    public function new_salary_payment(){
        return view('accounting.new_salary_payment');
    }
    public function new_salary_loan(){
        return view('accounting.new_salary_loan');
    }
    public function list_salary_payment(){
        return view('accounting.list_salary_payment');
    }

    //---------Reports-----------//

    public function list_accounting_reports(){
        return view('accounting.list_accounting_reports');
    }
    public function daily_cash_book_report(){
        return view('accounting.reports.daily_cash_book_report');
    }
    public function date_wise_bank_statement(){
        return view('accounting.reports.date_wise_bank_statement');
    }
    public function daily_transactin_details(){
        return view('accounting.reports.daily_transactin_details');
    }
    public function daily_voucher_list(){
        return view('accounting.reports.daily_voucher_list');
    }

    public function custome_history_report(){
         return view('accounting.reports.custome_history_report');
    }
    public function date_wise_customer_payment(){
         return view('accounting.reports.date_wise_customer_payment');
    }
    public function branch_wise_balance(){
         return view('accounting.reports.branch_wise_balance');
    }
    public function company_wise_balance(){
         return view('accounting.reports.company_wise_balance');
    }

    public function supplier_history_report(){
         return view('accounting.reports.supplier_history_report');
    }
    public function date_wise_supplier_payment(){
         return view('accounting.reports.date_wise_supplier_payment');
    }
    public function branch_wise_balance_supplier(){
         return view('accounting.reports.branch_wise_balance_supplier');
    }
    public function company_wise_balance_supplier(){
         return view('accounting.reports.company_wise_balance_supplier');
    }

    public function monthly_expense_details(){
         return view('accounting.reports.monthly_expense_details');
    }
    public function date_wise_expense_summary(){
         return view('accounting.reports.date_wise_expense_summary');
    }
    public function monthly_income_details(){
         return view('accounting.reports.monthly_income_details_report');
    }
    public function date_wise_income_summary(){
         return view('accounting.reports.date_wise_income_summary');
    }

    public function chart_of_accounting_report(){
         return view('accounting.reports.chart_of_accounting_report');
    }
    public function monthly_general_ledger_report(){
         return view('accounting.reports.monthly_general_ledger_report');
    }
    public function date_wise_general_ledger(){
         return view('accounting.reports.date_wise_general_ledger');
    }

    public function yearly_profit_loss_report(){
         return view('accounting.reports.yearly_profit_loss_report');
    }
    public function monthly_profit_loss_report(){
         return view('accounting.reports.monthly_profit_loss_report');
    }
    public function vehicle_profit_loss_report(){
         return view('accounting.reports.vehicle_profit_loss_report');
    }
    public function yearly_trial_balance(){
         return view('accounting.reports.yearly_trial_balance');
    }
    public function date_wise_trial_balance(){
         return view('accounting.reports.date_wise_trial_balance');
    }
    public function balance_sheet_report(){
         return view('accounting.reports.balance_sheet_report');
    }

    public function direct_cost_invoice_payment_history(){
         return view('accounting.reports.direct_cost_invoice_payment_history');
    }
    public function sale_processing_payment_history(){
         return view('accounting.reports.sale_processing_payment_history');
    }
    public function sale_processing_payment_details(){
         return view('accounting.reports.sale_processing_payment_details');
    }

    public function pending_bl_release(){
         return view('accounting.reports.pending_bl_release');
    }

}
