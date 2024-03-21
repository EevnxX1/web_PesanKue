<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
   Ima's Cake & Bakery Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>


   
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Penjualan</h6>
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
                        <th>Nama Pesanan</th>
                        <th>Harga</th>
                        <th>Foto Pesanan</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                <tfoot
          
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
<tbody>
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
</tbody>





                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>