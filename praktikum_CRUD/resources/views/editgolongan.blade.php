<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Edit Data Golongan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- Container to center content -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Edit Data Golongan</h3>

        @foreach($golongan as $p)
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="/golongan/update" method="post">
                    {{ csrf_field() }}

                    <!-- Hidden Input for ID -->
                    <input type="hidden" name="id" value="{{ $p->golongan_id }}">

                    <!-- Nama Golongan Field -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Golongan</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->golongan_nama }}" required="required" placeholder="Masukkan nama golongan">
                    </div>

                    <!-- Gaji Field -->
                    <div class="mb-3">
                        <label for="gaji" class="form-label">Gaji Pokok</label>
                        <input type="text" class="form-control" id="gaji" name="gaji" value="{{ $p->gaji_pokok }}" required="required" placeholder="Masukkan gaji pokok">
                    </div>

                    <!-- Tunjangan Keluarga Field -->
                    <div class="mb-3">
                        <label for="t_keluarga" class="form-label">Tunjangan Keluarga</label>
                        <input type="text" class="form-control" id="t_keluarga" name="t_keluarga" value="{{ $p->tunjangan_keluarga }}" required="required" placeholder="Masukkan tunjangan keluarga">
                    </div>

                    <!-- Tunjangan Transport Field -->
                    <div class="mb-3">
                        <label for="t_transport" class="form-label">Tunjangan Transport</label>
                        <input type="number" class="form-control" id="t_transport" name="t_transport" value="{{ $p->tunjangan_transport }}" required="required" placeholder="Masukkan tunjangan transport">
                    </div>

                    <!-- Tunjangan Makan Field -->
                    <div class="mb-3">
                        <label for="t_makan" class="form-label">Tunjangan Makan</label>
                        <input type="number" class="form-control" id="t_makan" name="t_makan" value="{{ $p->tunjangan_transport }}" required="required" placeholder="Masukkan tunjangan makan">
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between">
                        <input type="submit" class="btn btn-success" value="Simpan Perubahan">
                        <a href="/golongan" class="btn btn-danger">Batalkan</a>
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
