<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
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
Route::get('/', [SiteController::class, 'home']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/faq', [SiteController::class, 'faq']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/service', [SiteController::class, 'service']);

Route::get('/thankyou', [SiteController::class, 'thankYouGet']);
Route::post('/thankyou', [SiteController::class, 'thankYouPost']);


Route::get('/highlights', [SiteController::class, 'highlights']);


Route::get('/blog', [SiteController::class, 'blog']);
Route::get('/blog/futureofweddings', [BlogController::class, 'futureOfWeddings']);
Route::get('/blog/sendinginvites', [BlogController::class, 'sendingInvites']);
Route::get('/blog/whotoinvite', [BlogController::class, 'whoToInvite']);
Route::get('/blog/sevenreasons', [BlogController::class, 'sevenReasons']);
Route::get('/blog/usandthem', [BlogController::class, 'usAndThem']);

// This always needs to be the last function call in this file. Otherwise it breaks routing.
Route::get('/{url}', function ($url) {
    return (new SiteController)->client($url);
});


