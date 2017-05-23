<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserLayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_layanan', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('id_user',false,true);
			$table->foreign('id_user')->references('id')->on('users');
			$table->integer('id_layanan',false,true);
            $table->foreign('id_layanan')->references('id')->on('layanan');
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
