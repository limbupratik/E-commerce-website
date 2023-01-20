<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function homepage(){
        $catone=catagory::find(1);
        $cattwo=catagory::find(2);
        $catthree=catagory::find(3);
        return view('homepage.index',compact('catone','cattwo','catthree'));
    }
    // public function listpage($slug){
    //     $catagory=catagory::where('slug',$slug)->first();
    //     Paginator::useBootstrapfour();
    //     if($catagory){
    //         $
    //     }
    
}
