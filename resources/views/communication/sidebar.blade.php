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
               <li class="nav-item {{ rootmenuactive(['communication.dashboard','communication.list_lead_manager'])}}">
                <a href="{{ route('communication.dashboard')}}" class="nav-link {{ menuactive(['communication.dashboard','communication.list_lead_manager'])}}">
              <i class="nav-icon fas fa-tachometer-alt text-primary"></i>
              <p>
                Communication Dashboard
              </p>
            </a>

          </li>

          <li class="nav-item {{ rootmenuactive(['communication.add_active_lead','communication.list_cancelled_deal','communication.list_closed_deal','communication.list_initiated_lead'])}}">
            <a href="#" class="nav-link {{ menuactive(['communication.add_active_lead','communication.list_cancelled_deal','communication.list_closed_deal','communication.list_initiated_lead'])}}">
              <i class="nav-icon fas fa-chalkboard-teacher text-primary"></i>
              <p>
                Lead Manager
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('communication.add_active_lead')}}" class="nav-link {{ menuactive(['communication.add_active_lead'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p> Active communication</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communication.list_initiated_lead')}}" class="nav-link {{ menuactive(['communication.list_initiated_lead'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p>Initiated lead</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communication.list_closed_deal')}}" class="nav-link {{ menuactive(['communication.list_closed_deal'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p> Closed Deal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communication.list_cancelled_deal')}}" class="nav-link {{ menuactive(['communication.list_cancelled_deal'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p> Cancelled Lead</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['communication.list_customer_communication_previous','communication.list_customer_communication'])}}">
            <a href="#" class="nav-link {{ menuactive(['communication.list_customer_communication_previous','communication.list_customer_communication'])}}">
              <i class="nav-icon fas fa-comments text-primary"></i>
              <p>
                Customer Communication
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('communication.list_customer_communication')}}" class="nav-link {{ menuactive(['communication.list_customer_communication'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p> Customer List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communication.list_customer_communication_previous')}}" class="nav-link {{ menuactive(['communication.list_customer_communication_previous'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p>Previous Action List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['communication.list_service','communication.list_service_previous'])}}">
            <a href="#" class="nav-link {{ menuactive(['communication.list_service','communication.list_service_previous'])}}">
              <i class="nav-icon fas fa-car text-primary"></i>
              <p>
                Customer Vehicle service
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('communication.list_service')}}" class="nav-link {{ menuactive(['communication.list_service'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p> Service reminder</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communication.list_service_previous')}}" class="nav-link {{ menuactive(['communication.list_service_previous'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p>Previous Action List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ rootmenuactive(['communication.list_document','communication.list_document_previous','communication.add_vehical_document','communication.add_license_document'])}}">
            <a href="#" class="nav-link {{ menuactive(['communication.list_document','communication.list_document_previous','communication.add_license_document','communication.add_vehical_document'])}}">
              <i class="nav-icon fas fa-file text-primary"></i>
              <p>
                Customer vehicle document
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">              
              
              <li class="nav-item">
                <a href="{{ route('communication.list_document')}}" class="nav-link {{ menuactive(['communication.list_document'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p>Document reminder</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communication.list_document_previous')}}" class="nav-link {{ menuactive(['communication.list_document_previous'])}}">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p>Previous Action List</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>