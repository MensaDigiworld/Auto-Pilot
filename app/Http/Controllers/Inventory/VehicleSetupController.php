<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleCategory;
use App\Models\Manufacture;
use App\Models\Countries;
use App\Models\VehicleModel;

class VehicleSetupController extends Controller
{
    public function add_vehicle_category()
    {
        $vehicle_category = VehicleCategory::orderBy('id', 'desc')->paginate(10);
        return view('inventory.add_vehicle_category', compact('vehicle_category'));
    }

    public function vehicle_category_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Vehicle Category name are Required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'public/cover_image/';
            $coverpic = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverpic);

            $vehicle_category = new VehicleCategory();
            $vehicle_category->image = $coverpic;
            $vehicle_category->name  = $request->name;
            $vehicle_category->status = 1;
            $vehicle_category->save();


            return redirect()->back()->with('success', 'Sales and Service Added Successfully');
        } else {
            $vehicle_category = new VehicleCategory();
            $vehicle_category->name  = $request->name;
            $vehicle_category->status = 1;
            $vehicle_category->save();


            return redirect()->back()->with('success', 'Sales and Service Added Successfully');
        }
    }

    public function vehicle_category_edit($id)
    {

        $catid = VehicleCategory::find($id);
        $vehicle_category = VehicleCategory::orderBy('id', 'desc')->paginate(10);
        return view('inventory.edit_vehicle_category', compact('catid', 'vehicle_category'));
    }

    public function vehicle_category_update(Request $request)
    {

        if ($image = $request->file('image')) {
            $vehicle_category = VehicleCategory::find($request->id);
            $image_path = 'public/cover_image/' . $vehicle_category->image;
            unlink($image_path);

            $destinationPath = 'public/cover_image/';
            $coverpic = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverpic);

            $vehicle_category->image = $coverpic;
            $vehicle_category->name = $request->name;
            $vehicle_category->save();
            return redirect()->route('inventory.add_vehicle_category')->with('success', 'Data has been Update successfully');
        } else {
            $vehicle_category = VehicleCategory::find($request->id);
            $vehicle_category->name = $request->name;
            $vehicle_category->save();
            return redirect()->route('inventory.add_vehicle_category')->with('success', 'Data has been Update successfully');
        }
    }

    public function vehicle_category_delete($id)
    {

        $vehicle_category = VehicleCategory::find($id);

        $deletefile = $vehicle_category->image;

        if ($deletefile) {
            $image_path = 'public/cover_image/' . $vehicle_category->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $vehicle_category->delete();
        return back()->with('error', 'Data has been Delete successfully');;
    }
    //Manufacture


    public function add_vehicle_manufacture()
    {
        $mnaufacture = Manufacture::with('category')->paginate(5);

        $vehicle_category = VehicleCategory::where('status', 1)->get();
        $country = Countries::get();
        return view('inventory.add_vehicle_manufacture', compact('mnaufacture', 'vehicle_category', 'country'));
    }
    public function mnaufacture_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ], [
            'name.required' => 'Vehicle Manufacture are Required',
            'category_id.required' => 'Vehicle Category are Required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'public/cover_image/';
            $coverpic = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverpic);

            $mnaufacture = new Manufacture();
            $mnaufacture->image = $coverpic;
            $mnaufacture->category_id  = $request->category_id;
            $mnaufacture->country_id  = $request->country_id;
            $mnaufacture->name  = $request->name;
            $mnaufacture->status = 1;
            $mnaufacture->save();

            return redirect()->back()->with('success', 'Data has been Added successfully');
        } else {
            $mnaufacture = new Manufacture();
            $mnaufacture->category_id  = $request->category_id;
            $mnaufacture->country_id  = $request->country_id;
            $mnaufacture->name  = $request->name;
            $mnaufacture->status = 1;
            $mnaufacture->save();

            return redirect()->back()->with('success', 'Data has been Added successfully');
        }
    }

    public function mnaufacture_edit($id)
    {

        $catid = Manufacture::find($id);
        $mnaufacture = Manufacture::paginate(5);
        $vehicle_category = VehicleCategory::where('status', 1)->get();
        $country = Countries::get();

        return view('inventory.edit_vehicle_manufacture', compact('catid', 'mnaufacture', 'vehicle_category', 'country'));
    }

    public function mnaufacture_update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ], [
            'name.required' => 'Vehicle Manufacture are Required',
            'category_id.required' => 'Vehicle Category are Required',
        ]);

        if ($image = $request->file('image')) {
            $mnaufacture = Manufacture::find($request->id);
            $image_path = 'public/cover_image/' . $mnaufacture->image;
            unlink($image_path);

            $destinationPath = 'public/cover_image/';
            $coverpic = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverpic);

            $mnaufacture->image = $coverpic;
            $mnaufacture->category_id  = $request->category_id;
            $mnaufacture->country_id  = $request->country_id;
            $mnaufacture->name  = $request->name;
            $mnaufacture->status = 1;
            $mnaufacture->save();

            return redirect()->back()->with('success', 'Data has been Update successfully');
        } else {
            $mnaufacture = Manufacture::find($request->id);
            $mnaufacture->category_id  = $request->category_id;
            $mnaufacture->country_id  = $request->country_id;
            $mnaufacture->name  = $request->name;
            $mnaufacture->status = 1;
            $mnaufacture->save();
            return redirect()->back()->with('success', 'Data has been Update successfully');
        }
    }

    public function mnaufacture_delete($id)
    {
        $mnaufacture = Manufacture::find($id);

        $deletefile = $mnaufacture->image;

        if ($deletefile) {
            $image_path = 'public/cover_image/' . $mnaufacture->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $mnaufacture->delete();
        return back()->with('error', 'Data has been Delete successfully');
    }

    //Model

    public function model_index()
    {
        $models = VehicleModel::orderBy('id', 'desc')->paginate(10);
        $vehiclemanufacture = Manufacture::orderBy('id', 'asc')->get();
        $vehicle_category = VehicleCategory::where('status', 1)->get();
        $country = Countries::get();
        return view('inventory.add_vehicle_model', compact('models', 'vehicle_category', 'country', 'vehiclemanufacture'));
    }
    public function model_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manufacture_id' => 'required',
        ], [
            'name.required' => 'Vehicle Manufacture are Required',
            'manufacture_id.required' => 'Vehicle Manufacture are Required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'public/cover_image/';
            $coverpic = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverpic);

            $model = new VehicleModel();
            $model->image = $coverpic;
            $model->manufacture_id  = $request->manufacture_id;
            $model->category_id  = $request->category_id;
            $model->country_id  = $request->country_id;
            $model->name  = $request->name;
            $model->status = 1;
            $model->save();
            return redirect()->back()->with('success', 'Data has been Added successfully');
        } else {
            $model = new VehicleModel();
            $model->manufacture_id  = $request->manufacture_id;
            $model->category_id  = $request->category_id;
            $model->country_id  = $request->country_id;
            $model->name  = $request->name;
            $model->status = 1;
            $model->save();
            return redirect()->back()->with('success', 'Data has been Added successfully');
        }
    }

    public function model_edit($id)
    {

        $catid = VehicleModel::find($id);
        $models = VehicleModel::orderBy('id', 'desc')->paginate(10);
        $mnaufactures = Manufacture::get();
        $vehicle_categories = VehicleCategory::where('status', 1)->get();
        $country = Countries::get();

        return view('inventory.edit_vehicle_model', compact('catid', 'models', 'country', 'mnaufactures', 'vehicle_categories'));
    }

    public function model_update(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'manufacture_id' => 'required',
        ], [
            'name.required' => 'Vehicle Manufacture are Required',
            'manufacture_id.required' => 'Vehicle Manufacture are Required',
        ]);

        if ($image = $request->file('image')) {
            $model = VehicleModel::find($request->id);
            $image_path = 'public/cover_image/' . $model->image;

            $destinationPath = 'public/cover_image/';
            $coverpic = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverpic);

            $model->image = $coverpic;
            $model->manufacture_id  = $request->manufacture_id;
            $model->category_id  = $request->category_id;
            $model->country_id  = $request->country_id;
            $model->name  = $request->name;
            $model->status = 1;
            $model->save();
            return redirect()->route('inventory.add_vehicle_model')->with('success', 'Data has been Update successfully');
        } else {
            $model = VehicleModel::find($request->id);
            $model->manufacture_id  = $request->manufacture_id;
            $model->category_id  = $request->category_id;
            $model->country_id  = $request->country_id;
            $model->name  = $request->name;
            $model->status = 1;
            $model->save();
            return redirect()->route('inventory.add_vehicle_model')->with('success', 'Data has been Update successfully');
        }
    }

    public function model_delete($id)
    {
        $model = VehicleModel::find($id);
        if (VehicleModel::find($id)->count() > 0 && $model->image !== Null) {

            $image_path = 'public/cover_image/' . $model->image;
            unlink($image_path);

            VehicleModel::find($id)->delete();
            return back()->with('error', 'Data has been Delete successfully');
        } else {
            VehicleModel::find($id)->delete();
            return back()->with('error', 'Data has been Delete successfully');
        }
    }
}
