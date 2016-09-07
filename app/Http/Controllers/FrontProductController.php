<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class FrontProductController extends Controller
{
    public function getProduct($slug) {
    	$product = Product::with('category')->where('slug','=', $slug)->firstOrFail();

    	$productsRelated = Product::where('category_id', $product->category_id)->inRandomOrder()->get();

    	$productsRecent = Product::orderBy('created_at', 'DESC')->get();

    	return view('product', compact(['product', 'productsRelated', 'productsRecent']));
    }

    public function getProductsPage() {
    	return view('product_grid');
    }
}
