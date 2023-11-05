<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// To get list of products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// To get specific product details
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
// To do checkout
Route::post('/checkout', [ProductController::class, 'checkout'])->name('checkout');


// Route::middleware('cors')->get('/example', function () {
//     return 'Response with CORS headers';
// });

// Route::middleware('cors')->group(function () {
// // To get list of products
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// // To get specific product details
// Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
// // To do checkout
// Route::post('/checkout', [ProductController::class, 'checkout'])->name('checkout');
// });

