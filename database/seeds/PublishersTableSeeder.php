<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->truncate();
        DB::table('publishers')->insert(
            [
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
            ]
        );
    }
}
