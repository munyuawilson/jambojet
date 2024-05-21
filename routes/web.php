<?php

use App\Http\Controllers\SearchFlight;
use App\Http\Controllers\SearchFlightController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::post('/search-flight','App\Http\Controllers\SearchFlightController@search')->name('search-flight');

