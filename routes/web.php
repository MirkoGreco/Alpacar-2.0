<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CarDetailsController;
use App\Http\Controllers\ReviewController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->middleware(['auth'])->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');



Route::get("posts/{id}/details/create", function ($id) {
    return view("details.create", ["id" => $id]);
})->middleware(['auth'])->name('details.create');



Route::get('posts/{id}/images/create', function ($id) {
    return view("images.create", ["id" => $id]);
})->middleware(['auth'])->name('images.create');

Route::post('/details/store', [CarDetailsController::class, 'store'])->name('details.store');



Route::resource('reviews', ReviewController::class);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
