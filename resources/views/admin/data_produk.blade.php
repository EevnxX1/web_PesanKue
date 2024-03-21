@extends('admin.layout2')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Data Produk</h6>
          </div>
          @if($message = Session::get('success'))
                  <div style="color: white; font-weight: bold; text-align: center" class="alert alert-success">
                    <p>{{ $message }}</p>
                  </div>
        @endif
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-4">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Kode Kue</th>
                      <th>Nama Kue</th>
                      <th>Harga</th>
                      <th>Rasa</th>
                      <th>ket</th>
                      <th>Foto 1</th>
                      <th>Foto 2</th>
                      <th>Foto 3</th>
                      <th>Foto 4</th>
                      <th>Action</th>
                  </tr>
                </thead>
              <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Kode Kue</th>
                    <th>Nama Kue</th>
                    <th>Harga</th>
                    <th>Rasa</th>
                    <th>ket</th>
                    <th>Foto 1</th>
                    <th>Foto 2</th>
                    <th>Foto 3</th>
                    <th>Foto 4</th>
                    <th>Action</th> 
                  </tr>
              </tfoot>
              <tbody>
                @foreach ($produks as $produk)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $produk->kd_kue }}</td>
                  <td>{{ $produk->nm_kue }}</td>
                  <td>{{ $produk->harga }}</td>
                  <td>{{ $produk->rasa }}</td>
                  <td>{{ $produk->ket }}</td>
                  <td><img width="70px" src="{{ asset('assets/img/portfolio/'.$produk->gambar1) }}" alt=""></td>
                  <td><img width="70px" src="{{ asset('assets/img/portfolio/'.$produk->gambar2) }}" alt=""></td>
                  <td><img width="70px" src="{{ asset('assets/img/portfolio/'.$produk->gambar3) }}" alt=""></td>
                  <td><img width="70px" src="{{ asset('assets/img/portfolio/'.$produk->gambar4) }}" alt=""></td>
                  <td>
                    <a href="{{ route('data_produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection