<?php
    session_start();
    if ($_SESSION['akseslogin']) {
        # code...   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <div class="alert alert-primary" role="alert">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="q.jpeg" width="50px">
        <a class="navbar-brand" href="#">Erick Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Beranda <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
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
    <!-- End Header -->
    <!-- Content -->
    <div class="alert alert-success" role="alert">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="jumbotron">
                    <div class="card-danger">
                    <center>
                    <img src="i.png">
                    </center>
                    <h1 class="display-4" style="color :brown"><center><b>Erick Store</b></center></h1>
                    <p class="lead"><center><b>Berbagai jenis sepatu futsal ada disini</b></center></p>
                    <hr class="my-4">
                    <p class="lead"><center><b>Jika anda minat untuk membeli silahkan klik tombol di bawah ini</b></center></p>
                    
            <form action="soal_pembelian.php">
            <center>
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Data Pembeli</button>
                </center>
                <br>
                <img src="s.png" width="150px">
                <img src="o.jpeg" width="150px">
                <img src="a.png"width="150px">
                <img src="n.jpeg" width="170px">
            </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Footer -->
    <!-- JS -->
    <!-- Jquery, bebas.js -->
    <script src="Assets/js/jquery-3.4.1.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>
</html>
<?php
    }else{
        echo "<script> alert('Silahkan Login Terlebih dahulu');"." window.location.href='index.php' </script>";
    }
?>