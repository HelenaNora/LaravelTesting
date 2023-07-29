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
        $user1=\App\Models\User::create([
            'name'=>'SiThu',
            'email'=>'sithu@laravel.com',
            'password'=>'sithu123',
           ]);
           $user2=\App\Models\User::create([
            'name'=>'MoeMoe',
            'email'=>'moe@laravel.com',
            'password'=>'moe123',
           ]);
    
           Post::create([
            'user_id'=>$user1->id,
            'content'=>"I am laravel beginner",
           ]);

           Post::create([
            'user_id'=>$user2->id,
            'content'=>"I am Laravel developer",
           ]);
    }
}
