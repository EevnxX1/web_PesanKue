@extends('layout')
@section('content')
<div style="width: 100%; height: 170px; background-color: #d4244b">
</div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Produk Satuan</h2>
            <p></p>
          </div>
  
          <div class="row">
  
            <div class="card col-12 mt-5 mt-lg-0 d-flex p-4">
              <form action="forms/contact.php" method="post" role="form" class="php-whatsapp-form">
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Subject</label>
                  <input type="date" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Subject</label>
                  <input type="file" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Subject</label>
                  <select name="" class="form-control" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                  </select>
                </div>
                <div class="form-group mb-4">
                  <label for="name" class="mb-1">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Pesan Produk</button>
              </form>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->
@endsection