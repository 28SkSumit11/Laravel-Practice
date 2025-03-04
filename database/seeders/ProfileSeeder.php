<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\User;
use Faker\Factory as Faker;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $users = User::all();
        foreach($users as $user){
            Profile::create([
                'user_id' => $user->id,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address
            ]);
        }
    }
}
