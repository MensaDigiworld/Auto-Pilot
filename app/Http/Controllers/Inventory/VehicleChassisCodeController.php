<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\VehicleChassisCode;
use App\Http\Requests\StoreVehicleChassisCodeRequest;
use App\Http\Requests\UpdateVehicleChassisCodeRequest;
use App\Models\VehicleCategory;

class VehicleChassisCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes = VehicleChassisCode::orderBy('id', 'DESC')->paginate(10);
        $categories = VehicleCategory::all();
        return view('inventory.add_vehicle_chassis_code', compact('codes', 'categories'));
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
     * @param  \App\Http\Requests\StoreVehicleChassisCodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleChassisCodeRequest $request)
    {
        VehicleChassisCode::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleChassisCode  $vehicleChassisCode
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleChassisCode $vehicleChassisCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleChassisCode  $vehicleChassisCode
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleChassisCode $vehicleChassisCode)
    {
        $codes = VehicleChassisCode::orderBy('id', 'DESC')->paginate(10);
        $categories = VehicleCategory::all();
        return view('inventory.add_vehicle_chassis_code', compact('codes', 'categories', 'vehicleChassisCode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleChassisCodeRequest  $request
     * @param  \App\Models\VehicleChassisCode  $vehicleChassisCode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleChassisCodeRequest $request, VehicleChassisCode $vehicleChassisCode)
    {
        $vehicleChassisCode->update($request->all());
        return redirect()->route('vehicleChassisCodes.index')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleChassisCode  $vehicleChassisCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleChassisCode $vehicleChassisCode)
    {
        $vehicleChassisCode->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
