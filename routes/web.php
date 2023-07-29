<?php

use Illuminate\Support\Facades\Route;



// Route::get('about-laravel',function(){
//     return  response()->download(public_path('about-us.txt'));
// });

// Route::get('about-laravel','AboutUsController');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
//     // $user=\App\Models\User::create([
//     //     'name'=>'HelenaNora',
//     //     'email'=>'helenanora@laravel.com',
//     //     'password'=>\Illuminate\Support\Facades\Hash::make('asdasdasd')
//     // ]);

//     // return $user;
    
//     // dump(\App\Models\User::find(2));
// });
Route::delete('/posts/{post}','PostController@destory');

Route::post('/posts/{post}','PostController@update');
Route::get('/posts/{post}','PostController@edit');

Route::post('/create','PostController@store');
Route::get('/create','PostController@create');

Route::get('/','PostController@list');



Route::get('/dashboard','DashboardController')->middleware('auth');

Route::get('/logout','AuthController@logout');

Route::post('/login','AuthController@login');

Route::get('/','AuthController@show')->name('login');