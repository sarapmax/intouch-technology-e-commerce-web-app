<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    public function index() {
    	$products = Product::orderBy('created_at', 'DESC')->get();

    	$categories = Category::with('product')->orderBy('title', 'ASC')->get();
  //   	$results = Category::select('id','title')->with([
		//     'product' => function($query) {
		//         $query->select(); 
		//         // You can customize the selected fields for a relationship like this.
		//         // But you should select the `key` of the relationship. 
		//         // In this case it's the `parent_id`.
		//     }
		// ])->get();

    	return view('index', [
    		'products' => $products,
    		'categories' => $categories
    	]);
    }
}
