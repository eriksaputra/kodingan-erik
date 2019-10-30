<html>
    <body>
        <link rel="stylesheet" type="text/css" href="gg.css">
        <fieldset style="border-color: red" class="a">
            <font color="blue"> 
            <legend><h1>TOTAL PEMBELIAN</h1></legend>
            <?php
              echo "<pre>";
              $beli = $_POST['jml'];
              echo "<h3>Nama               : ".$_POST['nama']."<br>";
              echo "Alamat             : ".$_POST['alamat']."<br>";
              echo "Jeni kelamin       : ".$_POST['jenis']."<br>";
              echo "Taggal pembelian   : ". $_POST['date'] ."<br>";
              echo "Jumlah pembelian   : ".$beli."</p><br><h3>";
                if (isset($_POST['spn'])) {
                    $judul = $_POST['judul'];
                    $kode = $_POST['kode'];
                    $pengarang = $_POST['pengarang'];
                    $buku = $_POST['buku'];
                    $harga = $_POST['harga'];
                    $heh = 0; 
                    for ($x=0; $x < count($harga); $x++) { 
                        echo "Judul Buku : " . $judul[$x];
                        echo "<Br>Kode Buku  : " . $kode[$x];
                        echo "<Br>Pengarang  : " . $pengarang[$x];
                        echo "<Br>Jenis buku : " . $buku[$x];
                        echo "<Br>Harga Buku : " . $harga[$x]."<br><br>"; 
                        $heh = $heh + $harga[$x];
                    }   
                    echo "Harga :".$heh."<br><br>";
                 if ($beli >= 3) {
                     $naga = "5%";
                     $beli = 5/100;
                 }elseif ($beli >= 5) {
                     $naga = "10%";
                     $bei = 10/100;
                 }else{
                    $naga = "0%";
                    $beli = 0;       
                 }
                 $hk = $heh-$beli;
                 echo "Sub total : ".$heh."<br>";
                 echo "Diskon (".$naga.")<br>";
                 echo "Total Pembayaran : ".$hk;
                }
                echo "</pre>";
            ?>
        </fieldset>
    </body>
</html>
