<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('title', 'DESC')->get();

        return view('backoffice.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:255|unique:categories'
        ]);

        Category::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title'))
        ]);

        return redirect()->route('backoffice.category.index')
                         ->with('alert-success', "<strong>".$request->input('title')."</strong> category was created !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('backoffice.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:255|unique:categories'
        ]);

        Category::find($id)->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title'))
        ]);
        return redirect()->route('backoffice.category.index')
                         ->with('alert-success', "<strong>".$request->input('title')."</strong> category was updated !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $productExist = Product::where('category_id', $id)->first();

        if(!$productExist) {
            Category::find($id)->delete();

            return redirect()->back()
                             ->with('alert-success',"<strong>". $request->input('title')."</strong> category was deleted !");
        }else {
            return redirect()->back()
                             ->with('alert-danger', "You can't delete "."<strong>".$request->input('title')."</strong> category, please delete product(s) which refer to this category first.");
        }
        
    }
}
