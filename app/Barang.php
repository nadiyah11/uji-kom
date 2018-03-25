<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Barang extends Model
{
    //
    protected $fillable =  ['logo','type','harga','stock','kategori_id','brand_id','keterangan'];

    public function Kategori()
	    {
	    	return $this->belongsTo('App\Kategori','kategori_id');
	    }
	public function Brand()
	    {
	    	return $this->belongsTo('App\Brand','brand_id');
	    }
	public function Tran_masuk()
	    {
	    	return $this->hasMany('App\Tran_masuk','barang_id');
	    }
	public function Tran_keluar()
	    {
	    	return $this->hasMany('App\Tran_keluar','barang_id');
	    }
	public static function boot()
	{
		parent::boot();
		self::deleting(function($barang) {
		// mengecek apakah penulis masih punya data
		if ($barang->Tran_masuk->count() > 0) {
		// menyiapkan pesan error
		$html = 'Barang tidak bisa dihapus karena masih memiliki data : ';
		$html .= '<ul>';
		foreach ($barang->Tran_masuk as $barang) {
		$html .= "<li>$barang->created_at</li>";
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
