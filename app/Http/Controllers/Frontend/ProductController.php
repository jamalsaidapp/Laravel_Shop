<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Theme\Navbar;
use App\Models\Theme\Product;
use App\Models\Theme\Shop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
//        $products = Product::all();

        return view('Pages.shop', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first()->get();
        return view('Pages.singleProduct', compact('product'));
    }
}
