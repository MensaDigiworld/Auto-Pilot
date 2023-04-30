<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\DriveSystem;
use App\Http\Requests\StoreDriveSystemRequest;
use App\Http\Requests\UpdateDriveSystemRequest;

class DriveSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driveSystems = DriveSystem::paginate(5);
        return view('inventory.add_vehicle_drive_system', compact('driveSystems'));
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
     * @param  \App\Http\Requests\StoreDriveSystemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDriveSystemRequest $request)
    {
        $data = DriveSystem::create($request->all());
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DriveSystem  $driveSystem
     * @return \Illuminate\Http\Response
     */
    public function show(DriveSystem $driveSystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DriveSystem  $driveSystem
     * @return \Illuminate\Http\Response
     */
    public function edit(DriveSystem $driveSystem)
    {
        $driveSystems = DriveSystem::paginate(5);
        return view('inventory.add_vehicle_drive_system', compact('driveSystems', 'driveSystem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDriveSystemRequest  $request
     * @param  \App\Models\DriveSystem  $driveSystem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDriveSystemRequest $request, DriveSystem $driveSystem)
    {
        $driveSystem->update($request->all());

        return redirect()->route('driveSystems.index')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DriveSystem  $driveSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(DriveSystem $driveSystem)
    {
        $driveSystem->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }
}
