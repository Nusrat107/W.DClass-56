<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontedController extends Controller
{
   public function index(){
    return view('Frontend.index');
}
   
public function ShopProduct(){
    return view('Frontend.shop');
}
public function CatagoryProduct(){
    return view('Frontend.catagory');
}

public function TypeProduct(){
    return view('Frontend.type');
}
public function ViewProduct(){
    return view('Frontend.view');
}
public function ReturnProduct(){
    return view('Frontend.return');
}

}

