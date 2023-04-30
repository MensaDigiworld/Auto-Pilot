@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Local Purchase</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Local Purchase</li>
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

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Local Purchase</h3>
                <a href="{{ route('lc.list-foregin-purchase')}}" class="card-title float-right btn-success btn">List of Local Purchase</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('lclocalpurchase.update') }}" class="form-horizontal" method="POST">
                @csrf
                <input type="hidden" name="lcpurchase_id" value="{{ $purchase->id }}">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Date <span class="text-danger fw-600">*</span></label>
                          <div class="input-group">

                            <input type="date" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Purchase Date" value="{{ $purchase->date }}" name="date">

                          </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Supplier Type <span class="text-danger fw-600">*</span></label>
                        <div class="form-group pt-2">


                              <div class="icheck-success d-inline">
                              <input type="radio" name="supplier_type"  @if($purchase->supplier_type == 'Organization') checked @endif value="Organization" id="radioSuccess11">
                              <label for="radioSuccess11">
                                Organization
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="supplier_type"  @if($purchase->supplier_type == 'Individual') checked @endif id="radioSuccess12" value="Individual">
                              <label for="radioSuccess12">
                                Individual
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="supplier_type"   @if($purchase->supplier_type == 'Goverment') checked @endif id="radioSuccess13" value="Goverment">
                              <label for="radioSuccess13">
                                Goverment
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="supplier_type"  @if($purchase->supplier_type == 'Customer') checked @endif id="radioSuccess14" value="Customer">
                              <label for="radioSuccess14">
                                Customer (Part exchange)
                              </label>
                              </div>

                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 col-md-4 customer_table_hide">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Supplier <span class="text-danger fw-600">*</span></label>
                        <div class="input-group input-group-sm">
                          <select class="form-control select2" name="supplier_id" required>
                            <option>Select Supplier</option>
                            @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}" @if($purchase->supplier_id == $supplier->id) selected @endif >{{ $supplier->name }}</option>
                            @endforeach
                          </select>
                          <div class="input-group-append">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#supplier">
                                <i class="fas fa-plus"></i>
                              </button>

                          </div>
                          </div>
                      </div>
                    </div>
                  </div>
                   <div class="col-sm-12 col-lg-4 col-md-4 customer_table" style="display:none;">
                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Invoice Number <span class="text-danger fw-600">*</span></label>
                          <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" id="invoice_number"  name="invoice_number" placeholder="Innvoice Number Auto Generate" value="{{ $purchase->invoice_number }}">
                            <div class="input-group-append">
                            <button type="button" class="btn btn-sm btn-default" onclick="genInvoiceNumber()"><i class="fas fa-random"></i></button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Purchase Mode <span class="text-danger fw-600">*</span></label>
                        <div class="form-group pt-2">
                              <div class="icheck-success d-inline">
                              <input type="radio" name="purchase_mode" @if($purchase->purchase_mode == 'Purchase') checked @endif value="Purchase" id="radioSuccess15">
                              <label for="radioSuccess15">
                                Purchase
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="purchase_mode" @if($purchase->purchase_mode == 'Document_Only') checked @endif id="radioSuccess16" value="Document_Only">
                              <label for="radioSuccess16">
                                Document Only
                              </label>
                              </div>
                        </div>

                    </div>


                    <div class="col-sm-12 col-lg-4 col-md-4 customer_table">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Customer <span class="text-danger fw-600">*</span></label>
                        <div class="input-group input-group-sm">
                          <select class="form-control select2" name="customer_id" required>
                            <option>Select Customer (static)</option>
                            <option value="1" @if($purchase->customer_id == 1) selected @endif>Akbar Ali</option>
                            <option value="2" @if($purchase->customer_id == 2) selected @endif>Arman Ai</option>
                          </select>
                          <div class="input-group-append">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#customer">
                                <i class="fas fa-plus"></i>
                              </button>

                          </div>
                          </div>
                        </div>
                      </div>

                   <div class="col-sm-12 col-lg-4 col-md-4 customer_table_hide" style="display:none;">
                  </div>



                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <label for="inputEmail3" class="col-form-label">Source of Product</label>
                        <div class="form-group">


                              <div class="icheck-success d-inline">
                              <input type="radio" name="purchase_source" @if($purchase->purchase_source == 'Pre_Order') checked @endif value="Pre_Order" id="radioSuccess3">
                              <label for="radioSuccess3">
                                Pre Order
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="purchase_source" @if($purchase->purchase_source == 'Without_Pre_Order') checked @endif id="radioSuccess4" value="Without_Pre_Order" >
                              <label for="radioSuccess4">
                                Without Pre Order
                              </label>
                              </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Remarks <span class="text-danger fw-600">*</span></label>

                        <textarea class="form-control form-control-sm" rows="1" placeholder="" name="remarks" spellcheck="false"> {{ $purchase->remarks }}</textarea>

                      </div>
                    </div>

                  </div>


                  <div class="card preorder">
                    <h3 class="px-3 py-1">Pre-Order</h3>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Order Date </th>
                            <th>Vehicle </th>
                            <th>Customer </th>
                            <th>Expected Delivery Date</th>
                            <th>Budget</th>
                            <th colspan="2" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>31/Jul/2022</td>
                            <td>Toyota-Land Cruiser Prado (GDJ151W, TZ-G, 2800cc, Auto, 4WD, 7 seater)</td>
                            <td>MR OBAED ISLAM</td>
                            <td>07/Sep/2022</td>
                            <td>12000000</td>
                            <td class="text-right"><a href="" class="btn btn-sm btn-success"> <i class="fas fa-check"></i> Select</a></td>
                            <td class="text-right"><a href="" class="btn btn-sm btn-primary"><i class="fas fa-book-open"></i> Details</a></td>

                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <ul class="pagination pagination-md m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="withoutpreorder" style="display: none">
                    <h3>Without Pre-Order</h3>

                    <div class="row">

                      <label for="inputEmail3" class="col-form-label col-lg-1 col-sm-4 col-md-2">Vehicle Condition <span class="text-danger fw-600">*</span></label>

                      <div class="col-sm-8 col-lg-6 col-md-6 pt-lg-2">

                        <div class="form-group">


                              <div class="icheck-success d-inline">
                              <input type="radio" name="vehicle_condition" @if($purchase->vehicle_condition == 'Recondition') checked @endif value="Recondition" id="Recondition">
                              <label for="Recondition">
                                Recondition
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="vehicle_condition" @if($purchase->vehicle_condition == 'BrandNew') checked @endif id="BrandNew" value="BrandNew">
                              <label for="BrandNew">
                                Brand New
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="vehicle_condition" @if($purchase->vehicle_condition == 'Used') checked @endif id="Used" value="Used">
                                <label for="Used">
                                  Used
                                </label>
                                </div>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-lg-6 col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vehicle <span class="text-danger fw-600">*</span></label>

                            <select class="form-control select2" name="product_id">
                              <option>Select Vehicle</option>
                              @foreach ($products as $product)


                              <option value="{{ $product->id }}" @if($purchase->product_id == $product->id) selected @endif>{{ $product->name }}</option>

                              @endforeach

                            </select>

                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-2 col-md-2">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Package/Trim</label>

                            <select class="form-control select2" name="packagetrimvariant_id">
                              <option>Select Package/Trim</option>
                              @foreach ($packages as $pack)


                              <option value="{{ $pack->id }}" @if($purchase->packagetrimvariant_id == $pack->id) selected @endif> {{ $pack->name }}</option>

                              @endforeach

                            </select>

                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 col-md-4">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Vin/Chassis No <span class="text-danger fw-600">*</span></label>

                              <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Vin/Chassis No"  name="vin_chassis_no" value="{{ $purchase->vin_chassis_no }}">

                          </div>
                      </div>


                          <div class="col-sm-6 col-lg-3 col-md-3">
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-form-label">Engine No</label>

                                  <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Engine No"  name="engine_number" value="{{ $purchase->engine_number }}">

                              </div>
                          </div>

                          <div class="col-sm-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Vehicle Tracking Code</label>

                                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Vehicle Tracking Code"  name="vehicle_tracking_id" value="{{ $purchase->vehicle_tracking_id }}">

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-2 col-md-2">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Year of Manufacture <span class="text-danger fw-600">*</span></label>

                              <select class="form-control select2" name="year_of_manufacture" required>
                                <option>Select Year</option>
                                @for ($year = date('Y')+1; $year >=1980 ; $year--)
                                <option value="{{ $year }}" @if($purchase->year_of_manufacture == $year) selected @endif {{ date('Y')==$year ? 'Selected':'' }} >{{ $year }}</option>
                                @endfor

                              </select>

                          </div>
                        </div>

                        <div class="col-sm-6 col-lg-2 col-md-2">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Exterior Color</label>

                              <select class="form-control select2" name="exteriorcolor_id">
                                <option>Select Exterior Color</option>
                                @foreach ($exteriorcols as $ext)


                                <option value="{{ $ext->id }}" @if($purchase->exteriorcolor_id == $ext->id) selected @endif>{{ $ext->name }}</option>
                                @endforeach

                              </select>

                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-2 col-md-2">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Interior Color</label>

                              <select class="form-control select2" name="interiorcolor_id">
                                <option>Select Interior Color</option>
                                @foreach ($interiorcols as $int)


                                <option value="{{ $int->id }}" @if($purchase->interiorcolor_id == $int->id) selected @endif>{{ $int->name }}</option>
                                @endforeach

                              </select>

                          </div>
                        </div>


                        <div class="col-sm-12 col-lg-4 col-md-4">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label">Mileage</label>

                                <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Mileage"  name="mileage" value="{{ $purchase->mileage }}">

                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-4 col-md-4 auction_grade">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Auction Grade</label>

                              <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Auction Grade"  name="auction_grade" value="{{ $purchase->auction_grade }}">

                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4 col-md-4">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Tyre Size</label>

                              <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Tyre Size"  name="tyre_size" value="{{ $purchase->tyre_size }}">

                          </div>
                        </div>

                    </div>

                    <div class="row used" style="display: none">
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Document status</label>

                            <div class="form-group pt-2">

                              <div class="icheck-success d-inline">
                              <input type="radio" name="document_status"  value="Updated" id="Updated" @if($purchase->document_status == "Updated") selected @endif>
                              <label for="Updated">
                                Updated
                              </label>
                              </div>
                              <div class="icheck-success d-inline">
                              <input type="radio" name="document_status" id="Failed" value="Failed" @if($purchase->document_status == "Failed") selected @endif>
                              <label for="Failed">
                                Failed
                              </label>
                              </div>

                        </div>

                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Fitness Expire Date </label>

                            <input type="date" class="form-control form-control-sm" id="inputEmail3"  name="fitness_expiry_date" value="{{ $purchase->fitness_expiry_date }}">

                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Tax token Expire Date </label>

                            <input type="date" class="form-control form-control-sm" id="inputEmail3"  name="tax_token_expiry_date" value="{{ $purchase->tax_token_expiry_date }}">

                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Insurance Expire Date </label>

                            <input type="date" class="form-control form-control-sm" id="inputEmail3"  name="insurance_expiry_date" value="{{ $purchase->insurance_expiry_date }}">

                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="form-group">
                          <label for="exampleInputFile">Vehical Image</label>
                          <div class="input-group">
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                          </div>
                          </div>

                          <div class="form-group row">

                            <label for="inputEmail3" class="col-sm-6 col-lg-3 col-md-3 col-form-label d-sm-inline">Vehicle Warranty</label>
                            <div class="col-sm-6 col-lg-3 col-md-3 pt-lg-2">

                                <div class="icheck-success d-inline">
                                <input type="checkbox" name="warranty" value="yes" id="radioSuccess6" @if($purchase->warranty == "yes") selected @endif>
                                <label for="radioSuccess6">
                                </label>
                                </div>

                            </div>
                          </div>
                          </div>
                      </div>

                      <div class="col-sm-12 col-lg-8 col-md-8">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Vehicle Description</label>

                            <textarea class="form-control form-control-sm" rows="2" placeholder="Vehicle Warranty Information" name="vehicle_description" autocomplete="on" spellcheck="false">{{ $purchase->vehicle_description }}</textarea>

                        </div>
                      </div>

                  </div>

                  <div class="form-group row warrenty" style="display: none">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Warranty Information</label>
                    <div class="col-sm-10">

                      <textarea class="form-control form-control-sm" rows="3" placeholder="Addresss" name="warranty_information">
{{ $purchase->warranty_information }}
                      </textarea>
                    </div>
                  </div>

                  <h3>Pricing Information</h3>

                    <div class="row">

                      <div class="col-sm-12 col-lg-4 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Net Price (USD)</label>

                            <input type="number" class="form-control form-control-sm" id="inputEmail3"  name="price" value="{{ $purchase->price }}">

                        </div>
                      </div>

                        <div class="col-sm-12 col-lg-8 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Price Remarks</label>

                              <input type="text" class="form-control form-control-sm" id="inputEmail3"  name="price_remarks" value="{{ $purchase->price_remarks }}">

                          </div>
                        </div>


                    <div class="col-sm-12 col-lg-3 col-md-3">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-form-label">Temporary Retail Price (BDT)</label>

                          <input type="number" class="form-control form-control-sm" id="tempsaleprice"  name="temporary_sales_price" value="{{ $purchase->temporary_sales_price }}">

                      </div>
                    </div>

                      <div class="col-sm-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-form-label">Dealer Discount (BDT)</label>

                            <input type="number" class="form-control form-control-sm" id="tempdealerdiscount"  name="temporary_dealer_discount" value="{{ $purchase->temporary_dealer_discount }}">

                        </div>
                      </div>

                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Temporary Dealer Price (BDT)</label>

                              <input type="number" class="form-control form-control-sm" id="tempdealerprice" value="{{ $purchase->temporary_dealer_price }}" name="temporary_dealer_price" readonly>

                          </div>
                      </div>
                        <div class="col-sm-12 col-lg-3 col-md-3">
                          <div class="form-group">
                              <label for="inputEmail3" class="col-form-label">Purchased By</label>

                              <select class="form-control select2" name="emp_id">
                                <option>Select Employee (static)</option>
                                <option value="1" @if($purchase->emp_id == 1) selected @endif>Red</option>
                                <option value="2" @if($purchase->emp_id == 2) selected @endif>White</option>

                              </select>

                          </div>
                      </div>

                </div>





                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">update</button>
                  <a href="{{ route('lc.in-local-purchase') }}"class="btn btn-default float-right">Cancel</a>

                </div>
                <!-- /.card-footer -->
              </form>
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



{{-- modal for supplier --}}

  <div class="modal fade show" id="supplier" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
        <form role="form" method="POST"
        action="{{ route('lc.suppliers.store') }}"
        enctype="multipart/form-data" class="form-horizontal">
        @csrf

    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Add New Supplier</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
        <div class="col-lg-12 col-12">

            <div class="card">
                <div class="card-body">


                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Type<span
                                    class="text-danger fw-600">*</span></label>
                            <div class="col-sm-4 pt-lg-2">

                                <div class="icheck-success d-inline">
                                    <input type="radio" name="supplier_type" value="International"
                                        id="International"
                                    >
                                    <label for="International">
                                        International
                                    </label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="supplier_type" id="Local" value="Local"


                                    >
                                    <label for="Local">
                                        Local
                                    </label>
                                </div>
                            </div>

                            <label for="inputEmail3"
                                class="col-sm-2 col-form-label text-lg-right">BIN/NID/Passport</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputEmail3"
                                    placeholder="Enter BIN/NID/Passport"
                                    name="bin">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Business Category<span
                                    class="text-danger fw-600">*</span></label>
                            <div class="col-sm-4 pt-lg-2">

                                <div class="icheck-success d-inline">
                                    <input type="radio" name="business_category" value="Organization"
                                        id="Organization"
                                    >
                                    <label for="Organization">
                                        Organization
                                    </label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="business_category" id="Individual"
                                        value="Individual"
                                    >
                                    <label for="Individual">
                                        Individual
                                    </label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="business_category" id="Government"
                                        value="Government"
                                    >
                                    <label for="Government">
                                        Government
                                    </label>
                                </div>
                            </div>

                            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Enlistment
                                Type</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" name="enlistment_type">
                                    <option>Select</option>
                                    <option value="xeon" >Xeon Car</option>
                                    <option value="monspeed" >Monspeed</option>

                                </select>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Procurement Type<span
                                    class="text-danger fw-600">*</span></label>
                            <div class="col-sm-4 pt-lg-2">

                                <div class="icheck-success d-inline">
                                    <input type="radio" name="procurement_type" value="Vehicle" id="Vehicle"
                                    >
                                    <label for="Vehicle">
                                        Vehicle
                                    </label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="procurement_type" id="Spare" value="Spare Parts"

                                    >
                                    <label for="Spare">
                                        Spare Parts
                                    </label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="procurement_type" id="Parts"
                                        value="Vehicle & Spare Parts"
                                    >
                                    <label for="Parts">
                                        Vehicle & Spare Parts
                                    </label>
                                </div>
                            </div>

                            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputEmail3"
                                    placeholder="Enter Name"  name="name">
                            </div>

                        </div>

                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-user"></i>
                                Contact Information
                            </h3>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Country<span
                                    class="text-danger fw-600">*</span></label>
                            <div class="col-sm-4 pt-lg-2">

                                <select class="form-control select2" name="country_code">
                                    <option>Select Country</option>
                                    <option value="1" >Bangladesh</option>
                                    <option value="2" >India</option>

                                </select>
                            </div>

                            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Contact
                                No<span class="text-danger fw-600">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputEmail3"
                                    placeholder="Enter Name"
                                    name="contact">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Contact
                                Person</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputEmail3"
                                    placeholder="Enter Name"
                                    name="contact_person">
                            </div>

                            <label for="inputEmail3"
                                class="col-sm-2 col-form-label text-lg-right">Address</label>
                            <div class="col-sm-4">
                                <textarea class="form-control" rows="2" placeholder="Address" name="address"
                                    spellcheck="false">

                  </textarea>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3"
                                class="col-sm-2 col-form-label text-lg-right">Phone(Optional)</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputEmail3"
                                    placeholder="Enter Phone"
                                    name="contact_2">
                            </div>

                            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Alt. Contact
                                (Optional)</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputEmail3"
                                    placeholder="Enter Alt. Contact (Optional)"
                                     name="contact_3">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Email</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="inputEmail3"
                                    placeholder="Enter email"  name="email">
                            </div>

                            <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Zip
                                Code</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputEmail3"
                                    placeholder="Enter Zip Code"
                                    name="zip_code">
                            </div>

                        </div>
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-user"></i>
                                Bank Account Information
                            </h3>
                        </div>
                        <div id="bank">
                            <div class="form-group form-group-sm row">
                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label text-lg-right">Bank</label>
                                <div class="col-sm-4 pt-lg-2">

                                    <select class="form-control select2" name="bank_id">
                                        <option>Select Bank</option>
                                        @foreach ($banks as $bank)


                                        <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label text-lg-right">Beneficiary Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputEmail3"
                                        placeholder="Enter Name"
                                        name="beneficiary_name">
                                </div>

                            </div>

                            <div class="form-group form-group-sm row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Branch
                                    Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputEmail3"
                                        placeholder="Enter Bank Branch Name"
                                         name="branch_name">
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Branch
                                    Address</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputEmail3"
                                        placeholder="Enter Bank Address"
                                        name="branch_address">
                                </div>

                            </div>

                            <div class="form-group form-group-sm row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Swift
                                    Code</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="inputEmail3"
                                        placeholder="Enter Swift Code"
                                        name="swift_code">
                                </div>




                            </div>
                            <div class="form-group form-group-sm row">
                                <label for="inputEmail3"
                                    class="col-sm-12 col-lg-2 col-md-2 col-form-label">Status <span
                                        class="text-danger fw-600">*</span></label>
                                <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">

                                    <div class=" d-inline">
                                        <input type="radio" name="status" value="1" id="status"
                                           >
                                        <label for="status">
                                            Active
                                        </label>
                                    </div>
                                    <div class=" d-inline">
                                        <input type="radio" name="status" id="status" value="0"
                                            >
                                        <label for="status">
                                            DeActive
                                        </label>
                                    </div>
                                </div>

                            </div>



                        </div>



                </div>
            </div>

        </div>

    </div>
    <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
    </div>
</form>
    </div>

  </div>


{{-- Modal End supplier --}}


{{-- modal Start Customer --}}
<div class="modal fade" id="customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- modal end Customer --}}

@if($purchase->purchase_source == 'Without_Pre_Order')
    <script>
        // Wait for the page to load
        window.addEventListener('load', function() {
            // Get the button element by its ID
            const myButton = document.getElementById('radioSuccess4');

            // Trigger a click event on the button
            radioSuccess4.click();
        });
    </script>
@endif





@endsection


@push('js')

<script>

    var tempprice = document.getElementById("tempsaleprice");
  var tempdiscount = document.getElementById("tempdealerdiscount");
//   var totalOutput = document.getElementById("tempdealerprice");

  tempprice.addEventListener("keyup", calculateTotal);
  tempdiscount.addEventListener("keyup", calculateTotal);
  function calculateTotal() {

    var tprice = tempprice.value;
    var dis = tempdiscount.value;


    var total = tprice - dis;


    $('#tempdealerprice').val(total);
  }


    function genInvoiceNumber() {

        var date = new Date();
        var formattedDate = date.getFullYear() + '' + (date.getMonth() + 1) + '' + date.getDate();
        var formattedTime = date.getHours() + '' + date.getMinutes() + '' + date.getSeconds();
        var invoiceNumber =  formattedDate + '' + formattedTime;
            $('#invoice_number').val(invoiceNumber);
    }
    </script>
@endpush


