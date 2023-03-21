<?php

namespace App\Http\Controllers\Business\BusinessSetup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LatterHead;

class LatterHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('business_setup.list_letter_head', [
             'latterhead' => LatterHead::orderBy('id','desc')->paginate(10),
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('business_setup.add_letter_head');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         LatterHead::saveOrUpdate($request);
        return redirect()->back()->with('success','Latter Head Added Successfully');
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
         $latterhead = LatterHead::findOrFail($id);
        return view('business_setup.edit_latterhead', compact('latterhead'));
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
      LatterHead::saveOrUpdate($request, $id);
        return redirect()->route('latterheads.index')->with('success','Latter Head Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latterhead = LatterHead::findOrFail($id);
        $latterhead->delete();

        return redirect()->back()->with('error', 'Latter Head is successfully deleted');
    }
}
