@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Spare Parts Sales Entry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Spare Parts Sales Entry</li>
              
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

              <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card">
                      <div class="card-body">


                        <div class="form-group row">
                        
                          <div class="col-sm-12 pt-lg-2">
              
                              <div class="icheck-success d-inline">
                              <input type="radio" name="r3" checked="" value="Bill" id="Bill">
                              <label for="Bill">
                                Bill to Custome <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="The invoice value will be charged to customer"></i>                          </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r3" id="Costing" value="Costing">
                                <label for="Costing">
                                  Add to Costing <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="The invoice value will be added to vehicle costing"></i>
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r3" id="Retail" value="Retail">
                                <label for="Retail">
                                  Retail Sales <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="Use this option if you do not want to select a customer"></i>
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-6 py-2 bill">
                            <div class="input-group input-group-sm">
                              <select class="form-control select2" name="">
                                <option selected>Select Bank</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select> 
                              <span class="input-group-append">
                              <a href="" class="btn btn-success btn-flat"><i class="fas fa-plus"></i></a>
                              </span>
                              </div>
                          </div>
                          <div class="col-sm-6 py-2 bill">
                            <div class="row">
                              <label for="inputEmail3" class="col-sm-4 col-form-label">Vin/Chassis No</label>
                              <select class="form-control select2 col-sm-8" name="">
                                <option selected>Select Bank</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>

                            </div>
                          </div>

                          <div class="col-sm-12 py-2 cost" style="display: none">
                            <div class="row">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">Vin/Chassis No</label>
                              <select class="form-control select2 col-sm-4" name="">
                                <option selected>Select Bank</option>
                                <option>Pending</option>
                                <option>Active</option>
                              </select>

                            </div>
                          </div>
                                            
                        </div>
      
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Spare Parts</label><br>
                                <select class="form-control select2" name="month">
                                  <option selected>Select Product</option>
                                  <option>Pending</option>
                                  <option>Active</option>
                                </select>
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Price</label>
                                  <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Quentity</label>
                                  <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Discount</label>
                                  <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Vat</label>
                                  <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="">
                              </div> 
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputEmail3" class="col-form-label">Amount</label>
                                  
                                  <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name=""> 
                                    <span class="input-group-append">
                                    <a href="" class="btn btn-success btn-flat"><i class="fas fa-plus"></i></a>
                                    </span>
                                    </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-3">
                                <div class="table-responsive p-0">
                                  <table class="table table-bordered mb-0">
                                    <thead class="bg-navy text-white">
                                      <tr>
                                        <th>Sl </th>
                                        <th>Product Name </th>
                                        <th>Price</th>
                                        <th>Quentity</th>
                                        <th>Discount(tk)</th>
                                        <th>Vat(%)</th>
                                        <th>Net total</th>
                                        <th class="text-center">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>03-Nov-2022 </td>
                                        <td>Suzuki-Hustler (MR41S, Tough wild, 660cc, Auto, 2WD, 4 seater)</td>
                                        <td>MR41S-345005655</td>
                                        <td>Arafat Islam
                                          01703606960</td>
                                        <td>01703606960</td>
                                        <td>01703606960</td>
                                      
                                        <td class="text-center my-auto"><a href="" class="text-info" data-toggle="modal" data-target="#confirmed_sales"> <i class="fas fa-edit"></i></a>
                                            <a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
                                        
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="inputEmail3" class="col-form-label text-bold text-lg p-0 m-0 float-lg-right">Total Quentity: 0 Subtotal:390000.00</label>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">  
                                <textarea class="form-control form-control-sm" rows="2" placeholder="White Something about purchase...." name="pe_address" spellcheck="false" required=""></textarea>
                                </div>
                              </div>
                              
                          </div>
                          </div>
                                                  
                        </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                      <div class="card-body p-2">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 border-bottom my-2">
                          <label for="inputEmail3" class="col-form-label text-danger text-lg text-bold ">Invoice No:25421231</label>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Date</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <input type="date" class="form-control form-control-sm" id="inputEmail3" value="{{ date('Y-m-d') }}" name="">
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Sold By</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <select class="form-control select2" name="">
                          <option>Select</option>
                          <option>MD. Harun</option>
                        </select>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 border-bottom my-2">
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Discount</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="row">
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <div class="input-group input-group-sm">
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="" readonly> 
                              <div class="input-group-append">
                                <span class="input-group-text">Tk</span>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <div class="input-group input-group-sm">
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="" name="" readonly> 
                              <div class="input-group-append">
                                <span class="input-group-text">%</span>
                                </div>
                              </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Grand Total</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="" readonly>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Delivery Charge</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="" readonly>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="inputEmail3" class="col-form-label">Net Amount</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="row">
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <div class="input-group input-group-sm">
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="" readonly> 
                              <div class="input-group-append">
                                <span class="input-group-text">Adjust</span>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <div class="input-group input-group-sm">
                              <input type="number" class="form-control form-control-sm" id="inputEmail3" value="0" name="" readonly> 
                             
                              </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-sm-12">
                        <label for="inputEmail3" class="col-form-label text-lg text-bold float-lg-right">$ 1755000.00</label>
                      </div>
                      <div class="col-6 text-left">
                        <button type="submit" class="btn-block btn btn-md btn-danger" disabled>Remove</button>
                      </div>
                      <div class="col-6  text-right">
                        <button type="submit" class="btn-block btn btn-md btn-success" disabled>Proced</button>
                      </div>
                    </div>

                    </div>
                  </div>
                  </div>
                </div>

               
            </form>


          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection