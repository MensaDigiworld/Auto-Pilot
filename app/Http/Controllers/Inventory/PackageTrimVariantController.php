<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\PackageTrimVariant;
use App\Http\Requests\StorePackageTrimVariantRequest;
use App\Http\Requests\UpdatePackageTrimVariantRequest;
use App\Models\Manufacture;
use App\Models\VehicleModel;

class PackageTrimVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = VehicleModel::all();
        $manufacturerers = Manufacture::all();
        $packages = PackageTrimVariant::paginate(5);
        return view('inventory.add_vehicle_package', compact('models', 'manufacturerers', 'packages'));
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
     * @param  \App\Http\Requests\StorePackageTrimVariantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageTrimVariantRequest $request)
    {
        PackageTrimVariant::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageTrimVariant  $packageTrimVariant
     * @return \Illuminate\Http\Response
     */
    public function show(PackageTrimVariant $packageTrimVariant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageTrimVariant  $packageTrimVariant
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageTrimVariant $packageTrimVariant)
    {
        $models = VehicleModel::all();
        $manufacturerers = Manufacture::all();
        $packages = PackageTrimVariant::paginate(5);
        return view('inventory.add_vehicle_package', compact('models', 'manufacturerers', 'packages', 'packageTrimVariant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageTrimVariantRequest  $request
     * @param  \App\Models\PackageTrimVariant  $packageTrimVariant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageTrimVariantRequest $request, PackageTrimVariant $packageTrimVariant)
    {
        $packageTrimVariant->update($request->all());
        return redirect()->route('packageTrimVariants.index')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageTrimVariant  $packageTrimVariant
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageTrimVariant $packageTrimVariant)
    {
        $packageTrimVariant->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
