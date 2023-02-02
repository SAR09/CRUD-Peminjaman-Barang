<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CRUD Peminjaman Barang</title>
  </head>
  <body>
    <div class="container mt-3">
          
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
      <h1 class="text-center mb-3">Edit Data Pinjaman</h1>
      <div class="card">
        <div class="card-body">
        <form action="{{route('pinjaman.update', $pinjaman->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$pinjaman->nama}}"id="nama" placeholder="Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="jenisbrng" class="form-label">Jenis Barang</label>
                <input type="text" class="form-control" name="jenisbarang" value="{{$pinjaman->jenisbarang}}" id="jenisbarang" placeholder="Jenis Barang">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No Telepon</label>
                <input type="text" class="form-control" name="nohp" value="{{$pinjaman->nohp}}" id="nohp" placeholder="Nomor Telepon">
            </div>
            <div class="mb-3">
             <label for="tglpinjam" class="col-form-label" >Tanggal Peminjaman</label>
             <input type="datetime-local" class="form-control" name="tglpinjaman" value="{{$pinjaman->tglpinjaman}}">
            </div>
            <div class="mb-3">
             <label for="tglkembalii" class=" col-form-label">Tanggal Pengembalian</label>
             <input type="datetime-local" class="form-control" name="tglkembali" value="{{$pinjaman->tglkembali}}">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('pinjaman.index')}}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
        </form> 
      </div>  
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    @push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    config = {
        enableTime: true,
        dateFormat: 'd-m-Y H:i',
    }

    flatpickr("input[type=datetime-local]");
</script>
@endpush
</body>

</html>