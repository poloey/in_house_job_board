<?php

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        'helal',
        'parvez',
        'sujon',
        'ashraf',
        'akbar',
        'nilufar',
        'nila',
        'ashiq',
        'faysal',
        'yousuf',
        'fahim',
        'ovijit',
        'robin',
        'piyas',
        'ashraful',
        'rajon',
        'faria',
        'prity',
        'tasnuva',
        'zahirul'
        ];

      $faker = Faker::create();
      foreach($users as $user) {
        DB::table('users')->insert([
          [
            'name' => $user,
            'email' => $user . '@gmail.com',
            'password' => bcrypt('secret'),
            'api_token' => str_random(60),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ]
        ]);
    }
    }
}
