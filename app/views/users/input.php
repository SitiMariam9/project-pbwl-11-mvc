<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input User</title>
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

        input, select {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Input User</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo URL; ?>/users/save" method="post">
                <div class="form-group row">
                    <label for="user_email" class="col-sm-2 col-form-label">EMAIL</label>
                    <div class="col-sm-10">
                        <input type="email" name="user_email" id="user_email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_password" class="col-sm-2 col-form-label">PASSWORD</label>
                    <div class="col-sm-10">
                        <input type="password" name="user_password" id="user_password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_nama" id="user_nama" class="form-control" required>
                    </div>
                </div>
                <!-- Kolom tambahan -->
                <div class="form-group row">
                    <label for="user_alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_alamat" id="user_alamat" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_hp" class="col-sm-2 col-form-label">NO HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_hp" id="user_hp" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_pos" class="col-sm-2 col-form-label">POS</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_pos" id="user_pos" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_role" class="col-sm-2 col-form-label">ROLE</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_role" id="user_role" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_aktif" class="col-sm-2 col-form-label">AKTIF</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_aktif" id="user_aktif" class="form-control">
                    </div>
                </div>
                <!-- End of kolom tambahan -->
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
