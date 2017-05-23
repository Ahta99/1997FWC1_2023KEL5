<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    protected $table='layanan';
	protected $fillable=['Layanan','konten','Gambar_Konten'];
	
	
	
}
