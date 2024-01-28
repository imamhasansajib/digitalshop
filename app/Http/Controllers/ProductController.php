<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('backendTheme.products.index',[
            'products'=>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backendTheme.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Product::create([
        //     'title'=>$request->title,
        //     'price'=>$request->price,
        //     'description'=>$request->description,
        //     'image'=>$this->uploadImage(request()->file('image'))
        // ]);

        $request->validate([
            'title'=>['required', 'min:2'],
            'price'=>['required', 'min:2'],
            'description'=>['required'],
        ]);

        if($request->status){
            $status = 1;
        }
        else{
            $status = 0;
        }

        $requestData = [
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            'status'=>$status,
            // 'image'=>$this->uploadImage(request()->file('image'))
        ];

        if($request->hasFile('image'))
        {
            $requestData['image'] = $this->uploadImage(request()->file('image'));
        }

        Product::create($requestData);

        return redirect()->route('products.index')->withMessage('Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('backendTheme.products.show', [
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('backendTheme.products.edit', [
            'product'=>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title'=>['required', 'min:3'],
            'price'=>['required', 'min:2'],
            'description'=>['required'],
        ]);

        // $product->update([
        //     'title'=>$request->title,
        //     'price'=>$request->price,
        //     'description'=>$request->description,
        //     'image'=>$this->uploadImage(request()->file('image'))
        // ]);

        if($request->status){
            $status = 1;
        }
        else{
            $status = 0;
        }

        $requestData = [
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            'status'=>$status,
            // 'image'=>$this->uploadImage(request()->file('image'))
        ];

        if($request->hasFile('image'))
        {
            $requestData['image'] = $this->uploadImage(request()->file('image'));
        }
        $product->update($requestData);

        return redirect()->route('products.index')->withMessage('Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->withMessage('Product deleted successfully!');
    }

    public function productInactive($id)
    {
        Product::findorfail($id)->update(['status' => 0]);

        return redirect()->route('products.index')->withMessage('Product inactivated succesfully!');
    }

    public function productActive($id)
    {
        Product::findorfail($id)->update(['status' => 1]);

        return redirect()->route('products.index')->withMessage('Product activated succesfully!');
    }

    public function uploadImage($file)
    {
        $fileName = time().'.'.$file->getClientOriginalExtension();
        'Image'::make($file)
        ->resize(200,200)
        ->save(storage_path().'/app/public/'.$fileName);
        return $fileName;
    }
}