<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/read/{baca}','layananController@lihat');
Route::get('tampilan/layanan','layananController@edit');



Route::get('upload',function(){
	return view('admin.upload');
});

Route::get('/','layananController@awal');

Route::get('/tampilan/about', function () {
    return view('tampilan.about');
});

Route::get('/tampilan/blog', function () {
    return view('tampilan.blog');
});

Route::get('/tampilan/contact', function () {
    return view('tampilan.contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pemasangan',[
	'uses'=>'jenis_pemasanganController@awal',
	'middleware'=>'user'
]);

//Route::get('/pemasangan','jenis_pemasanganController@awal');
Route::post('/pasang/pasangdb','data_pemasanganController@simpan');

Route::get('/akses/akun',function(){
	return view('akun');
});

//Route::get('/akses/akun','UserController@awal');
//Route::post('/user/tambah', 'UserController@simpan');

Route::group(['middleware' => 'web'], function(){
	Route::auth();	
});

Route::get('/home', 'HomeController@index');

Route::get('admin',['middleware' => 'admin', function(){
	return view('admin.awal');
}]);

//Route::get('admin/tambah', 'adminController@awal');
Route::get('admin/tambah',[
	'uses'=>'adminController@awal',
	'middleware'=>'admin'
]);

Route::get('admin/edit/{admin}',[
	'uses'=>'adminController@edit',
	'middleware'=>'admin'
]);

Route::get('admin/hapus/{admin}',[
	'uses'=>'adminController@hapus',
	'middleware'=>'admin'
]);

Route::post('admin/edit/{admin}',[
	'uses'=>'adminController@update',
	'middleware'=>'admin'
]);

Route::get('admin/edit',[
	'uses'=>'adminController@lihat',
	'middleware'=>'admin'
]);

Route::post('admin/proses',[
	'uses'=>'adminController@simpan',
	'middleware'=>'admin'
]);	

//Route::post('admin/proses', 'adminController@simpan');
//Route::get('admin/edit','adminController@lihat');
//Route::get('admin/edit/{admin}','adminController@edit');
//Route::post('admin/edit/{admin}','adminController@update');
//Route::get('admin/hapus/{admin}','adminController@hapus');

Route::get('admin/data_pemasangan',[
	'uses'=>'data_pemasanganController@lihat',
	'middleware'=>'admin'
]);

Route::get('admin/edit/data/{admin}',[
	'uses'=>'data_pemasanganController@edit',
	'middleware'=>'admin'
]);


//Route::get('admin/data_pemasangan', 'data_pemasanganController@lihat');
//Route::get('admin/edit/data/{admin}','data_pemasanganController@edit');
Route::post('admin/edit/data/{admin}','data_pemasanganController@update');