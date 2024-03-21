@extends('layout')
@section('content')
<div style="width: 100%; height: 170px; background-color: #d4244b">
</div>
  <main id="main" style="margin-top: -70px">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Detail</li>
        </ol>
        <h2>{{ $data_produk->nm_kue }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                @if ($data_produk->gambar1 == '')
                ""
                @else
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/portfolio/'.$data_produk->gambar1) }}" alt="">
                  </div>
                @endif

                @if ($data_produk->gambar2 == '')
                ""
                @else
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/portfolio/'.$data_produk->gambar2) }}" alt="">
                  </div>
                @endif

                @if ($data_produk->gambar3 == '')
                ""
                @else
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/portfolio/'.$data_produk->gambar3) }}" alt="">
                  </div>
                @endif

                @if ($data_produk->gambar4 == '')
                ""
                @else
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/portfolio/'.$data_produk->gambar4) }}" alt="">
                  </div>
                @endif


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Product Information</h3>
              <ul>
                <li><strong>Nama Produk</strong>: {{ $data_produk->nm_kue }}</li>
                <li><strong>Harga</strong>: Rp. {{ number_format($data_produk->harga,0,',','.') }},00</li>
                <li><strong>Rasa</strong>: {{ $data_produk->rasa }}</li>
                <li><strong>Keterangan</strong>: <br>
                    {{ $data_produk->ket }}
                </li>
                <li class="mt-4"><button style="padding: 10px 40px; font-weight: bold; color: white; border: 1px solid #dc3545; background-color: #dc3545; border-radius: 50px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Pesan Sekarang</button></li>
              </ul>
              @if($message = Session::get('success'))
                    <div class="alert alert-success">
                      <p>{{ $message }}</p>
                    </div>
                  @endif
            </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Pilih Menu Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Kami Menyediakan Produk Untuk satuan Dan Paket. Perlu di ingat jika anda membeli kurang dari 50 anda harus membeli satuan!, jika anda membeli lebih dari 50 anda dapat memilih menu paket!.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-warning" href="{{ route('create.page', ['id' => $data_produk->id]) }}">Produk Satuan</a>
        <a type="button" class="btn btn-primary" href="{{ route('create2.page', ['id' => $data_produk->id]) }}">Produk Paketan</a>
      </div>
    </div>
  </div>
</div>

  </main><!-- End #main -->

@endsection