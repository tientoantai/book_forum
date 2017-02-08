<?php

use Illuminate\Database\Seeder;
use Illuminate\Contracts\Hashing\Hasher;

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
    			'password' => Hash::make('thaodoremon'),
    		],
    		[
    			'username' => 'lawliet',
    			'password' => Hash::make('1'),
    		],
    	]);
    }
}
