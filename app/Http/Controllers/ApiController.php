<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Contact;

class ApiController extends Controller
{
    //
	public function listdata()
	{
		return $barang = Barang::with('Kategori','Brand')->get();
		
	}
	public function contact()
	{
		return $contact = Contact::all();
		
	}
	public function showdata($id)
	{
		return Barang::with('Kategori','Brand')->where('id',$id)->get();
		
	}

}
