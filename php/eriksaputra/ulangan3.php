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
		<!-- End Header -->

		<!-- Content -->

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="padding:20px">
					<div class="table-responsive">
						<table class="table"> 
						   	<tr>
								<th>Nama</th>
								<th>Alamat</th>
								<th>jenis kelamin</th>
								<th>jumlah</th>
								<th>tanggal</th>
							</tr>
						<?php 
						 if (isset($_POST['sbm'])) {
									 $nama=$_POST['nama'];
									 $al=$_POST['alamat'];
									$jk=$_POST['jk'];
									$tgl=$_POST['tanggal'];
									$a=$_POST['jumlah'];
						 	?>
						 	<tr> 
						 			<td> <?php  echo $nama; ?></td>
						 			<td> <?php  echo $al; ?></td>
						 			<td> <?php  echo $jk; ?></td>
						 			<td> <?php  echo $tgl; ?></td>
						 			<td> <?php  echo $a; ?></td>
						 	</tr>
							<tr>
								<th>Nomor</th>
								<th>Nama <br>barang</th>
								<th>Kode <br>Barang</th>
								<th>jenis<br>Barang</th>
								<th>harga<br>Satuan(Rp)</th>
								<th>jumlah<br>Barang</th>
								<th> total harga<br>(Rp)</th>
							
							</tr>
							<?php
							$na=$_POST['nb'];
							$kel=$_POST['kb'];
							$nh=$_POST['jb'];
							$nu=$_POST['hs'];
							$nua=$_POST['jm'];
							$i=1;
								$akhir=0;
									$sub_total=0;
									
					for ($key=0; $key < count($na); $key++) { 
						// $akhir=$nh[$key]*(60/100)+$nu[$key]*(20/100)+$nua[$key]*(20/100);
						$akhir=$nu[$key]*$nua[$key];
						$sub_total=$sub_total+$akhir;				
					?>
		          <tr>
			        <td > <?php  echo $i++; ?></td>
							<td ><?php echo "$na[$key]";?></td>
							<td ><?php echo "$kel[$key]";?></td>
							<td ><?php echo "$nh[$key]";?></td>
							<td ><?php echo "$nu[$key]";?></td>
							<td ><?php echo "$nua[$key]";?></td>
							<td ><?php echo "$akhir";?></td>

				              </tr>
						<tr>
						<?php } 
							if ($sub_total> 150000) {
						 		$Diskon  ="5%";
						 		$jum =$sub_total*5/100;
						 	}
						 	elseif ($sub_total>250000) {
						 		$Diskon="10%";
						 		 $jum=$sub_total*10/100;
						 	}elseif ($sub_total>500000) {
						 		$Diskon="20%";
						 		 $jum=$sub_total*20/100;
						 	}

						 	else{
						 		$Diskon="0%";
						 		$jum =0;
						 	}
						 	$hasil=$sub_total-$jum;
						 

						 ?>
							<center><th align="center" colspan="6" class="center">Total pembayaran</th></center>
						</tr>
						<tr>
							<center><th align="center" colspan="6">Sub total</th></center>
							<th> <?php  echo "Rp"."$sub_total"; ?></th>
						</tr>
						<tr>
							<center><th align="center" colspan="6">Diskon <?php echo "("."$Diskon".")"; ?></th></center>
							<th><?php  echo  "Rp.$jum"; ?></th>
						</tr>
						<tr>
							<center><th align="center" colspan="6"> total harga</th></center>
							<th> <?php  echo "Rp.$hasil"; ?></th>
						</tr>
				              
						 </table><br>
						 <input type="hidden" name="hm" value="<?php echo "$hasil"; ?>">
						 <center> <label><h2> masukan pembayaran</label></h2></center>
						 <center><input type="text" name="byr"> </center><br>
						 <?php  
						 
						  ?>
						 <center> <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="in">bayar </button></center>
				</div>
			</div>
		</div>
		</div>
		<?php } ?>
		<!-- End Content-->

		<!-- footer -->
		<footer>
			<center><b>&copy; Erick Store</b></center>

		</footer>
		<!--  End Footer-->

		<!-- Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


		<!-- End Js -->

</body>
</html>
<?php  } ?>