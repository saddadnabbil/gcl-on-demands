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



Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('events-webinars.index');
    })->name('events-webinars');

    Route::get('/on-demands', function () {
        return view('on-demands.index');
    })->name('on-demands');

    Route::get('/popular', function () {
        return view('popular.index');
    })->name('popular');

    Route::get('/single-on-demand', function () {
        return view('single-on-demand');
    })->name('single-on-demand');
});