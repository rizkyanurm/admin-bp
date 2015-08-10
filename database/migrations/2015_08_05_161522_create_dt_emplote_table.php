<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtEmploteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dt_employe', function (Blueprint $table) {
            $table->increments('id_dt_employe');
            $table->integer('id_employe',20);
            $table->integer('id_departement',20);
            $table->integer('id_pangkat',20);
            $table->integer('id_jabatan',20);
            $table->integer('nik',20);
            $table->date('mulai_kerja');
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
        Schema::drop('dt_employe');
    }
}
