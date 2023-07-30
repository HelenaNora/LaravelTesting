<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login','AuthController@login');
Route::post('/logout','AuthController@logout')->middleware('auth:sanctum');
Route::get('/dashboard','DashboardController')->middleware('auth:sanctum');