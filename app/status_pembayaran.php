<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status_pembayaran extends Model
{
    protected $table = 'status_pembayaran';
    protected $fillable = ['status'];

    public function data_pemasangan(){
		return $this->hasOne(data_pemasangan::class,'id_status');
	}
}