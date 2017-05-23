<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JenisPemasangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pemasangan', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('jenis_pemasangan',['Rumahan','Kantor','Pabrik']);
            $table->integer('Harga');
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
