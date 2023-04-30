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
use App\Models\Gear;
use App\Models\Manufacture;
use App\Models\PackageTrimVariant;
use App\Models\SeatingCapacity;
use App\Models\Transmission;
use App\Models\VehicleCategory;
use App\Models\VehicleChassisCode;
use App\Models\VehicleDoor;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return $d = Product::all();
        $data['products'] = Product::orderBy('id', 'DESC')->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 7)->get();
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
        $name =  $request->manname . '-' . $request->modelname . '(' . $request->chassiscode . ',' . $request->enginecc . ',' . $request->seat . ',' . $request->trans . ')';

        // return $name; // $request->merge(['name' => $name]);
        Product::create(['name' => $name] + $request->all());
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
        $data['product'] = $product;
        $data['products'] = Product::orderBy('id', 'DESC')->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 7)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();

        return view('inventory.edit_vehicle_passenger', $data);
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
        return $request->all();
        $name =  $request->manname . '-' . $request->modelname . '(' . $request->chassiscode . ',' . $request->enginecc . ',' . $request->seat . ',' . $request->trans . ')';

        $product->update(['name' => $name] + $request->all());
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
        $product->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }

    // public function manufacturer($id)
    // {
    //     $data = Manufacture::where('id', $id)->first();
    //     return response()->json($data);
    // }
    public function manufacturer($id)
    {
        $data = Manufacture::where('id', $id)->first();
        // return response()->json($data);
        if ($id == null) {
            $html = '<option value="">' . trans('Others') . '</option>';
        } else {
            $others = "Select Model";
            $html = '';
            $cars = VehicleModel::where('category_id', $data->category_id)->get();
            $html .= '<option >' . $others . '</option>';
            foreach ($cars as $car) {
                $html .= '<option value="' . $car->id . '">' . $car->name . '</option>';
            }
        }

        return response()->json(['html' => $html, 'data' => $data]);
        // return response()->json(['data' => $data]);
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



    public function productUpdate(Request $request)
    {
        $this->validate($request, [
            'manufacture_id' => 'required',
            'model_id' => 'required',

        ]);
        $name =  $request->manname . '-' . $request->modelname . '(' . $request->chassiscode . ',' . $request->enginecc . ',' . $request->seat . ',' . $request->trans . ')';
        $product = Product::findorfail($request->product_id);
        $product->update(['name' => $name] + $request->all());
        return back()->with('success', 'Data has been Updated successfully');
    }

    public function manSelectSearch(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::where('manufacture_id', $request->manufacture)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 7)->get();
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
    public function modelSelectSearch(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::where('model_id', $request->model)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 7)->get();
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
    public function chasisSelectSearch(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::where('chassis_id', $request->chasis)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 7)->get();
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
    public function searchByWord(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::search($request->word)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 7)->get();
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


    public function addComercialv()
    {
        $data['products'] = Product::where('category_id', 9)->orderBy('id', 'DESC')->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 9)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();


        return view('inventory.add_vehicle_commercial', $data);
    }
    public function editCommercial(Product $product)
    {
        $data['product'] = $product;
        $data['products'] = Product::where('category_id', 9)->orderBy('id', 'DESC')->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 9)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();

        return view('inventory.edit_vehicle_commercial', $data);
    }

    public function commanSelectSearch(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::where('manufacture_id', $request->manufacture)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 9)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();


        return view('inventory.add_vehicle_commercial', $data);
    }
    public function commodelSelectSearch(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::where('model_id', $request->model)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 9)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();


        return view('inventory.add_vehicle_commercial', $data);
    }
    public function comchasisSelectSearch(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::where('chassis_id', $request->chasis)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 9)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();


        return view('inventory.add_vehicle_commercial', $data);
    }
    public function comsearchByWord(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::search($request->word)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 9)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();


        return view('inventory.add_vehicle_commercial', $data);
    }


    public function addBike()
    {
        $data['products'] = Product::where('category_id', 8)->orderBy('id', 'DESC')->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 8)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();
        $data['gears'] = Gear::all();
        $data['packages'] = PackageTrimVariant::all();

        return view('inventory.add_vehicle_bike', $data);
        // return view('inventory.add_vehicle_commercial', $data);
    }

    public function storeBike(Request $request)
    {

        // return $request->all();

        $this->validate($request, [
            'manufacture_id' => 'required',
            'model_id' => 'required',
            'fuel_type_id' => 'required',
            'enginecc_id' => 'required',
            'body_type_id' => 'required',

        ]);

        $name =  $request->manname . '-' . $request->modelname . '(' . $request->chassiscode . ',' . $request->enginecc . ',' . $request->trans . ')';

        // return $name; // $request->merge(['name' => $name]);
        Product::create(['name' => $name] + $request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    public function editBike(Product $product)
    {
        $data['product'] = $product;
        $data['products'] = Product::where('category_id', 8)->orderBy('id', 'DESC')->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 8)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();
        $data['gears'] = Gear::all();
        $data['packages'] = PackageTrimVariant::all();

        return view('inventory.edit_vehicle_bike', $data);
    }

    public function updateBike(Request $request)
    {
        $this->validate($request, [
            'manufacture_id' => 'required',
            'model_id' => 'required',
            'fuel_type_id' => 'required',
            'enginecc_id' => 'required',
            'body_type_id' => 'required',

        ]);

        $name =  $request->manname . '-' . $request->modelname . '(' . $request->chassiscode . ',' . $request->enginecc . ',' . $request->trans . ')';

        $product = Product::findorfail($request->product_id);
        $product->update(['name' => $name] + $request->all());
        return back()->with('success', 'Data has been Added successfully');
    }


    public function bikesearchByWord(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::search($request->word)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 8)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();
        $data['gears'] = Gear::all();
        $data['packages'] = PackageTrimVariant::all();


        return view('inventory.add_vehicle_bike', $data);
    }
    public function bikemodelSelectSearch(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::where('model_id', $request->model)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 8)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();
        $data['gears'] = Gear::all();
        $data['packages'] = PackageTrimVariant::all();


        return view('inventory.add_vehicle_bike', $data);
    }

    public function bikemanSelectSearch(Request $request)
    {
        // return $request->manufacture;
        $data['products'] = Product::where('manufacture_id', $request->manufacture)->paginate(10);
        $data['manufacturers'] = Manufacture::where('category_id', 8)->get();
        $data['bodytypes'] = BodyType::all();
        $data['transmissions'] = Transmission::all();
        $data['models'] = VehicleModel::all();
        $data['fueltypes'] = FuelType::all();
        $data['drivesystems'] = DriveSystem::all();
        $data['chassises'] = VehicleChassisCode::all();
        $data['enginecc'] = DisplacementEngine::all();
        $data['doors'] = VehicleDoor::all();
        $data['seaters'] = SeatingCapacity::all();
        $data['gears'] = Gear::all();
        $data['packages'] = PackageTrimVariant::all();


        return view('inventory.add_vehicle_bike', $data);
    }


    public function vehicleList()
    {
        $data['categories'] = VehicleCategory::all();
        $data['manufacturers'] = Manufacture::all();
        $data['models'] = VehicleModel::all();
        $data['products'] = Product::paginate(10);
        return view('inventory.list_vehicle', $data);
    }

    public function vehicleTypeSearch(Request $request)
    {
        $data['categories'] = VehicleCategory::all();
        $data['manufacturers'] = Manufacture::all();
        $data['models'] = VehicleModel::all();
        $data['products'] = Product::where('category_id', $request->type)->paginate(10);
        return view('inventory.list_vehicle', $data);
    }
    public function vehicleManSearch(Request $request)
    {
        $data['categories'] = VehicleCategory::all();
        $data['manufacturers'] = Manufacture::all();
        $data['models'] = VehicleModel::all();
        $data['products'] = Product::where('manufacture_id', $request->manufacture)->paginate(10);
        return view('inventory.list_vehicle', $data);
    }
    public function vehicleModelSearch(Request $request)
    {
        $data['categories'] = VehicleCategory::all();
        $data['manufacturers'] = Manufacture::all();
        $data['models'] = VehicleModel::all();
        $data['products'] = Product::where('model_id', $request->model)->paginate(10);
        return view('inventory.list_vehicle', $data);
    }
    public function vehicleAllSearch(Request $request)
    {
        $data['categories'] = VehicleCategory::all();
        $data['manufacturers'] = Manufacture::all();
        $data['models'] = VehicleModel::all();
        $data['products'] = Product::search($request->word)->paginate(10);
        return view('inventory.list_vehicle', $data);
    }
}
