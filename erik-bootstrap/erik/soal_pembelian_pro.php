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
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card badge-success">
                    <div class="card-header">Pembelian Sepatu</div>
                    <div class="card-body">
                        <form action="soal_pembelian_pro2.php" method="post">
                            <input type="hidden" name="nama" value=" <?php echo $_POST['nama'] ?> " id="nama">
                            <input type="hidden" name="alamat" value=" <?php echo $_POST['alamat'] ?> " id="alamat">
                            <input type="hidden" name="jk" value=" <?php echo $_POST['jk'] ?> " id="jk">
                            <input type="hidden" name="tanggal_beli" value=" <?php echo $_POST['tanggal_beli'] ?> " id="tanggal_beli">
                            <input type="hidden" name="jumlah" value=" <?php echo $_POST['jumlah'] ?> " id="jumlah">
                            <?php
                            if (isset($_POST['simpan'])) {
                                $jml_form = $_POST['jumlah'];
                                for ($a = 0; $a < $jml_form; $a++) { ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="merk[]" id="" placeholder="Jenis Sepatu" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="kode[]" id="" placeholder="Kode Barang" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Merk Sepatu</label>
                                            <select class="form-control" name="jenis[]" id="">
                                                    <option value="Ortus Eight Jogosala">Ortus Eight Jogosala</option>
                                                    <option value="Nike Tiempo">Nike Tiempo</option>
                                                    <option value="Adidas copa">Adidas copa</option>
                                                    <option value="Specs Garuda Attack">Specs Garuda Attack</option>
                                                    <option value="Specs Metasala">Specs Melasala</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="harga[]" id="" placeholder="Harga Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="j[]" id="" min="1" placeholder="Jumlah Barang" required><br><br>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-primary">Proses</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            <?php } ?>
                        </form>
                        <center><img src="i.png" width="50%">
                </center>
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