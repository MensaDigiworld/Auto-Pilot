  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('public/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Auto Pilot</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pt-5 pb-3 mb-3 d-flex">
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
            <a href="{{ route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}

          <li class="nav-item {{ rootmenuactive(['business.create','business.index','vat-setup','financial-year','after-sales','list-after-sales','memberships.create','memberships.index','latterheads.create','latterheads.index'])}}">
            <a href="#" class="nav-link {{ menuactive(['business.create','business.index','vat-setup','financial-year','after-sales','list-after-sales','memberships.create','memberships.index','latterheads.create','latterheads.index'])}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Business Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('business.create')}}" class="nav-link {{ menuactive(['business.create'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add Business</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('business.index')}}" class="nav-link {{ menuactive(['business.index'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Business List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('vat-setup')}}" class="nav-link {{ menuactive(['vat-setup'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>VAT Setup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('financial-year')}}" class="nav-link {{ menuactive(['financial-year'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Financial Year</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('after-sales')}}" class="nav-link {{ menuactive(['after-sales'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>After Sales Service Setup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-after-sales')}}" class="nav-link {{ menuactive(['list-after-sales'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>After Sales Service List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('memberships.create')}}" class="nav-link {{ menuactive(['memberships.create'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Membership Program</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('memberships.index')}}" class="nav-link {{ menuactive(['memberships.index'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Membership Program List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('latterheads.create')}}" class="nav-link {{ menuactive(['latterheads.create'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Letter Head</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('latterheads.index')}}" class="nav-link {{ menuactive(['latterheads.index'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Letter Head List</p>
                </a>
              </li>

            </ul>
          </li>
          
          <li class="nav-item {{ rootmenuactive(['analytics.renewed_document_list','analytics.upcoming_reminder_setup','analytics.add_vehical_document','analytics.add_license_document'])}}">
            <a href="#" class="nav-link {{ menuactive(['analytics.renewed_document_list','analytics.upcoming_reminder_setup','analytics.add_vehical_document','analytics.add_license_document'])}}">
              <i class="nav-icon  far fa-circle text-info"></i>
              <p>
                Analytics
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('analytics.add_vehical_document')}}" class="nav-link {{ menuactive(['analytics.add_vehical_document'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p> Add Vehiclel Documentr</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ route('analytics.add_license_document')}}" class="nav-link {{ menuactive(['analytics.add_license_document'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p> Add License Document</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('analytics.renewed_document_list')}}" class="nav-link {{ menuactive(['analytics.renewed_document_list'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Renewed Document List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('analytics.upcoming_reminder_setup')}}" class="nav-link {{ menuactive(['analytics.upcoming_reminder_setup'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Upcoming Reminder Set Up</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add-branch','list-branch'])}}">
            <a href="#" class="nav-link {{ menuactive(['add-branch','list-branch'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Branch Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add-branch')}}" class="nav-link {{ menuactive(['add-branch'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add New Branch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-branch')}}" class="nav-link {{ menuactive(['list-branch'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Branch List</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add-employee','list-employee','add-designation','list-designation','add-designation','add-department','list-department'])}}">
            <a href="#" class="nav-link {{ menuactive(['add-employee','list-employee','add-designation','list-designation','add-designation','add-department','list-department'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Employee Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add-employee')}}" class="nav-link {{ menuactive(['add-employee'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add New Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-employee')}}" class="nav-link {{ menuactive(['list-employee'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Employee List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add-designation')}}" class="nav-link {{ menuactive(['add-designation'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add New Designation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-designation')}}" class="nav-link {{ menuactive(['list-designation'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Designation List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add-department')}}" class="nav-link {{ menuactive(['add-department'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add New Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-department')}}" class="nav-link {{ menuactive(['list-department'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Department List</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add-user-role','list-user-role'])}}">
            <a href="#" class="nav-link {{ menuactive(['add-user-role','list-user-role',])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                User Role & Permission
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add-user-role')}}" class="nav-link {{ menuactive(['add-user-role'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Create New Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-user-role')}}" class="nav-link {{ menuactive(['list-user-role',])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Role List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Role Permission</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add-user','list-user'])}}">
            <a href="#" class="nav-link {{ menuactive(['add-user','list-user',])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                User Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add-user')}}" class="nav-link {{ menuactive(['add-user',])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add New User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-user')}}" class="nav-link {{ menuactive(['list-user',])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add-terms-condition','list-terms-condition'])}}">
            <a href="#" class="nav-link {{ menuactive(['add-terms-condition','list-terms-condition'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Terms & condition setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add-terms-condition')}}" class="nav-link {{ menuactive(['add-terms-condition'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Add terms and conditions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-terms-condition')}}" class="nav-link {{ menuactive(['list-terms-condition'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Terms and conditions list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Department Wise Contact</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add-country','list-country','add-city','list-city','add-area','list-area'])}}">
            <a href="#" class="nav-link {{ menuactive(['add-country','list-country','add-city','list-city','add-area','list-area'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Location Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('list-country')}}" class="nav-link {{ menuactive(['add-country','list-country'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Country</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-city')}}" class="nav-link {{ menuactive(['add-city','list-city'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>City</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-area')}}" class="nav-link {{ menuactive(['add-area','list-area'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Area</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add-hs-code','list-hs-code','add-declarant','list-declarant','add-custom-office','list-custom-office','add-destination','list-destination','add-irc','list-irc','add-lc-charge','list-lc-charge','add-carrier','list-carrier','add-port-loading','list-port-loading','add-port-landing','list-port-landing'])}}">
            <a href="#" class="nav-link {{ menuactive(['add-hs-code','list-hs-code','add-declarant','list-declarant','add-custom-office','list-custom-office','add-destination','list-destination','add-irc','list-irc','add-lc-charge','list-lc-charge','add-carrier','list-carrier','add-port-loading','list-port-loading','add-port-landing','list-port-landing'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Vehicle import setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ childmenuactive(['add-irc','list-irc'])}} {{ rootmenuactive(['add-irc','list-irc'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Import Regi. Certificate
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-irc','list-irc'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-irc')}}" class="nav-link {{ menuactive(['add-irc'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add IRC
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-irc')}}" class="nav-link {{ menuactive(['list-irc'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        List of IRC 
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['add-lc-charge','list-lc-charge'])}} {{ rootmenuactive(['add-lc-charge','list-lc-charge'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>LC Bank Charge
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-lc-charge','list-lc-charge'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-lc-charge')}}" class="nav-link {{ menuactive(['add-lc-charge'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add LC Bank Charge
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-lc-charge')}}" class="nav-link {{ menuactive(['list-lc-charge'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        List of LC Bank Charge 
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['add-carrier','list-carrier'])}} {{ rootmenuactive(['add-carrier','list-carrier'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Carrier
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-carrier','list-carrier'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-carrier')}}" class="nav-link {{ menuactive(['add-carrier'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add Carrier
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-carrier')}}" class="nav-link {{ menuactive(['list-carrier'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Carrier List
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['add-port-loading','list-port-loading'])}} {{ rootmenuactive(['add-port-loading','list-port-loading'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Port of Loading
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-port-loading','list-port-loading'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-port-loading')}}" class="nav-link {{ menuactive(['add-port-loading'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add Port of Loading
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-port-loading')}}" class="nav-link {{ menuactive(['list-port-loading'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Port of Loading List
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['add-port-landing','list-port-landing'])}} {{ rootmenuactive(['add-port-landing','list-port-landing'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Port of Landing
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-port-landing','list-port-landing'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-port-landing')}}" class="nav-link {{ menuactive(['add-port-landing'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add Port of Landing
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-port-landing')}}" class="nav-link {{ menuactive(['list-port-landing'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Port of Landing List
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['add-destination','list-destination'])}} {{ rootmenuactive(['add-destination','list-destination'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Destination
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-destination','list-destination'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-destination')}}" class="nav-link {{ menuactive(['add-destination'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add Destination
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-destination')}}" class="nav-link {{ menuactive(['list-destination'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Destination List
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['add-custom-office','list-custom-office'])}} {{ rootmenuactive(['add-custom-office','list-custom-office'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Customs Office
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-custom-office','list-custom-office'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-custom-office')}}" class="nav-link {{ menuactive(['add-custom-office'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add Customs Office
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-custom-office')}}" class="nav-link {{ menuactive(['list-custom-office'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Customs Office List
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['add-declarant','list-declarant'])}} {{ rootmenuactive(['add-declarant','list-declarant'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Declarant
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-declarant','list-declarant'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-declarant')}}" class="nav-link {{ menuactive(['add-declarant'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add Declarant
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-declarant')}}" class="nav-link {{ menuactive(['list-declarant'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Declarant List
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item {{ childmenuactive(['add-hs-code','list-hs-code'])}} {{ rootmenuactive(['add-hs-code','list-hs-code'])}}">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>HS Code
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview {{ childmenushow(['add-hs-code','list-hs-code'])}}">
                  <li class="nav-item">
                    <a href="{{ route('add-hs-code')}}" class="nav-link {{ menuactive(['add-hs-code'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Add HS Code
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('list-hs-code')}}" class="nav-link {{ menuactive(['list-hs-code'])}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        HS Code List
                      </p>
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add_vehicle_open_stock','list_vehicle_open_stock','approve-vehicle-open-stock','add-spare-parts-open-stock','list-spare-parts-open-stock','add-opening-blance','list-opening-blance'])}}">
            <a href="#" class="nav-link {{ menuactive(['add_vehicle_open_stock','list_vehicle_open_stock','approve-vehicle-open-stock','add-spare-parts-open-stock','list-spare-parts-open-stock','add-opening-blance','list-opening-blance'])}}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Opening Stock & Balance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('list_vehicle_open_stock')}}" class="nav-link {{ menuactive(['add_vehicle_open_stock','list_vehicle_open_stock'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Vehicle Opening Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('approve-vehicle-open-stock')}}" class="nav-link {{ menuactive(['approve-vehicle-open-stock'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Vehicle Opening Stock Approve</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-spare-parts-open-stock')}}" class="nav-link {{ menuactive(['list-spare-parts-open-stock','add-spare-parts-open-stock'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Spare Parts Opening Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list-opening-blance')}}" class="nav-link {{ menuactive(['add-opening-blance','list-opening-blance'])}}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Opening Balance</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['add_costing_void','add_spare_parts_costing_void','add_sales_costing_void','add_spare_parts_sales_costing_void']) }}">
            <a href="#" class="nav-link {{ menuactive(['add_costing_void','add_spare_parts_costing_void','add_sales_costing_void','add_spare_parts_sales_costing_void']) }}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>
                Void
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add_costing_void') }}" class="nav-link {{ menuactive(['add_costing_void']) }}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Costing Void</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add_spare_parts_costing_void') }}" class="nav-link {{ menuactive(['add_spare_parts_costing_void']) }}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Spare Parts Purchase Void</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add_sales_costing_void') }}" class="nav-link {{ menuactive(['add_sales_costing_void']) }}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Sales Void</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add_spare_parts_sales_costing_void') }}" class="nav-link {{ menuactive(['add_spare_parts_sales_costing_void']) }}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Spare Parts Sales Void</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add_costing_void') }}" class="nav-link {{ menuactive(['add_costing_void']) }}">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Voucher Void</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item {{ rootmenuactive(['business_setup.reminder_setup'])}}">
            <a href="{{route('business_setup.reminder_setup')}}" class="nav-link {{ menuactive(['business_setup.reminder_setup'])}}">
              <i class="nav-icon  far fa-circle text-info"></i>
              <p>
                Reminder Set Up
              </p>
            </a>
            </li>

            <li class="nav-item {{ rootmenuactive(['business_setup.wharfrent_charge_setup'])}}">
            <a href="{{route('business_setup.wharfrent_charge_setup')}}" class="nav-link {{ menuactive(['business_setup.wharfrent_charge_setup'])}}">
              <i class="nav-icon  far fa-circle text-info"></i>
              <p>
                Wharfrent Charge Set Up
              </p>
            </a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>