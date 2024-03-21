@extends('layout')
@section('content')


<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Ima's Cake & Bakery</h1>
          <h2>Kualitas dan kepuasan pelanggan adalah prioritas kami.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#contact" class="btn-get-started scrollto">Hubungi Kami</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/img/bolu.png')}}" class="img-fluid animated" alt="" width="450">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Produk</h2>
          <p>Ima's Cake & Bakery bergerak di bidang makanan yaitu pembuatan kue dan roti. Kami memilih usaha di bidang 
            makanan karena usaha ini disesuaikan dengan kebutuhan dan dengan skill  yang kami miliki serta 
            faktor pendukung yang memadai untuk megembangkan usaha ini.</p>
        </div>

        <br>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($produks as $produk) 
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
              <img src="{{ asset('assets/img/portfolio/'.$produk->gambar1)}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>{{ $produk->nm_kue }}<br><br>
            Rp.{{ number_format($produk->harga,0,',','.') }},00 <br><br></h4>

              <!-- isi deskripsi berikut -->
              <p>{{ $produk->ket }}</p>
              <a href="{{ asset('assets/img/portfolio/'.$produk->gambar1)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $produk->nm_kue }}"><i class="bx bx-plus"></i></a>
              <a href="{{ route('detail.page', ['id' => $produk->id]) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach

        </div>





      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>


        <div class="row content" style="text-align: center;">
         
            <p align="center">
             Ima's cake & bakery sudah berdiri sejak 10 tahun yang lalu. Kami nenyediakan berbagai macam menu cake dan roti dan kue bolu dan tahun dan kue pernikahan.
             Lokasi kami berada di depan SDN Sigendeng Jl.  Ciptomangunkusumo. 
            </p>
        
          <br>
<center>
  <div class="col-lg-6 pt-4 pt-lg-0">
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
</center>
          
    

      </div>
  
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Lainnya</h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Kenapa Harus Di Ima's Cake? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Karena di Ima's Cake banyak varian, bahan-bahan yang higienis yang mempunyai cita rasa tinggi dan harga yang pas .
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Ada Varian Saja Di Ima's Cake? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Varian Chocomalt Cake
                    <p>
                      Varian Roll Cake Mangga
                    <p>
                     Varian Bolu Ngeju
                    <p>
                     Varian Blackforest
                    <p>
                     Varian Strudel
                    <p>
                      Varian Cake Potong
                    <p>
                      Varian Roll Cake Premiun
                    <p>
                      Varian Double Choco Cake
                    <p>
                      Varian Bolen Pisang
                    <p>
                      Varian Soft Cookies
                    <p>
                      Varian Pudding
                    <p>
                      Varian Baby Strudel Isi 10
                    <p>
                      Varian Brownies
                    <p>
                      Varian Mochi
                    <p>
                      Varian Ice Cake Lumer
                    <p>
                      Varian Roll Abon sapi
                    <p>
                      Varian Lapis Palestine
                    <p>
                      Varian Roti Sisir/10 Slice
                    <p>
                      Varian Minuman
                    <p>
                      Varian Roti Susu Sobek
                    <p>
                      Varian Roti Mix/Cup
                    <p>
                      Varian Japanese Soft Cake
                    <p>
                      Varian Roti Bun
                    <p>
                      Varian Crossaint
                    <p>
                      Varian Lapis Surabaya
                    <p>
                      Varian Lapis Legit
                    <p>
                      Varian Butter Cake
                    <p>
                      Varian Aneka Cake Ultah
                    <p>
                      Varian Cheesecake
                    <p>
                      Varian Dessert
                    <p>
                      Varian Frozen Food
                    </p>
                  </p>
                </p>
              </p>
            </p>
          </p>
        </p>
      </p>
    </p>
  </p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
</p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Jam Buka <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Senin  : 08.00–17.00
                    <p>
                      Selasa : 08.00–17.00
                    <p>
                      Rabu   : 08.00–17.00
                    <p>
                      Kamis  : 08.00–17.00
                    <p>
                      Jum'at : 08.00–17.00
                    <p>
                      Sabtu  : 08.00–17.00
                    <p>
                      Minggu : Tutup
                    </p>
                  </p>
                </p>
              </p>
            </p>
          </p>
        </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/cake.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl.DR.Cipto Mangunkusumo No.47A,Kesambi,Kec.Kesambi,Kota Cirebon,Jawa Barat 45134</p>
              </div>

              <div class="telegram">
                <i class="bi bi-telegram"></i>
                <h4>Telegram:</h4>
                <p>@imacakecirebon</p>
              </div>

              <div class="whatsapp">
                <i class="bi bi-whatsapp"></i>
                <h4>WhatsApp:</h4>
                <p>081324300071</p>
              </div>

              <iframe src="https://www.google.com/maps/place/Ima's+Cake+%26+Bakery/@-6.7323078,108.547612,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f1d8db29fa29f:0xed66f19057e13146!8m2!3d-6.7323131!4d108.5501869!16s%2Fg%2F1hm35tg0f?hl=id&entry=ttu" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-whatsapp-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

          
        </div>

      <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
       
        </form>
      </div>
    </div>
  </div>
</div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection
