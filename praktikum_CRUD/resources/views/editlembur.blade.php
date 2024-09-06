<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Edit Data Lembur</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- Container to center content -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Edit Data Lembur</h3>

        @foreach($lembur as $p)
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="/lembur/update" method="post">
                    {{ csrf_field() }}

                    <!-- Hidden Input for ID -->
                    <input type="hidden" name="pegawai_id_lembur" value="{{ $p->pegawai_id_lembur }}">

                    <!-- Bulan Lembur Field -->
                    <div class="mb-3">
                        <label for="b_lembur" class="form-label">Bulan Lembur</label>
                        <input type="text" class="form-control" id="b_lembur" name="b_lembur" value="{{ $p->bulan_lembur }}" required="required" placeholder="Masukkan bulan lembur">
                    </div>

                    <!-- Jumlah Lembur Field -->
                    <div class="mb-3">
                        <label for="j_lembur" class="form-label">Jumlah Lembur</label>
                        <input type="number" class="form-control" id="j_lembur" name="j_lembur" value="{{ $p->jumlah_lembur }}" required="required" placeholder="Masukkan jumlah lembur (jam)">
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between">
                        <input type="submit" class="btn btn-success" value="Simpan Perubahan">
                        <a href="/lembur" class="btn btn-danger">Batalkan</a>
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
