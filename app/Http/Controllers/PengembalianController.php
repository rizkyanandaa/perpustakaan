<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ModelPengembalian;
use App\Models\ModelPeminjaman;

class PengembalianController extends Controller
{
    public function index(){
        $title = 'List Pengembalian Buku';

        if (Auth::user()->role == 3) {
            $data = ModelPengembalian::where('user', Auth::user()->id)->get();
        }else{
            $data = ModelPengembalian::get();
        }

        return view('pengembalian.pengembalian_index', compact('title', 'data'));
    }

    public function store($id){
    	ModelPengembalian::insert([
    		'peminjaman' => $id,
    		'user' => Auth::user()->id,
            'status' => 0,
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s')
    	]);

        toastr()->success('Pengembalian berhasil! Mohon tunggu konfirmasi operator!');
    	return redirect('pengembalian');
    }

    public function setujui($id){
        ModelPeminjaman::where('id', $id)->update([
        	'status' => 2
        ]);

        ModelPengembalian::where('id', $id)->update([
            'status' => 1
        ]);

        toastr()->success('Pengembalian berhasil disetujui!');
        return redirect('pengembalian');
    }

    public function validasi(){
        $title = 'List Pengembalian Buku';
        $data = ModelPengembalian::where('status', 0)->get();

        return view('pengembalian.pengembalian_index', compact('title', 'data'));
    }
}
