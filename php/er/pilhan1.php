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
    <br>
    <form action="" method="post">
    <fieldset>
    <legend>From Segitiga</legend>
    <table>
    <tr>
    <td>Masukan alas</td>
    <td><input type="number" name="alas" required></td>
    </tr>
    <tr>
    <td>Masukan Tinggi</td>
    <td><input type="number" name="tinggi" required></td>
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
       $a = $_POST['alas'];
       $b = $_POST['tinggi'];
       echo "alasnya : $a<br>";
       echo "tingginya : $b<br>";
       echo "Jadi luas segitiga adalah : ".($a * $b)/2;

   }
  }