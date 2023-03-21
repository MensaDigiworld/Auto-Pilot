<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('sales.list_active_pre_order')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.list_active_pre_order' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger">200</span>
    <i class="fas fa-car"></i>  <span class="text-xs">Active Pre-Order</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('sales.list_active_booking')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.list_active_booking' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger">300</span>
  <i class="fas fa-car"></i> <span class="text-xs">Active Booking</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('sales.list_quotation')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.list_quotation' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger"></span>
  <i class="fas fa-file"></i> <span class="text-xs">Active Quotation</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('sales.list_loan_manager')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.list_loan_manager' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger">2</span>
  <i class="fas fa-credit-card"></i> <span class="text-xs">Active Customer Loan</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('sales.booked_services')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.booked_services' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger">5</span>
  <i class="fas fa-car"></i> <span class="text-xs">Booked Services</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('sales.vehicle_registration')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.vehicle_registration' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger">3</span>
  <i class="fas fa-car"></i> <span class="text-xs">Vehicle Registration</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('sales.pending_delivery')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='sales.pending_delivery' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger">12</span>
  <i class="fas fa-car"></i> <span class="text-xs">Pending Vehicle Delivery</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a class="btn btn-app btn-app-c text-dark">
  <span class="badge bg-danger"></span>
  <i class="fas fa-file-pdf"></i> <span class="text-xs">Report</span>
  </a>
</li>


<div class="fixed-bottom-right">
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">
      <a href="{{route('sales.vehicle_lookup')}}"><i class="fas fa-car"></i> </a>
    </button>
    <button type="button" class="btn btn-danger">
    <a href="{{route('sales.loan_calculator')}}">  <i class="fas fa-money-bill-alt"></i></a>
    </button>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#vehicle_price_calculation">
      <i class="fas fa-calculator"></i>
    </button>
    </div>
</div>

