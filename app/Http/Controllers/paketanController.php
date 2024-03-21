<?php

namespace App\Http\Controllers;
use App\Models\Paketan;
use App\Models\Data_produk;
use Illuminate\Http\Request;

class paketanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paketans = Paketan::all();
        return view('admin.data_paketan', compact('paketans'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Data_produk::all();
        $paketan = Paketan::all();
        return view('admin.create_paketan', compact('produk', 'paketan'));
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

        Paketan::create($request->all());
        return redirect()->route('paketan.index')->with('success', 'Data Pesanan Paketan Berhasil Disimpan');
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
    public function edit(Paketan $paketan)
    {
        $produk = Data_produk::all();
        return view('admin.edit_paketan', compact('paketan', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paketan $paketan)
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

        $paketan->update($request->all());
        return redirect()->route('paketan.index')->with('success', 'Data Pesanan Paketan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paketan $paketan)
    {
        $paketan->delete();
        return redirect()->route('paketan.index')->with('success', 'Data Pesanan Paketan Berhasil Dihapus');
    }
}
