<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\DisplacementEngine;
use App\Http\Requests\StoreDisplacementEngineRequest;
use App\Http\Requests\UpdateDisplacementEngineRequest;

class DisplacementEngineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engineccs = DisplacementEngine::paginate(5);
        return view('inventory.add_vehicle_engine_cc', compact('engineccs'));
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
     * @param  \App\Http\Requests\StoreDisplacementEngineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisplacementEngineRequest $request)
    {
        DisplacementEngine::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DisplacementEngine  $displacementEngine
     * @return \Illuminate\Http\Response
     */
    public function show(DisplacementEngine $displacementEngine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DisplacementEngine  $displacementEngine
     * @return \Illuminate\Http\Response
     */
    public function edit(DisplacementEngine $displacementEngine)
    {
        $engineccs = DisplacementEngine::paginate(5);
        return view('inventory.add_vehicle_engine_cc', compact('engineccs', 'displacementEngine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisplacementEngineRequest  $request
     * @param  \App\Models\DisplacementEngine  $displacementEngine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisplacementEngineRequest $request, DisplacementEngine $displacementEngine)
    {
        $displacementEngine->update($request->all());
        return redirect()->route('displacementEngines.index')->with('success', 'Data has been Added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DisplacementEngine  $displacementEngine
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisplacementEngine $displacementEngine)
    {
        $displacementEngine->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
