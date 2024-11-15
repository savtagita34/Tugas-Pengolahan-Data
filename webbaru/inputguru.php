<?php

// Include database connection
include "koneksidb.php"; 

// Check if the "simpan" button is clicked
if (isset($_POST['btnsimpan'])) {
    // Collect form data
    $Kode_Guru = mysqli_real_escape_string($koneksidb, $_POST['Kode_Guru']);
    $Nip_Guru = mysqli_real_escape_string($koneksidb, $_POST['Nip_Guru']);
    $Tempat_Lahir = mysqli_real_escape_string($koneksidb, $_POST['Tempat_Lahir']);
    $Jenis_Kelamin = mysqli_real_escape_string($koneksidb, $_POST['Jenis_Kelamin']);
    $Agama = mysqli_real_escape_string($koneksidb, $_POST['Agama']);
    $Nama_Guru = mysqli_real_escape_string($koneksidb, $_POST['Nama_Guru']);
    $Tanggal_Lahir = mysqli_real_escape_string($koneksidb, $_POST['Tanggal_Lahir']);
    $Status_Pegawai = mysqli_real_escape_string($koneksidb, $_POST['Status_Pegawai']);
    $Pendidikan_Terakhir = mysqli_real_escape_string($koneksidb, $_POST['Pendidikan_Terakhir']);
   
    // SQL query to insert data into the database
    $query = "INSERT INTO tb_dataguru (Kode_Guru, Nip_Guru, Tempat_Lahir, Jenis_Kelamin, Agama, Nama_Guru, Tanggal_Lahir, Status_Pegawai, Pendidikan_Terakhir)
              VALUES ('$Kode_Guru', '$Nip_Guru', '$Tempat_Lahir', '$Jenis_Kelamin', '$Agama', '$Nama_Guru', '$Tanggal_Lahir', '$Status_Pegawai', '$Pendidikan_Terakhir')";

    // Execute the query and check if the insertion is successful
    if (mysqli_query($koneksidb, $query)) {
        echo "<script> alert ('Berhasil Simpan Registrasi'); window.location.href='inputguru.php'; </script>";
    } else {
        echo "<script> alert ('Gagal Simpan Registrasi'); window.location.href='inputguru.php'; </script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styless.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 25%;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a.active {
            background-color: #04AA6D;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
    </style>
</head>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="container">
        <h2><u>Data Guru</u></h2>
        <form method="post" action="">
            <div class="row">
                <!-- Kolom Pertama -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Kode_Guru">Kode Guru</label>
                        <input type="text" id="Kode_Guru" name="Kode_Guru" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nip_Guru">Nip_Guru</label>
                        <input type="text" id="Nip_Guru" name="Nip_Guru" class="form-control" placeholder="Masukan Pendidikan Terakhir">
                    </div>
                    <div class="mb-3">
                        <label for="Tempat_Lahir">Tempat Lahir</label>
                        <input type="date" id="Tempat_Lahir" name="Tempat_Lahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="laki_laki" name="Jenis_Kelamin" value="Laki Laki" checked>
                            <label class="form-check-label" for="laki_laki">Laki Laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="perempuan" name="Jenis_Kelamin" value="Perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Agama">Agama</label>
                        <input type="text" id="Agama" name="Agama" class="form-control" required>
                    </div>
                   
                </div>
                
                <!-- Kolom Kedua -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Nama_Guru">Nama Guru</label>
                        <input type="text" id="Nama_Guru" name="Nama_Guru" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tanggal_Lahir">Tanggal Lahir</label>
                        <input type="date" id="Tanggal_Lahir" name="Tanggal_Lahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Status_Pegawai">Status Pegawai</label>
                        <input type="text" id="Status_Pegawai" name="Status_Pegawai" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Pendidikan_Terakhir">Pendidikan Terakhir</label>
                        <input type="text" id="Pendidikan_Terakhir" name="Pendidikan_Terakhir" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-warning" name="btnsimpan" type="submit">Simpan</button>
                <button class="btn btn-danger" type="reset">Reset</button>
                <button class="btn btn-secondary" onclick="history.back()">Kembali</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
