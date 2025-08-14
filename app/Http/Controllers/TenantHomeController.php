<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TenantHomeController extends Controller
{
    public function home (){

        $products = Product::get();
        return view('tenant_home.index', compact('products'));
    }
}
