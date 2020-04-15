<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ModelPeminjaman;
use App\Models\ModelBuku;

class PeminjamanController extends Controller
{
    public function index(){
        $title = 'List Peminjaman Buku';

        if (Auth::user()->role == 3) {
            $data = ModelPeminjaman::where('user', Auth::user()->id)->get();
        }else{
            $data = ModelPeminjaman::get();
        }

        return view('peminjaman.peminjaman_index', compact('title', 'data'));
    }

    public function store(Request $request, $id){
    	ModelPeminjaman::insert([
    		'buku' => $id,
    		'user' => \Auth::user()->id,
            'jumlah' => $request->jumlah,
            'status' => 0,
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s')
    	]);

        $buku = ModelBuku::findOrFail($id);
        $stok_now = $buku->stok;
    	$stok_new = $stok_now - $request->jumlah;

        $buku->stok = $stok_new;
        $buku->update();

        toastr()->success('Peminjaman telah berhasil! Mohon tunggu konfirmasi operator!');
    	return redirect('/beranda');
    }

    public function setujui($id){
        ModelPeminjaman::where('id', $id)->update([
            'status' => 1
        ]);

        toastr()->success('Peminjaman berhasil disetujui!');
        return redirect('pinjam-buku');
    }

    public function validasi(){
        $title = 'List Peminjaman Buku';
        $data = ModelPeminjaman::where('status', 0)->get();

        return view('peminjaman.peminjaman_index', compact('title', 'data'));
    }
}
