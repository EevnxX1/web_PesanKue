@extends('layout')
@section('content')
<div style="width: 100%; height: 170px; background-color: #d4244b">
</div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Produk Paketan</h2>
            <p></p>
          </div>
  
          <div class="row">
  
            <div class="card col-12 mt-5 mt-lg-0 d-flex p-4">
              <form action="/store2" method="post" role="form" class="php-whatsapp-form">
                @csrf
                <div class="form-group mb-4">
                    {{-- hiraukan input dibawah --}}
                    <input type="hidden" name="id_produk" value="{{ $data_produk->id }}">
                    {{-- hiraukan --}}
                  <label for="name" class="mb-1">Kode Antrian</label>
                  <input type="text" id="kodeAntrian" class="form-control" readonly name="kd_antrian">
                </div>
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Nama Produk</label>
                  <input type="text" class="form-control" name="nm_produk" id="namaProduk" readonly value="{{ $data_produk->nm_kue }}">
                </div>
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Tanggal Pesanan</label>
                  <input type="date" class="form-control" name="tgl_pesanan" required>
                </div>
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Nama Pemesan</label>
                  <input type="text" class="form-control" name="nm_cus" required>
                </div>
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Alamat</label>
                  <textarea class="form-control" name="alamat" rows="10" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="name" class="mb-1">Qty</label>
                    <input type="text" class="form-control" name="qty" id="totalBeli" required>
                  </div>
                <div class="form-group mb-4">
                    <label for="name" class="mb-1">Total</label>
                    <input type="text" class="form-control" name="harga" id="totalHarga" required>
                  </div>
                  <div class="form-group mb-4">
                    <label for="name" class="mb-1">Keterangan</label>
                    <textarea class="form-control" name="ket" rows="10" required></textarea>
                  </div>
                    <button type="submit" class="btn btn-primary">Pesan Produk</button>
              </form>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->
      <script>
            const kodeAntrian = document.getElementById('kodeAntrian');
            const kodeAntrianId = @json($paketan->pluck('kd_antrian')->toArray());
            const idAntrian = @json($paketan->pluck('id')->toArray());
            if(!kodeAntrianId.length) {
              kodeAntrian.value = 'PAS-001';
            } else {
              let idKey = idAntrian.length + 1;
              kodeAntrian.value = 'PAS-00' + idKey;
            }

            const totalBeli = document.getElementById('totalBeli');
            const nmProdukId = @json($data_produk->pluck('nm_kue')->toArray());
            const hargaProduk = @json($data_produk->pluck('harga')->toArray());
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