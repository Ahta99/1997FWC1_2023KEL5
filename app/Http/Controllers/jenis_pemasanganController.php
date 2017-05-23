<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jenis_pemasangan;

class jenis_pemasanganController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$pasang = jenis_pemasangan::all();
		return view('Pemasangan.edit', compact('pasang'));
	}
	
	
}
