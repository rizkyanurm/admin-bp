<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKarir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karir', function (Blueprint $table) {
            $table->increments('id_karir');
            $table->string('golongan');
            $table->string('pangkat');
            $table->integer('poin kaizen');
            $table->integer('poin kredit');
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
        Schema::drop('karir');
    }
}
