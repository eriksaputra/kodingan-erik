<html>
    <head>
    <title>Gudang Buku</title>
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="erik.css">
    <form action="ulangan3.php" method="POST">
    <center><h2>Gudang Buku</h2></center>
    <?php
         echo "<h3 align='right'>".date("d/m/Y H:i:s")."</h3>";
         ?>
    <fieldset style="border-color:aqua" >
    <legend>Gudang Buku!!!</legend>
    <div class="b">
    <?php
        if (isset($_GET['input'])) {
           $jlm = $_GET['jumlah'];
           for ($a=0; $a < $jlm ; $a++) { ?>
           
           <table>
           <tr>
                <td><label for=>Judul Buku</label></td>
                <td><input type="text" name="judul[]" required><br></td>
            </tr>
            <tr>
                <td><label for=>Kode Buku</label></td>
                <td><input type="text" name="kode[]" required></td>
            </tr>
                </div>
            <tr>
                <td><label for=>Pengarang Buku</label></td>
                <td><input type="text" name="pengarang[]" required></td>
            </tr>
            <tr>
                <td><label for=>Jenis Buku</label></td>
                <td><select name="buku[]" id="">
                                <option value="Novel">Novel</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Horror">Horror</option>
                                <option value="Cergam">Cergam</option>
                                <option value="Komik">Komik</option>
                            </select>
                </tr>
                <tr>
                <td><label for=>Harga Buku</label></td>
                <td><input type="number" name="harga[]" required></td>
                </tr>
                </table>
           </div>
                <br>
           <?php } ?> 
            <input type="submit" name="sbm" value="Simpan">
            <input type="reset" value="Reset">
            </form>      
           <?php } ?>
           </fieldset>
</body>
</html>