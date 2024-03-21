@extends('admin.layout2')
@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Pesanan Satuan</h6>
            </div>
            @if($message = Session::get('success'))
                  <div class="alert alert-success" style="width: 98%; margin: auto; color: white">
                    <p>{{ $message }}</p>
                  </div>
            @endif
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-4">
                
                <a href="{{ route('paketan.create') }}" class="btn btn-success" data-toggle="modal" data-target="#tambahDataModal">
                  + Tambah Data
                </a>
                
                <table class="table align-items-center mb-0">
                  
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Antrian</th>
                        <th>Nama Produk</th>
                        <th>Tanggal Pesanan</th>
                        <th>Nama Customer</th>
                        <th>Alamat</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Ket</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Kode Antrian</th>
                      <th>Nama Produk</th>
                      <th>Tanggal Pesanan</th>
                      <th>Nama Customer</th>
                      <th>Alamat</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th>Ket</th>
                      <th>Action</th> 
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($paketans as $paketan)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $paketan->kd_antrian }}</td>
                      <td>{{ $paketan->nm_produk }}</td>
                      <td>{{ $paketan->tgl_pesanan }}</td>
                      <td>{{ $paketan->nm_cus }}</td>
                      <td>{{ $paketan->alamat }}</td>
                      <td>{{ $paketan->qty }}</td>
                      <td>{{ $paketan->harga }}</td>
                      <td>{{ $paketan->ket }}</td>
                      <td>
                        <form action="{{ route('paketan.destroy', $paketan->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <a href="{{ route('paketan.edit', $paketan->id) }}" class="btn btn-warning">Edit</a>
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini...?')">Hapus</button>
                        </form>
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