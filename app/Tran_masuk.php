<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tran_masuk extends Model
{
    //
    protected $fillable =  ['supplier_id','barang_id','jumlahs','totals','user_id'];
    
    public function Supplier()
	    {
	    	return $this->belongsTo('App\Supplier','sup_id');
	    }
	public function Barang()
	    {
	    	return $this->belongsTo('App\Barang','barang_id');
	    }
	public function User()
	    {
	    	return $this->belongsTo('App\User','user_id');
	    }    
}
