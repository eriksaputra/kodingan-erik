<html>
    <head>
        <title>Formulir Erik</title>
    </head>
<body>
    <form action="" method="GET">
    <center><h2>Format Formulir</h2></center>
    <fieldset>
    <legend>From Format</legend>
    <table>
    <tr>
    <td>Masukan Jumlah</td>
    <td><input type="number" min="1" name="jumlah" required></td>
    </tr>
    </table>
    <ol><input type="submit" name="input" value="Simpan"></ol>
    <hr>
    </form>
    <form action="aya.php" method="POST">
    <?php
        if (isset($_GET['input'])) {
           $jlm = $_GET['jumlah'];
           for ($a=0; $a < $jlm ; $a++) { ?>
           <table>
           <tr>
                <td><label for=>Masukan bilangan </label></td>
                <td><input type="number" name="bil[]" required><br></td>
                </tr>
                <tr>
                <td><label for=>Masukan Pangkat bilangan </label></td>
                <td><input type="number" name="pangkat[]" required></td>
                </tr>
                </table>
                <br><br>
           <?php } ?>
            <input type="submit" name="sbm" value="Simpan">
            <input type="reset" value="Reset">
            </form>      
           <?php } ?>
    </fieldset>
    </body>
</html>