<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - READ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h3>Data Gaji</h3>

            <form action="/gaji/storetambah" method="post">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="pegawai_id_gaji" class="form-label">ID</label>
                    <input type="number" id="pegawai_id_gaji" name="pegawai_id_gaji" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="jumlah_gaji" class="form-label">Jumlah Gaji</label>
                    <input type="number" id="jumlah_gaji" name="jumlah_gaji" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="jumlah_lembur" class="form-label">Jumlah Lembur</label>
                    <input type="number" id="jumlah_lembur" name="jumlah_lembur" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="potongan" class="form-label">Potongan</label>
                    <input type="number" id="potongan" name="potongan" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="gaji_diterima" class="form-label">Gaji Diterima</label>
                    <input type="number" id="gaji_diterima" name="gaji_diterima" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="tanggal_gaji" class="form-label">Tanggal Gaji</label>
                    <input type="date" id="tanggal_gaji" name="tanggal_gaji" class="form-control" required="required">
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                    <a href="/gaji" class="btn btn-danger">Batalkan</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
