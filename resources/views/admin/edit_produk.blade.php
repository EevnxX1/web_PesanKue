@extends('admin.layout2')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <form action="{{ route('data_produk.update', $data_produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4 form-group">
                          <h4>Edit Data Produk</h4>
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Kode Kue</label>
                            <input type="text" class="form-control" name="kd_kue" value="{{ $data_produk->kd_kue }}">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Nama Kue</label>
                            <input type="text" class="form-control" name="nm_kue" value="{{ $data_produk->nm_kue }}">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Harga Kue</label>
                            <input type="number" class="form-control" name="harga" value="{{ $data_produk->harga }}">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Rasa Kue</label>
                            <input type="text" class="form-control" name="rasa" value="{{ $data_produk->rasa }}">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Keterangan</label>
                            <textarea name="ket" class="form-control" cols="30" rows="10">{{ $data_produk->ket }}</textarea>
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Gambar 1</label>
                            <input type="file" class="form-control" name="gambar1">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Gambar 2</label>
                            <input type="file" class="form-control" name="gambar2">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Gambar 3</label>
                            <input type="file" class="form-control" name="gambar3">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Gambar 4</label>
                            <input type="file" class="form-control" name="gambar4">
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection