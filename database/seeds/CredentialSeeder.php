<?php

use Illuminate\Database\Seeder;
use App\BookForum\AuthenticatorService\Credential;

class CredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credentials')->truncate();
        DB::table('credentials')->insert([
            'username' => 'Jenny',
            'password' => '123456',
        ]);
        $credential1 = new Credential(['username'=>'thaodoremon', 'password'=>'thaodoremon']);
//        $credential1->setAttribute('username', 'thaodoremon');
//        $credential1->setAttribute('password', 'thaodoremon');
        $credential1->save();

    }
}
