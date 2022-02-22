<?php

use App\Models\Title;
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
    return view('base', ['content' => new Title('index')]);
});

Route::get('home', function () {
    return view('base', ['content' => new Title('index')]);
});

Route::get('about', function () {
    return view('base', ['content' => new Title('about')]);
});

Route::get('blog', function () {
    return view('base', ['content' => new Title('blog')]);
});

Route::get('single', function () {
    return view('base', ['content' => new Title('single')]);
});

Route::get('sidebar-left', function () {
    return view('base', ['content' => new Title('sidebar-left')]);
});


Route::get('sidebar-right', function () {
    return view('base', ['content' => new Title('sidebar-right')]);
});
