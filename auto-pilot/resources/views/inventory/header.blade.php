<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('inventory.list_vehicle_workshop')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='inventory.list_vehicle_workshop' ? 'bg-navy' : ''}}">
    <span class="badge bg-danger"></span>
    <i class="fas fa-car"></i>  <span class="text-xs">Vehicle in Workshop</span>
    </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('inventory.list_vehicle_transfer_other_shoroom')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='inventory.list_vehicle_transfer_other_shoroom' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger"></span>
  <i class="fas fa-car"></i> <span class="text-xs">Transferred Vehicle to Others Showroom</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('inventory.list-vehicale-transfer-showroom')}}" class="btn btn-app btn-app-c text-dark {{ Route::currentRouteName() =='inventory.list-vehicale-transfer-showroom' ? 'bg-navy' : ''}}">
  <span class="badge bg-danger"></span>
  <i class="fas fa-car"></i> <span class="text-xs">Received from Others Showroom</span>
  </a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a class="btn btn-app btn-app-c text-dark">
  <span class="badge bg-danger"></span>
  <i class="fas fa-file-pdf"></i> <span class="text-xs">Report</span>
  </a>
</li>