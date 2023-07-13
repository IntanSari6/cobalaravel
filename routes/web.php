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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ["name" => "Intan", "Email" => "intan@gmail.com", "image" => "rh.jfif"]);
});

Route::get('/blog', function () {
    return view('post');
});