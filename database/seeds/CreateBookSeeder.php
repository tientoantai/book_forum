<?php

use Illuminate\Database\Seeder;

class CreateBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('books')->truncate();

    	\DB::table('books')->insert([
    		[
	    		'title'     => 'Fifty Shades of Grey',
	            'author'    => 'E L James',
	            'price'     => '$5.99',
	            'publisher' => 'Vintage Books',
	            'genre'		=> 'Romance',
	            'image'     => 'https://images-na.ssl-images-amazon.com/images/I/51sIRjO84oL.jpg',
	        ],
	        [
	        	'title'     => 'The Hunger Games',
	            'author'    => 'Suzanne Collins',
	            'price'     => '$4.29',
	            'publisher' => 'Scholastic Press',
	            'genre'		=> 'Romance',
	            'image'     => 'https://images-na.ssl-images-amazon.com/images/I/41bOj-am1RL._SX331_BO1,204,203,200_.jpg',
	        ],
	        [
	        	'title'     => 'Catching Fire',
	            'author'    => 'Suzanne Collins',
	            'price'     => '$4.57',
	            'publisher' => 'Scholastic Press',
	            'genre'		=> 'Romance',
	            'image'     => 'https://images-na.ssl-images-amazon.com/images/I/51sdYzYGOuL._SX334_BO1,204,203,200_.jpg',
	        ],
	        [
	        	'title'     => 'The Last Lecture',
	            'author'    => 'Randy Pausch',
	            'price'     => '$6.31',
	            'publisher' => 'Hyperion',
	            'genre'		=> 'Romance',
	            'image'     => 'https://images-na.ssl-images-amazon.com/images/I/51hcvGYnnkL._SX353_BO1,204,203,200_.jpg',
	        ],
	        [
	        	'title'     => 'The Glass Castle',
	            'author'    => 'Jeannette Walls',
	            'price'     => '$7.24',
	            'publisher' => 'Scribner',
	            'genre'		=> 'Romance',
	            'image'     => 'https://images-na.ssl-images-amazon.com/images/I/41qFdmnyvxL._SX314_BO1,204,203,200_.jpg',
	        ],
	        [
	        	'title'     => 'The Fault in Our Stars',
	            'author'    => 'Veronica Roth',
	            'price'     => '$7.41',
	            'publisher' => 'Katherine Tegen Books',
	            'genre'		=> 'Romance',
	            'image'     => 'https://images-na.ssl-images-amazon.com/images/I/51dGX%2BodxcL._SX329_BO1,204,203,200_.jpg',
	        ],
	        [
	        	'title'     => 'Wonder',
	            'author'    => 'R. J. Palacio',
	            'price'     => '$7.24',
	            'publisher' => 'Knopf Books for Young Readers',
	            'genre'		=> 'Romance',
	            'image'     => 'https://images-na.ssl-images-amazon.com/images/I/41NzPGErMYL._SX328_BO1,204,203,200_.jpg',
	        ],
    	]);
    }
}
