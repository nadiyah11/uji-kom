<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $fillable =  ['kategori'];

    public function Barang()
	    {
	    	return $this->hasmany('App\Barang','kategori_id');
	    }

}
