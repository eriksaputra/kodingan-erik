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
      <a class="nav-item nav-link active" href="ulangan.php">ulangan <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="logout.php">logout</a>
    </div>
  </div>
</nav>                
                <div class="card-body">
                <!-- ISI DISINI -->
                <?php
                    if (isset($_POST['simpan'])) {
                        $a = $_POST['nama'];
                        $b = $_POST['alamat'];
                        $c = $_POST['jk'];
                        $d = $_POST['tp'];
                        $e = $_POST['j'];
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
  <input type="hidden" name="nama" value="<?php echo $a?>">
  <input type="hidden" name="alamat" value="<?php echo $b?>">
  <input type="hidden" name="jk" value="<?php echo $c?>">
  <input type="hidden" name="tp" value="<?php echo $d?>">
  <input type="hidden" name="j" value="<?php echo $e?>">
`<div class="row">
    <div class="col-md-12" style="background:skyblue">
        <center><h2>HASIL PEMBELIAN</h2></center>
        <div class="table-responsive">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">tanggal pembelian</th>
      <th scope="col">Jumlah</th>
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
    </tr>
  </tbody>
  <br>
</table>
        </div>
    </div>
</div>`

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