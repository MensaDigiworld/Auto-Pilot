@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">LC Charge Account List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of LC Charge Account</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <h3 class=" col-md-12 col-lg-12 col-sm-12 text-center">Reminder Setup</h3>
                </div>
                <div class="row">
                  <h2 class="col-md-4"><b>LC & Purchase</b></h2>
                </div>
                <form action="" method="post">
                    @csrf
                   <div class="row">
                     <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>Supplier Payment Reminder</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                       <div class="col-md-1 col-lg-1 col-sm-4 mt-4">
                        <h5> <b>After Shiping Date</b></h5>
                         </div> 

                        <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>Nothing & Assesment Remnder</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                       <div class="col-md-1 col-lg-1 col-sm-4 mt-5">
                        <h5> <b>After Eta</b></h5>
                         </div>         
                          <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>Vehicle Release</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                       <div class="col-md-1 col-lg-1 col-sm-4 mt-5">
                        <h5> <b>After Eta</b></h5>
                         </div>    
                         <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>4.3 Submission</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                       <div class="col-md-1 col-lg-1 col-sm-4 mt-5">
                        <h5> <b>After Eta</b></h5>
                         </div>

                     </div>


                     <div class="row mt-3">
                       <div class="col-4">
                         <h2><b>Sale</b></h2>
                       </div>
                     </div>

                      <div class="row mt-2">
                     <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>6.3 Submission</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                       <div class="col-md-1 col-lg-1 col-sm-4 mt-5">
                        <h5> <b>After Delivery</b></h5>
                         </div> 

                        <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>Key Delivery</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                       <div class="col-md-1 col-lg-1 col-sm-4 mt-5">
                        <h5> <b>After Receving</b></h5>
                         </div>  
                     </div>

                    <div class="row mt-4">
                       <div class="col-7">
                         <h2><b>Customer Vehicle Document Reminder (Before Expire date)</b></h2>
                       </div>
                       <div class="col-1"></div>
                       <div class="col-4">
                         <h2><b>Service Reminder (Before Due Date)</b></h2>
                       </div>
                     </div>

                   <div class="row mt-2">
                     <div class="col-md-1 col-lg-1 col-sm-4">
                            <label for="inputEmail3"><h5>Tax Token</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                        <div class="col-md-1 col-lg-1 col-sm-4">
                            <label for="inputEmail3"><h5>Fitness</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>       
                          <div class="col-md-1 col-lg-1 col-sm-4">
                            <label for="inputEmail3"><h5>Insurance</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>   
                         <div class="col-md-1 col-lg-1 col-sm-4">
                            <label for="inputEmail3"><h5>Reg Ack.</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                       <div class="col-md-1 col-lg-1 col-sm-4">
                            <label for="inputEmail3"><h5>Route Permit.</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                       <div class="col-md-4 col-lg-4 col-sm-4"></div>
                       <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>All Service</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                     </div>

                      <div class="row mt-4">
                       <div class="col-7">
                         <h2><b>Official Document Reminder Set Up (Before Expire date)</b></h2>
                       </div>
                       <div class="col-1"></div>
                       <div class="col-4">
                       </div>
                     </div>

                    <div class="row mt-2">
                     <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>License</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>

                        <div class="col-md-2 col-lg-2 col-sm-4">
                            <label for="inputEmail3"><h5>Vehicle Document</h5></label>
                            <select class="form-control " name="status">                             
                              <option>Days- </option>
                              <option>10</option>
                              <option>20</option>
                              <option>30</option>   
                            </select>                              
                       </div>
                     </div>

              </div>
              
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection