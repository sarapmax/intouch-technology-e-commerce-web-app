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

    	return view('index', [
    		'products' => $products,
    		'categories' => $categories
    	]);
    }
}
