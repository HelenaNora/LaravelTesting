<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show(){
        return view('welcome');
    }
    public function login(){
        validator(request()->all(),[
            'email'=>['required','email'],
            'password'=>['required']
        ])->validate();

        if(auth()->attempt(request()->only(['email','password']))){
            return redirect('/dashboard');
        }
        return redirect()->back()->withErrors(['email'=>'Invalid Credentials!']);
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
    
};