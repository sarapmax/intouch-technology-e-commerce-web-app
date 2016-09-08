<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category;

class FrontProductController extends Controller
{
    public function getProduct($slug) {
    	$product = Product::with('category')->where('slug','=', $slug)->firstOrFail();

    	$productsRelated = Product::where('category_id', $product->category_id)->inRandomOrder()->get();

    	$productsRecent = Product::orderBy('created_at', 'DESC')->get();

    	return view('product', compact(['product', 'productsRelated', 'productsRecent']));
    }

    public function getProductsPage(Request $request) {
        $sortBy = explode('-', $request->input('sortItem', 'name-desc'));
        $sortColumn = $sortBy[0];
        $sortOrder = $sortBy[1];

      $product_category = Product::with('category')->groupBy('category_id')->selectRaw('category_id, count(*) as totalProduct')->get();

      $productsRecent = Product::orderBy('created_at', 'DESC')->get();

      $products = Product::orderBy($sortColumn, $sortOrder)->paginate($request->input('showItem', 15));

    	return view('product_grid', compact(['product_category', 'productsRecent', 'products']));
    }

    public function getCategory($slug) {
      $product_category = Product::with('category')->groupBy('category_id')->selectRaw('category_id, count(*) as totalProduct')->get();

      $category_product = Category::with('product')->where('slug', $slug)->paginate(5);

      $productsRecent = Product::orderBy('created_at', 'DESC')->get();

      return view('category_product', compact(['category_product', 'product_category', 'productsRecent']));
    }
}
