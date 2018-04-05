<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach(range(1, 20) as $index) {
        DB::table('people')->insert([
            'user_id' => $index,
            'slug' => str_slug($faker->name),
            'gender' => 1,
            'first_name' => $faker->firstname,
            'last_name' => $faker->lastname,
            'city' => $faker->city,
            'avatar' =>  'public/defaults/avatars/male.png',
            'country' => $faker->country,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ]);
      }
    }
}
