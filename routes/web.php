<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostsController;

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
    return view('welcome');
});

Route::get('/cats/{id}/{name}', function($id, $name){
    return "我是第" . $id . "號的貓：" . $name;
});

// Laravel8 以前舊版本適用
// Route::get('/about', 'WelcomeController@about');
Route::get('/about', [WelcomeController::class, 'about']);

Route::resource('posts', PostsController::class)->only(['index', 'show']);