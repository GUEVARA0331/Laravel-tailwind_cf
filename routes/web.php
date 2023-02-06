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

Route::get('/grids', function () {
    return view('tailwind.grids');
})->name('tailwind.grids');

Route::get('/display', function () {
    return view('tailwind.display');
})->name('tailwind.display');
