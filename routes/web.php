<?php

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('home');
});


Route::get('/detail', function () {
    return view('detailbuku');
});

Route::get('/info', function () {
    return view('information.information');
});
Route::get('/categories', function () {
    return view('categories');
});

Route::get('/register', function () {
    return view('register.index');
});

Route::get('/login', function () {
    return view('login.index');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/listbook', function () {
    return view('listbook');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});
