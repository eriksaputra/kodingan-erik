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

    <title>Erik Saputra</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SMK ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="latihan.php">latihan 1 <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="latihan2.php">Latihan 2</a>
      <a class="nav-item nav-link" href="index.php">latihan 3</a>
      <a class="nav-item nav-link" href="logout.php">logout</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row" style="padding:35px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center>FORM SEGITIGA</center></div>
                <div class="card-body">
                <!-- ISI DISINI -->
                <form action="" method="POST">
                <div class="form-group">
                    <labe for="">Alas</labe>
                    <input type="number" min="1" name="alas" class="form-control" Required>
                </div>
                <div class="form-group">
                    <labe for="">Tinggi</labe>
                    <input type="text" name="tinggi" class="form-control" Required>
                </div>
                <div class="form-group">
                    <labe for="">Alamat</labe>
                    <textarea name="alamat" class="form-control" rows="8" Required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="simpan" class="byn btn-success">Simpan</button>
                    <button type="reset" class="byn btn-danger">Reset</button>
                </div>
                </form>
                <?php
                    if (isset($_POST['simpan'])) {
                        $a = $_POST['nama'];
                        $b = $_POST['kelas'];
                        $c = $_POST['alamat'];
                        echo "Nama : $a <br>";
                        echo "Kelas : $b <br>";
                        echo "Alamat : $c <br>";
                    }
                ?>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="background:skyblue">
        </div>
    </div>
</div>
  </div>

<div class="row">
    <div class="col-md-12" style="background:skyblue">
        <center><h2>HASIL FORMULIR</h2></center>
        <div class="table-responsive">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $a; ?></td>
      <td><?php echo $b; ?></td>
      <td><?php echo $c; ?></td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</html>

<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: lo.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>