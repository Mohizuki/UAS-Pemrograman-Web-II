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

Route::get('/', [Novelcontroller::class, 'welcome']);



Route::get('/novel', function () {
    return view('novel');
});
Route::get('/novel', [Novelcontroller::class, 'novel'])->name('novel_admin');

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

Route::get('/genre/create', [Novelcontroller::class, 'create'])->name('create-genre');
Route::post('/genre/store', [Novelcontroller::class, 'store'])->name('store-genre');
Route::get('/genre/edit/{id}', [Novelcontroller::class, 'edit'])->name('edit-genre');
Route::put('/genre/update/{id}', [Novelcontroller::class, 'update'])->name('update-genre');
Route::delete('/genre/delete/{id}', [Novelcontroller::class, 'delete'])->name('delete-genre');


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


