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
        $this->call('DepartementTableSeeder');
        $this->call('AmanahTableSeeder');

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

class DepartementTableSeeder extends Seeder{
    public function run(){
      DB::table('departement')->insert([
        'nama_departement' =>'Keuangan',
        'kode_departement' => 'K001',
        ]);

      }
}

class AmanahTableSeeder extends Seeder{
public function run(){
  DB::table('amanah')->insert([
    'nama_amanah' =>' amanah 1',
    'tunjangan' => '2000000',
    ]);
    }
}
