<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user1=\App\Models\User::create([
        //     'name'=>'SiThu',
        //     'email'=>'sithu@laravel.com',
        //     'password'=>'sithu123',
        //    ]);
        //    $user2=\App\Models\User::create([
        //     'name'=>'MoeMoe',
        //     'email'=>'moe@laravel.com',
        //     'password'=>'moe123',
        //    ]);
    
        //    Post::create([
        //     'user_id'=>$user1->id,
        //     'content'=>"I am laravel beginner",
        //    ]);

        //    Post::create([
        //     'user_id'=>$user2->id,
        //     'content'=>"I am Laravel developer",
        //    ]);

        // \App\Models\User::create([
        //     'name'=>'Helena Nora',
        //     'email'=>'helenanora@laravel.com',
        //     'password'=>Hash::make('nora123')
        // ]);
        // \App\Models\User::create([
        //     'name'=>'James',
        //     'email'=>'james@laravel.com',
        //     'password'=>Hash::make('passcode')
        // ]);
        \App\Models\User::create([
            'name'=>'Helena',
            'email'=>'helena@laravel.com',
            'password'=>Hash::make('helena123')
        ]);
        \App\Models\User::create([
            'name'=>'Smith',
            'email'=>'smith@laravel.com',
            'password'=>Hash::make('smith123')
        ]);
    }
}
