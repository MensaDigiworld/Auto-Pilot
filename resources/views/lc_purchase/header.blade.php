<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('lc.list_pending_purchase')}}" class="btn btn-app btn-app-c text-dark  {{ Route::currentRouteName() =='lc.list_pending_purchase' ? 'bg-navy' : ''}}">
      <span class="badge bg-danger">300</span>
      <i class="fas fa-shopping-basket"></i> <span class="text-xs">Pending Purchase</span>
      </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('lc.list_pending_import') }}"class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='lc.list_pending_import' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">300</span>
    <i class="fas fa-car"></i> <span class="text-xs">Pending Import</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('lc.list_pending_insurance') }}"class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='lc.list_pending_insurance' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">300</span>
    <i class="fas fa-shield-alt"></i> <span class="text-xs">Pending Insurance</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('lc.list_pending_lc') }}"class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='lc.list_pending_lc' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">300</span>
    <i class="fas fa-envelope"></i> <span class="text-xs">Pending LC</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('lc.list_pending_bl') }}"class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='lc.list_pending_bl' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">300</span>
    <i class="fas fa-file"></i> <span class="text-xs">Pending BL</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('lc.list_pending_be') }}"class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='lc.list_pending_be' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">300</span>
    <i class="fas fa-file-alt"></i> <span class="text-xs">Pending BE</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('lc.lc_manager') }}"class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='lc.lc_manager' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">300</span>
    <i class="fas fa-money-bill-alt"></i> <span class="text-xs">Pending Costing(Import)</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('lc.local_purchase_manager') }}"class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='lc.local_purchase_manager' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">300</span>
    <i class="fas fa-money-bill-alt"></i> <span class="text-xs">Pending Costing(Local)</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('lc.lc-purchase-report') }}"class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='lc.lc-purchase-report' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger"></span>
    <i class="fas fa-file-pdf"></i> <span class="text-xs">Report</span>
    </a>
</li>
