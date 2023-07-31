<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login','AuthController@login');
Route::post('/logout','AuthController@logout')->middleware('auth:sanctum');
Route::get('/dashboard','DashboardController')->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->post('/posts',function(){
    \Illuminate\Support\Facades\Gate::authorize('create',\App\Models\Post::class);
    return 'OK';
});


Route::middleware('auth:sanctum')->get('/posts/{post}',function(\App\Models\Post $post){
    // if(\Illuminate\Support\Facades\Gate::denies('view-post',$post)){
    //     abort(403);
    // }

    \Illuminate\Support\Facades\Gate::authorize('view',$post);
    return $post;
});