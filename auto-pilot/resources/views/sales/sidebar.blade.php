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
               <li class="nav-item {{ rootmenuactive(['sales.dashboard','inventory.edit_vehicle_inspection','sales.new_pre_order'])}}">
                <a href="{{ route('sales.dashboard')}}" class="nav-link {{ menuactive(['sales.dashboard','inventory.edit_vehicle_inspection','sales.new_pre_order'])}}">
              <i class="nav-icon fas fa-tachometer-alt text-danger"></i>
              <p>
                Sales Dashboard
              </p>
            </a>

          </li>

          <li class="nav-item {{ rootmenuactive(['sales.incomplete_sales','sales.confirmed_sales','sales.new_vehicle_sales_booking'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.incomplete_sales','sales.confirmed_sales','sales.new_vehicle_sales_booking'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Vehicle Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.new_vehicle_sales_booking')}}" class="nav-link {{ menuactive(['sales.new_vehicle_sales_booking'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>New Vehicle sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.incomplete_sales')}}" class="nav-link {{ menuactive(['sales.incomplete_sales'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Incomplete sales list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.confirmed_sales')}}" class="nav-link {{ menuactive(['sales.confirmed_sales'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Confirmed sales list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['sales.add_dealer_sales','sales.list_incomplete_parts_sales'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.add_dealer_sales','sales.list_incomplete_parts_sales'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Dealership Sale
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.add_dealer_sales')}}" class="nav-link {{ menuactive(['sales.add_dealer_sales'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>New Dealership Sale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_incomplete_parts_sales')}}" class="nav-link {{ menuactive(['sales.list_incomplete_parts_sales'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p> Incom. Dealership sales list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.confirmed_sales')}}" class="nav-link {{ menuactive(['sales.confirmed_sales'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p> Confirmed Dealership sales list</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['inventory.list_workshop_transfer_incomplete','inventory.list_vehicle_workshop'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.list_workshop_transfer_incomplete','inventory.list_vehicle_workshop'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Payment & History
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.list_workshop_transfer_incomplete')}}" class="nav-link {{ menuactive(['inventory.list_workshop_transfer_incomplete'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Receive Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.list_vehicle_workshop')}}" class="nav-link {{ menuactive(['inventory.list_vehicle_workshop'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p> History</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['sales.list_incomplete_parts_sales','sales.list_confirmed_parts_sales','sales.add_spare_parts_sales'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.list_incomplete_parts_sales','sales.list_confirmed_parts_sales','sales.add_spare_parts_sales'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Spare Parts Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.add_spare_parts_sales')}}" class="nav-link {{ menuactive(['sales.add_spare_parts_sales'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>New spare parts sale-Vat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_incomplete_parts_sales')}}" class="nav-link {{ menuactive(['sales.list_incomplete_parts_sales'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Incom. sales list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_confirmed_parts_sales')}}" class="nav-link {{ menuactive(['sales.list_confirmed_parts_sales'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Confirmed sales list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['sales.new_pre_order','sales.list_pre_order'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.new_pre_order','sales.list_pre_order'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Pre Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.new_pre_order')}}" class="nav-link {{ menuactive(['sales.new_pre_order'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>New Pre Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_pre_order')}}" class="nav-link {{ menuactive(['sales.list_pre_order'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Pre Order List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['sales.list_booking','sales.booking'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.list_booking','sales.booking'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Booking
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.booking')}}" class="nav-link {{ menuactive(['sales.booking'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>New Booking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_booking')}}" class="nav-link {{ menuactive(['sales.list_booking'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Booking List By Status</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['sales.confirmed_delivery','sales.pending_delivery'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.confirmed_delivery','sales.pending_delivery'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Vehicle Delivery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.pending_delivery')}}" class="nav-link {{ menuactive(['sales.pending_delivery'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Pending Delivery List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.confirmed_delivery')}}" class="nav-link {{ menuactive(['sales.confirmed_delivery'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Delivered Vehicle List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['sales.add_generate_quotation','sales.list_general_quotation','sales.list_quotation','sales.add_quotation'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.add_generate_quotation','sales.list_general_quotation','sales.list_quotation','sales.add_quotation'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Quotation
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.add_generate_quotation')}}" class="nav-link {{ menuactive(['sales.add_generate_quotation'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Generate Bank Quotation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_general_quotation')}}" class="nav-link {{ menuactive(['sales.list_general_quotation'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Quotation List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.add_quotation')}}" class="nav-link {{ menuactive(['sales.add_quotation'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>New General Quotation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_quotation')}}" class="nav-link {{ menuactive(['sales.list_quotation'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>New Quotation List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['sales.list_loan_manager','sales.new_loan_information'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.list_loan_manager','sales.new_loan_information'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Customer Loan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.new_loan_information')}}" class="nav-link {{ menuactive(['sales.new_loan_information'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Add Loan Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_loan_manager')}}" class="nav-link {{ menuactive(['sales.list_loan_manager'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Customer Loan Manager</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['sales.add_customer','sales.list_customer'])}}">
            <a href="#" class="nav-link {{ menuactive(['sales.add_customer','sales.list_customer'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales.add_customer')}}" class="nav-link {{ menuactive(['sales.add_customer'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Add New Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sales.list_customer')}}" class="nav-link {{ menuactive(['sales.list_customer'])}}">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Customer List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['inventory.list_vehicle','inventory.add_vehicle_passenger','inventory.add_vehicle_commercial','inventory.add_vehicle_bike'])}}">
            <a href="{{ route('sales.report_sales')}}" class="nav-link {{ menuactive(['inventory.list_vehicle','inventory.add_vehicle_passenger','inventory.add_vehicle_commercial','inventory.add_vehicle_bike'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Sales Reports
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>