<?php

namespace App\Http\Controllers;
use App\Models\Satuan;
use App\Models\Data_produk;
use Illuminate\Http\Request;

class satuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $satuans = Satuan::all();
        return view('admin.data_satuan', compact('satuans'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Data_produk::all();
        $satuan = Satuan::all();
        return view('admin.create_satuan', compact('produk', 'satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_antrian' => 'required',
            'tgl_pesanan' => 'required',
            'nm_cus' => 'required',
            'alamat' => 'required',
            'nm_produk' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'ket' => 'required',
        ]);

        Satuan::create($request->all());
        return redirect()->route('satuan.index')->with('success', 'Data Pesanan Satuan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Satuan $satuan)
    {
        $produk = Data_produk::all();
        return view('admin.edit_satuan', compact('satuan', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Satuan $satuan)
    {
        $request->validate([
            'kd_antrian' => 'required',
            'tgl_pesanan' => 'required',
            'nm_cus' => 'required',
            'alamat' => 'required',
            'nm_produk' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'ket' => 'required',
        ]);

        $satuan->update($request->all());
        return redirect()->route('satuan.index')->with('success', 'Data Pesanan Satuan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Satuan $satuan)
    {
        $satuan->delete();
        return redirect()->route('satuan.index')->with('success', 'Data Pesanan Satuan Berhasil Dihapus');
    }
}
