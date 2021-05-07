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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::resources([
//     '/posts' => PostController::class,
//     '/home' => HomeController::class,
//     '/login' => LoginController::class,
// ]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();
Route::get('/home', function () {
    return redirect('posts');
});

Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('comments', 'App\Http\Controllers\CommentController');