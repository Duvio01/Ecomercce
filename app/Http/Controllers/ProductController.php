<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductHasCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('available', true)->take(4)->get();
        $categories = Category::all();
        return view('components/products.index', compact('products', 'categories'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('components/products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataProductForm = $request->validate([
            'name' => ['string', 'required'],
            'description' => ['string', 'required'],
            'price' => ['numeric', 'required'],
            'stock' => ['numeric', 'required'],
            'score' => ['numeric', 'required'],
            'video_url' => ['string', 'required'],
            'discount' => ['numeric', 'required'],
            'categories' => ['required'],
            'available' => ['nullable']
        ]);

        //dd($dataProductForm);

        $newProduct = new Product();
        $newProduct->name = $dataProductForm['name'];
        $newProduct->description = $dataProductForm['description'];
        $newProduct->price = $dataProductForm['price'];
        $newProduct->stock = $dataProductForm['stock'];
        $newProduct->score = $dataProductForm['score'];
        $newProduct->video_url = $dataProductForm['video_url'];
        $newProduct->discount = $dataProductForm['discount'];
        if (isset($dataProductForm['available'])) {
            $newProduct->available = true;
        } else {
            $newProduct->available = false;
        }

        $newProduct->save();

        foreach ($dataProductForm['categories'] as $category) {
            $newCategory = new ProductHasCategory();
            $newCategory->category_id = $category;
            $newCategory->product_id = $newProduct->id;
            $newCategory->save();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $discount = ($product->price) - ((($product->price) * ($product->discount)) / 100);
        return view('components/products.show', compact('product', 'discount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
