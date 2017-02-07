<?php

use Illuminate\Database\Seeder;

class CredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('credentials')->truncate();

    	\DB::table('credentials')->insert([
    		[
    			'username' => 'thaodoremon',
    			'password' => 'thaodoremon',
    		],
    		[
    			'username' => 'lawliet',
    			'password' => '1',
    		],
    	]);
    }
}
