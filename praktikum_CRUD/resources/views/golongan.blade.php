<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - READ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ADD8E6;">
      <div class="container-fluid" >
        <a class="navbar-brand mx-auto" href="#">Selamat Datang di Website Official Perusahaan PT. Generik!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div class="container">
        <h2 class="my-4">CRUD - READ</h2>

        <a href="/golongan/tambah" class="btn btn-primary"> + Tambah Golongan Baru</a>

        <br/>
        <br/>

        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID Golongan</th>
                    <th>Nama Golongan</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Keluarga</th>
                    <th>Tunjangan Transport</th>
                    <th>Tunjangan Makan</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($golongan as $p)
                <tr>
                    <td> {{$p->golongan_id}} </td>
                    <td> {{$p->golongan_nama}} </td>
                    <td> {{$p->gaji_pokok}} </td>
                    <td> {{$p->tunjangan_keluarga}} </td>
                    <td> {{$p->tunjangan_transport}} </td>
                    <td> {{$p->tunjangan_makan}} </td>
                    <td>
                    <a href="/golongan/edit/{{ $p->golongan_id }}" class="btn btn-warning">Edit</a>

                    <a href="/golongan/hapus/{{ $p->golongan_id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/home" class="btn btn-primary">Home</a>
    </div>
</body>
</html>