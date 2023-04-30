<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\VehicleDoor;
use App\Http\Requests\StoreVehicleDoorRequest;
use App\Http\Requests\UpdateVehicleDoorRequest;

class VehicleDoorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicledoors = VehicleDoor::paginate(5);
        return view('inventory.add_vehicle_door', compact('vehicledoors'));
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
     * @param  \App\Http\Requests\StoreVehicleDoorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleDoorRequest $request)
    {
        VehicleDoor::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleDoor  $vehicleDoor
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleDoor $vehicleDoor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleDoor  $vehicleDoor
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleDoor $vehicleDoor)
    {
        $vehicledoors = VehicleDoor::paginate(5);
        return view('inventory.add_vehicle_door', compact('vehicledoors', 'vehicleDoor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleDoorRequest  $request
     * @param  \App\Models\VehicleDoor  $vehicleDoor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleDoorRequest $request, VehicleDoor $vehicleDoor)
    {
        $vehicleDoor->update($request->all());
        return redirect()->route('vehicleDoors.index')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleDoor  $vehicleDoor
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleDoor $vehicleDoor)
    {
        $vehicleDoor->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
