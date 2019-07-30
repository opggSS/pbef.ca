<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('news')->insert([
            'title' => 'my_title',
            'description' => 'this is mh description',
            'image' => 'sdfsdfsf',
            'featured_img' => 'sdfsdfssdfsf',
            'datetime' => '192123123'    
        ]);
    }
}
