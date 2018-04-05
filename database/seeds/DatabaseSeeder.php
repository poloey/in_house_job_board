<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(JobPostsTableSeeder::class);
        $this->call(KeywordsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(JobPostKeywordTableSeeder::class);
        $this->call(UserKeywordTableSeeder::class);
        $this->call(CourseKeywordTableSeeder::class);
    }
}
