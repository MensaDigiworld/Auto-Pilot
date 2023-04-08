<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\SeatingCapacity;
use App\Http\Requests\StoreSeatingCapacityRequest;
use App\Http\Requests\UpdateSeatingCapacityRequest;

class SeatingCapacityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seatingCapacities = SeatingCapacity::all();
        return view('inventory.add_vehicle_seating_capacity', compact('seatingCapacities'));
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
     * @param  \App\Http\Requests\StoreSeatingCapacityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeatingCapacityRequest $request)
    {
        $data = SeatingCapacity::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeatingCapacity  $seatingCapacity
     * @return \Illuminate\Http\Response
     */
    public function show(SeatingCapacity $seatingCapacity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeatingCapacity  $seatingCapacity
     * @return \Illuminate\Http\Response
     */
    public function edit(SeatingCapacity $seatingCapacity)
    {
        $seatingCapacities = SeatingCapacity::all();
        return view('inventory.add_vehicle_seating_capacity', compact('seatingCapacities', 'seatingCapacity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeatingCapacityRequest  $request
     * @param  \App\Models\SeatingCapacity  $seatingCapacity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeatingCapacityRequest $request, SeatingCapacity $seatingCapacity)
    {
        $seatingCapacity->update($request->all());
        return redirect()->route('seatingCapacities.index')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeatingCapacity  $seatingCapacity
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeatingCapacity $seatingCapacity)
    {
        $seatingCapacity->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
