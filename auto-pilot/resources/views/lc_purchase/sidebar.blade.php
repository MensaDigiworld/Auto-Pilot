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
          <a href="#" class="d-block text-white">@auth
            {{ Auth::user()->name}}
            @endauth</a>
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
          <li class="nav-item menu-open">
            <a href="{{ route('lc.lc-home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                LC Dashboard 
              </p>
            </a>

          </li>

          <li class="nav-item {{ rootmenuactive(['lc.new-foregin-purchase','lc.list-foregin-purchase'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.new-foregin-purchase','lc.list-foregin-purchase'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Foreign Purchase
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.new-foregin-purchase')}}" class="nav-link {{ menuactive(['lc.new-foregin-purchase'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>New Foreign Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.list-foregin-purchase')}}" class="nav-link {{ menuactive(['lc.list-foregin-purchase'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Confirmed Foreign Purchase</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.new-local-purchase','list-branch','lc.co-local-purchase','lc.in-local-purchase'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.new-local-purchase','list-branch','lc.co-local-purchase','lc.in-local-purchase'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Local Purchase
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.new-local-purchase')}}" class="nav-link {{ menuactive(['lc.new-local-purchase'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>New Local Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.in-local-purchase')}}" class="nav-link {{ menuactive(['lc.in-local-purchase'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Incomplete Local Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.co-local-purchase')}}" class="nav-link {{ menuactive(['lc.co-local-purchase'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Confirmed Local Purchase</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.new-proforma-invoice','lc.list-proforma-invoice','lc.edit_proforma_invoice','lc.list_amend_proforma_invoice'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.new-proforma-invoice','lc.list-proforma-invoice'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Proforma Invoice (PI)
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.new-proforma-invoice')}}" class="nav-link {{ menuactive(['lc.new-proforma-invoice'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add New Proforma Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.list-proforma-invoice')}}" class="nav-link {{ menuactive(['lc.list-proforma-invoice','lc.edit_proforma_invoice'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Proforma Invoice List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.list_amend_proforma_invoice')}}" class="nav-link {{ menuactive(['lc.list_amend_proforma_invoice'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Amended Proforma Invoice List</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.list-cargo-insurance','lc.list_amend_proforma_insurance'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.list-cargo-insurance','lc.list_amend_proforma_insurance'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Cargo Insurance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.list-cargo-insurance')}}" class="nav-link {{ menuactive(['lc.list-cargo-insurance'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Insurance List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.list_amend_proforma_insurance')}}" class="nav-link {{ menuactive(['lc.list_amend_proforma_insurance'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Amended Insurance List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.list-letter-credit','lc.list_amend_letter_credit'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.list-letter-credit','lc.list_amend_letter_credit'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Letter of Credit (LC)
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.list-letter-credit')}}" class="nav-link {{ menuactive(['lc.list-letter-credit'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Letter of Credit List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.list_amend_letter_credit')}}" class="nav-link {{ menuactive(['lc.list_amend_letter_credit'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Amended Letter of Credit</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.list-bill-lading','lc.new_bill_lading'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.list-bill-lading','lc.new_bill_lading'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Bill of Lading (BL)
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.list-bill-lading')}}" class="nav-link {{ menuactive(['lc.list-bill-lading'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Bill of Lading List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.list-bill-entry'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.list-bill-entry'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Bill of Entry (BOE)
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.list-bill-entry')}}" class="nav-link {{ menuactive(['lc.list-bill-entry'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Bill of Entry List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['lc.list_bill_custom_duty'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.list_bill_custom_duty'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Bill of Custom Duty (BOC)
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.list_bill_custom_duty')}}" class="nav-link {{ menuactive(['lc.list_bill_custom_duty'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Bill of Custom Duty List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.list-approve-costing'])}}">
            <a href="{{ route('lc.list-approve-costing')}}" class="nav-link {{ menuactive(['lc.list-approve-costing'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Approved Costing List
              </p>
            </a>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.new-spare-parts-purchase','lc.list-in-spare-parts','lc.list-com-spare-parts'])}}">
            <a href="#" class="nav-link {{ menuactive(['lc.new-spare-parts-purchase','lc.list-in-spare-parts','lc.list-com-spare-parts'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Spare Parts Purchase
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lc.new-spare-parts-purchase')}}" class="nav-link {{ menuactive(['lc.new-spare-parts-purchase'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add Spare Parts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.list-in-spare-parts')}}" class="nav-link {{ menuactive(['lc.list-in-spare-parts'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Incomplete Spare Parts List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lc.list-com-spare-parts')}}" class="nav-link {{ menuactive(['lc.list-com-spare-parts'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Confirmed Spare Parts List</p>
                </a>
              </li>
            
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.lc-purchase-report'])}}">
            <a href="{{ route('lc.lc-purchase-report') }}" class="nav-link {{ menuactive(['lc.lc-purchase-report'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                LC & Purchase Reports
              </p>
            </a>
          </li>

          <li class="nav-item {{ rootmenuactive(['lc.vehicle_track'])}}">
            <a href="{{ route('lc.vehicle_track')}}" class="nav-link {{ menuactive(['lc.vehicle_track'])}}">
              <i class="nav-icon fas fa-car text-info"></i>
              <p>
                Vehicle Track
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>