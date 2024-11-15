<?php
// Panggil koneksi database
include "koneksidb.php";
// Persiapan hapus data
if (isset($_POST['bhapus2'])) {
    // Persiapan ubah data
    $hapus = mysqli_query($koneksidb, "DELETE FROM tb_datanilai WHERE Nama_Siswa = '$_POST[Nama_Siswa]'");
    // Jika ubah sukses
    if ($hapus) {
        echo "<script> alert ('Hapus Data Berhasil');
        document.location='DataNilaiSiswa.php';
        </script>";
    } else {
        echo "<script> alert ('Hapus Data Gagal');
        document.location='DataNilaiSiswa.php';
        </script>";
    }
}
?>