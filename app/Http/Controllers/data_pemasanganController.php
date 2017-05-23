<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\data_pemasangan;
use App\User;
use App\pelanggans;
use App\status_pembayaran;

class data_pemasanganController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$data = data::all();
		return view('/', compact('data'));
	}
	
	public function simpan(Request $input)
	{
		$user = new User();
		$pelanggan = new pelanggans();
		$pemasang = new data_pemasangan();
		$pemasang->id_user = Auth::id();
		$pemasang->id_pemasangan = $input->id_pemasang;
		$pemasang->id_cabang = $input->id_cabang;
		$pemasang->id_status = 2;
		$pemasang->id_admin = 1;
		if($pemasang->save()){
			$this->informasi = 'Berhasil simpan data';
		}
		return redirect('/pemasangan')->with(['informasi' => $this->informasi]);
		
	}
	
	public function lihat()
	{
		$pemasang = data_pemasangan::all();
		//$namauser = user::find($pemasang->id_user);
		
		return view('admin.awaldata', compact('pemasang'));
	}
	
	public function edit($id){
		$data_pemasangan=data_pemasangan::find($id);
		return view('admin.formeditdata')->with(array('data_pemasangan'=>$data_pemasangan));
	}
	
	public function update($id, Request $input){
		$data_pemasangan = data_pemasangan::find($id);
		$data_pemasangan->id_status = $input->id_status;
		$data_pemasangan->id_admin = $input->id_admin;
		$data_pemasangan->save();
			
		return redirect('admin/edit');
	}
	
	public function hapus($id){
		$admin = admin::find($id);
		$user = user::find($admin->id_pengguna);
		
		$admin->delete();
		$user->delete();
		
		return redirect('admin/edit')->with(['informasi => $informasi']);
		
	}
	
	public function liatstatus($id){
		$pemasangan = data_pemasangan::find($id);
		return view('akun', compact('pemasangan'));
	}
	
	
}
