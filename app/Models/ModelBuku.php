<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBuku extends Model
{
    protected $table = 'buku';

    public function kategori_r(){
    	return $this->belongsTo('App\Models\ModelKategori', 'kategori');
    }
}
