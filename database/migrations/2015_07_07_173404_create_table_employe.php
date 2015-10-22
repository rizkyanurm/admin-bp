<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmploye extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe', function (Blueprint $table) {
            $table->increments('id_employe');
            $table->string('nama',60);
            $table->string('email',100)->unique();
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', array('Laki-laki', 'Perempuan'));
            $table->string('alamat',100);
            $table->string('agama',20);
            $table->string('no_telp',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employe');
    }
}
