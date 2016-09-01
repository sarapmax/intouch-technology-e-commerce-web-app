<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backoffice.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('backoffice.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = '';
        $thumb_image = '';
        $list_images[] = null;

        $this->validate($request, [
            'category_id' => 'required|alpha_num',
            'name' => 'required|min:10|unique:products|max:255',
            'price' => 'required|alpha_num',
            'thumb_image' => 'required|image|max:3000',
            // 'images' => 'image',
            'stock' => 'required|alpha_num'
        ]);

        
        // product images
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                // $extension = $file->getClientOriginalExtension();
                $images = date('His').$filename;
                $destinationPath = base_path() . '\public\images/';
                $file->move($destinationPath, $images);

                $list_images[] = $images;
            }
        }

        $all_images = implode("|", $list_images);

        // thumb_image product
        if($request->hasFile('thumb_image')) {
            $thumb = $request->file('thumb_image');
            $thumb_filename = $thumb->getClientOriginalName();
            // $thumb_extension = $thumb->getClientOriginalExtension();
            $thumb_image = date('His').$thumb_filename;
            $thumb_destinationPath = base_path() . '\public\thumb_image/';
            $request->file('thumb_image')->move($thumb_destinationPath, $thumb_image);
        }

        Product::create([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'thumb_image' => $thumb_image,
            'images' => $all_images,
            'stock' => $request->input('stock'),
            'live' => $request->input('live'),
            'shortdesc' => $request->input('shortdesc'),
            'longdesc' => $request->input('longdesc'),
            'specfications' => $request->input('specfications'), 
        ]);

        return redirect()->route('backoffice.product.index')
                         ->with('alert-success', "<strong>".$request->input('name')."</strong> product was created !");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
