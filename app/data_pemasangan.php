<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_pemasangan extends Model
{
    protected $table='data_pemasangan';
	protected $fillable=['id_user','id_pemasangan','id_cabang','id_status','id_admin'];

	public function User(){
    	return $this->belongsTo(User::class);
	}
	
	public function jenis_pemasangan(){
    	return $this->belongsTo(jenis_pemasangan::class);
	}
	
	public function cabang(){
    	return $this->belongsTo(cabang::class);
	}
	
	public function status_pembayaran(){
    	return $this->belongsTo(status_pembayaran::class);
	}
	
	public function admin(){
    	return $this->belongsTo(admin::class);
	}
}
