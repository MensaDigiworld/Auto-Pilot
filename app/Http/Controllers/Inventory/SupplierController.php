<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Bank;
use Illuminate\Http\Request;
use DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::paginate(10);
        return view('inventory.list_supplier', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::all();
        return view('inventory.new_supplier', compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        $data = Supplier::create($request->all());

        return redirect()->route('suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $banks = Bank::all();
        return view('inventory.new_supplier', compact('banks', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return redirect()->route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {

        $supplier->delete();
        return back();
    }


    public function bankStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:banks',

        ]);

        $bank = Bank::create([

            'name' => $request->name,
        ]);

        return back();
    }

    public function supplierStatus(Request $request)
    {
        if ($request->status == 'all') {
            $suppliers = Supplier::all();
            return view('inventory.list_supplier', compact('suppliers'));
        } else {
            $suppliers = Supplier::where('status', $request->status)->get();

            return view('inventory.list_supplier', compact('suppliers'));
        }
    }
    public function supplierSearch(Request $request)
    {
        $searchTerm = $request->search;
        $suppliers = DB::table('suppliers')
            ->where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('contact', 'like', '%' . $searchTerm . '%')
            ->orWhere('bin', 'like', '%' . $searchTerm . '%')
            ->get();
        // $suppliers = Supplier::where('status', $request->status)->get();
        return view('inventory.list_supplier', compact('suppliers'));
    }
}
