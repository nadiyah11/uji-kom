<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tran_keluar;
use App\Barang;
use Session;
use Auth;

class Tran_keluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $tran_keluar = Tran_keluar::with('Barang','User')->get();
        return view('tran_keluar.index',compact('tran_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barang = Barang::all();
        return view('tran_keluar.create',compact('barang'));
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
         // $this->validate($request, [
         //    'barang_id' => 'required|exists:barangs,id',
         //    'jumlahk' => 'required||numeric|min:0']);
         for ($id = 0; $id < count($request->barang_id); $id++) { 
            $user = Auth::user();
            $tran_keluar = new Tran_Keluar;
            $tran_keluar->user_id=$user->id;
            $barang = Barang::findOrFail($request->barang_id[$id]);
            if ($request->jumlahk[$id] < $barang->stock) {
            
            $tran_keluar->barang_id=$request->barang_id[$id];

            $barang->stock = $barang->stock - $request->jumlahk[$id];
            $tran_keluar->totalk = $barang->harga * $request->jumlahk[$id];
            $barang->save();
            
            $tran_keluar->jumlahk=$request->jumlahk[$id];
            $tran_keluar->save();

            Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan data yang keluar pada : $tran_keluar->created_at, barang :$tran_keluar->barang_id,$tran_keluar->jumlahk"
            ]);
            return redirect()->route('tran_keluar.index');
            }
            
            else {
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Data yang dimasukkan tidak sesuai,silahkan masukan data kembali!!!!"
            ]);
            return redirect()->route('tran_keluar.index');
            }
        }

        

        
        
        
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
        $tran_keluar = Tran_keluar::findOrFail($id);
        return view('tran_keluar.show',compact('tran_keluar'));
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
        $tran_keluar = Tran_keluar::findOrFail($id);
        return view('tran_keluar.edit',compact('tran_keluar'));
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
        $this->validate($request, [
            'barang_id' => 'required|exists:barangs,id',
            'jumlahk' => 'required||numeric']);
        $tran_keluar = Tran_keluar::find($id);

        $barang = Barang::findOrFail($request->barang_id);
        if ($request->jumlahk < $barang->stock) {
        
        $tran_keluar->barang_id=$request->barang_id;

        $barang->stock = ($barang->stock + $tran_keluar->jumlahk) - $request->jumlahk;
        $tran_keluar->totalk = $barang->harga * $request->jumlahk;
        $barang->save();
        
        $tran_keluar->jumlahk=$request->jumlahk;
        $tran_keluar->save();

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data yang keluar pada : $tran_keluar->created_at, barang :$tran_keluar->barang_id,$tran_keluar->jumlahk"
        ]);
        return redirect()->route('tran_keluar.index');
        }
        else {
        Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Data yang dimasukkan tidak sesuai,silahkan masukan data kembali!!!!"
        ]);
        return redirect()->route('tran_keluar.index');
        }
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
        Tran_keluar::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data berhasil dihapus"
        ]);
        return redirect()->route('tran_keluar.index');
    }
}
