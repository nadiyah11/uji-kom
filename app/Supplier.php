<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Supplier extends Model
{
    //
    protected $fillable =  ['logo_per','nama_per','pimpinan','alamat','kontak'];

    public function Tran_masuk()
	    {
	    	return $this->hasMany('App\Tran_masuk','sup_id');
	    }

	public static function boot()
	{
		parent::boot();
		self::deleting(function($supplier) {
		// mengecek apakah penulis masih punya data
		if ($supplier->Tran_masuk->count() > 0) {
		// menyiapkan pesan error
		$html = 'Supplier tidak bisa dihapus karena masih memiliki data : ';
		$html .= '<ul>';
		foreach ($supplier->Tran_masuk as $supplier) {
		$html .= "<li>$supplier->created_at</li>";
		}
		$html .= '</ul>';
		Session::flash("flash_notification", [
		"level"=>"danger",
		"message"=>$html
		]);
		// membatalkan proses penghapusan
		return false;
		}
		});
	}
}
