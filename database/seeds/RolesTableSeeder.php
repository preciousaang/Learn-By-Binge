<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'title'=>'admin',
                'full_name'=>'Administrator',
                'description'=>'The one with most rights.'
            ],
            [
                'title'=>'inst',
                'full_name'=>'Instructor',
                'description'=>'A teacher of courses.'
            ],
            [
                'title'=>'stud',
                'full_name'=>'Student',
                'description'=>'A student and learner of courses.'
            ]
        ]);
    }
}
