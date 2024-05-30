<?php


use App\Http\Controllers\SearchFlightController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;


Route::get('/', function () {
    return view('index');
});

Route::post('/search-flight','App\Http\Controllers\SearchFlightController@search')->name('search-flight');
Route::get('login',function () {
    return view('login');})->name('login');

Route::post('/login-form','App\Http\Controllers\LoginController@login')->name('login-form');

Route::get('/signup',function(){
    return view('signup');
})->name('signup');
Route::post('/signup-form','App\Http\Controllers\SignUpController@signUp')->name('signup-form');

