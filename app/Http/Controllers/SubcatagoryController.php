<?php

namespace App\Http\Controllers;

use App\Models\subcatagory;
use App\Models\catagory;
use Illuminate\Http\Request;

class SubcatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Subcatagory::all();
        return view('ProductDetails.subcatagory',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=catagory::all();
        return view('forms.addsubcatagory',compact('data'));
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
            'catagory_id'=>'exists:catagories,id',
        ]);
        $data = $request->all();
        Subcatagory::create($data);
        return redirect()->route('subcatagory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subcatagory  $subcatagory
     * @return \Illuminate\Http\Response
     */
    public function show(subcatagory $subcatagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subcatagory  $subcatagory
     * @return \Illuminate\Http\Response
     */
    public function edit($subcatagory)
    {
        $subcatagory = catagory::findorfail($subcatagory);
        return view('Edit.subcatagoryedit',compact('subcatagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subcatagory  $subcatagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subcatagory)
    {
        $subcatagory=subcatagory::findorfail($subcatagory);
        $data = $request->all();
        $subcatagory->update($data);
        return redirect()->route('subcatagory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subcatagory  $subcatagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcatagory $subcatagory)
    {
        //
    }
}
