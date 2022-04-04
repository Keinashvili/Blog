<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;

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
Auth::routes();

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contacted', [ContactController::class, 'send']);
//Posts Routes

Route::get('/blog', [PostController::class, 'index']);

Route::get('/add', [PostController::class, 'create']);

Route::post('/added', [PostController::class, 'store']);

Route::delete('/delete/{id}', [PostController::class, 'destroy']);

Route::put('/update/{id}', [PostController::class, 'update']);

Route::get('/edit/{id}', [PostController::class, 'edit']);

Route::get('/show/{id}', [PostController::class, 'show']);

