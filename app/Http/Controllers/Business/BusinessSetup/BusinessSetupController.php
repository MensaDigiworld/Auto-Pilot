<?php

namespace App\Http\Controllers\Business\BusinessSetup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddBusiness;

class BusinessSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $add_business=AddBusiness::orderBy('id','desc')->paginate(10);
        return view('business_setup.list_business', compact('add_business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('business_setup.add_business');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  $request->validate([
            'business_name' => 'required',
            'contact_no'       => 'required',
            'email'                => 'required',
            'logo'                  => 'required|image|mimes:jpeg,jpg,png,gif',
        ],[
            'business_name.required' => 'Business Name Field are Required', 
            'contact_no.required' => 'Contact Field are Required', 
            'email.required' => 'Email Field are Required', 
            'logo.required' => 'logo Field are Required', 
        ]);

        if ($image = $request->file('logo')) {
            $destinationPath    = 'public/images/business/';
            $business_logo      = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image                   ->move($destinationPath, $business_logo);
                      
            $add_business    =  new AddBusiness();
            $add_business    -> logo                     = $business_logo; 
            $add_business    -> code                     = $request->code; 
            $add_business    -> business_name     = $request->business_name; 
            $add_business    -> address                 = $request->address; 
            $add_business    -> country_id            = $request->country_id;
            $add_business    -> contact_no            = $request->contact_no;
            $add_business    -> email                    = $request->email;
            $add_business    -> web_address        = $request->web_address;
            $add_business    -> currency_id          = $request->currency_id;
            $add_business    -> status                   = $request->status;
            $add_business    -> save();

            return redirect()->back()->with('success', 'New Business Added Successfully');
        }
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
       $business = AddBusiness::findOrFail($id);

        return view('business_setup.edit_business', compact('business'));
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
        $request->validate([
            'business_name' => 'required',
            'contact_no'       => 'required',
            'email'                => 'required',
            'logo'                  => 'required|image|mimes:jpeg,jpg,png,gif',
        ],[
            'business_name.required' => 'Business Name Field are Required', 
            'contact_no.required' => 'Contact Field are Required', 
            'email.required' => 'Email Field are Required', 
            'logo.required' => 'Logo Field are Required', 
        ]);

            if ($image = $request->file('logo')) {
            $add_business=AddBusiness::find($request->id);
            $image_path = 'public/images/business/'.$add_business->logo;
           if (file_exists($image_path))

            $destinationPath = 'public/images/business/';
            $business_logo = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $business_logo);
            $add_business    -> logo                     = $business_logo; 
            $add_business    -> code                     = $request->code; 
            $add_business    -> business_name     = $request->business_name; 
            $add_business    -> address                 = $request->address; 
            $add_business    -> country_id            = $request->country_id;
            $add_business    -> contact_no            = $request->contact_no;
            $add_business    -> email                    = $request->email;
            $add_business    -> web_address        = $request->web_address;
            $add_business    -> currency_id          = $request->currency_id;
            $add_business    -> status                   = $request->status;
            $add_business    -> save();        
            return redirect()->route('business.index')->with('success', 'Business Update Successfully');
        }
        else{
            $coverimage=AddBusiness::find($request->id);
            $add_business    -> code                     = $request->code; 
            $add_business    -> business_name     = $request->business_name; 
            $add_business    -> address                 = $request->address; 
            $add_business    -> country_id            = $request->country_id;
            $add_business    -> contact_no            = $request->contact_no;
            $add_business    -> email                    = $request->email;
            $add_business    -> web_address        = $request->web_address;
            $add_business    -> currency_id          = $request->currency_id;
            $add_business    -> status                   = $request->status;
            $add_business    -> save();            
            return redirect()->route('business.index')->with('success', ' Business Update Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business = AddBusiness::findOrFail($id);
        $business->delete();

        return redirect()->back()->with('error', 'Business is successfully deleted');
    }
}
