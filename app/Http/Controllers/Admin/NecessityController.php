<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Necessity;

class NecessityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        return view('Admin.necessity_view')->with('necessity',$necessity);
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
        return view('Admin.necessity_edit')->with('necessity',$necessity);
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

        return redirect('Admin/AdminDashboard');
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
       return redirect('Admin/AdminDashboard');
    }
}
