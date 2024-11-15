<?php
// Panggil koneksi database
include "koneksidb.php";

// Pastikan $_GET['id'] tersedia
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tampil = mysqli_query($koneksidb, "SELECT * FROM tb_dataguru WHERE id = '$id'");

    // Pastikan query berhasil dan data ditemukan
    if ($tampil && mysqli_num_rows($tampil) > 0) {
        $data = mysqli_fetch_array($tampil);
    } else {
        echo "<script>alert('Data tidak ditemukan!'); document.location='DataGuru.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('ID tidak ditemukan!'); document.location='DataGuru.php';</script>";
    exit;
}
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
    <form method="POST">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center">Ubah Data</h2>
            <div class="mb-2">
                <label for="Nama_Guru">Nama Guru</label>
                <input type="text" class="form-control" name="Nama_Guru" value="<?php echo htmlspecialchars($data['Nama_Guru']); ?>">
            </div>
            <div class="mb-2">
                <label for="Nip_Guru">Nip Guru</label>
                <input type="text" class="form-control" name="Nip_Guru" value="<?php echo htmlspecialchars($data['Nip_Guru']); ?>">
            </div>
            <div class="mb-2">
                <label for="Tanggal_Lahir">Tanggal Lahir</label>
                <input type="text" class="form-control" name="Tanggal_Lahir" value="<?php echo htmlspecialchars($data['Tanggal_Lahir']); ?>">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" name="btubah" type="submit">Simpan</button>
                <a href="DataGuru.php" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
</body>
</html>

<?php
// Uji jika tombol ubah diklik
if (isset($_POST['btubah'])) {
    // Persiapan ubah data
    $Nama_Guru = mysqli_real_escape_string($koneksidb, $_POST['Nama_Guru']);
    $Nip_Guru = mysqli_real_escape_string($koneksidb, $_POST['Nip_Guru']);
    $Tanggal_Lahir = mysqli_real_escape_string($koneksidb, $_POST['Tanggal_Lahir']);

    // Ubah data ke database
    $ubah = mysqli_query($koneksidb, "UPDATE tb_dataguru SET 
        Nama_Guru = '$Nama_Guru', 
        Nip_Guru = '$Nip_Guru', 
        Tanggal_Lahir = '$Tanggal_Lahir' 
        WHERE id = '$id'");

    // Jika ubah sukses
    if ($ubah) {
        echo "<script>alert('Ubah Data Berhasil'); document.location='DataGuru.php';</script>";
    } else {
        echo "<script>alert('Ubah Data Gagal'); document.location='DataGuru.php';</script>";
    }
}
?>
