<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('role_user')->insert([
          "user_id" => 1,
          "role_id" => 4 //for time being. I supposed to make it 1
        ]);
      foreach (range(2, 10) as $index) {
        DB::table('role_user')->insert([
            "user_id" => $index,
            "role_id" => 2
          ]);
      }
      foreach (range(11, 20) as $index) {
        DB::table('role_user')->insert([
            "user_id" => $index,
            "role_id" => 4
          ]);
      }
    }
}
