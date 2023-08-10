<?php

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use App\Http\Controllers\AdminCategoryController;


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
    return view('home', [
        "title" => "Home",
        "imgPro" => "pro.jpg",
        "imgPer" => "prib.jpg",
        "imgWeb" => "web.jpg",
        "active" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Syahrul Ridho R. Rauf",
        "email" => "syahrulrrauf@gmail.com",
        "image" => "rimuru.jpg",
        "active" => "About"
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "active" => "contact",
        "active" => "Contact"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view ('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        "active" => "Category"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');