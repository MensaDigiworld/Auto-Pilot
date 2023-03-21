<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BranchSetup;

class BranchSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $branchs=BranchSetup::orderBy('id','desc')->paginate(10);
        return view('business_setup.list_branch',compact('branchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('business_setup.add_branch');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      BranchSetup::createOrUpdateBranch($request);
        return back()->with('success','BranchSetup created successfully.');
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
        $branchs = BranchSetup::findOrFail($id);
        return view('business_setup.edit_branch', compact('branchs'));
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
       BranchSetup::createOrUpdateBranch($request, $id);
        return back()->with('success','BranchSetup created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = BranchSetup::find($id);
         if(BranchSetup::find($id)->count()>0 && $branch->image!==Null){
            $image_path = 'public/images/business/uploaded-images/branch-logo/'.$branch->logo;
            unlink($image_path);

             BranchSetup::find($id)->delete();            
            return back()->with('error','Data has been Delete successfully');
        }else{
            BranchSetup::find($id)->delete();           
            return back()->with('error','Data has been Delete successfully');
        }
    }
}
