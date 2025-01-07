<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'Walker Books',
            'address' => 'B25 Walker Street',
            'phone' => '08345345234231',
            'email' => 'walkerbooks@gmail.com',
            'image' => 'p1.jpg',
        ]);

        DB::table('publishers')->insert([
            'name' => 'Particular Books',
            'address' => 'John Baker Street',
            'phone' => '085232873512',
            'email' => 'particularbooks@gmail.com',
            'image' => 'p2.jpg',
        ]);


        DB::table('publishers')->insert([
            'name' => 'Harper Collins',
            'address' => 'Connor Gregorian Street',
            'phone' => '0873473742121',
            'email' => 'harpercollins@gmail.com',
            'image' => 'p3.jpg',
        ]);

        DB::table('publishers')->insert([
            'name' => 'Seal Press',
            'address' => 'Raylight Kenny Street',
            'phone' => '0821321344329',
            'email' => 'sealpress@gmail.com',
            'image' => 'p4.jpg',
        ]);
    }
}
