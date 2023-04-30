@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">New Supplier</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">New Supplier</li>

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
                        <div class="card-body">
                            <form role="form" method="POST"
                                action="{{ isset($supplier) ? route('suppliers.update',$supplier->id) : route('suppliers.store') }}"
                                enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                               @isset($supplier)
                                @method('PUT')
                                @endif
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type<span
                                            class="text-danger fw-600">*</span></label>
                                    <div class="col-sm-4 pt-lg-2">

                                        <div class="icheck-success d-inline">
                                            <input type="radio" name="supplier_type" value="International"
                                                id="International"  @isset($supplier) @if($supplier->supplier_type
                                            == 'International') Checked @endif @endisset
                                            >
                                            <label for="International">
                                                International
                                            </label>
                                        </div>
                                        <div class="icheck-success d-inline">
                                            <input type="radio" name="supplier_type" id="Local" value="Local"
                                                @isset($supplier) @if ($supplier->type == 'Local') Checked @endif @endisset

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
                                            placeholder="Enter BIN/NID/Passport" value="{{ $supplier->bin ?? '' }}"
                                            name="bin">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Business Category<span
                                            class="text-danger fw-600">*</span></label>
                                    <div class="col-sm-4 pt-lg-2">

                                        <div class="icheck-success d-inline">
                                            <input type="radio" name="business_category" value="Organization"
                                                id="Organization"@isset($supplier) @if ($supplier->business_category == 'Organization')
                                            Checked @endif @endisset
                                            >
                                            <label for="Organization">
                                                Organization
                                            </label>
                                        </div>
                                        <div class="icheck-success d-inline">
                                            <input type="radio" name="business_category" id="Individual"
                                                value="Individual"@isset($supplier) @if ($supplier->business_category == 'Individual')
                                            Checked @endif @endisset
                                            >
                                            <label for="Individual">
                                                Individual
                                            </label>
                                        </div>
                                        <div class="icheck-success d-inline">
                                            <input type="radio" name="business_category" id="Government"
                                                value="Government"@isset($supplier) @if ($supplier->business_category == 'Government')
                                            Checked @endif @endisset
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
                                            <option value="xeon" @isset($supplier)
                                            {{ $supplier->enlistment_type == "xeon" ? 'selected' : ''  }}@endisset>Xeon Car</option>
                                            <option value="monspeed" @isset($supplier)
                                            {{ $supplier->enlistment_type == "monspeed" ? 'selected' : ''  }}@endisset>Monspeed</option>

                                        </select>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Procurement Type<span
                                            class="text-danger fw-600">*</span></label>
                                    <div class="col-sm-4 pt-lg-2">

                                        <div class="icheck-success d-inline">
                                            <input type="radio" name="procurement_type" value="Vehicle" id="Vehicle"@isset($supplier) @if($supplier->procurement_type == 'Vehicle') Checked @endif @endisset
                                            >
                                            <label for="Vehicle">
                                                Vehicle
                                            </label>
                                        </div>
                                        <div class="icheck-success d-inline">
                                            <input type="radio" name="procurement_type" id="Spare" value="Spare Parts"
                                               @isset($supplier) @if($supplier->procurement_type == 'Spare Parts') Checked @endif @endisset
                                            >
                                            <label for="Spare">
                                                Spare Parts
                                            </label>
                                        </div>
                                        <div class="icheck-success d-inline">
                                            <input type="radio" name="procurement_type" id="Parts"
                                                value="Vehicle & Spare Parts"@isset($supplier) @if($supplier->procurement_type ==
                                            'Vehicle & Spare Parts') Checked @endif @endisset
                                            >
                                            <label for="Parts">
                                                Vehicle & Spare Parts
                                            </label>
                                        </div>
                                    </div>

                                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputEmail3"
                                            placeholder="Enter Name" value="{{ $supplier->name ?? '' }}" name="name">
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
                                            <option value="1" @isset($supplier)
                                            {{ $supplier->country_code == 1 ? 'selected' : ''  }}@endisset>Bangladesh</option>
                                            <option value="2" @isset($supplier)
                                            {{ $supplier->country_code == 2 ? 'selected' : ''  }}@endisset>India</option>

                                        </select>
                                    </div>

                                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Contact
                                        No<span class="text-danger fw-600">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputEmail3"
                                            placeholder="Enter Name" value="{{ $supplier->contact ?? '' }}"
                                            name="contact">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Contact
                                        Person</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputEmail3"
                                            placeholder="Enter Name" value="{{ $supplier->contact_person ?? '' }}"
                                            name="contact_person">
                                    </div>

                                    <label for="inputEmail3"
                                        class="col-sm-2 col-form-label text-lg-right">Address</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="2" placeholder="Address" name="address"
                                            spellcheck="false">
                                    @isset($supplier)
                                        {{ $supplier->address }}
                                    @endisset
                          </textarea>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3"
                                        class="col-sm-2 col-form-label text-lg-right">Phone(Optional)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="inputEmail3"
                                            placeholder="Enter Phone" value="{{ $supplier->contact_2 ?? '' }}"
                                            name="contact_2">
                                    </div>

                                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Alt. Contact
                                        (Optional)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="inputEmail3"
                                            placeholder="Enter Alt. Contact (Optional)"
                                            value="{{ $supplier->contact_3 ?? '' }}" name="contact_3">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Email</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" id="inputEmail3"
                                            placeholder="Enter email" value="{{ $supplier->email ?? '' }}" name="email">
                                    </div>

                                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Zip
                                        Code</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="inputEmail3"
                                            placeholder="Enter Zip Code" value="{{ $supplier->zip_code ?? '' }}"
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


                                                <option value="{{ $bank->id }}"@isset($supplier) @if($supplier->bank_id == $bank->id)
                                                    selected @endif @endisset)>{{ $bank->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <label for="inputEmail3"
                                            class="col-sm-2 col-form-label text-lg-right">Beneficiary Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3"
                                                placeholder="Enter Name" value="{{ $supplier->beneficiary_name ?? '' }}"
                                                name="beneficiary_name">
                                        </div>

                                    </div>

                                    <div class="form-group form-group-sm row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Branch
                                            Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3"
                                                placeholder="Enter Bank Branch Name"
                                                value="{{ $supplier->branch_name ?? '' }}" name="branch_name">
                                        </div>

                                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Branch
                                            Address</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3"
                                                placeholder="Enter Bank Address"
                                                value="{{ $supplier->branch_address ?? '' }}" name="branch_address">
                                        </div>

                                    </div>

                                    <div class="form-group form-group-sm row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Swift
                                            Code</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="inputEmail3"
                                                placeholder="Enter Swift Code" value="{{ $supplier->swift_code ?? '' }}"
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
                                                    @isset($supplier)
                                                    {{ $supplier->status == 1 ? 'checked' : ''  }}@endisset>
                                                <label for="status">
                                                    Active
                                                </label>
                                            </div>
                                            <div class=" d-inline">
                                                <input type="radio" name="status" id="status" value="0"
                                                    @isset($supplier)
                                                    {{ $supplier->status == 0 ? 'checked' : ''  }}@endisset>
                                                <label for="status">
                                                    DeActive
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <h4 class="col-sm-12">Bank Acccount List</h4>
                                        <div class="col-sm-6 float-sm-right">

                                            {{-- <a href="" class="btn btn-sm btn-danger float-right  mx-2"
                                                id="remove">Remove</a> --}}
                                            {{-- <a href="" class="btn btn-sm btn-success float-right" id="add">Add</a> --}}
                                            <button type="button" class="btn btn-sm btn-danger float-right  mx-2"
                                                data-toggle="modal" data-target="#modal-default">
                                                Add
                                            </button>

                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        @foreach ($banks as $bank)

                                        <label for="inputEmail3"
                                            class="col-sm-12 col-form-label">{{ $bank->name }}</label>


                                        @endforeach
                                    </div>
                                    <div class="form-group row">

                                        <button type="submit" class="btn btn-primary col-sm-6">

                                            @isset($supplier)
                                            Update
                                            @else
                                            Save
                                            @endisset



                                        </button>
                                        <button type="button" class="btn btn-default col-sm-6"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>



                        </div>
                    </div>
                    </form>
                </div>

            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <form action="{{ route('bank.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Bank</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="inputEmail3" class="col-sm-12 col-form-label ">Branch Name</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Bank Branch Name"
                            value="" name="name">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

</div>

<script type="text/javascript">
    var i = 0;

    $("#add").click(function () {

        ++i;

        $("#bank").append(
            '<div class="form-group form-group-sm row"><label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Bank</label><div class="col-sm-4 pt-lg-2"><select class="form-control select2" name="bank[' +
            i +
            '][name]"><option>Select Bank</option><option>Bangladesh</option><option>India</option></select></div><label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Beneficiary Name</label><div class="col-sm-4"><input type="text" class="form-control" id="inputEmail3" placeholder="Enter Name" name="bank[' +
            i + '][benificiery]"></div></div>');
    });

    $(document).on('click', '#remove', function () {
        $(this).parents('div').remove();
    });

</script>
@endsection
