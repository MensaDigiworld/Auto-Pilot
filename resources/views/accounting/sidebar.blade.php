  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('public/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Auto Pilot</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ">
          <a href="#" class="d-block text-white">
            @auth
            {{ Auth::user()->name}}
            @endauth
            </a>
        </div>
      </div>
      <div class="user-panel d-flex">
        <div class="info text-white">
          User: EMP-01003
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item {{ rootmenuactive(['accounting.dashboard'])}}">
                <a href="{{ route('accounting.dashboard')}}" class="nav-link {{ menuactive(['accounting.dashboard'])}}">
              <i class="nav-icon fas fa-tachometer-alt text-info"></i>
              <p>
                Accounting Dashboard
              </p>
            </a>

          </li>

          <li class="nav-item {{ rootmenuactive(['accounting.new_customer_profit_adjust_under','accounting.list_customer_profit_adjust_under','accounting.list_customer_profit_adjust','accounting.new_customer_profit_adjust','accounting.new_customer_receive_payment','accounting.list_receive_customer_payment','accounting.new_customer_refund','accounting.list_refund_customer_payment'])}}">
            <a href="#" class="nav-link text-xs {{ menuactive(['accounting.new_customer_profit_adjust_under','accounting.list_customer_profit_adjust_under','accounting.list_customer_profit_adjust','accounting.new_customer_profit_adjust','accounting.new_customer_receive_payment','accounting.list_receive_customer_payment','accounting.new_customer_refund','accounting.list_refund_customer_payment'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Customer Payment, Refund & Adjustment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ menuactive(['accounting.new_customer_receive_payment','accounting.list_receive_customer_payment'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p class="text-xs">Receive Customer Payment
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['accounting.new_customer_receive_payment','accounting.list_receive_customer_payment'])}}">
                  <li class="nav-item">
                    <a href="{{ route('accounting.new_customer_receive_payment')}}" class="nav-link {{ menuactive(['accounting.new_customer_receive_payment'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Receive a new payment
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('accounting.list_receive_customer_payment')}}" class="nav-link {{ menuactive(['accounting.list_receive_customer_payment'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Customer payments list 
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ menuactive(['accounting.new_customer_refund','accounting.list_refund_customer_payment'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p class="text-xs">Customer refund
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['accounting.new_customer_refund'])}}">
                  <li class="nav-item">
                    <a href="{{ route('accounting.new_customer_refund')}}" class="nav-link {{ menuactive(['accounting.new_customer_refund'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        New refund
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('accounting.list_refund_customer_payment')}}" class="nav-link {{ menuactive(['accounting.list_refund_customer_payment'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Customer refund list 
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ menuactive(['accounting.new_customer_profit_adjust','accounting.list_customer_profit_adjust'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p class="text-xs">Customer over payment adjustment
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['accounting.new_customer_profit_adjust','accounting.list_customer_profit_adjust'])}}">
                  <li class="nav-item">
                    <a href="{{ route('accounting.new_customer_profit_adjust')}}" class="nav-link {{ menuactive(['accounting.new_customer_profit_adjust'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Adjust an overpayment
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('accounting.list_customer_profit_adjust')}}" class="nav-link {{ menuactive(['accounting.list_customer_profit_adjust'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        All over payments list
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ menuactive(['accounting.new_customer_profit_adjust_under','accounting.list_customer_profit_adjust_under'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p class="text-xs">Customer under payment adjustment
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['accounting.new_customer_profit_adjust_under','accounting.list_customer_profit_adjust_under'])}}">
                  <li class="nav-item">
                    <a href="{{ route('accounting.new_customer_profit_adjust_under')}}" class="nav-link {{ menuactive(['accounting.new_customer_profit_adjust_under'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Adjust an under payment
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('accounting.list_customer_profit_adjust_under')}}" class="nav-link {{ menuactive(['accounting.list_customer_profit_adjust_under'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        All under payments list
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.list_invoice_payment_supplier','accounting.new_invoice_supplier','accounting.new_payment_supplier','accounting.list_invoice_supplier','accounting.list_payment_supplier'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.list_invoice_payment_supplier','accounting.new_invoice_supplier','accounting.new_payment_supplier','accounting.list_invoice_supplier','accounting.list_payment_supplier'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Supplier Payment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.list_invoice_payment_supplier')}}" class="nav-link {{ menuactive(['accounting.list_invoice_payment_supplier'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Invoice & Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_invoice_supplier')}}" class="nav-link {{ menuactive(['accounting.list_invoice_supplier'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p> Invoice list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_payment_supplier')}}" class="nav-link {{ menuactive(['accounting.list_payment_supplier'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p> Payment list</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.list_dealer_pending_commission','accounting.new_dealer_receive_commission','accounting.list_dealer_receive_commission'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.list_dealer_pending_commission','accounting.new_dealer_receive_commission','accounting.list_dealer_receive_commission'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Dealer Commission
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.list_dealer_pending_commission')}}" class="nav-link {{ menuactive(['accounting.list_dealer_pending_commission'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Pending Commission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_dealer_receive_commission')}}" class="nav-link {{ menuactive(['accounting.list_dealer_receive_commission'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p> Received commission List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.list_vendor_invoice_payment','accounting.new_vendor_payment','accounting.new_vendor_invoice','accounting.list_vendor_invoice_payment','accounting.list_vendor_paid_invoice','accounting.list_vendor_invoice'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.list_vendor_invoice_payment','accounting.new_vendor_payment','accounting.new_vendor_invoice','accounting.list_vendor_invoice_payment','accounting.list_vendor_paid_invoice','accounting.list_vendor_invoice'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Vendor Payment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.list_vendor_invoice_payment')}}" class="nav-link {{ menuactive(['accounting.list_vendor_invoice_payment','accounting.new_vendor_payment','accounting.new_vendor_invoice'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Invoice & Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_vendor_invoice')}}" class="nav-link {{ menuactive(['accounting.list_vendor_invoice',''])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Invoice List (CostInvoice)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_vendor_paid_invoice')}}" class="nav-link {{ menuactive(['accounting.list_vendor_paid_invoice'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Paid invoice list</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.list_lc_invoice_payment','accounting.new_lc_payment','accounting.new_lc_invoice','accounting.list_lc_payment','accounting.list_lc_invoice'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.list_lc_invoice_payment','accounting.new_lc_payment','accounting.new_lc_invoice','accounting.list_lc_payment','accounting.list_lc_invoice'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                LC Adjustment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.list_lc_invoice_payment')}}" class="nav-link {{ menuactive(['accounting.list_lc_invoice_payment','accounting.new_lc_payment','accounting.new_lc_invoice'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Invoice & Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_lc_invoice')}}" class="nav-link {{ menuactive(['accounting.list_lc_invoice',''])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Invoice List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_lc_payment')}}" class="nav-link {{ menuactive(['accounting.list_lc_payment'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Paid invoice list</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.list_accrued_expense_adjustment','accounting.new_accrued_expense_adjustment','accounting.new_adjustment_invoice','accounting.list_adjustment_accrued','accounting.list_accrued_expense'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.list_accrued_expense_adjustment','accounting.new_accrued_expense_adjustment','accounting.new_adjustment_invoice','accounting.list_adjustment_accrued','accounting.list_accrued_expense'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Accrued Expense
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.list_accrued_expense_adjustment')}}" class="nav-link {{ menuactive(['accounting.list_accrued_expense_adjustment','accounting.new_accrued_expense_adjustment','accounting.new_adjustment_invoice'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Expense & Adjustment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_adjustment_accrued')}}" class="nav-link {{ menuactive(['accounting.list_adjustment_accrued',''])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Expense List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_accrued_expense')}}" class="nav-link {{ menuactive(['accounting.list_accrued_expense'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Adjusted Accrued Expense</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.list_pre_accrued_expense_adjustment','accounting.new_pre_accrued_expense_adjustment','accounting.new_pre_adjustment_invoice','accounting.list_pre_adjustment_accrued','accounting.list_pre_accrued_expense'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.list_pre_accrued_expense_adjustment','accounting.new_pre_accrued_expense_adjustment','accounting.new_pre_adjustment_invoice','accounting.list_pre_adjustment_accrued','accounting.list_pre_accrued_expense'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Pre-Payments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.list_pre_accrued_expense_adjustment')}}" class="nav-link {{ menuactive(['accounting.list_pre_accrued_expense_adjustment','accounting.new_pre_accrued_expense_adjustment','accounting.new_pre_adjustment_invoice'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Pre-Payment & Adjustment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_pre_adjustment_accrued')}}" class="nav-link {{ menuactive(['accounting.list_pre_adjustment_accrued',''])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Pre-Payment List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_pre_accrued_expense')}}" class="nav-link {{ menuactive(['accounting.list_pre_accrued_expense'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Adjusted Pre-Payment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.list_loan_investment','accounting.new_loan_investment','accounting.new_repayment','accounting.new_loan_investment_invoice','accounting.new_loan','accounting.list_all_loan_investment'])}}">
            <a href="#" class="nav-link text-xs {{ menuactive(['accounting.list_loan_investment','accounting.new_loan_investment','accounting.new_repayment','accounting.new_loan_investment_invoice','accounting.new_loan','accounting.list_all_loan_investment'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Loan/Invenstment & Repayment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.list_loan_investment')}}" class="nav-link {{ menuactive(['accounting.list_loan_investment','accounting.new_loan_investment','accounting.new_repayment','accounting.new_loan_investment_invoice'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Loan/Invenstment & Repayment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_all_loan_investment')}}" class="nav-link {{ menuactive(['accounting.list_all_loan_investment',''])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>All Loan/Invenstment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_loan_repyament')}}" class="nav-link {{ menuactive(['accounting.list_loan_repyament'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Loan Repayment list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.new_loan')}}" class="nav-link {{ menuactive(['accounting.new_loan'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Loan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.list_reg_other_invoice','accounting.new_unpaid_reg_other_ammend','accounting.new_reg_other_payment','accounting.list_reg_other_payment'])}}">
            <a href="#" class="nav-link text-xs {{ menuactive(['accounting.list_reg_other_invoice','accounting.new_unpaid_reg_other_ammend','accounting.new_reg_other_payment','accounting.list_reg_other_payment'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Vehicle Reg. & other Payments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.list_reg_other_invoice')}}" class="nav-link {{ menuactive(['accounting.list_reg_other_invoice','accounting.new_unpaid_reg_other_ammend','accounting.new_reg_other_payment'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Unpaid Reg. & Other Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_reg_other_payment')}}" class="nav-link {{ menuactive(['accounting.list_reg_other_payment',''])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Reg. & Other Payments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.new_other_transcation','accounting.list_other_transcation'])}}">
            <a href="#" class="nav-link  {{ menuactive(['accounting.new_other_transcation','accounting.list_other_transcation'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Other Transactions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.new_other_transcation')}}" class="nav-link {{ menuactive(['accounting.new_other_transcation'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Other Transaction</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_other_transcation')}}" class="nav-link {{ menuactive(['accounting.list_other_transcation'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Others Transactions List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.new_salary_setup','accounting.new_salary_payment','accounting.new_salary_loan','accounting.list_salary_payment'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.new_salary_setup','accounting.new_salary_payment','accounting.new_salary_loan','accounting.list_salary_payment'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Salary
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.new_salary_setup')}}" class="nav-link {{ menuactive(['accounting.new_salary_setup'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Salary Setup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.new_salary_payment')}}" class="nav-link {{ menuactive(['accounting.new_salary_payment'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Salary Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.new_salary_loan')}}" class="nav-link {{ menuactive(['accounting.new_salary_loan'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Loan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_salary_payment')}}" class="nav-link {{ menuactive(['accounting.list_salary_payment'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Salary Payment List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.edit_voucher_void','accounting.list_voucher_void','accounting.list_voucher_void_remove','accounting.list_all_voucher_void'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.edit_voucher_void','accounting.list_voucher_void','accounting.list_voucher_void_remove','accounting.list_all_voucher_void'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Voucher List & Correction
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.edit_voucher_void')}}" class="nav-link {{ menuactive(['accounting.edit_voucher_void'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Edit/Remove a voucher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_voucher_void')}}" class="nav-link {{ menuactive(['accounting.list_voucher_void'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Edited vouchers history</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_voucher_void_remove')}}" class="nav-link {{ menuactive(['accounting.list_voucher_void_remove'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Removed vouchers history</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_all_voucher_void')}}" class="nav-link {{ menuactive(['accounting.list_all_voucher_void'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>All Voucher List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.new_category_chart_account','accounting.new_chart_account','accounting.list_category_chart_account','accounting.list_chart_account'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.new_category_chart_account','accounting.new_chart_account','accounting.list_category_chart_account','accounting.list_chart_account'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Chart of Accounts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.new_chart_account')}}" class="nav-link {{ menuactive(['accounting.new_chart_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Chart of Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_chart_account')}}" class="nav-link {{ menuactive(['accounting.list_chart_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Chart of Account List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.new_category_chart_account')}}" class="nav-link {{ menuactive(['accounting.new_category_chart_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_category_chart_account')}}" class="nav-link {{ menuactive(['accounting.list_category_chart_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Category List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.new_bank_account','accounting.new_bank','accounting.new_mfs_account','accounting.list_bank','accounting.list_bank_account','accounting.list_mfs_account'])}}">
            <a href="#" class="nav-link text-xs {{ menuactive(['accounting.new_bank_account','accounting.new_bank','accounting.new_mfs_account','accounting.list_bank','accounting.list_bank_account','accounting.list_mfs_account'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Bank account & MFS set up
                
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.new_bank_account')}}" class="nav-link {{ menuactive(['accounting.new_bank_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Bank Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_bank_account')}}" class="nav-link {{ menuactive(['accounting.list_bank_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p> All Bank accounts list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.new_mfs_account')}}" class="nav-link text-xs {{ menuactive(['accounting.new_mfs_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Online Payment MFS account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_mfs_account')}}" class="nav-link {{ menuactive(['accounting.list_mfs_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>MFS accounts list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.new_bank')}}" class="nav-link {{ menuactive(['accounting.new_bank'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_bank')}}" class="nav-link {{ menuactive(['accounting.list_bank'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>All Bank list</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.new_active_cheque','accounting.new_cheque_manager','accounting.list_cheque','accounting.list_chart_account'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.new_active_cheque','accounting.new_cheque_manager','accounting.list_cheque','accounting.list_chart_account'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Cheque Register
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.new_active_cheque')}}" class="nav-link {{ menuactive(['accounting.new_active_cheque'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Active Cheque</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_cheque')}}" class="nav-link {{ menuactive(['accounting.list_cheque'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Add Cheque</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.new_cheque_manager')}}" class="nav-link {{ menuactive(['accounting.new_cheque_manager'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Bank Cheque Manager</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('accounting.list_category_chart_account')}}" class="nav-link {{ menuactive(['accounting.list_category_chart_account'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Category List</p>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.new_payment_charge','accounting.list_payment_charge','accounting.list_payment_method','accounting.new_payment_method'])}}">
            <a href="#" class="nav-link text-xs{{ menuactive(['accounting.new_payment_charge','accounting.list_payment_charge','accounting.list_payment_method','accounting.new_payment_method'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Bank/MFS Transaction Charge
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.new_payment_charge')}}" class="nav-link {{ menuactive(['accounting.new_payment_charge'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Payment Charge</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_payment_charge')}}" class="nav-link {{ menuactive(['accounting.list_payment_charge'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>All Payment Charge</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.new_payment_method')}}" class="nav-link {{ menuactive(['accounting.new_payment_method'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Payment Method</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_payment_method')}}" class="nav-link {{ menuactive(['accounting.list_payment_method'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Payment Method List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['accounting.new_fixed_asset','accounting.list_fixed_asset'])}}">
            <a href="#" class="nav-link {{ menuactive(['accounting.new_fixed_asset','accounting.list_fixed_asset'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Fixed Asset Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('accounting.new_fixed_asset')}}" class="nav-link {{ menuactive(['accounting.new_fixed_asset'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>New Fixed Asset </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounting.list_fixed_asset')}}" class="nav-link {{ menuactive(['accounting.list_fixed_asset'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Fixed Asset List</p>
                </a>
              
            </ul>
          </li>
          <li class="nav-item">
                <a href="{{ route('accounting.list_accounting_reports')}}" class="nav-link {{ menuactive(['accounting.list_accounting_reports'])}}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Accounting Reports</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>