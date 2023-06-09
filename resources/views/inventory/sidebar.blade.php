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
               <li class="nav-item {{ rootmenuactive(['inventory.inventory-manager','inventory.edit_vehicle_inspection'])}}">
                <a href="{{ route('invent.home')}}" class="nav-link {{ menuactive(['inventory.inventory-manager','inventory.edit_vehicle_inspection'])}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inventory Dashboard
              </p>
            </a>

          </li>

          <li class="nav-item {{ rootmenuactive(['inventory.list_vehicle_inspection','inventory.new_vehicle_inspection'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.list_vehicle_inspection','inventory.new_vehicle_inspection'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Vehicle Inspection
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.list_vehicle_inspection')}}" class="nav-link {{ menuactive(['inventory.list_vehicle_inspection'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Inspection List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.new_vehicle_inspection')}}" class="nav-link {{ menuactive(['inventory.new_vehicle_inspection'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Vehicle Inspection</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['inventory.list_workshop_transfer_incomplete','inventory.list_vehicle_workshop'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.list_workshop_transfer_incomplete','inventory.list_vehicle_workshop'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Workshop Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.list_workshop_transfer_incomplete')}}" class="nav-link {{ menuactive(['inventory.list_workshop_transfer_incomplete'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Work in Progress By Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.list_vehicle_workshop')}}" class="nav-link {{ menuactive(['inventory.list_vehicle_workshop'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Return Vehicle from Workshop</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['inventory.list_incomplete_showroom_transfer','inventory.list_vehicle_transfer_other_shoroom'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.list_incomplete_showroom_transfer','inventory.list_vehicle_transfer_other_shoroom'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Vehicle Transfer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.list_incomplete_showroom_transfer')}}" class="nav-link {{ menuactive(['inventory.list_incomplete_showroom_transfer'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Transfer List By Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.list_vehicle_transfer_other_shoroom')}}" class="nav-link {{ menuactive(['inventory.list_vehicle_transfer_other_shoroom'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Transfer Return</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['inventory.new_issue_information','inventory.list_issue_information','inventory.approve_issue_information','inventory.review_issue_information'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.new_issue_information','inventory.list_issue_information','inventory.approve_issue_information','inventory.review_issue_information'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Vehicle Allocation
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.new_issue_information')}}" class="nav-link {{ menuactive(['inventory.new_issue_information'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>New Allocation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.list_issue_information')}}" class="nav-link {{ menuactive(['inventory.list_issue_information'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Allocation List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.approve_issue_information')}}" class="nav-link {{ menuactive(['inventory.approve_issue_information'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Allocation Approval</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.review_issue_information')}}" class="nav-link {{ menuactive(['inventory.review_issue_information'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Receive Allocation</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['inventory.new_windows_sticker','inventory.list_windows_sticker'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.new_windows_sticker','inventory.list_windows_sticker'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Window Sticker
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.new_windows_sticker')}}" class="nav-link {{ menuactive(['inventory.new_windows_sticker'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Generate Window Sticker</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.list_windows_sticker')}}" class="nav-link {{ menuactive(['inventory.list_windows_sticker'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Generate Window Sticker List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['inventory.list_vehicle','inventory.add_vehicle_passenger','inventory.add_vehicle_commercial','inventory.add_vehicle_bike'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.list_vehicle','inventory.add_vehicle_passenger','inventory.add_vehicle_commercial','inventory.add_vehicle_bike'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Vehicle Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_passenger')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_passenger'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add Passenger Vehicle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_commercial')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_commercial'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add Commercial Vehicle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_bike')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_bike'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add Bike</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.list_vehicle')}}" class="nav-link {{ menuactive(['inventory.list_vehicle'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Vehicle Product List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['inventory.add_vehicle_seating_capacity','inventory.add_vehicle_engine_cc','inventory.add_vehicle_color','inventory.add_vehicle_wheel','inventory.add_vehicle_loading_capacity','inventory.add_vehicle_drive_system','inventory.add_vehicle_gear','inventory.add_vehicle_transmission','inventory.add_vehicle_door','inventory.add_vehicle_fuel','inventory.add_vehicle_package','inventory.add_vehicle_category','inventory.add_vehicle_manufacture','inventory.add_vehicle_model','inventory.add_vehicle_bodytype','inventory.add_vehicle_chassis_code'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.add_vehicle_seating_capacity','inventory.add_vehicle_engine_cc','inventory.add_vehicle_color','inventory.add_vehicle_wheel','inventory.add_vehicle_loading_capacity','inventory.add_vehicle_drive_system','inventory.add_vehicle_gear','inventory.add_vehicle_transmission','inventory.add_vehicle_door','inventory.add_vehicle_fuel','inventory.add_vehicle_package','inventory.add_vehicle_category','inventory.add_vehicle_manufacture','inventory.add_vehicle_model','inventory.add_vehicle_bodytype','inventory.add_vehicle_chassis_code'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Vehicle Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_category')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_category'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Vehicle Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_manufacture')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_manufacture'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Manufacture</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_model')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_model'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_bodytype')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_bodytype'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Body Type/Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_chassis_code')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_chassis_code'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Chassis Code</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_package')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_package'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Package/Trim/Variant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_fuel')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_fuel'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Fuel type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_engine_cc')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_engine_cc'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Displacement/Engine CC</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('lc.list-bill-entry')}}" class="nav-link {{ menuactive(['lc.list-bill-entry'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Kilowatt (KW)</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_door')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_door'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Number of doors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_transmission')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_transmission'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Transmission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_gear')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_gear'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Gears</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_drive_system')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_drive_system'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Drive system</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_seating_capacity')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_seating_capacity'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Seating capacity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_loading_capacity')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_loading_capacity'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Loading Capacity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_wheel')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_wheel'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Number of Wheels</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_color_interior')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_color_interior'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Interior Color</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{ route('inventory.add_vehicle_color_exterior')}}" class="nav-link {{ menuactive(['inventory.add_vehicle_color_exterior'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Exterior Color</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['inventory.new_supplier','inventory.list_supplier','inventory.new_business_partner','inventory.list_business_partner','inventory.new_warehouse_showroom','inventory.list_warehouse_showroom'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.new_supplier','inventory.list_supplier','inventory.new_business_partner','inventory.list_business_partner','inventory.new_warehouse_showroom','inventory.list_warehouse_showroom'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Business Partner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ childmenuactive(['inventory.new_supplier','inventory.list_supplier'])}} {{ rootmenuactive(['add-irc','inventory.list_supplier'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Supplier
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['inventory.new_supplier','inventory.list_supplier'])}}">
                  <li class="nav-item">
                    <a href="{{ route('inventory.new_supplier')}}" class="nav-link {{ menuactive(['inventory.new_supplier'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add New Supplier
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('inventory.list_supplier')}}" class="nav-link {{ menuactive(['inventory.list_supplier'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Supplier List 
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['inventory.new_business_partner','inventory.list_business_partner'])}} {{ rootmenuactive(['inventory.new_business_partner','inventory.list_business_partner'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Others Partners
                    
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['inventory.new_business_partner','inventory.list_business_partner'])}}">
                  <li class="nav-item">
                    <a href="{{ route('inventory.new_business_partner')}}" class="nav-link {{ menuactive(['inventory.new_business_partner'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add Business Partner
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('inventory.list_business_partner')}}" class="nav-link {{ menuactive(['inventory.list_business_partner'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Business Partner List 
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['inventory.new_warehouse_showroom','inventory.list_warehouse_showroom'])}} {{ rootmenuactive(['inventory.new_warehouse_showroom','inventory.list_warehouse_showroom'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Showroom/Warehouse
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['inventory.new_warehouse_showroom','inventory.list_warehouse_showroom'])}}">
                  <li class="nav-item">
                    <a href="{{ route('inventory.new_warehouse_showroom')}}" class="nav-link {{ menuactive(['inventory.new_warehouse_showroom'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add Showroom/Warehouse
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('inventory.list_warehouse_showroom')}}" class="nav-link {{ menuactive(['inventory.list_warehouse_showroom'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Showroom/Warehouse List
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['inventory.list_spare_parts','inventory.new_spare_parts'])}}">
            <a href="#" class="nav-link {{ menuactive(['inventory.list_spare_parts','inventory.new_spare_parts'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Spare Parts/Service
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('inventory.new_spare_parts')}}" class="nav-link {{ menuactive(['inventory.new_spare_parts'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>New Parts/Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inventory.list_spare_parts')}}" class="nav-link {{ menuactive(['inventory.list_spare_parts'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Parts/Service List</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item {{ rootmenuactive(['inventory.list_of_cost'])}}">
            <a href="{{route('inventory.list_of_cost')}}" class="nav-link {{ menuactive(['inventory.list_of_cost'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                List Of  Cost
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>