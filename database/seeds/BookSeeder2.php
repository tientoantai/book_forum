<?php

use Illuminate\Database\Seeder;

class BookSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('books')->insert([
            'title'     => 'Vietnam History',
            'author'    => 'L',
            'price'     =>30,
            'publisher' => 'Kim Dong',
            'image'     => 'https://www.pinterest.com/pin/391742867571469416/',
        ]);
    }
}
