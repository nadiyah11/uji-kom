<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $fillable =  ['nama_kar','alamat','jk','no_hp','bagian_id'];

    public function Bagian()
	    {
	    	return $this->belongsTo('App\Bagian','bagian_id');
	    }
}
