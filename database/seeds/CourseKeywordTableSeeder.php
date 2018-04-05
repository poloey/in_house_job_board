<?php

use Illuminate\Database\Seeder;

class CourseKeywordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      foreach(range(1, 18) as $index) {
        DB::table('course_keyword')->insert([
            [
              'course_id' => $index,
              'keyword_id' => $index > 12 ? $index - 10 : $index
            ],
            [
              'course_id' => $index,
              'keyword_id' => $index > 12 ? $index - 11 : $index + 1
            ],
            [
              'course_id' => $index,
              'keyword_id' => $index > 12 ? $index - 12 : $index + 2
            ]
          ]);
      }
    }
}
