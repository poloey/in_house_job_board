<?php

use Illuminate\Database\Seeder;

class UserKeywordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      foreach(range(2, 20) as $index) {
        DB::table('user_keyword')->insert([
            [
              'user_id' => $index,
              'keyword_id' => $index > 12 ? $index - 10 : $index
            ],
            [
              'user_id' => $index,
              'keyword_id' => $index > 12 ? $index - 11 : $index + 1
            ],
            [
              'user_id' => $index,
              'keyword_id' => $index > 12 ? $index - 12 : $index + 2
            ]
          ]);
      }
    }
}
