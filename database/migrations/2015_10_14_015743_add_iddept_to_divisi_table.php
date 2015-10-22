<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIddeptToDivisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('divisi', function (Blueprint $table) {
            $table->integer('id_departement')->unsigned();

            $table->foreign('id_departement')->references('id_departement')->on('departement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('divisi', function (Blueprint $table) {
            //
        });
    }
}
