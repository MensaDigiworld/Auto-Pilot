<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Gear;
use App\Http\Requests\StoreGearRequest;
use App\Http\Requests\UpdateGearRequest;

class GearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gears = Gear::paginate(5);
        return view('inventory.add_vehicle_gears', compact('gears'));
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
     * @param  \App\Http\Requests\StoreGearRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGearRequest $request)
    {
        $data = Gear::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function show(Gear $gear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function edit(Gear $gear)
    {
        $gears = Gear::paginate(5);
        return view('inventory.add_vehicle_gears', compact('gears', 'gear'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGearRequest  $request
     * @param  \App\Models\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGearRequest $request, Gear $gear)
    {
        $gear->update($request->all());
        return redirect()->route('gears.index')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gear $gear)
    {
        $gear->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
