<?php

use Illuminate\Support\Facades\Route;



// Route::get('about-laravel',function(){
//     return  response()->download(public_path('about-us.txt'));
// });

Route::get('about-laravel','AboutUsController');

Route::get('/', function () {
    return view('welcome');
});
