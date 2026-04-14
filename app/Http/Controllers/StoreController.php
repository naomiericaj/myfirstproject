<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show(){
        return view('store', [
            // 'products' => Product::with(['product_category'])->get()
            'products' => Product::where('stock', '>', 0)->with(['product_category'])->get()
            ]);
        }
}
