<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// this is the page for show all the product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
// the form page fr uploading data
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
// form action and pst methods with handle form submit function in controller route + form validation will be here
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// edit page get
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

// update
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');

// delete
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');


