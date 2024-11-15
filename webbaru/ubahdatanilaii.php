<?php
// Panggil koneksi database
include "koneksidb.php";
$tampil = mysqli_query($koneksidb, "SELECT * FROM tb_datanilai where id = '$_GET[id]'");
$data = mysqli_fetch_array($tampil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Ubah Data</title>
</head>

<body>
    <form method="POST" name="ubah">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center">Ubah Data </h2>
            <div class="col-md-6 mx-auto">
                <div class="mb-2">
                    <label for="Nama_Siswa">Nama Siswa</label>
                    <input type="text" class="form-control" name="Nama_Siswa" value="<?php echo $data['Nama_Siswa']; ?>">
                </div>
                <div class="mb-2">
                    <label for="Kelas">Kelas</label>
                    <input type="text" class="form-control" name="Kelas" value="<?php echo $data['Kelas']; ?>">
                </div>
                <div class="mb-2">
                    <label for="Kode_Nilai">Kode Nilai</label>
                    <input type="text" class="form-control" name="Kode_Nilai" value="<?php echo $data['Kode_Nilai']; ?>">
                </div>
                <div class="mb-2">
                <label for="Nilai_Ulangan_Harian"> Nilai Ulangan Harian</label>
                <input type="text" class="form-control" name="Nilai_Ulangan_Harian" value="<?php echo htmlspecialchars($data['Nilai_Ulangan_Harian']); ?>">
            </div>
            <div class="mb-2">
                <label for="Nilai_Ujian_Praktek"> Nilai Ujian Praktek</label>
                <input type="text" class="form-control" name="Nilai_Ujian_Praktek" value="<?php echo htmlspecialchars($data['Nilai_Ujian_Praktek']); ?>">
            </div>
            <div class="mb-2">
                <label for="Nilai_PTS"> Nilai PTS</label>
                <input type="text" class="form-control" name="Nilai_PTS" value="<?php echo htmlspecialchars($data['Nilai_PTS']); ?>">
            </div>
            <div class="mb-2">
                <label for="Nilai_PAS"> Nilai PAS</label>
                <input type="text" class="form-control" name="Nilai_PAS" value="<?php echo htmlspecialchars($data['Nilai_PAS']); ?>">
            </div>
            <div class="mb-2">
                <label for="Nilai_PAT"> Nilai PAT</label>
                <input type="text" class="form-control" name="Nilai_PAT" value="<?php echo htmlspecialchars($data['Nilai_PAT']); ?>">
            </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" name="btubah" type="submit">Simpan</button>
                <a href="datamember.php">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-danger" type="button">Batal</button>
                    </div>
                </a>
            </div>
        </div>
    </form>
</body>

</html>
<?php
include "koneksidb.php";
// Uji jika tombol ubah diklik
if (isset($_POST['btubah'])) {
    // Persiapan ubah data
    $ubah = mysqli_query($koneksidb, "UPDATE tb_datanilai SET
    Nama_Siswa = '$_POST[Nama_Siswa]',
    Kelas = '$_POST[Kelas]',
    Kode_Nilai = '$_POST[Kode_Nilai]',
    Nilai_Ulangan_Harian = '$_POST[Nilai_Ulangan_Harian]',
     Nilai_Ujian_Praktek = '$_POST[Nilai_Ujian_Praktek]',
      Nilai_PTS = '$_POST[Nilai_PTS]',
      Nilai_PAS = '$_POST[Nilai_PAS]',
      Nilai_PAT = '$_POST[Nilai_PAT]'
    WHERE id = '$_GET[id]'
");


    // Jika ubah sukses
    if ($ubah) {
        echo "<script> alert ('Ubah Data Berhasil');
    document.location='DataNilaiSiswa.php';
    </script>";
    } else {
        echo "<script> alert ('Ubah Data Gagal');
    document.location='DataNilaiSiswa.php';
    </script>";
    }
}
?>