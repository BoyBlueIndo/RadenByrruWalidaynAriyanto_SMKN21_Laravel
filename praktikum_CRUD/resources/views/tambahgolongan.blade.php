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
            <h3>Data Golongan</h3>

            <form action="/golongan/storetambah" method="post">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Golongan</label>
                    <input type="text" id="nama" name="nama" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="gaji" class="form-label">Gaji Pokok</label>
                    <input type="number" id="gaji" name="gaji" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="t_keluarga" class="form-label">Tunjangan Keluarga</label>
                    <input type="number" id="t_keluarga" name="t_keluarga" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="t_transport" class="form-label">Tunjangan Transport</label>
                    <input type="number" id="t_transport" name="t_transport" class="form-control" required="required">
                </div>

                <div class="mb-3">
                    <label for="t_makan" class="form-label">Tunjangan Makan</label>
                    <input type="number" id="t_makan" name="t_makan" class="form-control" required="required">
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                    <a href="/golongan" class="btn btn-danger">Batalkan</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
        