<?php

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

Auth::routes();

// url '/home' akan  refer Homecontroller function index , menggunakan method GET
// method url ada 5. GET , PATCH, POST, PUT , DELETE
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// url 'product/store'
Route::post('/product/store',[App\Http\Controllers\HomeController::class, 'store'])->name('product-store');

