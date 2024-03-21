<?php

namespace App\Http\Controllers;
use App\Models\Data_produk;
use App\Models\Satuan;
use App\Models\Paketan;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Data_produk::all();
        return view('welcome', compact('produks'));
    }

    public function detail($id)
    {
        $data_produk = Data_produk::find($id);
        return view('detail-produk', ['data_produk' => $data_produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data_produk = Data_produk::find($id);
        $satuan = Satuan::all();
        return view('form-satuan', compact('satuan'), ['data_produk' => $data_produk]);
    }

    public function create2($id)
    {
        $data_produk = Data_produk::find($id);
        $paketan = Paketan::all();
        return view('form-paketan', compact('paketan'), ['data_produk' => $data_produk]);
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
        return redirect()->route('detail.page', ['id' => $request->input('id_produk')])->with('success', 'Pesanan Anda Telah Di kirim. Silahkan Ditunggu Hingga Kami Mengantarkan Produknya Ke Alamat Anda.');
    }

    public function store2(Request $request)
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
        return redirect()->route('detail.page', ['id' => $request->input('id_produk')])->with('success', 'Pesanan Anda Telah Di kirim. Silahkan Ditunggu Hingga Kami Mengantarkan Produknya Ke Alamat Anda.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // 
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data_produk $data_produk)
    {
         //    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
