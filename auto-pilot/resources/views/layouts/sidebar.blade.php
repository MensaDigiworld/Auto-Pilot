@if (Route::currentRouteName() =='home')
@include('sidebar')

@elseif (\Request::is('Lc-Purchase/*'))
@include('lc_purchase.sidebar')

@elseif (\Request::is('Business-Setup/*'))
@include('business_setup.sidebar')

@elseif (\Request::is('Inventory/*'))
@include('inventory.sidebar')

@elseif (\Request::is('Sales/*'))
@include('sales.sidebar')

@elseif (\Request::is('Communication/*'))
@include('communication.sidebar')

@elseif (\Request::is('Accounting/*'))
@include('accounting.sidebar')

@endif