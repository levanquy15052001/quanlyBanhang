<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Máy Tính'
        ]);
        DB::table('categories')->insert([
            'name' => 'Gear'
        ]);
        DB::table('categories')->insert([
            'name' => 'Màn Hình'
        ]);
    }
}
