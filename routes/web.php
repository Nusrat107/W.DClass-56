<?php

use App\Http\Controllers\FrontedController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontedController::class, 'index']);
Route::get('/shop', [FrontedController::class, 'ShopProduct']);
Route::get('/return', [FrontedController::class, 'ReturnProduct']);
Route::get('/catagory', [FrontedController::class, 'CatagoryProduct']);
Route::get('/type', [FrontedController::class, 'TypeProduct']);
Route::get('/view', [FrontedController::class, 'ViewProduct']);
