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

        <a href="/gaji/tambah" class="btn btn-primary"> + Tambah Gaji Baru</a>

        <br/>
        <br/>

        <table border="1" class="table table-striped">
            <thead>
                <tr>
                    <th>ID Gaji</th>
                    <th>Gaji Pegawai(ID)</th>
                    <th>Jumlah Gaji</th>
                    <th>Jumlah Lembur</th>
                    <th>Potongan</th>
                    <th>Gaji Diterima</th>
                    <th>Tanggal Gaji</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($gaji as $p)
            <tr>
                <td> {{$p->gaji_id}} </td>
                <td> {{$p->pegawai_id_gaji}} </td>
                <td> {{$p->jumlah_gaji}} </td>
                <td> {{$p->jumlah_lembur}} </td>
                <td> {{$p->potongan}} </td>
                <td> {{$p->gaji_diterima}} </td>
                <td> {{$p->tanggal_gaji}} </td>
                <td>
                <a href="/gaji/edit/{{ $p->gaji_id }}" class="btn btn-warning">Edit</a>
                |
                <a href="/gaji/hapus/{{ $p->gaji_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <a href="/home" class="btn btn-primary">Home</a>
    </div>
</body>
</html>