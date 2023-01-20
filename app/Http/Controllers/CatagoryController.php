<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Catagory::all();
        return view('ProductDetails.catagory',compact('data'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.addcatagory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        catagory::create($data);
        return redirect()->route('catagory.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit( $catagory)
    {
        $catagory = catagory::findorfail($catagory);
        return view('Edit.catagoryedit',compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $catagory)
    {
        $catagory=catagory::findorfail($catagory);
        $data = $request->all();
        $catagory->update($data);
        return redirect()->route('catagory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catagory $catagory)
    {
        $catagory->delete();
        return back();
    }
}
