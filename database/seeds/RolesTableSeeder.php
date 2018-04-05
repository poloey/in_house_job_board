<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('roles')->insert([
        [
          "name" => "admin",
          "display_name" => "admin",
          "description" => 'Admin',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
          "name" => "student",
          "display_name" => "Student",
          "description" => 'Student',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
          "name" => "teacher",
          "display_name" => "Teacher",
          "description" => 'Teacher',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
          "name" => "hr",
          "display_name" => "HR professional",
          "description" => 'HR professional',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],

        ]);
    }
}
