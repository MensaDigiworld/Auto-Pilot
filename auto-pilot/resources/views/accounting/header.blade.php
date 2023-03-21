<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('sales.list_active_pre_order')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.list_active_pre_order' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">200</span>
    <i class="fas fa-file"></i>  <span class="text-xs">Direct Invoice Due</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('sales.list_active_booking')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.list_active_booking' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger">300</span>
  <i class="fas fa-file"></i> <span class="text-xs">Indirect Invoice Due</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('sales.list_quotation')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.list_quotation' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger"></span>
  <i class="fas fa-file"></i> <span class="text-xs">Reg. & Others Due</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('accounting.list_cheque')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='accounting.list_cheque' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger">2</span>
  <i class="fas fa-credit-card"></i> <span class="text-xs">Active Cheque</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a class="btn btn-app btn-app-c text-dark">
  <span class="badge bg-danger"></span>
  <i class="fas fa-file-pdf"></i> <span class="text-xs">Accounting Report</span>
  </a>
</li>

