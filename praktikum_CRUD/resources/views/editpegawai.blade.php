<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Edit Data Pegawai</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- Container to center content -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Edit Data Pegawai</h3>

        @foreach($pegawai as $p)
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="/pegawai/update" method="post">
                    {{ csrf_field() }}

                    <!-- Hidden Input for ID -->
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

                    <!-- Nama Field -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}" required="required" placeholder="Masukkan nama lengkap">
                    </div>

                    <!-- Jabatan Field -->
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}" required="required" placeholder="Masukkan jabatan">
                    </div>

                    <!-- Umur Field -->
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}" required="required" placeholder="Masukkan umur">
                    </div>

                    <!-- Alamat Field -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required="required" placeholder="Masukkan alamat">{{ $p->pegawai_alamat }}</textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between">
                        <input type="submit" class="btn btn-success" value="Simpan Perubahan">
                        <a href="/pegawai" class="btn btn-danger">Batalkan</a>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
