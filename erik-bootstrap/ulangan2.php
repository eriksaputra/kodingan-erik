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

    <title>Hello, world!</title>
  </head>
  <body>
  

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Aldy Ardiansyah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link active" href="ulangan.php">ulangan<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="logout.php">logout</a>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row" style="padding:35px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center>Data Barang</center></div>
                <div class="card-body">
                <!-- ISI DISINI -->
                <form action="ulangan3.php" method="POST">
                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" name="nb[]" class="form-control" Required>
                </div>
                <div class="form-group">
                    <label for="">Kode Barang</label>
                    <input type="number" name="kb[]" class="form-control" Required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Barang</label>
                    <select name="jb[]" id="">
                        <option value="buku">Buku</option>
                        <option value="karton">Karton</option>
                        <option value="kertas">Kertas warna</option>
                        <option value="lem">Lem Aibon</option>
                        <option value="pensil">Pensil</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Harga Satuan</label>
                    <input type="number" name="hs[]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jumlah Barang</label>
                    <input type="number" name="ja[]" class="form=control">
                </div>
                <div class="form-group">
                    <button type="submit" name="simpan" class="byn btn-success">Simpan</button>
                    <button type="reset" class="byn btn-danger">Reset</button>
                </div>
                </form>
                    <input type="hidden" name="nama" value="<?php echo $nama ?>">
                    <input type="hidden" name="alamat" value="<?php echo $al ?>">
                    <input type="hidden" name="jk" value="<?php echo $js ?>">
                    <input type="hidden" name="tp" value="<?php echo $tgl ?>">
                    <input type="hidden" name="j" value="<?php echo $jum ?>">
                </div>
            </div>
        </div>
        <div class="col-md-4" style="background:skyblue">
        </div>
    </div>
</div>
  </div>

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