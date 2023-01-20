<?php

namespace App\Http\Controllers;
use App\Models\Catagory;
use App\Models\brands;
use App\Models\color;
use App\Models\staff;
use App\Models\department;
use App\Models\subcatagory;
use Illuminate\Http\Request;

class all extends Controller
{
    public function index(){
        $data=Catagory::limit(5)->get();
        $brand=brands::limit(5)->get();
        $subcata=subcatagory::limit(5)->get();
        $color=color::limit(5)->get();
        $depart=department::limit(5)->get();
        $staffs=staff::limit(5)->get();
        return view('productDetails.all',compact('data','brand','subcata','color','depart','staffs'));
    }

}
