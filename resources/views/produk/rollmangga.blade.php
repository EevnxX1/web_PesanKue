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
        <h2>Roll Cake Mangga Original</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                  <img src="assets/img/portfolio/1 (11).jpeg" alt="">
                </div>

                <div class="swiper-slide">
                <img src="assets/img/portfolio/1 (13).jpeg" alt="">
                </div>

                <div class="swiper-slide">
                <img src="assets/img/portfolio/1 (14).jpeg" alt="">
                </div>

                
                <div class="swiper-slide">
                <img src="assets/img/portfolio/1 (16).jpeg" alt="">
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Product Information</h3>
              <ul>
                <li><strong>Nama Produk</strong>: Roll Cake Mangga Original</li>
                <li><strong>Harga</strong>: Rp. 50.000,00</li>
                <li><strong>Rasa</strong>: Mangga.</li>
                <li><strong>Keterangan</strong>: <br>
                  Cake gulung aroma khas mangga yang lembut/moist dengan isian selai buah mangga gedong asli homemade.
                </li>
                <li class="mt-4"><button style="padding: 10px 40px; font-weight: bold; color: white; border: 1px solid #dc3545; background-color: #dc3545; border-radius: 50px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Pesan Sekarang</button></li>
              </ul>
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
        <a type="button" class="btn btn-warning" href="/form-produk">Produk Satuan</a>
        <a type="button" class="btn btn-primary" href="/form-produk">Produk Paketan</a>
      </div>
    </div>
  </div>
</div>

  </main><!-- End #main -->

@endsection