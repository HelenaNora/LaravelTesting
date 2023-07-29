<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;



use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(){
        return view('dashboard',[
            'user'=>auth()->user()
        ]);
    }
};