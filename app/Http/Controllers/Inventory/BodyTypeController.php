<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\BodyType;
use App\Http\Requests\StoreBodyTypeRequest;
use App\Http\Requests\UpdateBodyTypeRequest;
use App\Models\VehicleCategory;

class BodyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodytypes = BodyType::paginate(5);
        $categories = VehicleCategory::all();
        return view('inventory.add_vehicle_bodytype', compact('bodytypes', 'categories'));
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
     * @param  \App\Http\Requests\StoreBodyTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBodyTypeRequest $request)
    {
        $type = BodyType::create($request->all());

        if ($request->hasfile('image')) {
            $image = $request->image;
            $destinationPath = 'public/cover_image/';
            $coverpic = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverpic);


            BodyType::find($type->id)->update([
                'image' => $coverpic
            ]);
        }

        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BodyType  $bodyType
     * @return \Illuminate\Http\Response
     */
    public function show(BodyType $bodyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BodyType  $bodyType
     * @return \Illuminate\Http\Response
     */
    public function edit(BodyType $bodyType)
    {
        $bodytypes = BodyType::paginate(5);
        $categories = VehicleCategory::all();
        return view('inventory.add_vehicle_bodytype', compact('bodytypes', 'bodyType', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBodyTypeRequest  $request
     * @param  \App\Models\BodyType  $bodyType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBodyTypeRequest $request, BodyType $bodyType)
    {

        if ($request->hasfile('file')) {


            $deletefile = BodyType::find($bodyType->id)->image;

            if ($deletefile) {
                $image_path = 'public/cover_image/' . $deletefile->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }

        $bodyType->update($request->all());

        if ($request->hasfile('image')) {
            $image = $request->image;
            $destinationPath = 'public/cover_image/';
            $coverpic = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverpic);


            BodyType::find($bodyType->id)->update([
                'image' => $coverpic
            ]);
        }

        return redirect()->route('bodyTypes.index')->with('success', 'Data has been Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BodyType  $bodyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BodyType $bodyType)
    {
        $deletefile = $bodyType->image;

        if ($deletefile) {
            $image_path = 'public/cover_image/' . $deletefile;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $bodyType->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
