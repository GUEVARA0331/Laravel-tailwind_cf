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

Route::get('/ratio', function () {
    return view('tailwind.ratio');
})->name('tailwind.ratio');

Route::get('/columns', function () {
    return view('tailwind.columns');
})->name('tailwind.columns');

Route::get('/display', function () {
    return view('tailwind.display');
})->name('tailwind.display');

Route::get('/tipografias', function () {
    return view('tailwind.tipografias');
})->name('tailwind.tipografias');

Route::get('/tipografias2', function () {
    return view('tailwind.tipografias2');
})->name('tailwind.tipografias2');

Route::get('/background', function () {
    return view('tailwind.background');
})->name('tailwind.background');

Route::get('/border', function () {
    return view('tailwind.border');
})->name('tailwind.border');
