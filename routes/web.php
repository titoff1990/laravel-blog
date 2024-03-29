<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;



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
    return view('index');
});

Route::get('/about', [PageController::class, 'about']);

Route::resource('articles', ArticleController::class);

Route::get('/home', function() {
    return view('home');
});

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
})->name('logout');

//защищенные маршруты

Route::get('/home', function () {
    return view('home');
})->middleware(['verified']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
