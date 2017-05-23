<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\layanan;

class layananController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$layanan = layanan::all();
		return view('welcome', compact('layanan'));
	}
	
	public function lihat($id)
	{
		$layanan = layanan::find($id);
		return view('berita')->with(array('layanan'=>$layanan));
	}
	
	public function edit()
	{
		$layanan = layanan::all();
		return view('tampilan.blog', compact('layanan'));
	}
	
}
