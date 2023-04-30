<?php

namespace App\Http\Controllers\Inventory;

use App\Models\SparePart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSparePartRequest;
use App\Http\Requests\UpdateSparePartRequest;

class SparePartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $spareParts = SparePart::paginate(10);
        return view('inventory.list_spare_parts', compact('spareParts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.new_spare_parts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSparePartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSparePartRequest $request)
    {

        // return $request->all();
        $data = SparePart::create($request->all());
        return redirect()->route('spareparts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Http\Response
     */
    public function show(SparePart $sparePart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Http\Response
     */
    public function edit(SparePart $sparePart, $id)
    {
        $sparePart = SparePart::findorfail($id);

        return view('inventory.new_spare_parts', compact('sparePart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSparePartRequest  $request
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSparePartRequest $request, SparePart $sparePart, $id)
    {
        // return $id;
        $sparePart = SparePart::findorfail($id);
        $sparePart->update($request->all());
        return redirect()->route('spareparts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Http\Response
     */
    public function destroy(SparePart $sparePart, $id)
    {
        $sparePart = SparePart::findorfail($id);
        $sparePart->delete();
        return redirect()->route('spareparts.index');
    }

    public function typeSearch(Request $request)
    {

        // return $request->all();
        if ($request->type == 'all') {
            $spareParts = SparePart::all();
            return view('inventory.list_spare_parts', compact('spareParts'));
        } else {
            $spareParts = SparePart::where('type', $request->type)->get();
            return view('inventory.list_spare_parts', compact('spareParts'));
        }
    }
    public function typeSearchlike(Request $request)
    {

        // return $request->all();
        // $spareParts = SparePart::where('name', 'like', '%' . $request->search . '%')
        //     ->orWhere('part_number', 'like', '%' . $request->search . '%')
        //     ->get();

        $search = $request->input('search');

        $spareParts = SparePart::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('part_number', 'LIKE', "%{$search}%")
            ->get();
        return view('inventory.list_spare_parts', compact('spareParts'));
    }
}
