<?php
// panggil koneksi database
include "koneksidb.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
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

<ul>
  
<h3 align="center">SMK AK Nusa Bangsa</h3>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="datasiswa.php">Data Siswa</a></li>
  <li><a href="DataGuru.php">Data Guru</a></li>
  <li><a href="DataNilaiSiswa.php">Data Nilai Siswa</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <br>
<h2 class="text-center"><u>Data Nilai Siswa</u><a href="inputnilai.php">
<div class="col-md-2">
<button class="btn btn-success" name="btnsimpan" type="submit">Tambah Data<i class="ace-icon fa fa-signal" ></i></button>
</a></h2>
    <br>
    <div class="container">
        <table align="table responsive" class="table table-striped" table-bordered table-hover>
          
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode Nilai</th>
                <th class="text-center">Nama Siswa</th>
                <th class="text-center">Mata Pelajaran</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Nama Guru</th>
                <th class="text-center">Nilai Ulangan Harian</th>
                <th class="text-center">Nilai Ujian Praktek</th>
                <th class="text-center">Nilai PTS</th>
                <th class="text-center">Nilai PAS</th>
                <th class="text-center">Nilai PAT</th>
                <th class="text-center">Ubah/Hapus</th>
            </tr>
            <?php
            $no = 1;
            $tampil = mysqli_query($koneksidb, "SELECT * FROM tb_datanilai");
            while ($data = mysqli_fetch_array($tampil)):
                ?>

                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td class="text-center"><?= $data['Kode_Nilai'] ?></td>
                    <td class="text-center"><?= $data['Nama_Siswa'] ?></td>
                    <td class="text-center"><?= $data['Mata_Pelajaran'] ?></td>
                    <td class="text-center"><?= $data['Kelas'] ?></td>
                    <td class="text-center"><?= $data['Nama_Guru'] ?></td>
                    <td class="text-center"><?= $data['Nilai_Ulangan_Harian'] ?></td>
                    <td class="text-center"><?= $data['Nilai_Ujian_Praktek'] ?></td>
                    <td class="text-center"><?= $data['Nilai_PTS'] ?></td>
                    <td class="text-center"><?= $data['Nilai_PAS'] ?></td>
                    <td class="text-center"><?= $data['Nilai_PAT'] ?></td>
                    <td class="text-center">
                        <a href="ubahdatanilaii.php?id=<?= $data['id']; ?>"><button class="btn btn-primary ">Ubah</button></a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#hapus<?= $no ?>">Hapus</button></a>
                    </td>
                </tr>
                <!-- Modal hapus -->
                <div class="modal fade" id="hapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
                            </div>
                            <form method="post" action="hapus2.php">
                                <input type="hidden" name="Nama_Siswa" value="<?= $data['Nama_Siswa'] ?>">
                                <div class="modal-body">
                                    <h5 class="text-center">Apakah anda yakin akan hapus data ini? <br>
                                        <span class="text-danger"><?= $data['Nama_Siswa'] ?> - <?= $data['Kode_Nilai'] ?></span>></span>
                                    </h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="bhapus2">Hapus</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Hapus -->
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>