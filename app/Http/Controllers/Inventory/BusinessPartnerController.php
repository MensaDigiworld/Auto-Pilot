<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\BusinessPartner;
use App\Http\Requests\StoreBusinessPartnerRequest;
use App\Http\Requests\UpdateBusinessPartnerRequest;
use Illuminate\Http\Request;
use DB;

class BusinessPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = BusinessPartner::paginate(10);

        // return $business;
        return view('inventory.list_business_partner', compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.new_business_partner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBusinessPartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessPartnerRequest $request)
    {
        $data = BusinessPartner::create($request->all());

        return redirect()->route('businessPartners.index')->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessPartner  $businessPartner
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessPartner $businessPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessPartner  $businessPartner
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessPartner $businessPartner)
    {
        return view('inventory.new_business_partner', compact('businessPartner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessPartnerRequest  $request
     * @param  \App\Models\BusinessPartner  $businessPartner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessPartnerRequest $request, BusinessPartner $businessPartner)
    {
        $businessPartner->update($request->all());
        return redirect()->route('businessPartners.index')->with('success', 'Data has been Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessPartner  $businessPartner
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessPartner $businessPartner)
    {
        $businessPartner->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }

    public function searchType(Request $request)
    {

        // return $request->all();
        if ($request->business_type == 'all') {
            $business = BusinessPartner::paginate(5);

            // return $business;
            return view('inventory.list_business_partner', compact('business'));
        } else {
            $business = BusinessPartner::where('business_type', $request->business_type)->paginate(5);


            // return $business;
            return view('inventory.list_business_partner', compact('business'));
        }
    }
    public function searchCategory(Request $request)
    {
        if ($request->status == 'all') {
            $business = BusinessPartner::paginate(5);

            // return $business;
            return view('inventory.list_business_partner', compact('business'));
        } else {
            $business = BusinessPartner::where('business_category', $request->business_category)->paginate(5);


            // return $business;
            return view('inventory.list_business_partner', compact('business'));
        }
    }


    public function searchBusinessPartner(Request $request)
    {

        // return $request->all();
        $searchTerm = $request->search;
        $business = DB::table('business_partners')
            ->where('business_category', 'like', '%' . $searchTerm . '%')
            ->orWhere('business_type', 'like', '%' . $searchTerm . '%')
            ->orWhere('contact_number', 'like', '%' . $searchTerm . '%')
            ->get();
        // return $business;

        // return $showrooms;
        return view('inventory.list_business_partner', compact('business'));
    }
}
