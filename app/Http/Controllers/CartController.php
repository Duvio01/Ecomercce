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
        $request -> session() -> push('cart.products', ['product' => $productSelected, 'amount' => $amount]);

        $doubleProducts = session()->get('cart.products');

        $index = 0;
        $b = false;
        foreach($doubleProducts as $doubleProduct) {
            if($doubleProduct['product']->id == $productSelected->id){
                $newAmount = session()->get('cart.products')[$index]['amount'];
                $request->session()->put('cart.products', ['product' => $productSelected, 'amount' =>($newAmount + 1)]);
                $b = true;
                break;
            }
            $index++;
        }

        if($b) {
            $request -> session() -> push('cart.products', ['product' => $productSelected, 'amount' => $amount]);
        }

        //dd($doubleProduct);

        return redirect()->route('cart.index');
    }

    public function addOne(Product $product)
    {
        //dd($product);

        if(session()->has('cart') == false) {
            session()->put('cart', ['products' => [] ]);
        }
        
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
