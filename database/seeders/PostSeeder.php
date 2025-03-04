<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $users = User::all();

        foreach($users as $user){
            for($i = 0; $i < 5; $i++){
                Post::create([
                    'user_id' => $user->id,
                    'title' => $faker->title,
                    'content' => $faker->paragraph
                ]);
            }
        }
    }
}
