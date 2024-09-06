<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Data Lembur</title>

    <!-- Bootstrap CSS -->
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

    <!-- Container for content -->
    <div class="container my-5">
        <h2 class="mb-4">CRUD - READ</h2>

        <!-- Add New Data Button -->
        <a href="/lembur/tambah" class="btn btn-primary mb-3">+ Tambah Lembur Baru</a>

        <!-- Table for displaying data -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID Lembur</th>
                        <th>Pegawai (ID)</th>
                        <th>Bulan Lembur</th>
                        <th>Jumlah Lembur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($lembur as $p)
                <tr>
                    <td>{{ $p->lembur_id }}</td>
                    <td>{{ $p->pegawai_id_lembur }}</td>
                    <td>{{ $p->bulan_lembur }}</td>
                    <td>{{ $p->jumlah_lembur }}</td>
                    <td>
                        <a href="/lembur/edit/{{ $p->lembur_id }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/lembur/hapus/{{ $p->lembur_id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Home Button -->
        <a href="/home" class="btn btn-primary">Home</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
