<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\admin;
use App\user;
class adminController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$admin = admin::all();
		return view('admin.tambah', compact('admin'));
	}
	
	public function lihat()
	{
		$sadmin = admin::all();
		return view('admin.edit', compact('sadmin'));
	}
	
	public function simpan(Request $input)
	{
		$this->validate($input,[
		'nama' => 'required',
		'alamat' => 'required',
		'NO_HP' => 'required',
		'username' => 'required|unique:users',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
		]);
		$admin= new admin();
		$user = new user();
		$user->username = $input->username;
		$user->email = $input->email;
		$user->password = bcrypt($input->password);
		$user->level = 'ADMIN';
		$user->save();
		$admin->Nama = $input->nama;
		$admin->Alamat = $input->alamat;
		$admin->No_HP = $input->No_HP;
		$admin->id_pengguna = $user->id;
		$admin->save();
		$informasi=$user->save() ? 'Berhasil simpan data' : 'Gagal Simpan data';
		return redirect('/admin')->with(['informasi'=>$informasi]);
		
	}
	
	public function edit($id){
		$admin=admin::find($id);
		return view('admin.formedit')->with(array('admin'=>$admin));
	}
	
	public function update($id, Request $input){
		$admin = admin::find($id);
		$admin->Nama = $input->Nama;
		$admin->Alamat = $input->Alamat;
		$admin->No_HP = $input->No_HP;
		$admin->save();
			
		return redirect('admin/edit');
	}
	
	public function hapus($id){
		$admin = admin::find($id);
		$user = user::find($admin->id_pengguna);
		
		$admin->delete();
		$user->delete();
		
		return redirect('admin/edit')->with(['informasi => $informasi']);
		
	}
		
}
