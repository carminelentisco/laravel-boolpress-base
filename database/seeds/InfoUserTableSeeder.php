<?php

use Illuminate\Database\Seeder;
use App\User;
use App\InfoUser;
use Faker\Generator as Faker;

class InfoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            $newInfo = new InfoUser();
            
            $newInfo->user_id = $user->id;
            $newInfo->phone = $faker->phonenumber();
            $newInfo->address = $faker->streetAddress();
            $newInfo->avatar = $faker->imageUrl(400,400);

            $newInfo->save();
        }
    }
}
