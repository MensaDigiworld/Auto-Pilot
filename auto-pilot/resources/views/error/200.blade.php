@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Under Development</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Under Development</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="error-page">
          <h2 class="headline text-warning"> 200</h2>
  
          <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i>Under Development.</h3>
  
            <p>
              We are developing this module.
              Meanwhile, you may <a href="{{ route('home')}}">return to dashboard</a> or try using the search form.
            </p>
  
          </div>
          <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
      </section>
    <!-- /.content -->
  </div>
@endsection