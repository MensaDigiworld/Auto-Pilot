<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\BodyType;
use App\Models\DisplacementEngine;
use App\Models\DriveSystem;
use App\Models\FuelType;
use App\Models\Manufacture;
use App\Models\SeatingCapacity;
use App\Models\Transmission;
use App\Models\VehicleChassisCode;
use App\Models\VehicleDoor;
use App\Models\VehicleModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::orderBy('id', 'DESC')->paginate(10);
        $data['manufacturers'] = Manufacture::all();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();


        return view('inventory.add_vehicle_passenger', $data);
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->all);
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        return redirect()->route('')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        return back()->with('success', 'Data has been Deleted successfully');
    }

    public function manufacturer($id)
    {
        $data = Manufacture::where('id', $id)->first();
        return response()->json($data);
    }
    public function model($id)
    {
        $data = VehicleModel::where('id', $id)->first();
        return response()->json($data);
    }
    public function chasis($id)
    {
        $data = VehicleChassisCode::where('id', $id)->first();
        return response()->json($data);
    }
    public function engine($id)
    {
        $data = DisplacementEngine::where('id', $id)->first();
        return response()->json($data);
    }
    public function seatingCap($id)
    {
        $data = SeatingCapacity::where('id', $id)->first();
        return response()->json($data);
    }
    public function transmission($id)
    {
        $data = Transmission::where('id', $id)->first();
        return response()->json($data);
    }
    public function driveSystem($id)
    {
        $data = DriveSystem::where('id', $id)->first();
        return response()->json($data);
    }
}
