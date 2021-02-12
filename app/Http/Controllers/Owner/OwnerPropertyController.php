<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;
use App\Necessity;

class OwnerPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('Owner/Create');
           return view('Owner.OwnerDashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Owner.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required',
            'mobile'=>'required',
            'division'=>'required',
            'district'=>'required',
            'location'=>'required',
            'tenant_type'=>'required',
            'lift'=>'required',
            'rent'=>'required',
            'room_quantity'=>'required',
            'washroom_quantity'=>'required',
            'balcony_quantity'=>'required',
            'floor'=>'required',
            'image'=>'required|image',
            'more'=>'required'

        ]); 

        $property= new Property;

        $property->name=$request->name;
        $property->mobile=$request->mobile;
        $property->division=$request->division;
        $property->district=$request->district;
        $property->location=$request->location;
        $property->tenant_type=$request->tenant_type;
        $property->lift=$request->lift;
        $property->rent=$request->rent;
        $property->room_quantity=$request->room_quantity;
        $property->washroom_quantity=$request->washroom_quantity;
        $property->balcony_quantity=$request->balcony_quantity;
        $property->floor=$request->floor;

        if ($request->file('image')) 
       {
         $file=$request->file('image');
         $extension=$file->getClientOriginalExtension();
         $filename=time().'.'. $extension;
         $file->move('uploads/property/',$filename);
         $property->image=$filename;
       }
       else
       {
           return $request;
           $property->image='';
       }
        $property->more=$request->more;

        $property->save();

        return redirect('Owner/OwnerDashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $property=Property::all();
        return view('Owner.View')->with('property',$property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $property=Property::find($id);
        return view('Owner.edit')->with('property',$property);

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
        //
        $property=Property::find($id);

        $property->name=$request->name;
        $property->mobile=$request->mobile;
        $property->division=$request->division;
        $property->district=$request->district;
        $property->location=$request->location;
        $property->tenant_type=$request->tenant_type;
        $property->lift=$request->lift;
        $property->rent=$request->rent;

        $property->save();

       return redirect('Owner/OwnerDashboard');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $property= Property::find($id);
        $property->delete();
       return redirect('Owner/OwnerDashboard');

    }


     public function tenantnecessity()
    {
        // return view('Owner/Create');
           $necessity=Necessity::all();
        return view('Owner.ViewNecessity')->with('necessity',$necessity);
    }
}
