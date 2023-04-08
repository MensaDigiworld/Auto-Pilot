<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Wheel;
use App\Http\Requests\StoreWheelRequest;
use App\Http\Requests\UpdateWheelRequest;

class WheelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wheels= Wheel::all();
        return view('inventory.add_vehicle_wheel',compact('wheels'));
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
     * @param  \App\Http\Requests\StoreWheelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWheelRequest $request)
    {
        $data= Wheel::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wheel  $wheel
     * @return \Illuminate\Http\Response
     */
    public function show(Wheel $wheel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wheel  $wheel
     * @return \Illuminate\Http\Response
     */
    public function edit(Wheel $wheel)
    {
        $wheels= Wheel::all();
        return view('inventory.add_vehicle_wheel',compact('wheel','wheels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWheelRequest  $request
     * @param  \App\Models\Wheel  $wheel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWheelRequest $request, Wheel $wheel)
    {
        $wheel->update($request->all());
        return redirect()->route('wheels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wheel  $wheel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wheel $wheel)
    {
        $wheel->delete();
        return back();
    }
}
