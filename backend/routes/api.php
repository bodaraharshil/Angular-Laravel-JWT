<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::post('login', 'App\Http\Controllers\auth\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\auth\AuthController@signup');
    Route::post('logout', 'App\Http\Controllers\auth\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\auth\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\auth\AuthController@me');

});
