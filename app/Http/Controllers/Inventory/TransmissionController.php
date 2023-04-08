<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Transmission;
use App\Http\Requests\StoreTransmissionRequest;
use App\Http\Requests\UpdateTransmissionRequest;

class TransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "ok";
        $transmissions = Transmission::all();
        return view('inventory.add_vehicle_transmission', compact('transmissions'));
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
     * @param  \App\Http\Requests\StoreTransmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransmissionRequest $request)
    {
        $data = Transmission::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function show(Transmission $transmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function edit(Transmission $transmission)
    {
        $transmissions = Transmission::all();
        return view('inventory.add_vehicle_transmission', compact('transmissions', 'transmission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransmissionRequest  $request
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransmissionRequest $request, Transmission $transmission)
    {
        $transmission->update($request->all());
        return redirect()->route('transmissions.index')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transmission $transmission)
    {
        $transmission->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
