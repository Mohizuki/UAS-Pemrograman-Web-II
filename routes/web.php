<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Novelcontroller;

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

Route::get('/novel', function () {
    return view('novel');
});

Route::get('/genre', function () {
    return view('genre');
});
Route::get('/popular', function () {
    return view('popular');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});


// CRUD //

Route::get('/genre/create', function () {
    return view('/genre/create');
});



// Genre //
Route::get('/genre/action', function () {
    return view('/genre/action');
});
Route::get('/genre/adventure', function () {
    return view('/genre/adventure');
});
Route::get('/genre/drama', function () {
    return view('/genre/drama');
});
Route::get('/genre/fantasy', function () {
    return view('/genre/fantasy');
});
Route::get('/genre/romance', function () {
    return view('/genre/romance');
});
Route::get('/genre/sci-fi', function () {
    return view('/genre/sci-fi');
});


// Controller //
Route::resource('novel', Novelcontroller::class);
Route::resource('novelmodel', Novelcontroller::class);