<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admins')->insert([
            [
            'username' => 'jason',
            'email' => 'jklsh0371@gmail.com',
            'password' =>bcrypt('jklsh2009'),
            'title' => 'chief',
            'level' => '2',
            ],
            [
            'username' => 'admin',
            'email' => '123@gmail.com',
            'password' =>bcrypt('pbefadmin'),
            'title' => 'Super Admin',
            'level' => '1',
            ],
        ]);
    }
}

