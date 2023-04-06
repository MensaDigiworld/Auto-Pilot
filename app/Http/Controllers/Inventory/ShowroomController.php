<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Showroom;
use App\Http\Requests\StoreShowroomRequest;
use App\Http\Requests\UpdateShowroomRequest;
use Illuminate\Http\Request;
use DB;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showrooms = Showroom::all();
        return view('inventory.list_warehouse_showroom', compact('showrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.new_warehouse_showroom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShowroomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShowroomRequest $request)
    {
        // return $request->all();

        $data = Showroom::create($request->all());

        return redirect()->route('showrooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function show(Showroom $showroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Showroom $showroom)
    {
        return view('inventory.new_warehouse_showroom', compact('showroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShowroomRequest  $request
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowroomRequest $request, Showroom $showroom)
    {

        $showroom->update($request->all());

        return redirect()->route('showrooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showroom $showroom)
    {
        $showroom->delete();
        return back();
    }


    public function showroomStatus(Request $request)
    {
        // return $request->all();

        if ($request->status == 'all') {
            $showrooms = Showroom::all();
            return view('inventory.list_warehouse_showroom', compact('showrooms'));
        } else {
            $showrooms = Showroom::where('status', $request->status)->get();
            // return $showrooms;
            return view('inventory.list_warehouse_showroom', compact('showrooms'));
        }
    }

    public function search(Request $request)
    {

        // return $request->all();
        $searchTerm = $request->search;
        $showrooms = DB::table('showrooms')
            ->where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('email', 'like', '%' . $searchTerm . '%')
            ->get();

        // return $showrooms;
        return view('inventory.list_warehouse_showroom', compact('showrooms'));
    }
}
