<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use App\Brand;
use App\Supplier;
use App\Contact;

class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tampil1 = Kategori::all();
        $tampil = Barang::orderBy('created_at','desc')->paginate(4);
        $supplier = Supplier::orderBy('created_at','desc')->paginate(6);
        $contact = Contact::all();
        return view('tampilan.stock')->with(compact('tampil','supplier','tampil1','contact'));
    }
    public function showperkategori($id)
    {
        $tampil1 = Kategori::all();
        $brand = Brand::all();
        $contact = Contact::all();
        $filter = Barang::where('kategori_id','=',$id)->paginate(5);
        $tampil = Barang::orderBy('created_at','desc')->paginate(4);
        $supplier = Supplier::orderBy('created_at','desc')->paginate(6);
        return view('tampilan.kategori')->with(compact('tampil','supplier','tampil1','filter','brand','filter1','contact'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
