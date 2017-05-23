<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\data_pemasangan;
use App\User;
use App\status_pembayaran;
class status_pembayaranController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$status = status_pembayaran::all();
		return view('akun', compact('status'));
	}
	
	
	
	
}
