<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPeminjaman extends Model
{
    protected $table = 'peminjaman';

    public function buku_r(){
    	return $this->belongsTo('App\Models\ModelBuku', 'buku');
    }

    public function user_r(){
    	return $this->belongsTo('App\User', 'user');
    }
}
