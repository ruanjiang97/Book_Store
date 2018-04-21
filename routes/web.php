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
    return view('pages.home');
});

Route::get('/result-search', function () {
    return view('pages.result_search');
})->name('result-search');

Route::get('/cart', function () {
    return view('pages.carts');
})->name('cart');

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('book_detail', function () {
    return view('pages.book_detail');
})->name('book_detail');
Route::get('user_information',function(){
    return view('pages.user_information');
})->name('user_information');
