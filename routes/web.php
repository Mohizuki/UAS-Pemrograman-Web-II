<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Novelcontroller;
use App\Http\Controllers\seconecontroller;
use App\Http\Controllers\sosmedcontroller;
use App\Http\Controllers\listgenrecontroller;
use App\Http\Controllers\UserAuth;

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

//about//
Route::get('/about',[sosmedcontroller::class,'show']);
Route::get('/',[seconecontroller::class,'index']);
Route::get('/genre',[listgenrecontroller::class,'index']);


//novel//
Route::get('/', function () {
    return view('welcome');
});


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
    return view('login.login');
});
Route::get('profile', function () {
    return view('logout.profile');
});


// CRUD //

Route::get('/genre/create', function () {
    return view('/genre/create');
});

Route::post("user",[UserAuth::class,'userLogin']);
Route::view("login.login",'login');
Route::view("logout.profile",'profile');

Route::get('logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});

Route::get('/',function(){
	if(!session()->has('user')){
		return redirect('login');
	}
}); 
Route::get('popular',function(){
	if(!session()->has('user')){
		return redirect('login');
	}else{
		return view('popular');
	}	
}); 
Route::get('genres',function(){
	if(!session()->has('user')){
		return redirect('login');
	}
}); 
Route::get('about',function(){
	if(!session()->has('user')){
		return redirect('login');
	}
}); 

Route::get('/login',function(){
	if(session()->has('user')){
		return redirect('/');
	}
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
Route::resource('about', sosmedcontroller::class);
Route::resource('sosialmedia', sosmedcontroller::class);
Route::resource('', seconecontroller::class);
Route::resource('sectionone', seconecontroller::class);
Route::resource('Gambar', seconecontroller::class);
Route::resource('genres', listgenrecontroller::class);
Route::resource('listgenre', listgenrecontroller::class);
Route::resource('Gambar', listgenrecontroller::class);
Route::resource('detailgenre', listgenrecontroller::class);

