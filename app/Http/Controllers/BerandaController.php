<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBuku;

class BerandaController extends Controller
{
    public function index(){
    	$title = 'Perpustakaan';
    	$data = ModelBuku::where('status', 1)->get();

    	return view('beranda.beranda_index', compact('title', 'data'));
    }
}
