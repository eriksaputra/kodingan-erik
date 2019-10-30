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
            <form action="logout.php">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <!-- End Header -->
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="jumbotron">
                    <form action="" method="post">

                    <?php
                        if (isset($_POST['bayar1'])) {
                            $bayar = $_POST['bayar'];
                            $total = $_POST['erik'];
                            $hasil = $bayar-$total;
                        }
                    ?>
                    <h1 class="display-4">Terimakasih</h1>
                    <p class="lead">Kembalian nya : Rp. <?php echo number_format($hasil, 2, ',', '.') ?></p>
                    <hr class="my-4">
                    <p>Apakah anda ingin membeli lagi</p>
                    <div class="form-group">
                    </form>
                        <form action="soal_pembelian.php" method="post" >
                        <button type="submit" name="simpan" class="btn btn-outline-success">Ya</button>
                        </form><br>
                        <form action="tidak.php" method="post">
                        <button type="submit" class="btn btn-outline-danger">Tidak</button>
                        </form>
                        <center>
                        <img src="i.png" width="50%">
                        </center>
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