<?php
session_start();
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
            <div class="navbar-nav mr-auto">
            </div>
        </div>
    </nav>
    <!-- End Header -->
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="jumbotron">
                <center>
                   <h1 class="display-3" style="color:blue">Selamat Datang</h1>
                    <p class="lead">Disini kami menyediakan berbagi jenis sepatu sport.</p> <p class="lead"></p>
                    <hr class="my-4">
                    <b style="color:green">Jika anda berminat untuk membeli sepatu bisa klik tombol login</b>
                    <form action="index.php">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Login</button>
                </center>
            </form>
                </>
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
    if (isset($_SESSION['akseslogin'])) {
        echo "<script> alert('Terimakasih anda telah Login');"." window.location.href='home.php' </script>";
    }
?>