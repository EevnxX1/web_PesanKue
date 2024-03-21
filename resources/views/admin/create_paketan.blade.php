@extends('admin.layout2')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <form action="{{ route('paketan.store') }}" method="post">
                        @csrf
                        <div class="mb-4 form-group">
                          <h4>Tambah Data Pesanan Paketan</h4>
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Kode Antrian</label>
                            <input type="text" id="kodeAntrian" class="form-control" readonly name="kd_antrian">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Nama Produk</label>
                            <select name="nm_produk" class="form-control" id="namaProduk">
                                <option selected>~Pilih Nama Produk~</option>
                                @foreach ($produk as $produks)
                                    <option value="{{ $produks->nm_kue }}">{{ $produks->nm_kue }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Tanggal Pesanan</label>
                            <input type="date" class="form-control" name="tgl_pesanan">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Nama Customer</label>
                            <input type="text" class="form-control" name="nm_cus">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Qty</label>
                            <input type="number" class="form-control" name="qty" id="totalBeli">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Total</label>
                            <input type="text" class="form-control" readonly id="totalHarga" name="harga">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Keterangan</label>
                            <textarea name="ket" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
            const kodeAntrian = document.getElementById('kodeAntrian');
            const kodeAntrianId = @json($paketan->pluck('kd_antrian')->toArray());
            const idAntrian = @json($paketan->pluck('id')->toArray());
            if(!kodeAntrianId.length) {
              kodeAntrian.value = 'PAP-001';
            } else {
              let idKey = idAntrian.length + 1;
              kodeAntrian.value = 'PAP-00' + idKey;
            }

            const namaProduk = document.getElementById('namaProduk');
            const totalHarga = document.getElementById('totalHarga');
            const nmProdukId = @json($produk->pluck('nm_kue')->toArray());
            const hargaProduk = @json($produk->pluck('harga')->toArray());
            namaProduk.addEventListener('change', () => {
                let hargaReal = nmProdukId.indexOf(namaProduk.value);
                totalHarga.value = hargaProduk[hargaReal];
            })

            const totalBeli = document.getElementById('totalBeli');
            totalBeli.addEventListener('input', () => {
                let patokanNama = nmProdukId.indexOf(namaProduk.value);
                let totalReal = parseInt(totalBeli.value) * hargaProduk[patokanNama];
                if(!totalBeli.value) {
                    let hargaReal = nmProdukId.indexOf(namaProduk.value);
                    totalHarga.value = hargaProduk[hargaReal];
                } else {
                    if(totalBeli.value >= 50) {
                        let totalDiskon = totalReal * 0.05;
                        let afterDiskon = totalReal - totalDiskon;
                        totalHarga.value = afterDiskon;
                    } else if(totalBeli.value >= 100) {
                        let totalDiskon = totalReal * 0.1;
                        let afterDiskon = totalReal - totalDiskon;
                        totalHarga.value = afterDiskon;
                    } else if(totalBeli.value >= 200) {
                        let totalDiskon = totalReal * 0.2;
                        let afterDiskon = totalReal - totalDiskon;
                        totalHarga.value = afterDiskon;
                    } else if(totalBeli.value >= 250) {
                        let totalDiskon = totalReal * 0.25;
                        let afterDiskon = totalReal - totalDiskon;
                        totalHarga.value = afterDiskon;
                    } else {
                        totalHarga.value = 'PEMESANAN PAKET HARUS 50 PRODUK KEATAS!'
                    }
                }
            })
    </script>
@endsection