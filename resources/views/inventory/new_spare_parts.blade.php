@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Spare Parts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Spare Parts</li>

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
          <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="card">
              <div class="card-body">

                <form role="form" id="userFrom" method="POST"
                action="{{ isset($sparePart) ? route('spareparts.update',$sparePart->id) : route('spareparts.store') }}"
                enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @if (isset($sparePart))
                @method('PUT')
                @endif



                    <div class="form-group form-group-sm row">
                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Type</label>
                      <div class="col-sm-4 col-lg-10 col-md-10 pt-lg-2">

                          <div class="icheck-success d-inline">
                          <input type="radio" name="type"  value="product" id="Product"  @isset($sparePart)
                              @if ($sparePart->type == 'product') Checked

                              @endif
                          @endisset >
                          <label for="Product">
                            Product
                          </label>
                          </div>
                          <div class="icheck-success d-inline">
                          <input type="radio" name="type" id="Service" value="service"  @isset($sparePart)
                          @if ($sparePart->type == 'service') Checked

                          @endif
                      @endisset>
                          <label for="Service">
                            Service
                          </label>
                          </div>
                      </div>

                    </div>

                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Name </label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Name" value="{{ $sparePart->name ?? ''  }}" name="name">
                      </div>

                    </div>

                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Sales Price</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="number" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Sales Price" value="{{ $sparePart->price ?? ''  }}" name="price">
                      </div>

                    </div>
                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Discount</label>
                      <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" value="{{ $sparePart->discount ?? '0'  }}" name="discount" >
                          <div class="input-group-append">
                          <span class="input-group-text">TK</span>
                          </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" value="{{ $sparePart->discount_percent ?? '0'  }}" name="discount_percent">
                          <div class="input-group-append">
                          <span class="input-group-text">%</span>
                          </div>
                          </div>
                      </div>

                    </div>
                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Vat Amount</label>
                      <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" value="{{ $sparePart->vat_percent ?? '0'  }}" name="vat_percent">
                          <div class="input-group-append">
                          <span class="input-group-text">%</span>
                          </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" value="{{ $sparePart->vat ?? '0'  }}" name="vat">
                          <div class="input-group-append">
                          <span class="input-group-text">TK</span>
                          </div>
                          </div>
                      </div>

                    </div>
                    <div class="form-group form-group-sm row">

                      <label for="inputEmail3" class="col-sm-12 col-lg-2 col-md-2 col-form-label">Part Number</label>
                      <div class="col-sm-12 col-lg-10 col-md-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="Enter Part Number" value="{{ $sparePart->part_number ?? ''  }}" name="part_number">
                      </div>

                    </div>

              </div>
              <div class="card-footer">
                @isset($sparePart)
                <button type="submit" class="btn btn-success"> Update</button>

                @else

                <button type="submit" class="btn btn-success"> Save</button>
                @endisset
            </button>


                <a href="{{ route('spareparts.index')}}" class="btn btn-primary float-right">List</a>
              </div>
              <!-- /.card-footer -->
            </form>
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
