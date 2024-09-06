<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Edit Data Gaji</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- Container to center content -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Edit Data Gaji</h3>

        @foreach($gaji as $p)
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="/gaji/update" method="post">
                    {{ csrf_field() }}

                    <!-- Hidden Inputs for IDs -->
                    <input type="hidden" name="id" value="{{ $p->gaji_id }}">
                    <input type="hidden" name="pegawai_id" value="{{ $p->pegawai_id_gaji }}">

                    <!-- Jumlah Gaji Field -->
                    <div class="mb-3">
                        <label for="j_gaji" class="form-label">Jumlah Gaji</label>
                        <input type="number" class="form-control" id="j_gaji" name="j_gaji" value="{{ $p->jumlah_gaji }}" required="required" placeholder="Masukkan jumlah gaji">
                    </div>

                    <!-- Jumlah Lembur Field -->
                    <div class="mb-3">
                        <label for="j_lembur" class="form-label">Jumlah Lembur</label>
                        <input type="text" class="form-control" id="j_lembur" name="j_lembur" value="{{ $p->jumlah_lembur }}" required="required" placeholder="Masukkan jumlah lembur">
                    </div>

                    <!-- Potongan Field -->
                    <div class="mb-3">
                        <label for="potong" class="form-label">Potongan</label>
                        <input type="number" class="form-control" id="potong" name="potong" value="{{ $p->potongan }}" required="required" placeholder="Masukkan potongan">
                    </div>

                    <!-- Gaji Diterima Field -->
                    <div class="mb-3">
                        <label for="di_gaji" class="form-label">Gaji Diterima</label>
                        <input type="number" class="form-control" id="di_gaji" name="di_gaji" value="{{ $p->gaji_diterima }}" required="required" placeholder="Masukkan gaji diterima">
                    </div>

                    <!-- Tanggal Gaji Field -->
                    <div class="mb-3">
                        <label for="t_gaji" class="form-label">Tanggal Gaji</label>
                        <input type="date" class="form-control" id="t_gaji" name="t_gaji" value="{{ $p->tanggal_gaji }}" required="required">
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between">
                        <input type="submit" class="btn btn-success" value="Simpan Perubahan">
                        <a href="/gaji" class="btn btn-danger">Batalkan</a>
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
