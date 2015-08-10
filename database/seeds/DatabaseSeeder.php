<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Bimaproteksi\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');

        // Model::reguard();
    }
}

/**
* 
*/
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        $users = [
            ['name'=>'Hanif Burhanudin','email'=>'boerhan.jogja@gmail.com','username'=>'oemah','password'=>Hash::make('admin')]
        ];

        foreach ($users as $val) {
            User::create($val);
        }
    }
}