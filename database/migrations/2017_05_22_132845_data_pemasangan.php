<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataPemasangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemasangan', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('id_user',false,true);
			$table->foreign('id_user')->references('id')->on('users');
			$table->integer('id_pemasangan',false,true);
			$table->foreign('id_pemasangan')->references('id')->on('jenis_pemasangan');
			$table->integer('id_cabang',false,true);
            $table->foreign('id_cabang')->references('id')->on('cabang');
			$table->integer('id_status',false,true);
            $table->foreign('id_status')->references('id')->on('status_pembayaran');
			$table->integer('id_admin',false,true);
			$table->foreign('id_admin')->references('id')->on('admin');
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
