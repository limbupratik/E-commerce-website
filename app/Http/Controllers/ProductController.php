<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Subcatagory;
use App\Models\catagory;
use App\Models\color;
use App\Models\secsubcategory;
use App\Models\brands;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=product::all();   
        return view('productdetails.product',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Subcatagory::all();
        $catagory=catagory::all();
        $sec=secsubcategory::all();
        $brand=brands::all();
        $colors=color::all();
        return view('forms.addproduct',compact('data','catagory','sec','brand','colors'));
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
        $data['color'] = implode('|',$request->color);
        $data['feature']=implode('|',$request->feature);
        if ($request->hasfile('images')) {
            $img=$request->file('images');
            $name = 'images'. now()->format('-ymdhis-') .'.'. $img->getClientOriginalExtension();
            $path='upload/images';
            $img->move($path,$name);
            $data['images']=$path.'/'.$name;
        }
        product::create($data);

        return redirect()->route('pro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }

   
}
