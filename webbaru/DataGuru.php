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
<h2 class="text-center"><u>Data Guru</u><a href="inputguru.php">
<div class="col-md-2">
<button class="btn btn-success" name="btnsimpan" type="submit">Tambah Data<i class="ace-icon fa fa-signal" ></i></button>
</a></h2>
    <br>
    <div class="container">
        <table align="table responsive" class="table table-striped" table-bordered table-hover>
          
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode Guru</th>
                <th class="text-center">Nip Guru</th>
                <th class="text-center">Tempat Lahir</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Agama</th>
                <th class="text-center">Nama Guru</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">Status Pegawai</th>
                <th class="text-center">Pendidikan Terakhir</th>
                <th class="text-center">Ubah/Hapus</th>
            </tr>
            <?php
            $no = 1;
            $tampil = mysqli_query($koneksidb, "SELECT * FROM tb_dataguru");
            while ($data = mysqli_fetch_array($tampil)):
                ?>

                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td class="text-center"><?= $data['Kode_Guru'] ?></td>
                    <td class="text-center"><?= $data['Nip_Guru'] ?></td>
                    <td class="text-center"><?= $data['Tempat_Lahir'] ?></td>
                    <td class="text-center"><?= $data['Jenis_Kelamin'] ?></td>
                    <td class="text-center"><?= $data['Agama'] ?></td>
                    <td class="text-center"><?= $data['Nama_Guru'] ?></td>
                    <td class="text-center"><?= $data['Tanggal_Lahir'] ?></td>
                    <td class="text-center"><?= $data['Status_Pegawai'] ?></td>
                    <td class="text-center"><?= $data['Pendidikan_Terakhir'] ?></td>
                    <td class="text-center">
                        <a href="ubahdataguru.php?id=<?= $data['id']; ?>"><button class="btn btn-primary ">Ubah</button></a>
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
                            <form method="post" action="hapus1.php">
                                <input type="hidden" name="Nama_Guru" value="<?= $data['Nama_Guru'] ?>">
                                <div class="modal-body">
                                    <h5 class="text-center">Apakah anda yakin akan hapus data ini? <br>
                                        <span class="text-danger"><?= $data['Nama_Guru'] ?> - <?= $data['Kode_Guru'] ?></span>></span>
                                    </h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="bhapus1">Hapus</button>
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