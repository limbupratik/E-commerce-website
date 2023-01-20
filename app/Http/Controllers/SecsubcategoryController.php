<?php

namespace App\Http\Controllers;

use App\Models\secsubcategory;
use App\Models\Subcatagory;
use Illuminate\Http\Request;

class SecsubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Secsubcategory::all();
        return view('ProductDetails.secsubcatagory',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Subcatagory::all();
        return view('forms.addsecsubcatagory',compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data=$request->all();
        Secsubcategory::create($data);
        return redirect()->route('sec.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\secsubcategory  $secsubcategory
     * @return \Illuminate\Http\Response
     */
    public function show(secsubcategory $secsubcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\secsubcategory  $secsubcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(secsubcategory $secsubcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\secsubcategory  $secsubcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, secsubcategory $secsubcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\secsubcategory  $secsubcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(secsubcategory $secsubcategory)
    {
        //
    }
}
