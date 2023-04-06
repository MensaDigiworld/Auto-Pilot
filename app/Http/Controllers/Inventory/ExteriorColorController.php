<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Exteriorcolor;
use App\Http\Requests\StoreExteriorcolorRequest;
use App\Http\Requests\UpdateExteriorcolorRequest;

class ExteriorColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exteriorcolors = Exteriorcolor::all();
        return view('inventory.add_vehicle_color_exterior', compact('exteriorcolors'));
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
     * @param  \App\Http\Requests\StoreExteriorcolorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExteriorcolorRequest $request)
    {
        $data = Exteriorcolor::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exteriorcolor  $exteriorcolor
     * @return \Illuminate\Http\Response
     */
    public function show(Exteriorcolor $exteriorcolor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exteriorcolor  $exteriorcolor
     * @return \Illuminate\Http\Response
     */
    public function edit(Exteriorcolor $exteriorcolor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExteriorcolorRequest  $request
     * @param  \App\Models\Exteriorcolor  $exteriorcolor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExteriorcolorRequest $request, Exteriorcolor $exteriorcolor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exteriorcolor  $exteriorcolor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exteriorcolor $exteriorcolor, $id)
    {
        $data = Exteriorcolor::findorfail($id);
        $data->delete();
        return back();
    }


    public function exteriorcolorUpdate(UpdateExteriorcolorRequest $request)
    {
        $data = Exteriorcolor::findorfail($request->color_id);
        $data->update($request->all());
        return back();
    }
}
