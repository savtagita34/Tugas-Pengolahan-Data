<?php
// Include database connection
include "koneksidb.php";

// Check if the "simpan" button is clicked
if (isset($_POST['btnsimpan'])) {
    // Collect form data
    $Kode_Nilai = mysqli_real_escape_string($koneksidb, $_POST['Kode_Nilai']);
    $Nama_Siswa = mysqli_real_escape_string($koneksidb, $_POST['Nama_Siswa']);
    $Mata_Pelajaran = mysqli_real_escape_string($koneksidb, $_POST['Mata_Pelajaran']);
    $Kelas = mysqli_real_escape_string($koneksidb, $_POST['Kelas']);
    $Nama_Guru = mysqli_real_escape_string($koneksidb, $_POST['Nama_Guru']);
    $Nilai_Ulangan_Harian = mysqli_real_escape_string($koneksidb, $_POST['Nilai_Ulangan_Harian']);
    $Nilai_Ujian_Praktek = mysqli_real_escape_string($koneksidb, $_POST['Nilai_Ujian_Praktek']);
    $Nilai_PTS = mysqli_real_escape_string($koneksidb, $_POST['Nilai_PTS']);
    $Nilai_PAS = mysqli_real_escape_string($koneksidb, $_POST['Nilai_PAS']);
    $Nilai_PAT = mysqli_real_escape_string($koneksidb, $_POST['Nilai_PAT']);

    // SQL query to insert data into the database
    $query = "INSERT INTO tb_datanilai (Kode_Nilai, Nama_Siswa, Mata_Pelajaran, Kelas, Nama_Guru, Nilai_Ulangan_Harian, Nilai_Ujian_Praktek, Nilai_PTS, Nilai_PAS, Nilai_PAT)
              VALUES ('$Kode_Nilai', '$Nama_Siswa', '$Mata_Pelajaran', '$Kelas', '$Nama_Guru', '$Nilai_Ulangan_Harian', '$Nilai_Ujian_Praktek', '$Nilai_PTS', '$Nilai_PAS', '$Nilai_PAT')";

    // Execute the query and check if the insertion is successful
    if (mysqli_query($koneksidb, $query)) {
        echo "<script> alert ('Berhasil Simpan Registrasi'); window.location.href='inputnilai.php'; </script>";
    } else {
        echo "<script> alert ('Gagal Simpan Registrasi'); window.location.href='inputnilai.php'; </script>";
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
<body>
    <div class="container">
        <h2><u>Data Nilai Siswa</u></h2>
        <form method="post" action="">
            <div class="row">
                <!-- Kolom Pertama -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Kode_Nilai">Kode Nilai</label>
                        <input type="text" id="Kode_Nilai" name="Kode_Nilai" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nama_Siswa">Nama Siswa</label>
                        <input type="text" id="Nama_Siswa" name="Nama_Siswa" class="form-control" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="Mata_Pelajaran">Mata Pelajaran</label>
                        <select class="form-select" name="Mata_Pelajaran" required>
                            <option value="" disabled selected>Pilih Mapel</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Bahasa Sunda">Bahasa Sunda</option>
                            <option value="Sejarah">Sejarah</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Agama">Agama</option>
                            <option value="PJOK">PJOK</option>
                            <option value="PKK">PKK</option>
                            <option value="PBO">PBO</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Pemograman Web">Pemograman Web</option>
                            <option value="PKK Praktik">PKK Praktik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Kelas">Kelas</label>
                        <select class="form-select" name="Kelas" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            <option value="10 AK 1">10 AK 1</option>
                            <option value="10 AK 2">10 AK 2</option>
                            <option value="10 AK 3">10 AK 3</option>
                            <option value="10 Farmasi">10 Farmasi</option>
                            <option value="10 PPLG">10 PPLG</option>
                            <option value="11 AK 1">11 AK 1</option>
                            <option value="11 AK 2">11 AK 2</option>
                            <option value="11 Farmasi">11 Farmasi</option>
                            <option value="11 PPLG">11 PPLG</option>
                            <option value="12 AK 1">12 AK 1</option>
                            <option value="12 AK 2">12 AK 2</option>
                            <option value="12 AK 3">12 AK 3</option>
                            <option value="12 Farmasi">12 Farmasi</option>
                            <option value="12 PPLG">12 PPLG</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Nama_Guru">Nama Guru</label>
                        <input type="text" id="Nama_Guru" name="Nama_Guru" class="form-control" required>
                    </div>
                </div>
                
                <!-- Kolom Kedua -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Nilai_Ulangan_Harian">Nilai Ulangan Harian</label>
                        <input type="text" id="Nilai_Ulangan_Harian" name="Nilai_Ulangan_Harian" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nilai_Ujian_Praktek">Nilai Ujian Praktek</label>
                        <input type="text" id="Nilai_Ujian_Praktek" name="Nilai_Ujian_Praktek" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nilai_PTS">Nilai PTS</label>
                        <input type="text" id="Nilai_PTS" name="Nilai_PTS" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nilai_PAS">Nilai PAS</label>
                        <input type="text" id="Nilai_PAS" name="Nilai_PAS" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nilai_PAT">Nilai PAT</label>
                        <input type="text" id="Nilai_PAT" name="Nilai_PAT" class="form-control" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle
