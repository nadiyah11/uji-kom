<?php

Route::get('/','TampilanController@index');
Route::get('/master', function () {
    return view('layouts.tabel');
});

Auth::routes();

Route::group(['middleware' => 'role:admin'], function () {
	Route::resource('user','UserController');
	Route::resource('kategori','KategoriController');
	Route::resource('brand','BrandController');
	Route::resource('barang','BarangController');
	Route::resource('bagian','BagianController');
	Route::resource('karyawan','KaryawanController');
	Route::get('/index2','KaryawanController@testing');
	Route::resource('tran_masuk','Tran_masukController');
	Route::resource('tran_keluar','Tran_keluarController');
	Route::resource('contact','ContactController');
	Route::resource('supplier','SupplierController');
	Route::resource('laporan','LaporanController');
	Route::resource('detail', 'TampilanController');
	Route::post('/laporann','LaporanController@laporan');
	Route::get('/laporankeluar','LaporanController@indexkeluar');
	Route::post('/laporank','LaporanController@keluar');
	Route::get('export/laporan', [
	'as' => 'export.laporan',
	'uses' => 'Tran_masukController@export'
	]);
	Route::post('export/laporan', [
	'as' => 'export.laporan.post',
	'uses' => 'Tran_masukController@exportPost'
	]);
	Route::get('download-pdf','LaporanController@downloadPDF');
	Route::get('download-pdf2','LaporanController@downloadPDF2');
});
Route::group(['middleware' => 'role:admin|member'], function () {
	Route::resource('kategori','KategoriController');
	Route::resource('barang','BarangController');
	Route::resource('tran_masuk','Tran_masukController');
	Route::resource('tran_keluar','Tran_keluarController');
	Route::resource('laporan','LaporanController');
	Route::post('/laporann','LaporanController@laporan');
	Route::get('/laporankeluar','LaporanController@indexkeluar');
	Route::post('/laporank','LaporanController@keluar');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categori/{id}',array('as'=>'showperkategori','uses'=>'TampilanController@showperkategori'));

Route::middleware('cors')->group(function(){
	Route::get('/listdata','ApiController@listdata');
	Route::get('/contactandro','ApiController@contact');
	Route::get('/show/{id}','ApiController@showdata');
});