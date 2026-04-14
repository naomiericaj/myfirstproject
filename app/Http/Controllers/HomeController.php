<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show(){
        $category = 'Mouse';
        $button = '<button>Submit</button>';
        return view('home', [
            'product_categories'=>ProductCategory::with(['products'])->get()
            ]);
    }
}
