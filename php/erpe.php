<html>
    <head>
        <title>Penggajian Karyawan</title>
    </head>
    <body>
        <fieldset>
            <legend><h2>Penggajian Karyawan</h2></legend>
<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $jenkel = $_POST['jenkel'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];
        $jabatan = $_POST['jabatan'];
        $golongan = $_POST['golongan'];
        echo "<pre>";
        echo "<h3 align='right'>".date("d/m/Y H:i:s")."</h3>";
        echo "Nama          : <b>$nama</b><br>";
        echo "NIP           : <b>$nip</b><br>";
        echo "Jenis Kelamin : <b>$jenkel</b><br>";
        echo "Alamat        : <b>$alamat</b><br>";
        echo "Status        : <b>$status</b><br>";
        echo "Jabatan       : <b>$jabatan</b><br>";
        echo "Potongan      : ";
        if ($golongan == 'A1') {
            $gol = 250000;
        }
        elseif ($golongan == 'A2') {
            $gol = 200000;
        }
        else{
            $gol = 150000;
        }
        if ($status == 'Menikah') {
            $stts = 100000;
        }
        else {
            $stts = 50000;
        }
        if ($jabatan == 'HRD') {
            $jbtn = 5000000;
        }
        elseif($jabatan == 'Manager') {
            $jbtn = 4500000;
        }
        elseif($jabatan == 'Staff') {
            $jbtn = 3000000;
        }
        elseif($jabatan == 'Karyawan') {
            $jbtn = 2500000;
        }
        if(isset($_POST['bpjs'])) {
            echo "<b>".$_POST['bpjs']."</b>";
            $potongan1 = 250000;
            $potongan = $potongan1;
        }
        if(isset($_POST['koperasi'])) {
            echo "<br>, <b>".$_POST['koperasi']."</b>";
            $potongan2 = 150000;
            $potongan = $potongan2 + $potongan1;
        }
        if (isset($_POST['jamsostek'])) {
            echo "<br>, <b>".$_POST['jamsostek']."</b>";
            $potongan3 = 150000;
            $potongan = $potongan3 + $potongan2 + $potongan1;
        } 
        echo "<br>Golongan      : <b>$golongan</b><br>";
        $gajikotor = ($jbtn + $gol + $stts) - $potongan;
        echo "Gaji Kotor    : <b>Rp. ". $gajikotor ."</b><br>";
        $pajak = $gajikotor * 2.5/100;
        $gajibersih = $gajikotor - $pajak;
        echo "Pajak         : <b>Rp. $pajak</b><br>";
        echo "Gaji Bersih   : <b>$gajikotor - $pajak : Rp. $gajibersih </b><br>";
        echo "<hr>";
        echo "<strong>Keterangan : </strong><br>";
        echo "Golongan      :<b> $golongan = Rp. $gol </b>";
        echo "<br>Status        : <b>$status   = Rp. $stts</b>";
        echo "<br>Jabatan       : <b>$jabatan  = Rp. $jbtn</b>";
        if(isset($_POST['bpjs'])) {
            echo "<b>Potongan      : BPJS = Rp. $potongan1</b>";
        }
        if(isset($_POST['koperasi'])) {
            echo "<b>, Koperasi = Rp. $potongan2</b>";
        }
        if(isset($_POST['jamsostek'])) {
            echo "<b>, Jamsostek = Rp. $potongan3</b>";
        }
        echo "<br>";    
        echo "</pre>";
}
?>
        </fieldset>
    </body>
</html>