<?php session_start();
if ($_SESSION['akseslogin']) {


 ?>
 <!DOCTYPE html>
<html>
<head>

	<title> Latihan 1</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
		<!-- Header -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">RESAWAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">PRODUK <span class="sr-only">(current)</span></a>
      </li>

      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0" action="logot.php"  method="post">
 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGOUT</button>
    </form>
  </div>
</nav>
		<!-- End Header -->

		<!-- Content -->

		<div class="container">
			<div class="row">
				<div class="col-md-12" style="padding:20px">
					<div class="table-responsive">
					<form action="tugas4.php" method="post">
						<table class="table"> 


						   	<tr>
								
								<th>Nama</th>
								<th>Alamat</th>
								<th>jenis kelamin</th>
								<th>jumlah</th>
								<th>tanggal</th>
							</tr>
						<?php 
						 if (isset($_POST['sim'])) {
									 $nama=$_POST['ni'];
									 $al=$_POST['ama'];
									$jk=$_POST['kelamin'];
									$tgl=$_POST['tgl'];
									$a=$_POST['nama'];
						 	?>
						 	<tr> 
						 			<td> <?php  echo "$nama" ?></td>
						 			<td> <?php  echo "$al" ?></td>
						 			<td> <?php  echo "$jk"; ?></td>
						 			<td> <?php  echo "$a"; ?></td>
						 			<td> <?php  echo "$tgl"; ?></td>
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
							$na=$_POST['na'];
							$kel=$_POST['kel'];
							$nh=$_POST['nh'];
							$nu=$_POST['nu'];
							$nua=$_POST['nua'];
							$i=1;
								$akhir=0;
									$sub_total=0;
									$dis1=150000;
									$dis2=250000;
									$dis3=350000;
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
							if ($sub_total>= $dis1) {
						 		$Diskon  ="5%";
						 		$jum =$sub_total*5/100;
						 	}
						 	elseif ($sub_total>=$dis2) {
						 		$Diskon="10%";
						 		 $jum=$sub_total*10/100;
						 	}elseif ($sub_total>=$dis3) {
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
						 </form>
				</div>


			</div>
		</div>
		</div>
		<?php } ?>
		<!-- End Content-->

		<!-- footer -->
		<footer>
			<center><b>&copy; 2019 SMK ASSALAAM</b></center>

		</footer>
		<!--  End Footer-->

		<!-- Js -->
		<script  src="assets/js/jquery-3.4.1.min.js"></script>
		<script src=" assets/js/bootstrap.bundle.min.js"></script>
		<script src=" assets/js/bootstrap.bundle.js"></script>

		<!-- End Js -->

</body>
</html>
<?php  } ?>