<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\LoadingCapacity;
use App\Http\Requests\StoreLoadingCapacityRequest;
use App\Http\Requests\UpdateLoadingCapacityRequest;

class LoadingCapacityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loadingcapacities = LoadingCapacity::paginate(5);
        return view('inventory.add_vehicle_loading_capacity', compact('loadingcapacities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoadingCapacityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoadingCapacityRequest $request)
    {
        $data = LoadingCapacity::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoadingCapacity  $loadingCapacity
     * @return \Illuminate\Http\Response
     */
    public function show(LoadingCapacity $loadingCapacity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoadingCapacity  $loadingCapacity
     * @return \Illuminate\Http\Response
     */
    public function edit(LoadingCapacity $loadingCapacity)
    {
        $loadingcapacities = LoadingCapacity::paginate(5);
        return view('inventory.add_vehicle_loading_capacity', compact('loadingcapacities', 'loadingCapacity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoadingCapacityRequest  $request
     * @param  \App\Models\LoadingCapacity  $loadingCapacity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoadingCapacityRequest $request, LoadingCapacity $loadingCapacity)
    {
        $loadingCapacity->update($request->all());
        return redirect()->route('loadingCapacities.index')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoadingCapacity  $loadingCapacity
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoadingCapacity $loadingCapacity)
    {
        $loadingCapacity->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
