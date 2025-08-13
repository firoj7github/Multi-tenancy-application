<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TenantHomeController extends Controller
{
    public function index (){

        $products = Product::get();
        return view('home.index', compact('products'));
    }
}
