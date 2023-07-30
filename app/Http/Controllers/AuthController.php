<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function show(){
    //     return view('welcome');
    // }
    public function login(){
        validator(request()->all(),[
            'email'=>['required','email'],
            'password'=>['required']
        ])->validate();

        // if(auth()->attempt(
        //     request()->only(['email','password']),
        //     request()->filled('remember')
        // )){
        //     return redirect('/dashboard');
        // }
        // return redirect()->back()->withErrors(['email'=>'Invalid Credentials!']);

        $user=User::where('email',request('email'))->first();
        if(Hash::check(request('password'),$user->getAuthPassword())){
            return[
                'token'=>$user->createToken(time())->plainTextToken
            ];
        }
    }
    public function logout(){
        // auth()->logout();
        // return redirect('/');

        auth()->user()->currentAccessToken()->delete();
    }
    
};