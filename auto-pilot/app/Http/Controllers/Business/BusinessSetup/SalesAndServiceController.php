<?php

namespace App\Http\Controllers\Business\BusinessSetup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalesAndService;

class SalesAndServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $salesandservice=SalesAndService::orderBy('id','desc')->paginate(10);
        return view('business_setup.list_after_sales_services', compact('salesandservice'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SalesAndService::saveOrUpdate($request);
        return redirect()->back()->with('success','Sales and Service Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesandservice = SalesAndService::findOrFail($id);

        return view('business_setup.edit_after_sales_serice', compact('salesandservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       SalesAndService::saveOrUpdate($request, $id);
        return redirect()->route('list-after-sales')->with('success','Sales and Service Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $salesandservice = SalesAndService::findOrFail($id);
      $salesandservice->delete();

        return redirect()->back()->with('error', 'SalesAndService is successfully deleted');

    }
}
