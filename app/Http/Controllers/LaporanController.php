<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Tran_masuk;
use App\Tran_keluar;
use App\Supplier;
use PDF;


class LaporanController extends Controller
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
        $barang = Barang::all();
        $supplier = Supplier::all();
        $tran_masuk = Tran_masuk::all();
        return view('laporan.index', compact('barang','supplier','tran_masuk'));
    }
    public function indexkeluar()
    {
        //
        $barang = Barang::all();
        $tran_keluar = Tran_keluar::all();
        return view('laporan.indexkeluar', compact('barang','tran_keluar'));
    }



    public function laporan(Request $request){
        $from = $request->from;
        $to = $request->to;
        $laporan = Tran_masuk::whereBetween('created_at',[$from , $to])->get();
        $sum = $laporan->sum('totals');
        return view('laporan.laporan',compact('laporan','from','to','sum'));
      
    }
    public function keluar(Request $request)
    {
        //
        $from = $request->from;
        $to = $request->to;
        
        $laporan = Tran_keluar::whereBetween('created_at',[$from , $to])->get();
        $sum = $laporan->sum('totalk');
        return view('laporan.laporan_keluar',compact('laporan','from','to','sum'));
    }


    
    
    public function downloadPDF(Request $request)

    {
        $from = $request->from;
        $to = $request->to;
        $laporan = Tran_masuk::whereBetween('created_at',[$from , $to])->get();
        $sum = $laporan->sum('totals');
        $pdf = PDF::loadView('laporan.pdfViewMasuk',compact('laporan','from','to','sum'));
        return $pdf->download('LaporanMasuk.pdf');


    }
    public function downloadPDF2(Request $request)

    {

        $from = $request->from;
        $to = $request->to;
        $laporan = Tran_keluar::whereBetween('created_at',[$from , $to])->get();
        $sum = $laporan->sum('totalk');
        $pdf = PDF::loadView('laporan.pdfViewKeluar',compact('laporan','from','to','sum'));
        return $pdf->download('LaporanKeluar.pdf');


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
