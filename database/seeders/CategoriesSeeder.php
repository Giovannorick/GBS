<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Adventure',
        ]);

        DB::table('categories')->insert([
            'name' => 'Fantasy',
        ]);

        DB::table('categories')->insert([
            'name' => 'Fiction',
        ]);

        DB::table('categories')->insert([
            'name' => 'Romance',
        ]);
    }
}
