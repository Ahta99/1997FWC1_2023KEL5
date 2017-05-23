<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\data_pemasangan;
use App\User;
use App\pelanggans;

class pelangganController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$data = data::all();
		return view('/', compact('data'));
	}
	
	
	
	
}
