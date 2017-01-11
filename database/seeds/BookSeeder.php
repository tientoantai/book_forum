<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();
    	DB::table('books')->insert([
            'title'     => 'History',
            'author'    => 'L',
            'price'     =>30,
            'publisher' => 'Giaoduc',
            'image'     => 'https://www.pinterest.com/pin/391742867571469416/',
        ]);
    }
}
