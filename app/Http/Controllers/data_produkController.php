<?php

namespace App\Http\Controllers;
use App\Models\Data_produk;
use Illuminate\Http\Request;

class data_produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Data_produk::all();
        return view('admin.data_produk', compact('produks'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Data_produk $data_produk)
    {
        return view('admin.edit_produk', compact('data_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data_produk $data_produk)
    {
        $request->validate([
            'kd_kue' => 'required',
            'nm_kue' => 'required',
            'harga' => 'required',
            'rasa' => 'required',
            'ket' => 'required',
        ]);

        if ($request->hasFile('gambar1')) {
            // Hapus gambar lama dan tambahkan gambar baru jika diinput
                $image1 = $data_produk->gambar1;
                // Jika file gambar terdapat pada folder data_file maka hapus gambar yang lama
                if(file_exists(public_path('assets/img/portfolio/'.$image1))) {
                    unlink(public_path('assets/img/portfolio/'.$image1));                      
                }
                $file1 = $request->file('gambar1');
                $nama_file1 = $file1->getClientOriginalName();
                $tujuan_upload1 = 'assets/img/portfolio';
                $file1->move($tujuan_upload1, $nama_file1);
            } else {
                $nama_file1 = $data_produk->gambar1;
            }
            
        if ($request->hasFile('gambar2')) {
            // Hapus gambar lama dan tambahkan gambar baru jika diinput
                $image2 = $data_produk->gambar2;
                // Jika file gambar terdapat pada folder data_file maka hapus gambar yang lama
                if(file_exists(public_path('assets/img/portfolio/'.$image2))) {
                    unlink(public_path('assets/img/portfolio/'.$image2));                      
                }
                $file2 = $request->file('gambar2');
                $nama_file2 = $file2->getClientOriginalName();
                $tujuan_upload2 = 'assets/img/portfolio';
                $file2->move($tujuan_upload2, $nama_file2);
            } else {
                $nama_file2 = $data_produk->gambar2;
            }
            
        if ($request->hasFile('gambar3')) {
            // Hapus gambar lama dan tambahkan gambar baru jika diinput
                $image3 = $data_produk->gambar3;
                // Jika file gambar terdapat pada folder data_file maka hapus gambar yang lama
                if(file_exists(public_path('assets/img/portfolio/'.$image3))) {
                    unlink(public_path('assets/img/portfolio/'.$image3));                      
                }
                $file3 = $request->file('gambar3');
                $nama_file3 = $file3->getClientOriginalName();
                $tujuan_upload3 = 'assets/img/portfolio';
                $file3->move($tujuan_upload3, $nama_file3);
            } else {
                $nama_file3 = $data_produk->gambar3;
            }
            
        if ($request->hasFile('gambar4')) {
            // Hapus gambar lama dan tambahkan gambar baru jika diinput
                $image4 = $data_produk->gambar4;
                // Jika file gambar terdapat pada folder data_file maka hapus gambar yang lama
                if(file_exists(public_path('assets/img/portfolio/'.$image4))) {
                    unlink(public_path('assets/img/portfolio/'.$image4));                      
                }
                $file4 = $request->file('gambar4');
                $nama_file4 = $file4->getClientOriginalName();
                $tujuan_upload4 = 'assets/img/portfolio';
                $file4->move($tujuan_upload4, $nama_file4);
            } else {
                $nama_file4 = $data_produk->gambar4;
            }

            $data_produk ->update([
                'kd_kue' => $request->kd_kue,
                'nm_kue' => $request->nm_kue,
                'harga' => $request->harga,
                'rasa' => $request->rasa,
                'ket' => $request->ket,
                'gambar1' => $nama_file1,
                'gambar2' => $nama_file2,
                'gambar3' => $nama_file3,
                'gambar4' => $nama_file4,
            ]);

            return redirect()->route('data_produk.index')->with('success', 'Data Produk Berhasil di Ubah.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
