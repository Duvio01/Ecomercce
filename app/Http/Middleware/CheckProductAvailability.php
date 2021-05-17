<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckProductAvailability
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $product = $request->route('product');

        if($product -> available == 0) {
            $request->session()->flash('error', 'el producto no esta disponible');
            return redirect()->route('products.index');
        }
        return $next($request);
    }
}
