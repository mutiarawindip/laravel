<?php

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
Route::get('about', function () { //sesuai a href
    return view('about');	//sesuai nama file di view
});
Route::get('pesan', function () { //sesuai a href
    return view('pesan');	//sesuai nama file di view
});
Route::post('pesan/kirim', function () { //sesuai a href
    return view('kirim');	//sesuai nama file di view
});
Route::get('template', function () { //sesuai a href
    return view('layouts.master');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('coba1', function () { //sesuai a href
    return view('coba1');	//sesuai nama file di view
});
Route::get('coba2', function () { //sesuai a href
    return view('coba2');	//sesuai nama file di view
});


