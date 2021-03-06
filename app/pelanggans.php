<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class pelanggans extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 
    protected $fillable = [
        'Nama','Alamat','No_KTP', 'Nomor_Telepon','id_pengguna',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function User(){
    	return $this->belongsTo(User::class);
	}
	
	
	
}
