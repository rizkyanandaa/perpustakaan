<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBuku;
use App\Models\ModelKategori;

class BukuController extends Controller
{
    public function index(){
    	$title = 'List Buku';
        $data = ModelBuku::get();

    	return view('buku.buku_index', compact('title', 'data'));
    }

    public function kosong(){
        $title = 'List Buku Habis';
        $data = ModelBuku::where('stok', '<', 1)->get();

        return view('buku.buku_index', compact('title', 'data'));
    }

    public function nonaktif(){
        $title = 'List Buku Nonaktif';
        $data = ModelBuku::where('status', '!=', 1)->get();

        return view('buku.buku_index', compact('title', 'data'));
    }

    public function add(){
    	$title = 'Tambah Buku';
    	$kategori = ModelKategori::get();

    	return view('buku.buku_add', compact('title', 'kategori'));
    }

    public function store(Request $request){
    	$judul = $request->judul;
        $penulis = $request->penulis;
        $kategori = $request->kategori;
        $keterangan = $request->keterangan;
        $stok = $request->stok;
        $status = 1;
        $gambar = $request->file('gambar');

        // Mengupload File
        $destinationPath = 'uploads';
        $gambar->move($destinationPath, $gambar->getClientOriginalName());

    	ModelBuku::insert([
            'judul' => $judul,
            'penulis' => $penulis,
            'kategori' => $kategori,
            'keterangan' => $keterangan,
            'stok' => $stok,
            'status' => $status,
            'gambar' => $gambar->getClientOriginalName(),
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s')
    	]);
    	toastr()->success('Buku baru telah berhasil ditambahkan!');
    	return redirect('master/buku');
    }

    public function edit($id){
        $title = 'Edit Buku';
        $kategori = ModelKategori::get();
        $dt = ModelBuku::where('id', $id)->first();

        return view('buku.buku_edit', compact('title', 'kategori', 'dt'));
    }

    public function update(Request $request, $id){
        $judul = $request->judul;
        $penulis = $request->penulis;
        $kategori = $request->kategori;
        $keterangan = $request->keterangan;
        $stok = $request->stok;
        $gambar = $request->file('gambar');

        if ($gambar) {
            ModelBuku::where('id', $id)->update([
                'judul' => $judul,
                'penulis' => $penulis,
                'kategori' => $kategori,
                'keterangan' => $keterangan,
                'stok' => $stok,
                'gambar' => $gambar->getClientOriginalName(),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            // Mengupload File
            $destinationPath = 'uploads';
            $gambar->move($destinationPath, $gambar->getClientOriginalName());
        }else{
            ModelBuku::where('id', $id)->update([
                'judul' => $judul,
                'penulis' => $penulis,
                'kategori' => $kategori,
                'keterangan' => $keterangan,
                'stok' => $stok,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        toastr()->success('Buku telah berhasil diupdate!');
        return redirect('master/buku');
    }

    public function delete($id){
        ModelBuku::where('id', $id)->delete();
        toastr()->success('Buku telah berhasil dihapus!');
        return redirect('master/buku');
    }

    public function status($id){
        $data = ModelBuku::where('id', $id)->first();
        $status = $data->status;

        if ($status == 1) {
            ModelBuku::where('id', $id)->update([
                'status' => 0
            ]);
        }else{
            ModelBuku::where('id', $id)->update([
                'status' => 1
            ]);
        }
        toastr()->success('Status buku berhasil diubah!');
        return redirect('master/buku');
    }
}
