<?php

namespace App\Http\Controllers\Inventory;

use App\Models\CostType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCostTypeRequest;
use App\Http\Requests\UpdateCostTypeRequest;

class CostTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = CostType::paginate(10);
        return view('inventory.list-of-cost', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.cost-type-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCostTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCostTypeRequest $request)
    {

        $data = CostType::create($request->all());

        return redirect()->route('inventory.list_of_cost')->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CostType  $costType
     * @return \Illuminate\Http\Response
     */
    public function show(CostType $costType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CostType  $costType
     * @return \Illuminate\Http\Response
     */
    public function edit(CostType $costType)
    {
        return view('inventory.cost-type-edit', compact('costType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCostTypeRequest  $request
     * @param  \App\Models\CostType  $costType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $costType = CostType::findorfail($request->costType_id);
        $costType->update($request->all());
        return redirect()->route('inventory.list_of_cost')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CostType  $costType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $costType = CostType::findorfail($request->costType_id);
        $costType->delete();
        return redirect()->route('inventory.list_of_cost')->with('success', 'Data has been Deleted successfully');
    }
}
