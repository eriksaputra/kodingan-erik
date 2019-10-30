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
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card badge-danger">
                    <div class="card-header">Invoice Pembayaran</div>
                    <div class="card-body">
                    <form action="bayar.php" method="post">
                        <?php
                        if (isset($_POST['simpan'])) {
                            /* Data 1 */                            
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $jk = $_POST['jk'];
                            $tanggal_beli = $_POST['tanggal_beli'];
                            $jumlah = $_POST['jumlah'];
                            /* Data 2 */
                            $merk = $_POST['merk'];
                            $kode = $_POST['kode'];
                            $jenis = $_POST['jenis'];
                            $harga = $_POST['harga'];
                            $j = $_POST['j'];
                        } ?>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah</th>
                                    <th colspan="12">Tanggal Pembelian</th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $alamat ?></td>
                                    <td><?php echo $jk ?></td>
                                    <td><?php echo $jumlah ?></td>
                                    <td colspan="3"><?php $originalDate = $tanggal_beli;
                                    echo $newDate = date("d M Y", strtotime($originalDate)); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="12" align="center"><b>Daftar Sepatu Yang dibeli</b></td>
                                </tr>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Jenis Sepatu</th>
                                    <th>Kode </th>
                                    <th>Merk Sepatu</th>
                                    <th>Jumlah</th>
                                    <th>Harga (Rp)</th>
                                    <th>Total Harga</th>
                                </tr>
                                <?php
                                $no = 1;
                                $sub_total = 0;
                                foreach ($kode as $a => $b) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $merk[$a]; ?></td>
                                        <td><?php echo $kode[$a]; ?></td>
                                        <td><?php echo $jenis[$a]; ?></td>
                                        <td><?php echo number_format($j[$a], 0, ',', '.') ?></td>
                                        <td><?php echo number_format($harga[$a], 2, ',', '.') ?></td>
                                        <td><?php echo $j[$a]*$harga[$a]; ?></td>
                                        <?php $sub_total = $sub_total + $harga[$a] * $j[$a]; ?>
                                    </tr>
                                <?php
                                }
                                if ($sub_total >= 500000) {
                                    $diskon = $sub_total * 0.2;
                                    /* var_dump($diskon); */
                                    $desc = 20;
                                } else if ($sub_total >= 250000) {
                                    $diskon = $sub_total * 0.1;
                                    $desc = 10;
                                    /* var_dump($diskon); */
                                } else if ($sub_total >= 150000) {
                                    $diskon = $sub_total * 0.05;
                                    $desc = 5;
                                    /* var_dump($diskon); */
                                } else {
                                    $diskon = 0;
                                    $desc = 0;
                                    /* var_dump($diskon); */
                                }
                                $total = $sub_total - $diskon;
                                ?>
                                <tr>
                                    <td colspan="12" align="center"><b>Total Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td colspan="12" align="right">Rp. <?php echo number_format($sub_total, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Diskon (<?php echo "$desc%"; ?>)</th>
                                    <td colspan="12" align="right">Rp. <?php echo number_format($diskon, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td colspan="12" align="right" name = "huh">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td colspan="12" align="center"><b>Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <td colspan="12">
                                        <input type="hidden" name="erik" id ="erik" value="<?php echo $total; ?>">
                                        <label for="">Masukan Jumlah Uang</label>
                                        <input type="number" class="form-control" name="bayar" min="<?php echo $total; ?>" value="" id="bayar" required>
                                        <button type="submit" class="btn btn-lg btn-outline-primary" name="bayar1" style="margin:10px;">Bayar</button>
                                    </td>
                                </tr>
                            </table>
                            
                        <center><img src="i.png" width="50%">
                </center>
                        </div>
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