<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    //
    protected $fillable =  ['bagian'];

    public function Karyawan()
	    {
	    	return $this->hasmany('App\Karyawan','bagian_id');
	    }
	    
}
