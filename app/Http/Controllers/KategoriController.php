<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelKategori;

class KategoriController extends Controller
{
    public function index(){
    	$title = 'List Kategori';
    	$data = ModelKategori::get();

    	return view('kategori.kategori_index', compact('title', 'data'));
    }

    public function add(){
    	$title = 'Tambah Kategori';

    	return view('kategori.kategori_add', compact('title'));
    }

    public function store(Request $request){
    	$nama = $request->nama;

    	ModelKategori::insert([
    		'nama' => $nama,
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s')
    	]);
        toastr()->success('Kategori baru telah ditambahkan!');
    	return redirect('master/kategori');
    }

    public function edit($id){
        $title = 'Edit Kategori';
        $dt = ModelKategori::where('id', $id)->first();

        return view('kategori.kategori_edit', compact('title', 'dt'));
    }

    public function update(Request $request, $id){
        $nama = $request->nama;
        ModelKategori::where('id', $id)->update([
            'nama' => $nama,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        toastr()->success('Kategori berhasil diupdate!');
        return redirect('master/kategori');
    }

    public function delete($id){
        ModelKategori::where('id', $id)->delete();
        \Session::flash('sukses', '!!');
        toastr()->success('Kategori berhasil dihapus!');
        return redirect('master/kategori');
    }
}
