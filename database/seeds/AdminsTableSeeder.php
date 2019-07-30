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
            'username' => 'jason',
            'email' => 'jklsh0371@gmail.com',
            'password' =>'jklsh2009',
            'title' => 'chief',
            'level' => '2',
        ]);
    }
}

