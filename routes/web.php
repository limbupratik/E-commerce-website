<?php

use Illuminate\Support\Facades\Route;
use App\Models\Catagory;
use App\HTTP\Controllers\CatagoryController;
Route::resource('/catagory', CatagoryController::class);

use App\HTTP\Controllers\SubcatagoryController;
Route::resource('/subcatagory', SubcatagoryController::class);

use App\HTTP\Controllers\BrandsController;
Route::resource('/brand', BrandsController::class);

use App\HTTP\Controllers\SecsubcategoryController;
Route::resource('/sec', SecsubcategoryController::class);

use App\HTTP\Controllers\all;
Route::resource('/all',all::class);

use App\HTTP\Controllers\ProductController;
Route::resource('/pro',ProductController::class);

use App\HTTP\Controllers\ColorController;
Route::resource('/color',ColorController::class);

use App\HTTP\Controllers\DepartmentController;
Route::resource('/department',DepartmentController::class);

use App\HTTP\Controllers\StaffController;
Route::resource('/staff',StaffController::class);

use App\HTTP\Controllers\CustomerController;
Route::resource('/customer',CustomerController::class);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/admin', function () {
    return view('Dashboard.home');
});
Route::get('/list', function () {
    return view('listpage');
});
Route::get('/details', function () {
    return view('detailspage');
});

