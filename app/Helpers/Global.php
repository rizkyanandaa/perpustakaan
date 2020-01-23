<?php 

Use App\Models\ModelBuku;
Use App\Models\ModelPeminjaman;
Use App\Models\ModelPengembalian;

function buku_habis(){
	return ModelBuku::where('stok', 0)->count();
}

function buku_nonaktif(){
	return ModelBuku::where('status', 0)->count();
}

function validasi_peminjaman(){
	return ModelPeminjaman::where('status', 0)->count();
}

function validasi_pengembalian(){
	return ModelPengembalian::where('status', 0)->count();
}

?>