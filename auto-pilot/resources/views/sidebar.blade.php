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
      @if (Route::currentRouteName() =='home' || Request::is('Business-Setup/*'))
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @else
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @endif
        <div class="image">
          <img src="{{ asset('public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ">
          <a href="#" class="d-block text-white">{{ Auth::user()->name}}</a>
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

      <!-- Sidebar For Main -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">Models</li>
          <li class="nav-item ">
            <a href="{{ route('lc.lc-home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                LC & PURCHASE
              </p>
            </a>

          </li>

          <li class="nav-item ">
            <a href="{{ route('invent.home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                INVENTORY
              </p>
            </a>

          </li>

          <li class="nav-item ">
            <a href="{{ route('sales.dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                SALES
              </p>
            </a>

          </li>

          <li class="nav-item ">
            <a href="{{ route('accounting.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                ACCOUNTING
              </p>
            </a>

          </li>

          <li class="nav-item ">
            <a href="{{ route('communication.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                COMMUNICATION
              </p>
            </a>

          </li>
          <li class="nav-item ">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                ANALYTICS
              </p>
            </a>

          </li>


          <li class="nav-header">Shortcut</li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                STOCK LIST
              </p>
            </a>

          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                INVENTORY MANAGER
              </p>
            </a>

          </li>


          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                VEHICLE SALES
              </p>
            </a>

          </li>


          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PRE ORDER
              </p>
            </a>

          </li>


          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                SPARE PARTS SALES
              </p>
            </a>

          </li>


          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                QUOTATION
              </p>
            </a>

          </li>


          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                LEAD MANAGER
              </p>
            </a>

          </li>

          <li class="nav-header bg-success">
            <a href="{{ route('business.index')}}" class="nav-link text-danger">
            Setup
          </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>