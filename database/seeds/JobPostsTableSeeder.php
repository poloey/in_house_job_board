<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class JobPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker::create();
      foreach(range(11, 20) as $index) {
        DB::table('job_posts')->insert([
            [
              'title' => $faker->sentence,
              'slug' => str_slug($faker->sentence),
              'user_id' => $index,
              'description' => $faker->paragraph(4),
              'short_description' => $faker->paragraph,
              'location' => $faker->address,
              'vacancy' => rand(1, 5),
              'experience' => rand(1, 5) .' years',
              'mobile' => $faker->phonenumber,
              'email' => $faker->email,
              'deadline' => Carbon::now()->addWeeks(4)->format('Y-m-d'),
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'title' => $faker->sentence,
              'slug' => str_slug($faker->sentence),
              'user_id' => $index,
              'description' => $faker->paragraph(4),
              'short_description' => $faker->paragraph,
              'location' => $faker->address,
              'vacancy' => rand(1, 5),
              'experience' => rand(1, 5) . ' years',
              'mobile' => $faker->phonenumber,
              'email' => $faker->email,
              'deadline' => Carbon::now()->addWeeks(4)->format('Y-m-d'),
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
          ]);
      }
           //
    }
}
