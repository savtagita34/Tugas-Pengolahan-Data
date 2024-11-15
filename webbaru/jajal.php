<?php

// Include database connection
include "koneksidb.php"; 

// Check if the "simpan" button is clicked
if (isset($_POST['btnsimpan'])) {
    // Collect form data
    $NISN = mysqli_real_escape_string($koneksidb, $_POST['NISN']);
    $Kelas = mysqli_real_escape_string($koneksidb, $_POST['Kelas']);
    $Agama = mysqli_real_escape_string($koneksidb, $_POST['Agama']);
    $Jenis_Kelamin = mysqli_real_escape_string($koneksidb, $_POST['Jenis_Kelamin']);
    $Tahun_Masuk = mysqli_real_escape_string($koneksidb, $_POST['Tahun_Masuk']);
    $Nama_Siswa = mysqli_real_escape_string($koneksidb, $_POST['Nama_Siswa']);
    $Alamat = mysqli_real_escape_string($koneksidb, $_POST['Alamat']);
    $Tanggal_Lahir = mysqli_real_escape_string($koneksidb, $_POST['Tanggal_Lahir']);
    $Nomor_Telepon = mysqli_real_escape_string($koneksidb, $_POST['Nomor_Telepon']);
    $Tempat_Lahir = mysqli_real_escape_string($koneksidb, $_POST['Tempat_Lahir']);

    // SQL query to insert data into the database
    $query = "INSERT INTO tb_webbaru (NISN, Kelas, Agama, Jenis_Kelamin, Tahun_Masuk, Nama_Siswa, Alamat, Tanggal_Lahir, Nomor_Telepon, Tempat_Lahir)
              VALUES ('$NISN', '$Kelas', '$Agama', '$Jenis_Kelamin', '$Tahun_Masuk', '$Nama_Siswa', '$Alamat', '$Tanggal_Lahir', '$Nomor_Telepon', '$Tempat_Lahir')";

    // Execute the query and check if the insertion is successful
    if (mysqli_query($koneksidb, $query)) {
        echo "<script> alert ('Berhasil Simpan Registrasi'); window.location.href='jajal.php'; </script>";
    } else {
        echo "<script> alert ('Gagal Simpan Registrasi'); window.location.href='jajal.php'; </script>";
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
        <h2><u>Data Siswa</u></h2>
        <form method="post" action="">
            <div class="row">
                <!-- Kolom Pertama -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="NISN">NISN</label>
                        <input type="text" id="NISN" name="NISN" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Kelas">Kelas</label>
                        <select class="form-select" name="Kelas" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            <option value="10 AK 1">10 AK 1</option>
                            <option value="10 AK 2">10 AK 2</option>
                            <option value="10 AK 1">10 AK 3</option>
                            <option value="10 AK 2">10 Farmasi</option>
                            <option value="10 AK 1">10 PPLG</option>
                            <option value="10 AK 2">11 AK 1</option>
                            <option value="10 AK 1">11 AK 2</option>
                            <option value="10 AK 2">11 Farmasi</option>
                            <option value="10 AK 1">11 PPLG</option>
                            <option value="10 AK 2">12 AK 1</option>
                            <option value="10_AK_1">12 AK 2</option>
                            <option value="10_AK_2">12 AK 3</option>
                            <option value="10_AK_1">12 Farmasi</option>
                            <option value="10_AK_2">12 PPLG</option>
                            <!-- Tambahkan opsi lainnya di sini -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Agama">Agama</label>
                        <input type="text" id="Agama" name="Agama" class="form-control" required>
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
                        <label for="Tahun_Masuk">Tahun Masuk</label>
                        <input type="date" id="Tahun_Masuk" name="Tahun_Masuk" class="form-control" required>
                    </div>
                </div>
                
                <!-- Kolom Kedua -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Nama_Siswa">Nama Siswa</label>
                        <input type="text" id="Nama_Siswa" name="Nama_Siswa" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Alamat">Alamat</label>
                        <input type="text" id="Alamat" name="Alamat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tanggal_Lahir">Tanggal Lahir</label>
                        <input type="date" id="Tanggal_Lahir" name="Tanggal_Lahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nomor_Telepon">Nomor Telepon</label>
                        <input type="text" id="Nomor_Telepon" name="Nomor_Telepon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tempat_Lahir">Tempat Lahir</label>
                        <input type="text" id="Tempat_Lahir" name="Tempat_Lahir" class="form-control" required>
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
