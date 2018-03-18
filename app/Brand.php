<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable =  ['brand'];

     public function Barang()
	    {
	    	return $this->hasmany('App\Barang','brand_id');
	    }
}
