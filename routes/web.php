<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('products', function () {
    $products = Product::where('available', true)->get();
    return view('components.products', compact('products'));
}); */

Route::resource('products', ProductController::class);

Route::get('pruebaProductos', function () {
    //select
    /* $productos = Product::where('available', true)->get();
    foreach($productos as $producto) {
        echo($producto->price);
        echo("<br>");
    }

    //insert
    $nuevoProducto = new Product();
    $nuevoProducto->name = "iPhone 13 super pro max";
    $nuevoProducto->price = 10000000;
    $nuevoProducto->description = "lo mismo mas caro";
    $nuevoProducto->save();

    //update
    $iphone13= Product::find(51);
    $iphone13->price = 16800000;
    $iphone13->save();
    dd($iphone13);

    //delete
    $iphone13 = Product::find(51);
    $iphone13->delete();
    dd($iphone13);
 */
    $categories = Category::find(3);

    dd($categories->products);

    /* $product = Category::find(3);

    dd($product->products);

    $image = Product::find(3);

    dd($image->images()->get());

    $orders = Order::find(2);
    dd($orders->products); */

    /* $user = User::find(1);
    dd($user->orders); */
});

/* Route::post();
Route::put();
Route::delete();
Route::any(); */