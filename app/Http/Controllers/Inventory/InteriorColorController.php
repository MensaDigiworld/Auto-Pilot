<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Interiorcolor;
use App\Http\Requests\StoreInteriorcolorRequest;
use App\Http\Requests\UpdateInteriorcolorRequest;
use Illuminate\Http\Request;

class InteriorColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interiorcolors = Interiorcolor::all();
        return view('inventory.add_vehicle_color_interior', compact('interiorcolors'));
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
     * @param  \App\Http\Requests\StoreInteriorcolorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInteriorcolorRequest $request)
    {
        $sta = Interiorcolor::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interiorcolor  $interiorcolor
     * @return \Illuminate\Http\Response
     */
    public function show(Interiorcolor $interiorcolor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interiorcolor  $interiorcolor
     * @return \Illuminate\Http\Response
     */
    public function edit(Interiorcolor $interiorcolor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInteriorcolorRequest  $request
     * @param  \App\Models\Interiorcolor  $interiorcolor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInteriorcolorRequest $request, Interiorcolor $interiorcolor)
    {
        return "ok";

        $interiorcolor->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interiorcolor  $interiorcolor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interiorcolor $interiorcolor)
    {
        $interiorcolor->delete();
        return back();
    }

    public function interiorEdit($id)
    {

        // return "ok";
        // $data = Interiorcolor::where('id', $id)->first();
        return response()->json($id);
    }

    public function interiorcolorUpdate(UpdateInteriorcolorRequest $request)
    {
        $data = Interiorcolor::findorfail($request->color_id);
        $data->update($request->all());
        return back();
    }
}
