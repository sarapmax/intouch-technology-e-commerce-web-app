<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('category_id', 'DESC')->get();
        return view('backoffice.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'title']);

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
                $input['filename'] = time().'.'.$file->getClientOriginalName();
                $destinationPath = public_path('/images_thumb');

                $images = Image::make($file->getRealPath());

                $images->resize(200, null, function ($constraint) {
                    $constraint->aspectRatio();

                })->save($destinationPath.'/'.$input['filename']);

                $destinationPath = public_path('/images');

                $file->move($destinationPath, $input['filename']);

                $list_images[] = $input['filename'];

            }
        }

        $all_images = implode("|", $list_images);

        // thumb_image product
        if($request->hasFile('thumb_image')) {
                $thumb = $request->file('thumb_image');

                $input['thumb_name'] = time().'.'.$thumb->getClientOriginalExtension();
                $destinationPath = public_path('/thumb_image_thumb');

                $thumb_image = Image::make($thumb->getRealPath());

                $thumb_image->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();

                })->save($destinationPath.'/'.$input['thumb_name']);

                $destinationPath = public_path('/thumb_image');

                $thumb->move($destinationPath, $input['thumb_name']);
        }

        Product::create([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'thumb_image' => $input['thumb_name'],
            'images' => $all_images,
            'stock' => $request->input('stock'),
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
        $product = Product::find($id);

        return view('backoffice.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        $categories = Category::all();

        return view('backoffice.product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
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
        $images = '';
        $thumb_image = '';
        $list_images[] = null;

        $product = Product::find($id);

        $this->validate($request, [
            'category_id' => 'required|alpha_num',
            'name' => 'required|min:10|max:255',
            'price' => 'required|alpha_num',
            'thumb_image' => 'image|max:3000',
            // 'images' => 'image',
            'stock' => 'required|alpha_num'
        ]);

                // product images
        if ($request->hasFile('images')) {
            $files = $request->file('images');

            $imagesDelete = explode("|",$product->images);
            foreach(array_slice($imagesDelete ,1) as $imageDelete) {
                unlink(public_path('/images_thumb/'.$imageDelete)); 
                unlink(public_path('/images/'.$imageDelete));       
            }

            foreach($files as $file){
                $input['filename'] = time().'.'.$file->getClientOriginalName();
                $destinationPath = public_path('/images_thumb');

                $images = Image::make($file->getRealPath());

                $images->resize(200, null, function ($constraint) {
                    $constraint->aspectRatio();

                })->save($destinationPath.'/'.$input['filename']);

                $destinationPath = public_path('/images');

                $file->move($destinationPath, $input['filename']);

                $list_images[] = $input['filename'];

            }

            $all_images = implode("|", $list_images);
            $product->images = $all_images;
        }

        

        // thumb_image product
        if($request->hasFile('thumb_image')) {
                unlink(public_path('/thumb_image_thumb/'.$product->thumb_image)); 
                unlink(public_path('/thumb_image/'.$product->thumb_image)); 

                $thumb = $request->file('thumb_image');

                $input['thumb_name'] = time().'.'.$thumb->getClientOriginalExtension();
                $destinationPath = public_path('/thumb_image_thumb');

                $thumb_image = Image::make($thumb->getRealPath());

                $thumb_image->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();

                })->save($destinationPath.'/'.$input['thumb_name']);

                $destinationPath = public_path('/thumb_image');

                $thumb->move($destinationPath, $input['thumb_name']);

                $product->thumb_image = $input['thumb_name'];
        }

        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->shortdesc = $request->input('shortdesc');
        $product->longdesc = $request->input('longdesc');
        $product->specfications = $request->input('specfications');

        $product->save();
        return redirect()->route('backoffice.product.index')
                         ->with('alert-success', "<strong>".$request->input('name')."</strong> product was updated !");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);

        if($product->images) {
            $imagesDelete = explode("|",$product->images);
            foreach(array_slice($imagesDelete ,1) as $imageDelete) {
                unlink(public_path('/images_thumb/'.$imageDelete)); 
                unlink(public_path('/images/'.$imageDelete));       
            }
        }

        if($product->thumb_image) {
            unlink(public_path('/thumb_image_thumb/'.$product->thumb_image)); 
            unlink(public_path('/thumb_image/'.$product->thumb_image)); 
        }

        $product->delete();

        return redirect()->back()
                         ->with('alert-success',"<strong>". $request->input('name')."</strong> product was deleted !");
    }
}
