<?php


use App\Http\Controllers\SearchFlightController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('index');
});

Route::post('/search-flight','App\Http\Controllers\SearchFlightController@search')->name('search-flight');
Route::get('login',function () {
    return view('login');});

Route::post('/login-form','App\Http\Controllers\LoginController@login')->name('login-form');