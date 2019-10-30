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
  <a class="navbar-brand" href="latihan.php ">SMK ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="latihan.php">latihan 1 </a>
      <a class="nav-item nav-link" href="latihan2.php">Latihan 2 <span class="sr-only">(current)</span></a>
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
                <div class="card-header"><center>FORMULIR PPDB SMK ASSALAAM</center></div>
                <div class="card-body">
                <!-- ISI DISINI -->
                <form action="" method="POST">
                <div class="form-group">
                    <labe for="">Nama</labe>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Alamat</labe>
                    <textarea name="alamat" class="form-control" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <labe for="">Jenis Kelamin</labe>
                    <input type="radio" name="jk" value="Laki-laki"/>Laki-laki
                    <input type="radio" name="jk" value="Perempuan" 
                    checked="checked"/>Perempuan
                </div>
                <div class="form-group">
                    <labe for="">Asal Sekolah</labe>
                    <input type="text" name="asal" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Nilai Bahasa Indonesia</labe>
                    <input type="text" name="nbi" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Nilai Matematika</labe>
                    <input type="text" name="nm" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Nilai IPA</labe>
                    <input type="text" name="ni" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Nilai Bahasa Inggris</labe>
                    <input type="text" name="nbg" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="simpan" class="byn btn-success">Simpan</button>
                    <button type="reset" class="byn btn-danger">Reset</button>
                </div>
                </form>
                <?php
                    if (isset($_POST['simpan'])) {
                        $a = $_POST['nama'];
                        $b = $_POST['alamat'];
                        $c = $_POST['jk'];
                        $d = $_POST['asal'];
                        $e = $_POST['nbi'];
                        $f = $_POST['nm'];
                        $g = $_POST['ni'];
                        $h = $_POST['nbg'];
                    }
                    $rata = ($e+$f+$g+$h)/4;
                    if ($rata > 65) {
                        $ket = "Diterima";
                    }else {
                        $ket = "Tidak Diterima";
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

`<div class="row">
    <div class="col-md-12" style="background:skyblue">
        <center><h2>HASIL FORMULIR PPDB SMK ASSALAAM</h2></center>
        <div class="table-responsive">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Asal Sekolah</th>
      <th scope="col">Nilai B.indo</th>
      <th scope="col">Nlai Mtk</th>
      <th scope="col">Nilai Ipa</th>
      <th scope="col">Nilai B.Inggris</th>
      <th scope="col">Rata Rata</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $a; ?></td>
      <td><?php echo $b; ?></td>
      <td><?php echo $c; ?></td>
      <td><?php echo $d; ?></td>
      <td><?php echo $e; ?></td>
      <td><?php echo $f; ?></td>
      <td><?php echo $g; ?></td>
      <td><?php echo $h; ?></td>
      <td><?php echo $rata; ?></td>
      <td><?php echo $ket   ; ?></td>
    </tr>
  </tbody>
</table>
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
    header("location: lo.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>