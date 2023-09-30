<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            'image' => 'slide1.jpeg',
        ]);
        DB::table('slides')->insert([
            'image' => 'slide2.jpg',
        ]);
        DB::table('slides')->insert([
            'image' => 'slide3.jpeg',
        ]);
    }
}
