<?php

use App\Models\Category;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

// halaman post buku
Route::get('/posts', [PostController::class, 'index']);
// Halaman Single Post
Route::get('/post/{post:slug}', [PostController::class, 'show']);

//Halaman info
Route::get('/info', function () {
    return view('information.information');
});

// Halaman Categories
Route::get('/categories', function () {
    return view('categories', [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()  
    ]);
});



Route::get('/dashboard', function () {
    return view('dashboard.index');
});


// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Auth::routes();





Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Google Route
Route::get('/GoogleLogin', [LoginController::class, 'GoogleLogin']);
Route::get('/auth/google/callback', ['Auth\LoginController@googleHandle']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboard/profile', function(){
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');

// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');
