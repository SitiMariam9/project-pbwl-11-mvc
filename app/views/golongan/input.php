<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Golongan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        .container {
            margin-top: 30px;
        }

        .card {
            width: 135%;
            margin: auto;
        }

        .card-header {
            background-color: #1a6ed8;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #1a6ed8;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1e7ff5;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Input Golongan</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo URL; ?>/golongan/save" method="post">
                <div class="form-group row">
                    <label for="gol_kode" class="col-sm-2 col-form-label">KODE</label>
                    <div class="col-sm-8">
                        <select name="gol_kode" id="gol_kode" class="form-control" required>
                            <option value="R-1">R-1</option>
                            <option value="R-2">R-2</option>
                            <option value="R-3">R-3</option>
                            <option value="R-4">R-4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gol_nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-8">
                        <input type="text" name="gol_nama" id="gol_nama" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <button type="submit" name="btn_save" class="btn btn-primary">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
