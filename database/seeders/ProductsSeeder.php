<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Laptop Asus', 
            'description' => 'Laptop Asus description',
            'price' => 1100,
            'image' => 'asus-expertbook-b1400ceae-ek3725.jpg',
            'category_id' => 1,
            'brand_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Laptop Asus', 
            'description' => 'Laptop Asus description',
            'price' => 1100,
            'image' => 'asus-expertbook-b1400ceae-ek3725.jpg',
            'category_id' => 1,
            'brand_id' => 1
        ]);
    }
}
