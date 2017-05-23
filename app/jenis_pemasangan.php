<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_pemasangan extends Model
{
    protected $table='jenis_pemasangan';
	protected $fillable=['Tipe','Harga'];

	public function data_pemasangan(){
		return $this->hasOne(data_pemasangan::class,'id_pemasangan');
	}
}
