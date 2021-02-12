<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Necessity;
use App\Property;
use App\Area;

class TenantNecessityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           return view('Tenant.TenantDashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Tenant.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'mobile'=>'required',
            'division'=>'required',
            'district'=>'required',
            'location'=>'required',
            'tenant_type'=>'required',
            'budget'=>'required',
            'home'=>'required',
            'washroom'=>'required',
            'balcony'=>'required',
            'more'=>'required'

        ]); 

        $necessity= new Necessity;

        $necessity->name=$request->name;
        $necessity->mobile=$request->mobile;
        $necessity->division=$request->division;
        $necessity->district=$request->district;
        $necessity->location=$request->location;
        $necessity->tenant_type=$request->tenant_type;
        $necessity->budget=$request->budget;
        $necessity->home=$request->home;
        $necessity->washroom=$request->washroom;
        $necessity->balcony=$request->balcony;
        $necessity->more=$request->more;

        $necessity->save();

        return redirect('Tenant/TenantDashboard');

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
        $necessity=Necessity::all();
        return view('Tenant.View')->with('necessity',$necessity);
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
        $necessity=Necessity::find($id);
        return view('Tenant.edit')->with('necessity',$necessity);
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
        $necessity=Necessity::find($id);
        $necessity->name=$request->name;
        $necessity->mobile=$request->mobile;
        $necessity->division=$request->division;
        $necessity->district=$request->district;
        $necessity->location=$request->location;
        $necessity->tenant_type=$request->tenant_type;
        $necessity->budget=$request->budget;
        $necessity->home=$request->home;
        $necessity->washroom=$request->washroom;
        $necessity->balcony=$request->balcony;
        $necessity->more=$request->more;

        $necessity->save();

        return redirect('Tenant/TenantDashboard');


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
        $necessity= Necessity::find($id);
        $necessity->delete();
       return redirect('Tenant/TenantDashboard');
    }

    public function ownerproperty()
    {
        //
        $property=Property::all();
        return view('Tenant.ViewProperty')->with('property',$property);
    }

    public function viewarea()
    {
        //
        $area=Area::all();
        return view('Tenant.ViewArea')->with('area',$area);
    }

    public function viewblog()
    {
        //
        $blog=Blog::all();
        return view('Tenant.ViewBlog')->with('blog',$blog);
    }

}
