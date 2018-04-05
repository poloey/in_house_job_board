<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach(range(2, 10) as $index) {
        DB::table('courses')->insert([
            [
              'user_id' => $index,
              'title' => $faker->sentence,
              'description' => $faker->paragraph(2),
              'duration' =>  rand (2, 12) . ' months',
              'started_at' => Carbon::parse($faker->date)->format('Y-m-d H:i:s'),
              'ended_at' =>  Carbon::parse($faker->date)->format('Y-m-d H:i:s'),
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'user_id' => $index,
              'title' => $faker->sentence,
              'description' => $faker->paragraph(3),
              'duration' => rand(1, 12) .' months',
              'started_at' => Carbon::parse($faker->date)->format('Y-m-d H:i:s'),
              'ended_at' =>  Carbon::parse($faker->date)->format('Y-m-d H:i:s'),
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
          ]);
      }
    }
}
