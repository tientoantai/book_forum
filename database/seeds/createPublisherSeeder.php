<?php

use Illuminate\Database\Seeder;

class createnameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('names')->truncate();

    	\DB::table('names')->insert([
    		[
	            'name' => 'Vintage Books',
	            'address'		=> 'London',
	        ],
	        [
	            'name' => 'Scholastic Press',
	            'address'		=> 'America',
	        ],
	        [
	            'name' => 'Hyperion',
	            'address'		=> 'China',
	        ],
	        [
	            'name' => 'Scribner',
	            'address'		=> 'Vietnam',
	        ],
	        [
	            'name' => 'Katherine Tegen Books',
	            'address'		=> 'Paris',
	        ],
	        [
	            'name' => 'Knopf Books for Young Readers',
	            'address'		=> 'London',
	        ],
    	]);
    }
}
