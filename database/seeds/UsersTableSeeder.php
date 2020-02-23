<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['username'=>'preciousaang', 'first_name'=>'Precious', 'role_id'=>1, 'last_name'=>'Ibeagi', 'email'=>'preciousaang@mail.com', 'password'=>bcrypt('albert')]
        );
    }
}
