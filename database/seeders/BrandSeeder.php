<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('brands')->insert([
            'name' => 'Asus',
            'image' => 'logo-asus.jpg',
        ]);
        \DB::table('brands')->insert([
            'name' => 'Hp',
            'image' => 'Logo_Hp.jpeg',
        ]);
        \DB::table('brands')->insert([
            'name' => 'MSI',
            'image' => 'MSI-Logo.png',
        ]);
        \DB::table('brands')->insert([
            'name' => 'Acer',
            'image' => 'Acer-Logo.png',
        ]);
    }
}
