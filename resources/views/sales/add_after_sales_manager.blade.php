@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">After Sales Manager</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="#">Home</a></li>
              <li class="breadcrumb-item active">After Sales Manager</li>
              <li class="breadcrumb-item"><a href="{{ route('sales.list_after_sales_manager') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i>List</a></li>
              
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
          <div class="col-lg-12 col-md-12 col-sm-12">

            
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  @csrf

                  <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <select class="form-control select2" name="">
                                  <option selected>Select</option>
                                  <option>Pending</option>
                                  <option>Active</option>
                                </select>
                              </div> 
                            </div>
                            
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Vin/Chassis No" value="" name=""> 
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Milleage" value="" name="">
                              </div> 
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Engine Number" value="" name="">
                              </div> 
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Auction Grade" value="" name="">
                              </div> 
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Registartion Number" value="" name="">
                              </div> 
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Tracking Code" value="" name=""> 
                              </div>
                            </div>
                        
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="card">
                       
                        <div class="card-body">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <div class="input-group input-group-sm">
                                <select class="form-control select2" name="">
                                  <option selected>Select Customer</option>
                                  <option>Pending</option>
                                  <option>Active</option>
                                </select>
                                <span class="input-group-append">
                                <button type="button" class="btn btn-success btn-sm btn-flat"><i class="fas fa-plus"></i></button>
                                </span>
                                </div> 
                            </div>
                            </div>
                            
                            <div class="col-sm-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="" readonly value="" name="">
                              </div> 
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="" readonly value="" name=""> 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Sales Date</label>
                                  <input type="date" class="form-control form-control-sm" id="inputEmail3" placeholder="" value="" name="">
                                </div> 
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Delivery Date</label>
                                <input type="date" class="form-control form-control-sm" id="inputEmail3" placeholder="" value="" name="">
                                </div> 
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column flex-lg-row flex-md-row border-bottom">                             
                                    <label for="inputEmail3" class="col-form-label text-lg text-navy"><i class="fas fa-key"></i> Key Type </label>
                                      <div class="icheck-success d-inline align-self-center mx-2">
                                        <input type="radio" name="r3" checked="" value="Smartkey" id="Smart">
                                        <label for="Smart">
                                          Smart Key
                                        </label>
                                      </div>
                                      <div class="icheck-success d-inline align-self-center">
                                        <input type="radio" name="r3" id="Normal" value="Normalkey">
                                        <label for="Normal">
                                          Normal Key
                                        </label>
                                      </div>             
                              </div>
                              <div class="d-flex flex-lg-row flex-md-row flex-column border-bottom justify-content-between py-2">
                                <div>
                                  <label for="inputEmail3" class="col-form-label">Number of Key Receive</label><br>
                                  <div class="input-group">
                                    <div class="input-group-prepend bg-white">
                                      <span class="input-group-text"><i class="fas fa-minus text-danger"></i></span>
                                    </div>
                                    <input type="number" class="form-control form-control-sm text-center" value="0">
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="fas fa-plus text-success"></i></span>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <label for="inputEmail3" class="col-form-label">Number of Key Delivered</label><br>
                                  <div class="input-group">
                                    <div class="input-group-prepend bg-white">
                                      <span class="input-group-text"><i class="fas fa-minus text-danger"></i></span>
                                    </div>
                                    <input type="number" class="form-control form-control-sm text-center" value="0">
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="fas fa-plus text-success"></i></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex flex-column flex-lg-row flex-md-row border-bottom">                             
                                <label for="inputEmail3" class="col-form-label text-lg text-navy"><i class="fas fa-key"></i> Card Type </label>
                                  <div class="icheck-success d-inline align-self-center mx-2">
                                    <input type="radio" name="r4" checked="" value="SDCard" id="SDCard">
                                    <label for="SDCard">
                                      SD Card
                                    </label>
                                  </div>
                                  <div class="icheck-success d-inline align-self-center">
                                    <input type="radio" name="r4" id="MMCCard" value="MMCCard">
                                    <label for="MMCCard">
                                      MMC Card
                                    </label>
                                  </div>             
                              </div>
                              <div class="d-flex flex-lg-row flex-md-row flex-column justify-content-between py-2">
                                <div>
                                  <label for="inputEmail3" class="col-form-label">Number of Key Receive</label><br>
                                  <div class="input-group">
                                    <div class="input-group-prepend bg-white">
                                      <span class="input-group-text"><i class="fas fa-minus text-danger"></i></span>
                                    </div>
                                    <input type="number" class="form-control form-control-sm text-center" value="0">
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="fas fa-plus text-success"></i></span>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <label for="inputEmail3" class="col-form-label">Number of Key Delivered</label><br>
                                  <div class="input-group">
                                    <div class="input-group-prepend bg-white">
                                      <span class="input-group-text"><i class="fas fa-minus text-danger"></i></span>
                                    </div>
                                    <input type="number" class="form-control form-control-sm text-center" value="0">
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="fas fa-plus text-success"></i></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex flex-column flex-fill"> 
                                <div>                          
                                  <label for="inputEmail3" class="col-form-label">Hand Over By</label><br>
                                  <div class="form-group">                     
                                    <select class="form-control select2" name="">
                                      <option selected>Select</option>
                                      <option>Pending</option>
                                      <option>Active</option>
                                    </select> 
                                  </div>
                                </div>         
                                <div>                          
                                  <label for="inputEmail3" class="col-form-label">Remarks</label><br>
                                  <div class="form-group">                     
                                    <textarea rows="2" class="form-control form-control-sm"></textarea>
                                  </div>
                                </div>         
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                      <div class="row">
                        <div class="col-12">

                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column flex-lg-row flex-md-row">
                                <div>
                                  <label for="inputEmail3" class="col-form-label text-lg text-navy flex-fill">Document Reminder </label>
                                </div>
                                
                              </div>
                              <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div>
                                          <div class="icheck-success d-inline align-self-center">
                                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="Smart">
                                            <label for="Smart">
                                              Tax Token
                                            </label>
                                          </div>
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div>
                                          <div class="icheck-success d-inline align-self-center">
                                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="Smart">
                                            <label for="Smart">
                                              Tax Token
                                            </label>
                                          </div>
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div>
                                          <div class="icheck-success d-inline align-self-center">
                                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="Smart">
                                            <label for="Smart">
                                              Tax Token
                                            </label>
                                          </div>
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div>
                                          <div class="icheck-success d-inline align-self-center">
                                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="Smart">
                                            <label for="Smart">
                                              Tax Token
                                            </label>
                                          </div>
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 my-2">
                                                        
                                  <textarea class="form-control form-control-sm" id="inputEmail3" rows="2" name="" placeholder="Remarks"></textarea>
                                      

                                </div>
                              </div>
                                                        
                            </div>
                          </div>
                                                    
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">

                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column flex-lg-row flex-md-row">
                                <div>
                                  <label for="inputEmail3" class="col-form-label text-lg text-navy flex-fill">Service Reminder </label>
                                </div>
                                
                              </div>
                              <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div>
                                          <div class="icheck-success d-inline align-self-center">
                                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="Smart">
                                            <label for="Smart">
                                              Regular Servicing
                                            </label>
                                          </div>
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                 
                              
                                          <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Engine Oil" value="" name="">
                                       
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class="text-bold">
                                          Engine Oil
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class="text-bold">
                                          Transmission Oil/Gear Oil
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div>
                                          <div class="icheck-success d-inline align-self-center">
                                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="Smart">
                                            <label for="Smart">
                                              Regular Servicing
                                            </label>
                                          </div>
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Engine Oil" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class="text-bold">Engine Oil 
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="text" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class="text-bold">Transmission Oil/Gear Oil 
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                      <div class="col-12 d-flex flex-row justify-content-between">
                                        <div>
                                          <div class="icheck-success d-inline align-self-center">
                                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="Smart">
                                            <label for="Smart">
                                              Tax Token
                                            </label>
                                          </div>
                                        </div>
                                        <div>
                                          <div class="input-group input-group-xs">
                                            <div class="input-group-prepend">
                                              <div class="dropdown-toggle text-bold text-primary" data-toggle="dropdown" aria-expanded="false">
                                              Reminder
                                              </div>
                                              <ul class="dropdown-menu" style="">
                                                <li class="dropdown-item"><a href="#">Action</a></li>
                                                <li class="dropdown-item"><a href="#">Another action</a></li>
                                                <li class="dropdown-item"><a href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 my-2">
                                        <div>
                              
                                          <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 my-2">
                                                        
                                  <textarea class="form-control form-control-sm" id="inputEmail3" rows="2" name="" placeholder="Remarks"></textarea>
                                      

                                </div>
                              </div>
                                                        
                            </div>
                          </div>
                                                    
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between border-bottom">
                              <div>
                                <div class="text-lg text-bold text-navy">Service Details</div>
                              </div>
                              <div>
                                <div class="text-lg text-bold text-danger">Validity: 3 Years</div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class=" col-12 d-flex justify-content-between my-2">
                              <div>
                                <div class="text-md text-bold text-black">Remaining: 2 out of 3</div>
                              </div>
                              <div>
                                <div class="text-md text-bold text-black">Service Details: Wash, Engine Oil Filter Change</div>
                              </div>
                              <div>
                                <button type="submit" class="btn btn-md btn-primary btn-flat">Book A Service</button>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">Satrt Date</label>
                              <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="" >
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">Booked By</label>
                              <select class="form-control select2" name="">
                                <option selected>Select</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">Remarks</label>
                              <div class="input-group input-group-sm">
                                <textarea class="form-control form-control-sm" rows="1" name=""></textarea>
                                <span class="input-group-append">
                                <button type="button" class="btn btn-success btn-sm btn-flat"><i class="fas fa-plus"></i></button>
                                </span>
                                </div> 
                            </div>
                          </div>
                          <div class="row my-2">
                            <div class="col-12">
                              <div class="table-responsive p-0">
                                <table class="table table-bordered mb-0">
                                  <thead class="bg-gray text-white">
                                    <tr>
                                      <th>Start date </th>
                                      <th>Booked By</th>
                                      <th>Remarks</th>
                                      <th>Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>16/6/2022</td>
                                      <td>Md Babul</td>
                                      <td>N/A</td>
                                      <td>Pending</td>                                    
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between border-bottom">
                              <div>
                                <div class="text-lg text-bold text-navy">Warranty Details</div>
                              </div>
                              
                            </div>
                          </div>
                          <div class="row">
                            <div class=" col-12 d-flex justify-content-between my-2">
                              <div>
                                <div class="text-md text-bold text-black">Service Warranty: Warranty</div>
                              </div>
                              <div>
                                <div class="text-md text-bold text-black">Warranty Details: Engine Warranty</div>
                              </div>
                              <div>
                                <button type="submit" class="btn btn-md btn-primary btn-flat">Register A Claim</button>
                              </div>
                            </div>
                          </div>
                          <div class="row my-2">
                            <div class="col-12">
                              <div class="table-responsive p-0">
                                <table class="table table-bordered mb-0">
                                  <thead class="bg-gray text-white">
                                    <tr>
                                      <th>Date </th>
                                      <th>Approved By</th>
                                      <th>Description</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>16/6/2022</td>
                                      <td>Md Babul</td>
                                      <td>N/A</td>                                   
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between border-bottom">
                              <div>
                                <div class="text-lg text-bold text-navy">Membership Card card number</div>
                              </div>
                              <div>
                                <div class="text-lg text-bold text-danger">Validity: 3 Year(s)</div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class=" col-12 d-flex justify-content-between my-2">
                              <div>
                                <div class="text-md text-bold text-black">Remaining: 2 out of 3</div>
                              </div>
                              <div>
                                <div class="text-md text-bold text-black">Details: Wash, Engine Oil Filter Change</div>
                              </div>
                              <div>
                                <button type="submit" class="btn btn-md btn-primary btn-flat">Book A Service</button>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">Satrt Date</label>
                              <input type="date" class="form-control form-control-sm" id="inputEmail3" value="" name="" >
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">Booked By</label>
                              <select class="form-control select2" name="">
                                <option selected>Select</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="inputEmail3" class="col-form-label">Remarks</label>
                              <div class="input-group input-group-sm">
                                <textarea class="form-control form-control-sm" rows="1" name=""></textarea>
                                <span class="input-group-append">
                                <button type="button" class="btn btn-success btn-sm btn-flat"><i class="fas fa-plus"></i></button>
                                </span>
                                </div> 
                            </div>
                          </div>
                          <div class="row my-2">
                            <div class="col-12">
                              <div class="table-responsive p-0">
                                <table class="table table-bordered mb-0">
                                  <thead class="bg-gray text-white">
                                    <tr>
                                      <th>Start date </th>
                                      <th>Booked By</th>
                                      <th>Remarks</th>
                                      <th>Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>16/6/2022</td>
                                      <td>Md Babul</td>
                                      <td>N/A</td>
                                      <td>Pending</td>                                    
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>                 
              
                <div class="card">
                  <div class="card-body bg-gray">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 div col-sm-12 d-flex flex-column">
                        <div>
                          <div class="form-group">
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="customer1">
                            <label for="customer1">
                              customer does'nt want to get nofified
                            </label>
                          </div>
                        </div>
                        </div>
                        <div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" name="r3" checked="" value="Smartkey" id="customer2">
                            <label for="customer2">
                              vehicle ownership changed
                            </label>
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-lg-6 col-md-6 div col-sm-12 d-flex flex-row justify-content-end">
                        <div>
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-primary mx-2">List</button>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                    
                    
              </div>
              <!-- /.card-footer -->
            </form>

          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection