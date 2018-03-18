<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Session;

class SupplierController extends Controller
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
        $supplier= Supplier::with('Tran_masuk')->get();
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.create');
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
        $this->validate($request, ['logo_per' => 'image|max:20048',
                                'nama_per' => 'required||unique:suppliers,nama_per',
                                'pimpinan' => 'required',
                                'kontak' => 'required',
                                'alamat' => 'required']);
        $supplier = Supplier::create($request->except('logo_per'));
        // isi field logo_per jika ada logo_per yang diupload
        if ($request->hasFile('logo_per')) {
        // Mengambil file yang diupload
        $uploaded_logo_per = $request->file('logo_per');
        // mengambil extension file
        $extension = $uploaded_logo_per->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan logo_per ke folder public/img
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_logo_per->move($destinationPath, $filename);
        // mengisi field logo_per di supplier dengan filename yang baru dibuat
        $supplier->logo_per = $filename;
        $supplier->save();
        }

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $supplier->nama_per"
        ]);
        return redirect()->route('supplier.index');
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
        $supplier = Supplier::findOrFail($id);
        return view('supplier.show',compact('supplier'));
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
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit',compact('supplier'));
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
        $this->validate($request, ['nama_per' => 'required',
                                'pimpinan' => 'required',
                                'kontak' => 'required',
                                'alamat' => 'required']);
        $supplier = Supplier::find($id);
        $supplier -> update($request->all());
        // isi field logo jika ada logo yang diupload
        if ($request->hasFile('logo_per')) {
        // Mengambil file yang diupload
        $uploaded_logo_per = $request->file('logo_per');
        // mengambil extension file
        $extension = $uploaded_logo_per->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan logo_per ke folder public/img
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_logo_per->move($destinationPath, $filename);
        // mengisi field logo_per di supplier dengan filename yang baru dibuat
        $supplier->logo_per = $filename;
        $supplier->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $supplier->nama_per"
        ]);
        return redirect()->route('supplier.index');
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
        if(!Supplier::destroy($id)) return redirect()->back();
    }
}
