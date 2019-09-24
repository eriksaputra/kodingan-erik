<?php
  session_start();
  if (isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>latihan 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <nav>
    <a href="pilhan1.php">Pilihan 1</a>
    <a href="pil2.php">Pilihan 2</a>
    <a href="pil3.php">Pilihan 3</a>
    <a href="loguot.php">Loguot</a>
    </nav>
    <br>
    Selamat datang <?php echo $_SESSION['login']; ?>
    <form action="" method="post">
    <fieldset>
    <legend>From Persegi</legend>
    <table>
    <tr>
    <td>Masukan sisi</td>
    <td><input type="number" name="si" required></td>
    </tr>
    <tr>
    <td>Masukan sisi</td>
    <td><input type="number" name="si1" required></td>
    </tr>
    <tr>
    <td><input type="submit" name="simpan" value="Simpan"></td>
    <td><input type="reset" value="Reset"></td>
    </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>
<?php
   if (isset($_POST['simpan'])) {
       $a = $_POST['si'];
       $b = $_POST['si1'];
       echo "sisinya : $a<br>";
       echo "sisinya : $b<br>";
       echo "Jadi luas Persegi adalah : ".$a * $b;

   }
  }