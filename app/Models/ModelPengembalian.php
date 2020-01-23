<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPengembalian extends Model
{
    protected $table = 'pengembalian';

    public function peminjaman_r(){
    	return $this->belongsTo('App\Models\ModelPeminjaman', 'peminjaman');
    }

    public function user_r(){
    	return $this->belongsTo('App\User', 'user');
    }
}
