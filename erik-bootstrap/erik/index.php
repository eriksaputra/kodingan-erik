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
    <div class="alert alert-primary" role="alert">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="q.jpeg" width="50px">
        <a class="navbar-brand" href="#">Erick Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav mr-auto"></div>
            <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
             <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
        </div>
    </nav>
    <!-- End Header -->
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="jumbotron">
                <center>
                    <img src="i.png">
                    </center><br>
                    <center>
                    <h1 class="display-3" style="color:red">Silakan Login!</h1>
                    <p class="lead" style="color:red">Untuk Masuk ke halaman selanjutnya</p>
                    </center>
                    <hr class="my-4">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="" id="email" placeholder="Email" required><br><br>
                            <input type="password" class="form-control" name="pass" value="" id="pass" placeholder="Password" required><br><br>
                            <center>
                            <button class="btn btn-outline-success my-0 my-sm-2" type="submit" name="Akses">Login</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
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
    if (isset($_POST['Akses'])) {
        $a = $_POST['email'];
        $b = $_POST['pass'];
        if ($a == "eriksaputra@gmail.com" && $b == '123') {
            $_SESSION['akseslogin'] = 'Admin';
            header("location:home.php");
        }else{
            echo "Login Gagal";
        }
    }elseif (isset($_SESSION['akseslogin'])) {
         echo "<script> alert('Anda Sudah Login');"." window.location.href='home.php' </script>";
    }
?>