<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tran_keluar extends Model
{
    //
    protected $fillable =  ['user_id','barang_id','jumlahk','totalk'];

    public function Barang()
	    {
	    	return $this->belongsTo('App\Barang','barang_id');
	    }
	public function User()
	    {
	    	return $this->belongsTo('App\User','user_id');
	    }
}
