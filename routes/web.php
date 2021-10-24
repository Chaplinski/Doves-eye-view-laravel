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
    return view('layouts/index');
});

Route::get('/about', function () {
    return view('layouts/about');
});

Route::get('/faq', function () {
    return view('layouts/faq');
});

Route::get('/contact', function () {
    return view('layouts/contact');
});

Route::get('/service', function () {
    return view('layouts/service');
});
