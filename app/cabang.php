<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    protected $table = 'cabang';
    protected $fillable = ['cabang'];

    public function data_pemasangan(){
		return $this->hasMany(data_pemasangan::class,'id_cabang');
	}
}