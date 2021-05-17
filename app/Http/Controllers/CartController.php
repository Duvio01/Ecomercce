<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(session() -> has('cart') == false){
            return redirect() -> route('products.index');
        }else{
            $cartProducts = session() -> get ('cart.products');
            return view('components/cart.index', compact('cartProducts'));
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $productSelected = Product::find($request->productId);
        $amount = $request -> amount;

        if($request->session()->has('cart') == false) {
            $request->session()->put('cart', ['products' => [] ]);
        }

        $cartProducts = $request->session()->get('cart.products');
        /* $indexFoundProduct = -1;

        foreach ($cartProducts as $index => $cartProduct) {
            
            if($cartProduct['product']->id == $productSelected->id) {
                $indexFoundProduct = $index;
                break;
            }
        } */

        $indexFoundProduct = collect($request->session()->get('cart.products')) ->search(function ($cartProduct) use ($productSelected) {
            return $cartProduct['product']->id == $productSelected->id;
        });

        if($indexFoundProduct != false) {
            $cartProducts[$indexFoundProduct]['amount'] += $amount;
            $request -> session() -> put('cart.products', $cartProducts);
            $request->session()->flash('status',"se actualizo cantidad de $productSelected->name en el carrito");
        }else{
            $request -> session() -> push('cart.products', ['product' => $productSelected, 'amount' => $amount]);
            $request -> session()->flash('status',"se agrego producto $productSelected->name al carrito");
        }

        return redirect()->route('products.index');
    }

    public function addOne(Product $product)
    {
        //dd($product);
        
        session() -> push('cart.products', ['product' => $product, 'amount' => 1]);

        return redirect()->route('cart.index');
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
        dd($id);
    }
}
