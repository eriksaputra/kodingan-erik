<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Erick Store</title>
  </head>
  <body>
  

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Erick Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link active" href="ulangan.php">Data Pembeli<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="logout.php">logout</a>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding:35px;" style="background-color:black;">
                    <div class="card badge-primary">
                        <div class="card-header"><center>DATA BARANG </center></div>
                        <div class="card-body">
                        <form action="ulangan3.php" method="POST">
              <?php
              if (isset($_GET['simpan'])) {?>          
            <input type="hidden" name="nama" value="<?php echo $a; ?>">
            <input type="hidden" name="alamat" value="<?php echo $b;?>">
            <input type="hidden" name="jk" value="<?php echo $c; ?>">
            <input type="hidden" name="tanggal" value="<?php echo $d; ?>">
            <input type="hidden" name="jumlah" value="<?php echo $e; ?>">
              <?php } ?>
    <?php
        if (isset($_GET['simpan'])) {
           $jlm = $_GET['j'];
           $no = 1;
            for ($a=0; $a < $jlm ; $a++) { ?>
                <div class="form-group">
                    <input type="text" name="nb[]" class="form-control" placeholder="Nama Barang" Required>
                </div>
                <div class="form-group">
                    <input type="number" name="kb[]" class="form-control" placeholder="Kode Barang" Required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Barang</label>
                    <select name="jb[]" id="">
                        <option value="Ortus Eight">Ortus Eight</option>
                        <option value="Specs">Specs</option>
                        <option value="Nike">Nike</option>
                        <option value="Puma">Puma</option>
                        <option value="Adidas">Adidas</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="number" name="hs[]" class="form-control" placeholder="Harga Satuan" required>
                </div>
                <div class="form-group">
                    <input type="number" name="jm[]" class="form-control" placeholder="Jumlah Barang" required>
                    <br>
                <hr>
                <br>
                </div>
                 <?php } ?>
                 <center>   
            <input type="submit" name="sbm" class="btn btn-success btn-block" value="Simpan">
            </center>
            </form>      
           <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
  <footer>
    <center>&copy; Erick Store est.2019</center>
  </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</html>

<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: login.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>