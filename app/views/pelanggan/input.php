<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pelanggan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        .container {
            margin-top: 15px;
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

        /* select, input, textarea {
            margin-top: 10px;
        } */
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Input Pelanggan</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo URL; ?>/pelanggan/save" method="post">
                <div class="form-group row">
                    <label for="pel_id_gol" class="col-sm-2 col-form-label">GOLONGAN</label>
                    <div class="col-sm-10">
                        <select name="pel_id_gol" id="pel_id_gol" class="form-control">
                            <?php foreach ($data['optgol'] as $opt) { ?>
                                <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_nama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_no" class="col-sm-2 col-form-label">NO PELANGGAN</label>
                    <div class="col-sm-10">
                        <input type="text" name="pel_no" id="pel_no" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_nama" class="col-sm-2 col-form-label">NAMA PELANGGAN</label>
                    <div class="col-sm-10">
                        <input type="text" name="pel_nama" id="pel_nama" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-10">
                        <textarea name="pel_alamat" id="pel_alamat" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_hp" class="col-sm-2 col-form-label">NO HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="pel_hp" id="pel_hp" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_ktp" class="col-sm-2 col-form-label">KTP</label>
                    <div class="col-sm-10">
                        <input type="text" name="pel_ktp" id="pel_ktp" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_seri" class="col-sm-2 col-form-label">SERI METERAN</label>
                    <div class="col-sm-10">
                        <input type="text" name="pel_seri" id="pel_seri" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_meteran" class="col-sm-2 col-form-label">METERAN</label>
                    <div class="col-sm-10">
                        <input type="text" name="pel_meteran" id="pel_meteran" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_aktif" class="col-sm-2 col-form-label">AKTIF</label>
                    <div class="col-sm-10">
                        <select name="pel_aktif" id="pel_aktif" class="form-control">
                            <option value="Y">Ya</option>
                            <option value="N">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pel_id_user" class="col-sm-2 col-form-label">USER</label>
                    <div class="col-sm-10">
                        <select name="pel_id_user" id="pel_id_user" class="form-control">
                            <?php
                            if (isset($data['optuser'])) {
                                foreach ($data['optuser'] as $opt) {
                                    echo "<option value=\"{$opt['user_id']}\">{$opt['user_nama']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
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
