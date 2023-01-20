<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=brands::all();
        return view('ProductDetails.brand',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.addbrand');
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
        // dd($data);
        if ($request->hasfile('logo')) {
            $img=$request->file('logo');
            $name = 'logo'. now()->format('-ymdhis-') .'.'. $img->getClientOriginalExtension();
            $path='upload/logo';
            $img->move($path,$name);
            $data['logo']=$path.'/'.$name;
        }
        brands::create($data);
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function show(brands $brands)
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */



    public function edit( $brands)
    {
        $brands = brands::findorfail($brands);
        return view('Edit.brandedit',compact('brands'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $brands)
    {
        $brands=brands::findorfail($brands);
        $data = $request->all(); 
        $brands->update($data);
        return redirect()->route('brand.index');
    }


    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */


    public function destroy(brands $brands)
    {
        $brands->delete();
        return back();
    }
}
