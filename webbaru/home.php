<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  </body>
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

header {
        text-align: center;
      }
 
      .underline {
            text-decoration: underline wavy green;
        }
</style>
</head>
<body>
<ul>
<h3 align="center">SMK AK Nusa Bangsa</h3>
  <li><a class="active" href="home.php"><i class="fas fa-home"> H o m e</i></a></li>
  <li><a href="datasiswa.php">Data Siswa</a></li>
  <li><a href="DataGuru.php">Data Guru</a></li>
  <li><a href="DataNilaiSiswa.php">Data Nilai Siswa</a></li>
</ul>


<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <br>
  <header>
  <h1><span class="underline"><strong>- SMK AK Nusa Bangsa -</strong></span></h1>
    </header>
    <h1 class="text-animation">Selamat Datang</h1>
  <h1 class="card-title" style="font-size:larger;" class="text-center"><strong>Halaman Utama</strong></h1>
  <hr>
  <div style="display: flex; gap: 10px; flex-wrap: wrap;">
  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Jumlah Kelas</div>
    <div class="card-body text-success">
      <h5 class="card-title">13</h5>
    </div>
  </div>

  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Jumlah Guru</div>
    <div class="card-body text-success">
      <h5 class="card-title">13</h5>
    </div>
  </div>

  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Jumlah Siswa</div>
    <div class="card-body text-success">
      <h5 class="card-title">450</h5>
    </div>
  </div>

  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Jumlah Mata Pelajaran</div>
    <div class="card-body text-success">
      <h5 class="card-title">15</h5>
    </div>
  </div>
</div>

</body>
</html>


