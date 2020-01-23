<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('beranda');
});

Route::get('login', 'AuthController@login')->name('login');
Route::get('register1432', 'AuthController@register');
Route::post('register', 'AuthController@store');
Route::post('postlogin', 'AuthController@postlogin');
Route::get('logout', 'AuthController@logout');

Route::group(['middleware'=>['auth', 'checkRole:1']], function(){
	Route::get('beranda', 'BerandaController@index');

	// Master Profil Operator
	Route::get('master/profil/{id}', 'OperatorController@profil');
	Route::get('master/profil/edit/{id}', 'OperatorController@updateprofil');
	Route::put('master/profil/editfoto/{id}', 'OperatorController@editfoto');
	Route::put('master/profil/editpass/{id}', 'OperatorController@editpass');

	// Master Operator
	Route::get('master/operator', 'OperatorController@index');
	Route::get('master/operator/add', 'OperatorController@add');
	Route::post('master/operator/add', 'OperatorController@store');
	Route::get('master/operator/{id}', 'OperatorController@edit');
	Route::put('master/operator/{id}', 'OperatorController@update');
	Route::get('master/operator/delete/{id}', 'OperatorController@delete');

	// Master Anggota
	Route::get('master/anggota', 'AnggotaController@index');
	Route::get('master/anggota/add', 'AnggotaController@add');
	Route::post('master/anggota/add', 'AnggotaController@store');
	Route::get('master/anggota/{id}', 'AnggotaController@edit');
	Route::put('master/anggota/{id}', 'AnggotaController@update');
	Route::get('master/anggota/delete/{id}', 'AnggotaController@delete');

	// Master Kategori
	Route::get('master/kategori', 'KategoriController@index');
	Route::get('master/kategori/add', 'KategoriController@add');
	Route::post('master/kategori/add', 'KategoriController@store');
	Route::get('master/kategori/{id}', 'KategoriController@edit');
	Route::put('master/kategori/{id}', 'KategoriController@update');
	Route::get('master/kategori/{id}/delete', 'KategoriController@delete');

	// Master Buku
	Route::get('master/buku', 'BukuController@index');
	Route::get('master/buku/kosong', 'BukuController@kosong');
	Route::get('master/buku/nonaktif', 'BukuController@nonaktif');
	Route::get('master/buku/add', 'BukuController@add');
	Route::post('master/buku/add', 'BukuController@store');
	Route::get('master/buku/{id}', 'BukuController@edit');
	Route::put('master/buku/{id}', 'BukuController@update');
	Route::get('master/buku/delete/{id}', 'BukuController@delete');
	Route::get('master/buku/status/{id}', 'BukuController@status');

	// Peminjaman Buku
	Route::get('pinjam-buku', 'PeminjamanController@index');
	Route::get('pinjam-buku/validasi', 'PeminjamanController@validasi');
	Route::get('pinjam-buku/{id}', 'PeminjamanController@store');
	Route::get('pinjam-buku/setujui/{id}', 'PeminjamanController@setujui');

	// Pengembalian Buku
	Route::get('pengembalian', 'PengembalianController@index');
	Route::get('pengembalian/validasi', 'PengembalianController@validasi');
	Route::get('pengembalian/{id}', 'PengembalianController@store');
	Route::get('pengembalian/setujui/{id}', 'PengembalianController@setujui');
});

Route::group(['middleware'=>['auth', 'checkRole:1, 2']], function(){
	Route::get('beranda', 'BerandaController@index');

	// Master Profil Operator
	Route::get('master/profil/{id}', 'OperatorController@profil');
	Route::get('master/profil/edit/{id}', 'OperatorController@updateprofil');
	Route::put('master/profil/editfoto/{id}', 'OperatorController@editfoto');
	Route::put('master/profil/editpass/{id}', 'OperatorController@editpass');

	// Master Kategori
	Route::get('master/kategori', 'KategoriController@index');
	Route::get('master/kategori/add', 'KategoriController@add');
	Route::post('master/kategori/add', 'KategoriController@store');
	Route::get('master/kategori/{id}', 'KategoriController@edit');
	Route::put('master/kategori/{id}', 'KategoriController@update');
	Route::get('master/kategori/{id}/delete', 'KategoriController@delete');

	// Master Buku
	Route::get('master/buku', 'BukuController@index');
	Route::get('master/buku/kosong', 'BukuController@kosong');
	Route::get('master/buku/nonaktif', 'BukuController@nonaktif');
	Route::get('master/buku/add', 'BukuController@add');
	Route::post('master/buku/add', 'BukuController@store');
	Route::get('master/buku/{id}', 'BukuController@edit');
	Route::put('master/buku/{id}', 'BukuController@update');
	Route::get('master/buku/delete/{id}', 'BukuController@delete');
	Route::get('master/buku/status/{id}', 'BukuController@status');

	// Peminjaman Buku
	Route::get('pinjam-buku', 'PeminjamanController@index');
	Route::get('pinjam-buku/validasi', 'PeminjamanController@validasi');
	Route::get('pinjam-buku/{id}', 'PeminjamanController@store');
	Route::get('pinjam-buku/setujui/{id}', 'PeminjamanController@setujui');

	// Pengembalian Buku
	Route::get('pengembalian', 'PengembalianController@index');
	Route::get('pengembalian/validasi', 'PengembalianController@validasi');
	Route::get('pengembalian/{id}', 'PengembalianController@store');
	Route::get('pengembalian/setujui/{id}', 'PengembalianController@setujui');
});


Route::group(['middleware'=>['auth', 'checkRole:1, 2, 3']], function(){
	Route::get('beranda', 'BerandaController@index');

	// Master Profil Anggota
	Route::get('master/profil/{id}', 'AnggotaController@profil');
	Route::get('master/profil/edit/{id}', 'AnggotaController@updateprofil');
	Route::put('master/profil/editfoto/{id}', 'AnggotaController@editfoto');
	Route::put('master/profil/editpass/{id}', 'AnggotaController@editpass');

	// Peminjaman Buku
	Route::get('pinjam-buku', 'PeminjamanController@index');
	Route::get('pinjam-buku/{id}', 'PeminjamanController@store');
	Route::get('pinjam-buku/setujui/{id}', 'PeminjamanController@setujui');

	// Pengembalian Buku
	Route::get('pengembalian', 'PengembalianController@index');
	Route::get('pengembalian/{id}', 'PengembalianController@store');
	Route::get('pengembalian/setujui/{id}', 'PengembalianController@setujui');
});

// Route::get('keluar', function(){
// 	\Auth::logout();
// 	return redirect('login');
// });

// Auth::routes();

// Route::get('/home', function(){
// 	return redirect('beranda');
// });
