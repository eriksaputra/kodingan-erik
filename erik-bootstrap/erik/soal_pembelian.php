<?php
    session_start();
    if ($_SESSION['akseslogin']) {
        # code...   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan Bootstrap</title>
	<!-- Pemanggilan CSS -->
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
	<!-- Akhir pemanggilan -->
  <style>
      font-family: 'Chilanka',
      cursive;
  </style>
    <title>Erick Store</title>
</head>
<body>
<div class="alert alert-primary" role="alert">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="q.jpeg" width="50px">
        <a class="navbar-brand" href="#">Erick Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Beranda <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="soal_pembelian.php">Jenis Sepatu</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
            <form action="logout.php">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card badge-primary">
                    <div class="card-header">Pembelian Sepatu</div>
                    <div class="card-body">
                        <form action="soal_pembelian_pro.php" method="post">
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="nama" value="" id="nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                
                                <textarea class="form-control" name="alamat" value="" id="alamat" placeholder="Alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <br>
                                <input type="radio" name="jk" value="Laki-Laki" id="jk">Laki-Laki
                                <input type="radio" name="jk" value="Perempuan" id="jk">Perempuan
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pembelian</label>
                                <input type="date" class="form-control" name="tanggal_beli" value="" id="tanggal_beli" required>
                            </div>
                            <div class="form-group">
                            <input type="number" class="form-control" name="jumlah" value="" id="jumlah" placeholder="Jumlah data" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-dark">Proses</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                                </form>
                                <center>
                <img src="i.png" width="50%">
                
                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pemanggilan Js -->
    <script src="Assets/js/jquery-3.4.1.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.js"></script>
    <!-- Akhir Pemanggilan js -->
</body>
</html>
<?php
    }else{
        echo "<script> alert('Silahkan Login Terlebih dahulu');"." window.location.href='index.php' </script>";
    }
?>