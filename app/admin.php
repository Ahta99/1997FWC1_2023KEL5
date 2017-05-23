<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['nama','alamat','no_hp','id_pengguna'];

    public function data_pemasangan(){
		return $this->hasMany(data_pemasangan::class,'id_admin');
	}
}