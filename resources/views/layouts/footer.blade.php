<footer class="main-footer bg-navy d-lg-block d-md-block d-sm-none p-0">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="float-left">
        <strong>Copyright &copy; @php
          echo date('Y');
        @endphp <a href="#">A</a>.</strong>
      </div>
      
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="text-center">
        <a href="{{ route('lc.lc-home')}}" class="btn bg-gradient-success">LC & Pruchase</a>
        <a href="{{ route('invent.home')}}" class="btn bg-gradient-info">Inventory</a>
        <a href="{{ route('accounting.dashboard')}}" class="btn bg-gradient-warning">Accounting</a>
        <a href="{{ route('sales.dashboard')}}" class="btn bg-gradient-primary">Sales</a>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
     <div class="float-right">
      All rights reserved.
    <div class="d-inline-block">
      <b>Version</b> 3.2.0
    </div>
      </div>     
    
    </div>
  </div>

</footer>

<footer class="main-footer bg-navy d-sm-block d-lg-none d-md-none">
  <div class="row">
    <div class="col-sm-12">
      <div class="text-center">
        <a href="{{ route('lc.lc-home')}}" class="btn bg-gradient-success">LC Pruchase</a>
        <a href="{{ route('invent.home')}}" class="btn bg-gradient-info">Inventory</a>
        <a href="{{ route('accounting.dashboard')}}" class="btn bg-gradient-warning">Accounting</a>
        <a href="{{ route('sales.dashboard')}}" class="btn bg-gradient-primary">Sales</a>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="text-left text-sm">
        <strong>Copyright &copy; @php
          echo date('Y');
        @endphp <a href="#">A</a>.</strong>
      </div>

      <div class="text-right text-sm">
        All rights reserved.
      <div class="d-inline-block">
        <b>Version</b> 3.2.0
      </div>
        </div> 
      
    </div>

    <div class="col-sm-12">
         
    
    </div>
  </div>

</footer>

