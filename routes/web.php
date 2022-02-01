<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users; // User.php Controller Import

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
    // return redirect('about');
});

// Route::get("users/{name}", [Users::class, 'loadView']);

// Route::get('/{name}', function ($name) {
//     return view('welcome', ['name'=>$name]);
// });

// Route::get('/about', function() {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::view("contact", 'contact');

// Route::view("gallery", 'gallery');