@extends('admin.layout2')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Data Penjualan Paket</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-4">
              
              <button type="button" herf="../create.blade.php" class="btn btn-success" data-toggle="modal" data-target="#tambahDataModal">
                + Tambah Data
              </button>
              
              <table class="table align-items-center mb-0">
                
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Kode Antrian</th>
                      <th>Nama Customer</th>
                      <th>Tanggal Pesanan</th>
                      <th>Nama Pesanan</th>
                      <th>Harga</th>
                      <th>Total</th>
                      <th>Foto</th>
                      <th>Ket</th>
                      <th>Action</th>
                  </tr>
                </thead>
              <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Kode Antrian</th>
                    <th>Nama Customer</th>
                    <th>Tanggal Pesanan</th>
                    <th>Nama Pesanan</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Foto</th>
                    <th>Ket</th>
                    <th>Action</th> 
                  </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>

{{-- <tbody>
@foreach($penjualans as $penjualan)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $penjualan->kode_antrian }}</td>
<td>{{ $penjualan->nama_customer }}</td>
<td>{{ $penjualan->tgl_pesanan }}</td>
<td>{{ $penjualan->nama_pesanan }}</td>
<td>{{ $penjualan->harga }}</td>
<td>{{ $penjualan->total }}</td>
<td><img src="{{ url ('/data_foto/'.$kendaraan->gambar) }}" width="100"></td>
<td>{{ $penjualan->ket}}</td>

<td>
   <form action="{{ route('penjualan.destroy',$penjualan->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <a class="btn btn-warning" href="{{ route('penjualan.edit',$penjualan->id)}}">Edit</a>
      <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Are You Sure to Delete this Data?')">Delete</button>
   </form>
</td>
</tr>

@endforeach
</tbody> --}}





              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
