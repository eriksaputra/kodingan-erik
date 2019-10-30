<html>
    <head>
        <title>Tampilan awal</title>
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="erik.css">
    <form action="ulangan2.php" method="GET">
    <center><h2>Ulangan Harian</h2></center>
    <?php
         echo "<h3 align='right'>".date("d/m/Y H:i:s")."</h3>";
         ?>
    <fieldset style="border-color:yellow">
    <legend><h2 >Selamat Datang</h2></legend>
    <div class="a">
    <form>
    <table>
    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td><input type="textarea" name="alamat" required></td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="jenis" value="Laki - Laki" checked>Laki - Laki</td>
    <td><input type="radio" name="jenis" value="Perempuan">Perempuan</td>
    </tr>
    <tr>
    <td>Tanggal Beli</td>
    <td><input type="date" name="tanggal" required></td>
    </tr>
    <tr>
    <td>Jumlah Pembelian buku</td>
    <td><input type="number" min="1" name="jumlah" required></td>
    </tr>
    </table>
    <br> 
    <input type="submit" name="input" value="Simpan">
    <input type="reset" value="Reset">
    <hr>
    </div>
    </form>
</form>
    </fieldset>
    </body>
</html>