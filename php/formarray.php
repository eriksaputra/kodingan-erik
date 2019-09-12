<html>
    <head>
        <title>Erik Array</title>
    </head>
    <body>
    <form action="" method="GET">
    <center><h2>From Array</h2></center>
    <fieldset>
    <legend>From Array</legend>
    <table>
    <tr>
    <td>Masukan Jumlah</td>
    <td><input type="number" min="1" name="jumlah" required></td>
    </tr>
    </table>
    <ol><input type="submit" name="simpan" value="Simpan"></ol>
    <hr>
    </form>
    <form action="wewe.php" method="POST">
    <?php
        if (isset($_GET['simpan'])) {
           $jlm = $_GET['jumlah'];
           for ($a=0; $a < $jlm ; $a++) { ?>
                <label for=>Nama</label>
                <input type="text" name="nama[]" required>
                <label for=>Kelas</label>
                <input type="text" name="kelas[]" required>
                <br><br>
           <?php } ?>
            <input type="submit" name="sbm" value="Simpan">
            <input type="reset" value="Reset">
            </form>      
           <?php } ?>
    </fieldset>
    </body>
</html>