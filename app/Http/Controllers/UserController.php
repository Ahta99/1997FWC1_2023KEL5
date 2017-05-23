<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\user;
use App\pelanggans;
class UserController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$user = user::all();
		return view('akun', compact('user'));
	}
	
	public function simpan(Request $input)
	{
		$this->validate($input,[
		'username' => 'required|unique:users',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
		]);
		$pelanggan= new pelanggan();
		$pelanggan->Nama = $input->nama;
		$pelanggan->Alamat = $input->alamat;
		$pelanggan->No_KTP = $input->No_KTP;
		$pelanggan->Nomor_Telepon = $input->No_Tlp;
		$pelanggan->id_pengguna = $user->id;
		$pelanggan->save();
		$informasi=$user->save() ? 'Berhasil simpan data' : 'Gagal Simpan data';
		return redirect('/akses/akun')->with(['informasi'=>$informasi]);
		
	}
	
	public function lihat($id)
	{
		$pelanggan = pelanggans::find($id);
		return view('akun', compact('pelanggan'));
	}
	
}
