<?php
// Panggil koneksi database
include "koneksidb.php";
// Persiapan hapus data
if (isset($_POST['bhapus1'])) {
    // Persiapan ubah data
    $hapus = mysqli_query($koneksidb, "DELETE FROM tb_dataguru WHERE Nama_Guru = '$_POST[Nama_Guru]'");
    // Jika ubah sukses
    if ($hapus) {
        echo "<script> alert ('Hapus Data Berhasil');
        document.location='dataguru.php';
        </script>";
    } else {
        echo "<script> alert ('Hapus Data Gagal');
        document.location='dataguru.php';
        </script>";
    }
}
?>