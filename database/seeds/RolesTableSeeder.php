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
                'title'=>'tut',
                'full_name'=>'Tutor',
                'description'=>'A teacher of courses.'
            ],
        ]);
    }
}
