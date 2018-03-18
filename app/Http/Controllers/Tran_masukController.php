<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tran_masuk;
use App\Barang;
use App\Supplier;
use Session;
use Auth;
use Excel;

class Tran_masukController extends Controller
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
        $tran_masuk= Tran_masuk::with('Barang','Supplier','User')->get();
        return view('tran_masuk.index', compact('tran_masuk'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplier = Supplier::all();
        $barang = Barang::all();
        return view('tran_masuk.create',compact('supplier','barang'));
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
        //     'sup_id' => 'required|exists:suppliers,id',
        //     'barang_id' => 'required|exists:barangs,id',
        //     'jumlahs' => 'required||numeric']);
        for ($id = 0; $id < count($request->barang_id); $id++) { 
            $user = Auth::user();
            $tran_masuk = new Tran_masuk;
            $tran_masuk->user_id=$user->id;
            $tran_masuk->sup_id=$request->sup_id[$id];
            $tran_masuk->barang_id=$request->barang_id[$id];
            $tran_masuk->jumlahs=$request->jumlahs[$id];

            $barang = Barang::findOrFail($request->barang_id[$id]);
            $barang->stock = $barang->stock + $request->jumlahs[$id];
            $tran_masuk->totals = $barang->harga * $request->jumlahs[$id];
            $barang->save();
            $tran_masuk->save();
        }
        

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data yang masuk pada : $tran_masuk->created_at, penyuplai : $tran_masuk->sup_id,$tran_masuk->jumlahs"
        ]);
        return redirect('/tran_masuk');
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
        $tran_masuk = Tran_masuk::findOrFail($id);
        return view('tran_masuk.show',compact('tran_masuk'));
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
        $tran_masuk = Tran_masuk::findOrFail($id);
        return view('tran_masuk.edit',compact('tran_masuk'));
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
            'sup_id' => 'required|exists:suppliers,id',
            'barang_id' => 'required|exists:barangs,id',
            'jumlahs' => 'required||numeric']);
        $tran_masuk = Tran_masuk::find($id);
        $tran_masuk->sup_id=$request->sup_id;
        $tran_masuk->barang_id=$request->barang_id;

        $barang = Barang::findOrFail($request->barang_id);
        $barang->stock = ($barang->stock - $tran_masuk->jumlahs) + $request->jumlahs;
        $tran_masuk->totals = $barang->harga * $request->jumlahs;
        $barang->save();

        
        $tran_masuk->jumlahs=$request->jumlahs;
        $tran_masuk->save();

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data yang masuk pada : $tran_masuk->created_at, penyuplai : $tran_masuk->sup_id,harganya :$tran_masuk->hargas,$tran_masuk->jumlahs"
        ]);
        return redirect()->route('tran_masuk.index');
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
        Tran_masuk::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data berhasil dihapus"
        ]);
        return redirect()->route('tran_masuk.index');
    }
    public function export()
    {
    return view('laporan.export');
    }
    public function exportPost(Request $request)
        {
        // validasi
        $this->validate($request, [
        'barang_id'=>'required',
        ], [
        'barang_id.required'=>'Anda belum memilih penulis.'
        ]);
        $laporan = Tran_masuk::whereIn('id', $request->get('barang_id'))->get();
        Excel::create('Data Laporan', function($excel) use ($laporan) {
        // Set property
        $excel->setTitle('Data Laporan')
        ->setCreator(Auth::user()->name);
        $excel->sheet('Data Laporan', function($sheet) use ($laporan) {
        $row = 1;
        $sheet->row($row, [
        'Tanggal Masuk',
        'Type Barang',
        'Harga Barang',
        'Stock Masuk',
        'Total'
        ]);
        foreach ($laporan as $data) {
            $sheet->row(++$row, [
            $data->created_at,
            $data->Barang->type,
            'Rp.'.number_format($data->Barang->harga,0,",",".").",-",
            $data->Barang->stock.' buah',
            'Rp.'.number_format($data->totals,0,",",".").",-"
                    ]);
                    }
                });
            })->export('xls');
        }
    
}
