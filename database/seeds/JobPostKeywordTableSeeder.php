<?php

use Illuminate\Database\Seeder;

class JobPostKeywordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      foreach(range(1, 20) as $index) {
        DB::table('job_post_keyword')->insert([
            [
              'job_post_id' => $index,
              'keyword_id' => $index > 12 ? $index - 10 : $index
            ],
            [
              'job_post_id' => $index,
              'keyword_id' => $index > 12 ? $index - 11 : $index + 1
            ],
            [
              'job_post_id' => $index,
              'keyword_id' => $index > 12 ? $index - 12 : $index + 2
            ]
          ]);
      }
    }
}
