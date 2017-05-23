<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pelanggans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('No_KTP');
			$table->string('Nomor_Telepon');
			$table->integer('id_pengguna',false,true);
			$table->foreign('id_pengguna')->references('id')->on('users');
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
        //
    }
}
