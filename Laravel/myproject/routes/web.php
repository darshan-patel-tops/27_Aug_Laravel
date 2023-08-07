<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/test',"testingview");
// Route::view('/products',"admin.productslist");
Route::get('/products',[App\Http\Controllers\ProductController::class, 'index']);
Route::view('/addnewproductview', 'admin.addnewproduct');
Route::post('/saveproduct', [App\Http\Controllers\ProductController::class, 'store']);
// Route::any('/edituser/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::any('/edituser/{anything}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::any('/updateproduct/{id}', [App\Http\Controllers\ProductController::class, 'update']);
// Route::any('/products/{id}',"admin.productslist"); //support put patch delete post get
// Route::patch('/products/{id}',"admin.productslist"); //select with where for update
// Route::put('/products/{id}',"admin.productslist"); // update data = post+url id data 
// Route::delete('/products/{id}', [App\Http\Controllers\HomeController::class, 'method']); //id wise data
// Route::resource('/url',"controller");