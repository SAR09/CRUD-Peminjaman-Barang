<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Peminjaman Barang</title>
  </head>
  <body>
    <div class="container mt-3">
      <h1 class="text-center mb-3">Data Pinjaman</h1>
      <a href="{{route('pinjaman.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <th>NO</th>
              <th>Nama</th>
              <th>JENIS BARANG</th>
              <th>NO TELEPON</th>
              <th>TANGGAL PINJAM</th>
              <th>TANGGAL PENGEMBALIAN</th> 
              <th>AKSI</th>
            </thead>
            <tbody>
              @foreach($pinjaman as $no => $hasil)
                <tr>
                  <th>{{$no+1}}</th>
                  <td>{{$hasil->nama}}</td>
                  <td>{{$hasil->jenisbarang}}</td>
                  <td>{{$hasil->nohp}}</td>
                  <td>{{$hasil->tglpinjaman}}</td>
                  <td>{{$hasil->tglkembali}}</td>
                  <td>
                    <form action="{{ route('pinjaman.destroy',$hasil->id) }}" onsubmit="return confirm('Yakin hapus data?')" method="Post">
                      <a href="{{ route('pinjaman.edit', $hasil->id)}}" class="btn btn-success btn-sm" >Edit</a>
                      @csrf
                      @method('DELETE')
                      <button onclick="hapus()" class="btn btn-danger btn-sm" onclick="show_alert();">Hapus</button>
                    
                    </form>
                  </td>
                </tr> 
              @endforeach
            </tbody>
          </table>
        </div>  
      </div>  
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>