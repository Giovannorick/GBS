<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Jojo Bizzare Adventure: Phantom Blood',
            'author' => 'Hirohiko Araki',
            'year' => 1995,
            'synopsis' => 'This is a synopsis details',
            'image' => 'a1.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Sherlock Holmes Adventure: Art in the Blood',
            'author' => 'Bonnie Macbird',
            'year' => 1990,
            'synopsis' => 'This is a synopsis details',
            'image' => 'a2.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 4,
            'title' => 'The Odyssey adventure: The Land of the Dead',
            'author' => 'Homer',
            'year' => 2022,
            'synopsis' => 'This is a synopsis details',
            'image' => 'a3.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Thorn',
            'author' => 'Intisar Khanani',
            'year' => 2018,
            'synopsis' => 'This is a synopsis details',
            'image' => 'a4.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Nightbooks',
            'author' => 'J.A White',
            'year' => 2002,
            'synopsis' => 'This is a synopsis details',
            'image' => 'a5.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Northwood',
            'author' => 'Brian Falkner',
            'year' => 2015,
            'synopsis' => 'This is a synopsis details',
            'image' => 'a6.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 4,
            'title' => 'The Wingfeather Saga',
            'author' => 'Albert Morningsten',
            'year' => 2018,
            'synopsis' => 'This is a synopsis details',
            'image' => 'a7.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Abracadabra',
            'author' => 'Geean MR',
            'year' => 2016,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fan1.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'The Battle for the Fae King Throne',
            'author' => 'Trif Premade',
            'year' => 1995,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fan2.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Silver Moon',
            'author' => 'Jennifer Minton',
            'year' => 2017,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fan3.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 4,
            'title' => 'The Crimes of Steamfield',
            'author' => 'Alberto Rey',
            'year' => 2020,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fan4.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Wilder Girls',
            'author' => 'Rory Power',
            'year' => 2019,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fan5.jpg',
        ]);

        //14
        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'The Theft of Sunlight',
            'author' => 'Intisar Khanani',
            'year' => 2021,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fan6.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'A Wicked Magic',
            'author' => 'Sasha Laurens',
            'year' => 2017,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fic1.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 4,
            'title' => 'The Storm Crow',
            'author' => 'Kalyn Josephson',
            'year' => 2016,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fic2.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Anya and The Dragon',
            'author' => 'Sofiya Pasternack',
            'year' => 2012,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fic3.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'The Upstairs Room',
            'author' => 'Kate Murray-Browne',
            'year' => 2019,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fic4.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Tess of The Road',
            'author' => 'Rachel Hartman',
            'year' => 2018,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fic5.jpg',
        ]);

        //20
        DB::table('books')->insert([
            'publisher_id' => 4,
            'title' => 'Remarkables',
            'author' => 'Margaret Peterson Haddix',
            'year' => 2016,
            'synopsis' => 'This is a synopsis details',
            'image' => 'fic6.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'The Secrets of Flowers',
            'author' => 'Lorainne Knowles',
            'year' => 2014,
            'synopsis' => 'This is a synopsis details',
            'image' => 'r1.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Girl, Serpent, Thorn',
            'author' => 'Mellisa Bashardoust',
            'year' => 2019,
            'synopsis' => 'This is a synopsis details',
            'image' => 'r2.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'You Have Reached Sam',
            'author' => 'Dustin Hao',
            'year' => 2018,
            'synopsis' => 'This is a synopsis details',
            'image' => 'r3.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 4,
            'title' => 'The Gravity of Us',
            'author' => 'Phil Stamper',
            'year' => 2019,
            'synopsis' => 'This is a synopsis details',
            'image' => 'r4.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'I Will Be There',
            'author' => 'Holly Goldberg Sloan',
            'year' => 2015,
            'synopsis' => 'This is a synopsis details',
            'image' => 'r5.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Some Girls Do',
            'author' => 'Jennifer Dugan',
            'year' => 2019,
            'synopsis' => 'This is a synopsis details',
            'image' => 'r6.jpg',
        ]);

        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'XOXO',
            'author' => 'Axie Oh',
            'year' => 2018,
            'synopsis' => 'This is a synopsis details',
            'image' => 'r7.jpg',
        ]);

        //28
        DB::table('books')->insert([
            'publisher_id' => 4,
            'title' => 'The Dating Plan',
            'author' => 'Sara Desai',
            'year' => 2012,
            'synopsis' => 'This is a synopsis details',
            'image' => 'r8.jpg',
        ]);
    }
}
